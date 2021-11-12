

let options = document.getElementById('getOptions');
options.addEventListener('change', function(){
    //console.log(this.value); // o valor que procuras é: this.value
    let container = document.querySelector(".SerieOption")

    if(this.value === "serie"){
        container.style.display = "block";
    }else{
        container.style.display = "none";
    }
});