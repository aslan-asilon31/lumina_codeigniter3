<img class="wave" src="<?= base_url()?>assets/auth-page/img/wave-purple.svg">
    <div class="container">
        <div class="img">
            <img src="<?= base_url()?>assets/auth-page/img/auth-3d-purple/4.png">
        </div>
        <div class="login-container">
            <form action="index.html">
                <h2>Forgot Password</h2>
                <p>Enter your e-mail address in the field below</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>E-mail</h5>
                        <input class="input" type="email">
                    </div>
                </div>
                <input type="submit" class="btn" value="Enviar">
                <div class="account">
                    <p>Have An Account ?</p>
                    <a href="<?= site_url('login') ?>">Login</a>
                </div>
            </form>
        </div>
    </div>