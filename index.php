<?php 
    include('./header.php');
?>
<style>#upload-profile::before{
     content: '';
     display: inline-block; 
     width: 200px;  
     height: 200px;
     cursor: pointer;
     border-radius: 50%;
    }
</style>
    <section id="register" style="background:url('./Assets/background.png') no-repeat;margin-top:-10px; padding: 3% 0; background-size: cover;">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                <h1 class="login-title text-dark">Register</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50" style="font-size: 80%">Register and enjoy additional features</p>
                <span class="font-ubuntu text-black-50"style="font-size: 90%">I already have <a href="./php/login.php">Login</a></span>
                </div>
                <div class="upload-profile-image d-flex justfy-content-center pb-0" style="left:-70px;position: relative;top:-30px;width: 10%;margin-left: auto;margin-right: auto;transition: filter .8s ease;">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="Assets/camera-solid.svg" alt="Camera">
                        </div>
                        <img src="Assets/Profile/beard.png" style="width:150px; height:150px; "  class=" img rounded-circle mx-3" alt="profile">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" class="form-control-file" name="profileUpload" id="upload-profilee" style="position: absolute;top: 10px;z-index: 10;width: 200px;height:150px;margin-top: 13px; visibility:hidden;">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="./php/register.php" method="POST" enctype="multipart/form-data" id="reg-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" required name="firstName" id="firtsName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" required name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row " style="margin-top: 11px;">
                            <div class="col">
                                <input type="email"required name="email" id="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>
                        <div class="form-row " style="margin-top: 11px;">
                            <div class="col">
                                <input type="password"required name="password" id="password" class="form-control" placeholder="New Password*">
                            </div>
                        </div>
                        <div class="form-row " style="margin-top: 11px;">
                            <div class="col">
                                <input type="password"required name="confirm_pwd" onkeyup='chkpwd();' id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                                <small id="confirm_error" ></small>
                            </div>
                        </div>
                        <div class="form-check form-check-inline pt-3">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-lable font-ubuntu text-black-50 my-2" style="font-size:85%;">I agree <a href="#">terms,conditions,and policy</a>(*)</label>
                        </div>
                        <div class="submit-btn text-center pt-2">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5 enableOnInput" id="button1">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    include('./footer.php');
?>