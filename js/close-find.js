$('#find').bind('click', function(){
    $('#find-container').addClass("find-translate");
    $('#not-find').text("");
});
$('#find-close').bind('click', function(){
    $('#find-container').removeClass('find-translate');
})