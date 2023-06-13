$(document).ready(function() {
  $('.fe.fe-trash').click(function() {
    deleteProduct($(this), './partials/remove_product.php', 'O produto foi removido com sucesso.');
  });

  $('.fe.fe-refresh-ccw').click(function() {
    deleteProduct($(this), './partials/restore_product.php', 'O produto foi restaurado com sucesso.');
  });

  function deleteProduct(element, url, successMessage) {
    let row = element.closest('tr');
    let productName = row.find('td:nth-child(2)').text();
    let confirmMessage = 'Tem certeza de que deseja ' + (url.includes('remove') ? 'remover' : 'restaurar') + ' o produto "' + productName + '"?';

    Swal.fire({
      title: 'Confirmação',
      text: confirmMessage,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim',
      cancelButtonText: 'Cancelar'
    }).then(function(result) {
      if (result.isConfirmed) {
        $.ajax({
          url: url,
          type: 'POST',
          data: { produto: productName },
          success: function(response) {
            row.remove();
            Swal.fire('Sucesso', successMessage, 'success');
          },
          error: function() {
            Swal.fire('Erro', 'Ocorreu um erro ao ' + (url.includes('remove') ? 'remover' : 'restaurar') + ' o produto.', 'error');
          }
        });
      }
    });
  }
});
