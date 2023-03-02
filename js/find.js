const input = document.getElementById("find-input");
input.addEventListener("keypress", e =>{
    if (e.key === 'Enter') {
    if(input.value == '' || input.value == ' '){
        return;
    }
    var wartosc = e.target.value.toLowerCase();
    const data = document.querySelectorAll('.match');
    for(var i=0; i<data.length; i++){
    data[i].classList.remove("znaleziono");
    var wartoscOpisu = data[i].childNodes[0].textContent;
    let wartoscOpisu2 = wartoscOpisu.toLowerCase();
    var x;
    if(wartoscOpisu2.includes(wartosc)){
    $('#not-find').text("");
    data[i].classList.add("znaleziono");
    const searched = document.querySelectorAll('.znaleziono');
    searched[0].scrollIntoView({behavior: "smooth", inline: "nearest",block: "end"});
    x = true;
    }
    if(!x == true){
        $('#not-find').text("Nie znaleziono podanego przepisu, spróbuj ponownie");
    }
    }
    input.value= '';
}
}
)