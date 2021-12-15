
function deletar($id){
    $.ajax({
      data: {id:id},
      url: '/excluir',
      type: 'GET',
      success: function(data) {     
        console.log(data)
      },
      error: function(){
        alert('Erro ao deletar o registro')
      }
    });
}