<!-- ORBIT SLIDER -->
<div id="slider_1">
    <ul data-orbit>
        <li>
            <div class="slider_content">
                <!--<p>Upload Songs</p>-->
            </div>
            <img src="./img/1.jpg" />
        </li>
        <li>
            <div class="slider_content">
                <!--<p>Upload Videos</p>-->
            </div>
            <img src="./img/2.jpg" />
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
            <input type="text" class="username" name="username" value="test">
            <h6>Password:</h6>
            <input type="password" class="password" name="password" value="test">
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
        <form action="/home/perform_register" id="register" enctype="multipart/form-data" method="post">
            <h6>Username:</h6>
            <input type="text" class="username" name="username" placeholder="Username">
            <h6>Password:</h6>
            <input type="password" class="password" name="password" placeholder="Password">
            <h6>Confirm Password:</h6>
            <input type="password" class="confirm_password" name="password" placeholder="Password">
            <h6>Email:</h6>
            <input type="email" class="email" name="email" placeholder="email@email.com">
            <h6>Confirm Email:</h6>
            <input type="email" class="confirm_email" name="confirm_email" value="">
            <h6>Date of Birth:</h6>
            <input type="date" class="dob" name="dob" value="10/12/2013">
            <br />
            <input type="submit" name="submit" value="Register"> <a href="#" data-reveal-id="popup_login">Back</a>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>