
var chkpwd=function(){
    if(document.getElementById('password').value==document.getElementById('confirm_pwd').value){
        document.getElementById('confirm_error').innerHTML='Password is matching';
        document.getElementById('confirm_error').style.color='green';
        $('.enableOnInput').prop('disabled', false); 
    }
    else{
        document.getElementById('confirm_error').innerHTML='Password is not matching';
        document.getElementById('confirm_error').style.color='red';
       
        $('.enableOnInput').prop('disabled', true);
    }

}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img').attr('src', e.target.result);
            $('.camera-icon').attr('src',null);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
