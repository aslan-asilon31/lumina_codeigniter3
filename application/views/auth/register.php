<!-- Start Body -->
<div class="content-wrapper">
    <div class="sub-main">
        <h2 class="sub-heading">Join our site today</h2>
        <!--login start here-->
        <div class="login">
            <p class="span line-left">Enter your personal details to create an acount.</p>
            <form action="<?= site_url()?>/dashboard" method="post">
                <input type="text" class="user active" value="User name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
                <input type="email" class="email active" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
                <input type="password" class="lock active" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" placeholder="Password"/>
                    <p class="span line-left">
                        By creating an account you agree to our 
                        <a href="tos.html" target="_blank" role="link">Terms</a>
                        &amp;
                        <a href="privacy.html" target="_blank" role="link">Privacy</a>
                        </p>
                <div class="login-bwn">
                    <input type="submit" value="Start" />
                </div>

                <div class="login-bottom">
                    <h4 style="color:white;font-weight:bolder;">Already have an Account?</a></h4>
                    <div class="reg-bwn"><a href="<?= site_url()?>/login">Login Now!</a></div>
                </div>
            </form>
        </div>
        <!--login end here-->
    </div>

</div>
<!-- End Body -->
