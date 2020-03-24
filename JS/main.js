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

var chkpwd=function(){
    if(document.getElementById('password').value==document.getElementById('confirm_pwd').value){
        document.getElementById('confirm_error').innerHTML='Password is matching';
        document.getElementById('confirm_error').style.color='green';
    }
    else{
        document.getElementById('confirm_error').innerHTML='Password is not matching';
        document.getElementById('confirm_error').style.color='red';
    }
}