<img class="wave" src="<?= base_url()?>assets/auth-page/img/wave-purple.svg">
    <div class="container">
        <div class="img">
            <!-- <img src="<?= base_url()?>assets/auth-page/img/authentication-purple.svg"> -->
            <img src="<?= base_url()?>assets/auth-page/img/auth-3d-purple/1.png">
        </div>
        <div class="login-container">
            <form action="<?= site_url('login/process_login') ?>" method="post">
                <h2>Login</h2>
                <p>Welcome !</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <input class="input" name="email" type="email" placeholder="email">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-key"></i>
                    </div>
                    <div>
                        <input class="input" name="password" type="password" placeholder="password">
                    </div>
                </div>
                <input type="submit" class="btn" value="Login">
                <a class="forgot" href="<?= site_url('register') ?>">Don't have an acount ? , Click here to Register</a>
                <div class="others">
                    <hr>
                    <p>OR</p>
                    <hr>
                </div>
                <div class="social">
                    <div class="social-icons google">
                        <a href="#"><img src="<?= base_url()?>assets/auth-page/img/3d-icon/3d-icon-gmail.png">Login with Google</a>
                    </div>
                    <div class="social-icons facebook">
                        <a href="#"><img src="<?= base_url()?>assets/auth-page/img/3d-icon/3d-icon-facebook.png">Login with Facebook</a>
                    </div>
                    <div class="social-icons github">
                        <a href="#"><img src="<?= base_url()?>assets/auth-page/img/3d-icon/3d-icon-github.png">Login with Github</a>
                    </div>
                    <div class="social-icons twitter">
                        <a href="#"><img src="<?= base_url()?>assets/auth-page/img/3d-icon/3d-icon-twitter.png">Login with Twitter</a>
                    </div>
                    <div class="social-icons discord">
                        <a href="#"><img src="<?= base_url()?>assets/auth-page/img/3d-icon/3d-icon-discord.png">Login with Discord</a>
                    </div>
                </div>
                <div class="account">
                    <p>Forgot Password ?</p>
                    <a href="<?= site_url('login/forgotpassword') ?>">Click Here</a>
                </div>
            </form>
        </div>
    </div>