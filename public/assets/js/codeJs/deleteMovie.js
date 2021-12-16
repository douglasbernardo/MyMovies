
function deletar(idMovie){
    $.ajax({
      data: {idMovie:idMovie},
      url: '/excluir',
      type: 'GET',
      success: function() {     
        window.location.href = '/excluir?id='+idMovie
      },
      error: function(){
        alert('Erro ao deletar o registro')
      }
    });
}