$('#przepisy').bind('click', function(){
    $('.sidebar').removeClass('translate-sidebar');
    $('.sidebar').removeClass('translate-sidebar-2');
    $('.sidebar').addClass('translate-sidebar');
});

$('#close').bind('click', function(){
    $('.sidebar').addClass('translate-sidebar-2');
});

let buttons = document.querySelectorAll(".other");
buttons.forEach(function(item){
    item.addEventListener('click', function(){
        $('.sidebar').removeClass('translate-sidebar');
        $('.sidebar').removeClass('translate-sidebar-2');
        $('.sidebar').addClass('translate-sidebar');
    });
});