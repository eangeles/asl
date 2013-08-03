<!-- ORBIT SLIDER -->
<div id="slider_1">
    <ul data-orbit>
        <li>
            <div class="slider_content">
                <!--<p>Upload Songs</p>-->
            </div>
            <img src="/img/1.jpg" />
        </li>
        <li>
            <div class="slider_content">
                <!--<p>Upload Videos</p>-->
            </div>
            <img src="/img/2.jpg" />
        </li>
    </ul>
</div>

<div id="middle">
    <div class="row">
        <div class="small-4 columns column_content">
            <h3 class="uppercase">Upload Songs</h3>
            <p>Upload songs for you and the world to listen</p>
        </div>
        <div class="small-4 columns column_content">
            <h3 class="uppercase">Upload Videos</h3>
            <p>You can upload music videos, and see how much
                the world likes it!</p>
        </div>
        <div class="small-4 columns column_content">
            <h3 class="uppercase">Personalise Profile</h3>
            <p>Make your music profile page unique with the ability to upload
                your photos.</p>
        </div>
    </div>
</div>

<!-- MODAL JQUERY -->
<!-- Upload -->
<div id="popup_login" class="reveal-modal small">
    <div class="header_bar">
        <h3>LOGIN</h3>
    </div>
    <div id="login_container">
        <form action="/home/process" class="login" enctype="multipart/form-data" method="post">
            <h6>Username:</h6>
            <input type="text" class="username" name="username" placeholder="Username">
            <h6>Password:</h6>
            <input type="password" class="password" name="password" placeholder="Password">
            <br />
            <input type="submit" name="submit" value="Login"> <a href="#" data-reveal-id="popup_register">Register!</a>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>

<!-- Register -->
<div id="popup_register" class="reveal-modal small">
    <div class="header_bar">
        <h3>Register</h3>
    </div>
    <div id="register_container">
        <form data-abide action="/home/perform_register" id="register" enctype="multipart/form-data" method="post">
            <div id="usernameField">
                <h6>Username:</h6>
                <input type="text" required pattern="alpha" id="username" name="username" placeholder="Username">
                <small class="error">Name is required and must be a string.</small>
                <small class="taken">Username is taken</small>
            </div>
            <div id="passwordField">
                <h6>Password:</h6>
                <input type="password" required pattern="password" id="password" name="password" placeholder="Password">
                <small class="error">Must contain at least 1 Upper-case/lower-case, number/special character with a min 8 characters.</small>
            </div>
            <div id="confirmPasswordField">
                <h6>Confirm Password:</h6>
                <input type="password" required pattern="password" id="confirmPassword" name="password" placeholder="Password">
                <small class="error">Passwords did not match.</small>
            </div>
            <div id="emailField">
                <h6>Email:</h6>
                <input type="email" requried pattern="email" id="email" name="email" placeholder="email@email.com">
                <small class="error">Please enter a valid email.</small>
            </div>
            <div id="confirmEmailField">
                <h6>Confirm Email:</h6>
                <input type="email" id="confirmEmail" name="confirm_email" value="">
                <small class="error">Emails did not match.</small>
            </div>
            <div id="dobField">
                <h6>Date of Birth:</h6>
                <input type="date" required pattern="date" class="dob" name="dob" value="10/12/2013">
                <small class="error">Please select your date of birth.</small>
            </div>

            <br />
            <input type="submit" name="submit" value="Register"> <a href="#" data-reveal-id="popup_login">Back</a>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>

<script src="/js/main.js"></script>