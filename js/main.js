$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('laptop');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Laptop #' + id);
  modal.find('.modal-body').text('Deseja Mesmo Excluir o Laptop #' + id + '? Esta ação não poderá ser desfeita.');
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})