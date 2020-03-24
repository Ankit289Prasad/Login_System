
var chkpwd=function(){
    if(document.getElementById('password').value==document.getElementById('confirm_pwd').value){
        document.getElementById('confirm_error').innerHTML='Password is matching';
        document.getElementById('confirm_error').style.color='green';
        $('.enableOnInput').prop('disabled', false); 
    }
    else{
        document.getElementById('confirm_error').innerHTML='Password is not matching';
        document.getElementById('confirm_error').style.color='red';
       // document.getElementById('button').disabled=false;
        $('.enableOnInput').prop('disabled', true);
    }
}
    
