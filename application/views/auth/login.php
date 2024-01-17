

        <!-- Start Body -->
        <div class="content-wrapper">
            <div class="sub-main">
                <h2 class="sub-heading"> Login to our site</h2>
                <div class="login-social">
                    <p class="span line-left">With social media account.</p>
                    <div class="social-icons">
                        <div class="button">
                            <a class="tw" href="#"> <i class="fa fa-twitter anc-tw"> </i> <span>Twitter</span><div class="clear"> </div></a>
                            <a class="fb" href="#"> <i class="fa fa-facebook anc-fa"> </i> <span>Facebook</span><div class="clear"> </div></a>
                            <a class="go" href="#"><i class="fa fa-google-plus anc-go"> </i><span>Google+</span><div class="clear"> </div></a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="line-mid">
                    <h4>or</h4>
                    <div class="clear"></div>
                </div>

                <!--login start here-->
                <div class="login">
                    <p class="span line-left">Enter your email and password.</p>
                    <form action="<?= site_url()?>/dashboard" method="post">
                        <input type="text" class="user active" value="User name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
                        <input type="password" class="lock active" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
                        <div class="forgot">
                            <div class="login-check">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1"><span></span>Keep me Signed in</label>
                            </div>
                            <a href="<?= site_url()?>login/reset"> Forgot Password? </a>
                            <div class="clear"> </div>
                        </div>
                        <div class="login-bwn">
                            <input type="submit" value="Log in" />
                        </div>

                        <div class="login-bottom" >
                            <h4 style="color:white;font-weight:bolder;">Don't have an Account?</h4>
                            <div class="reg-bwn"><a href="<?= site_url()?>/login/register">Register Now!</a></div>
                        </div>
                    </form>
                </div>
                <!--login end here-->
            </div>

        </div>
        <!-- End Body -->
