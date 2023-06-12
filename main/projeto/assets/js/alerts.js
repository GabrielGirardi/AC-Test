$(document).ready(function() {
  
    function removeProduct(){
      Swal.fire({
        title: 'Você tem certeza?',
        text: "O produto será movido para a lixeira!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, faça isso!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
              'Removido!',
              'Seu arquivo foi removido.',
              'success'
          )
        }
      })
    }
    
    $('.delete-prod').on('click', function() {
        removeProduct();
    });
});


