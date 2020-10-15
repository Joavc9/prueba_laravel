(function (window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */
  $("#products").DataTable();
  $.ajax({
    url: "/folders",
    method: "get",
    dataType: "json",
    success: function (data) {
      $('#treeview').treeview({ data: data });
    }
  });
})(window);

function deleteRegister(info) {
  swal({
    title: "Estás seguro",
    text: "¿ Deseas eliminar este registro ?",
    icon: 'warning',
    buttons: true,
    dangerMode: true,
    buttons: ['Cancelar', 'Eliminar!'],
  })
    .then((willDelete) => {
      if (willDelete) {
        formDelete(info);
      }
    });
}

function formDelete(info) {
  var form = $('#form-delete');
  form.attr('action', info.dataset.url);
  form.find("#id").val(info.dataset.id);
  form.submit();
}

function createFolder(info) {
  var formId = info.dataset.form;
  var formData = {
    url: $("#" + formId).attr('action'),
    data: $("#" + formId).serialize()
  }
  sendDataAjax(formData);
}

function sendDataAjax(data) {
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $("[name=_token]").val()
    },
    url: data.url,
    type: "POST",
    data: data.data,
    // beforeSend: function () { ShowLoad(); }
  }).done(function (response) {
    data.function(response, data.idform);
  }).fail(function (response) {
    // showError(response.responseJSON, data.idform);
  })
}