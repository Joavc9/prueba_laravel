<?php

namespace App\Http\Controllers;

use App\Product;
use App\Client;
use App\Http\Requests\quotation\QuotationCreateRequest;
use App\Http\Requests\quotation\QuotationUpdateRequest;
use App\Mail\MessageReceived;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\PDF;
use Symfony\Component\Console\Question\Question;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quotation::with('getClient')->get();
        return view('quotes.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $clients = Client::all();
        return view('quotes.create', compact('products', 'clients'));
    }
    public function getSumProductsPrice($request)
    {
        $priceTotal = 0;
        foreach ($request->products as $product) {
            $priceProducts = Product::where('id', $product)->select('price')->first();
            $priceTotal += $priceProducts->price;
        }
        return $priceTotal;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuotationCreateRequest $request)
    {
        $priceTotal = $this->getSumProductsPrice($request);
        $quote = Quotation::create([
            'name' => $request->name,
            'client' => $request->client,
            'description' => $request->description,
            'total' => $priceTotal - ($this->getSumProductsPrice($request) * 0.20)
        ]);
        $quote->products()->attach($request->products);
        return redirect()->route('quotes.index')->with('success', 'Cotización creada correctamente');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::all();
        $clients = Client::all();
        $quote = Quotation::FindOrfail($id);
        return view('quotes.edit', compact('quote', 'clients', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuotationUpdateRequest $request)
    {
        $quote = Quotation::FindOrfail($request->id);
        $quote->client = $request->client;
        $quote->name = $request->name;
        $quote->description = $request->description;
        $quote->total = $quote->total - ($this->getSumProductsPrice($request) * 0.20);
        $quote->products()->sync($request->products, ['price_product' => $request->price]);
        $quote->save();
        return redirect()->route('quotes.index')->with('success', 'Cotización actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $quote = Quotation::FindOrfail($request->id);
        try {
            $quote->products()->detach();
            $quote->delete();
            return redirect()->route('quotes.index')->with('success', 'Cotización eliminada correctamente');
        } catch (\Exception $th) {
            dd($th);
            // return redirect()->route('quotes.index')->with('warning', $th->errorInfo[2]);
        }
    }

    public function download($id)
    {
        $quote = Quotation::FindOrfail($id);
        $pdf = \PDF::loadView('quotes.download', compact('quote'));
        return $pdf->download("cotización.pdf");
    }

    public function sendEmail($id)
    {
        $quote = Quotation::FindOrfail($id);
        Mail::to($quote->getClient->email)->send(new MessageReceived($quote));
        return redirect()->route('quotes.index')->with('success', 'La cotización se ha enviado al correo electronico del cliente');
    }
}
