
document.getElementById('getOptions').addEventListener('change', function(){
    //console.log(this.value); // o valor que procuras é: this.value
    let container = document.querySelector(".SerieOption")

    if (this.value === "series") {
        container.style.display = "block";
    } else {
        container.style.display = "none";
    }
});