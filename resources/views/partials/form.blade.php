<form action="{{ route('product.delete')}}" method="POST" id="form-delete">
    @method('DELETE')
    @csrf
    <input type="hidden" name="id" value="" id="id">
</form>