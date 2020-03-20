<?php 
    include('./php/header.php');
?>

    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                <h1 class="login-title text-dark">Register</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                <span>I already have <a href="php/login.php">Login</a></span>
                </div>
                <div class="upload-profile-image">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="Assets/camera-solid.svg" alt="Camera">
                        </div>
                        <img src="Assets/Profile/beard.png" class=" img rounded-circle" alt="profile">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" class="form-control-file" name="profileUpload" id="upload-profilee">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include('./php/footer.php');
?>