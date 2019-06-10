// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
   
    language: {
      "lengthMenu": "Mostrando _MENU_ entradas",
      "zeroRecords": "Nothing found - sorry",
      "info": "Mostrando _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros",
      "infoFiltered": "(filtered from _MAX_ total records)"
  }


  });
});
