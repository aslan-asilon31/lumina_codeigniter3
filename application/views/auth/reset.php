<!-- Start Body -->
<div class="content-wrapper">
    <div class="sub-main">
        <h2 class="sub-heading"> Reset Password</h2>
        <!--login start here-->
        <div class="login">
            <p class="span line-left">Enter your email to reset your password.</p>
            <form action="<?= site_url()?>/dashboard" method="post">
                <input type="email" class="email active" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>

                <div class="login-bwn">
                    <input type="submit" value="Reset" />
                </div>


                <div class="forgot">
                    <div class="login-bottom login-bottom-left">
                        <h4>Don't have an Account?</a></h4>
                        <div class="reg-bwn"><a href="<?= site_url()?>/register">Register Now!</a></div>
                    </div>
                    <div class="login-bottom login-bottom-right">
                        <h4 style="color:white;font-weight:bolder;">Already have an Account?</a></h4>
                        <div class="reg-bwn"><a href="<?= site_url()?>/login">Login Now!</a></div>
                    </div>
                    <div class="clear"> </div>
                </div>

            </form>
        </div>
        <!--login end here-->



    </div>

</div>
<!-- End Body -->

