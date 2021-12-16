
function deletar(idMovie){
    $.ajax({
      data: {idMovie:idMovie},
      url: '/excluir',
      type: 'POST',
      success: function() {     
        window.location.href = '/excluir?id='+idMovie
      },
      error: function(){
        alert('Erro ao deletar o registro')
      }
    });
}


//Testes
// function deletar(idMovie,idUser){
//   console.log("Id from the Movie:"+idMovie+" And Id from the User "+idUser)
// }