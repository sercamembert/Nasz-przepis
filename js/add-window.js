$('#add').bind('click', function(){
    $('#add-container').addClass("add-translate");
    $('#all').addClass("brightles-main")
    $('#bright').addClass("brightles-main")

});
$('#add-close').bind('click', function(){
    $('#add-container').removeClass("add-translate");
    $('#add-main').val("");
    $('#add-input').val("");
    $('#add-error').text("");
    $('#all').removeClass("brightles-main")
    $('#bright').removeClass("brightles-main")
});

$('#add-btn').bind("click",function(){
    if($('#add-main').val() == "" || $('#add-input').val() == ""){
        $('#add-error').html("Uzupełnij wszystkie pola!")
    }else{
    $('#add-container').removeClass("add-translate");
    $('#add-main').val("");
    $('#add-input').val("");
    $('#add-error').html("")
    $('#all').removeClass("brightles-main")
    $('#bright').removeClass("brightles-main")

    }

    


})