$(document).ready(function(e){
     
    $("#reg-form").submit(function(event){
        let $password=$("#pasword");
        let $confirm=$("#confirm_pwd");
        let $error=$("#confirm_error");
        if($password.val()==$confirm.val()){
            return true;
        }
        else{
            $error.text("Password not Matched");
            event.preventDefault();
        }
    });

})