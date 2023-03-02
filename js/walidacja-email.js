$('#newsBtn').bind('click', function() {
    const validateEmail = (email) => {
        return email.match(
          /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
      };
      const validate = () => {
        const $result = $('#required2');
        const email = $('#news-email').val();
        $('#required1').text("")
        $result.text('')
        if($('#news-name').val() == ""){
            $('#required1').text("Wymagane pole")
          }
        if(validateEmail(email) && $('#news-name').val() != ""){
            $result.text('');
            $('input[type=text]').val("");
        }
        else if(!validateEmail(email)){
            if($('#news-email').val() == ""){
                $result.text('Wymagane pole');
            }
            else{
                $result.text('Nieprawidłowy format e-mail');
            }
        }
        return false;
      }
      validate();
});