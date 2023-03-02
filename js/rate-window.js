$('#rate').bind('click', function(){
    $('#rate-recipe-container').addClass("rate-translate");
    $('#comment').val("");
    $('#1-star').removeClass('fa-solid');  
    $('#2-star').removeClass('fa-solid');  
    $('#3-star').removeClass('fa-solid');  
    $('#4-star').removeClass('fa-solid');  
    $('#5-star').removeClass('fa-solid');
    $('#recipe-1-sec').addClass("brightless");
    $('#recipe-2-sec').addClass("brightless");
});
$('#rate-close').bind('click', function(){
    $('#rate-recipe-container').removeClass('rate-translate');
    $('#recipe-1-sec').removeClass("brightless");
    $('#recipe-2-sec').removeClass("brightless");
})
$('#rate-btn').bind('click', function(){
    $('#rate-recipe-container').removeClass('rate-translate');
    $('#recipe-1-sec').removeClass("brightless");
    $('#recipe-2-sec').removeClass("brightless");
});


let star1 = document.getElementById("1-star");
let star2 = document.getElementById("2-star");
let star3 = document.getElementById("3-star");
let star4 = document.getElementById("4-star");
let star5 = document.getElementById("5-star");

$('#1-star').bind("click",function(){
    $('#1-star').removeClass('fa-solid');  
    $('#2-star').removeClass('fa-solid');  
    $('#3-star').removeClass('fa-solid');  
    $('#4-star').removeClass('fa-solid');  
    $('#5-star').removeClass('fa-solid');  
    if(!star1.classList.contains('fa-solid')){
        $('#1-star').addClass('fa-solid');
    }
});


$('#2-star').bind("click",function(){
    $('#1-star').removeClass('fa-solid');  
    $('#2-star').removeClass('fa-solid');  
    $('#3-star').removeClass('fa-solid');  
    $('#4-star').removeClass('fa-solid');  
    $('#5-star').removeClass('fa-solid');
    if(!star2.classList.contains('fa-solid')){
        $('#1-star').addClass('fa-solid');
        $('#2-star').addClass('fa-solid');
    }
});

$('#3-star').bind("click",function(){
    $('#1-star').removeClass('fa-solid');  
    $('#2-star').removeClass('fa-solid');  
    $('#3-star').removeClass('fa-solid');  
    $('#4-star').removeClass('fa-solid');  
    $('#5-star').removeClass('fa-solid');
    if(!star3.classList.contains('fa-solid')){
        $('#1-star').addClass('fa-solid');
        $('#2-star').addClass('fa-solid');
        $('#3-star').addClass('fa-solid');
    }
});


$('#4-star').bind("click",function(){
    $('#1-star').removeClass('fa-solid');  
    $('#2-star').removeClass('fa-solid');  
    $('#3-star').removeClass('fa-solid');  
    $('#4-star').removeClass('fa-solid');  
    $('#5-star').removeClass('fa-solid');
    if(!star4.classList.contains('fa-solid')){
        $('#1-star').addClass('fa-solid');
        $('#2-star').addClass('fa-solid');
        $('#3-star').addClass('fa-solid');
        $('#4-star').addClass('fa-solid');
    }
});


$('#5-star').bind("click",function(){
    $('#1-star').removeClass('fa-solid');  
    $('#2-star').removeClass('fa-solid');  
    $('#3-star').removeClass('fa-solid');  
    $('#4-star').removeClass('fa-solid');  
    $('#5-star').removeClass('fa-solid');
    if(!star5.classList.contains('fa-solid')){
        $('#1-star').addClass('fa-solid');
        $('#2-star').addClass('fa-solid');
        $('#3-star').addClass('fa-solid');
        $('#4-star').addClass('fa-solid');
        $('#5-star').addClass('fa-solid');
    }
});