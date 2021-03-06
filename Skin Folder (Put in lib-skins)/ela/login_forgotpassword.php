<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="login-content card">
                    <div class="login-form">
                        <h4>Forgot Password</h4>
                        <form action="<?php echo url('/login/forgotpassword');?>" method="post">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            
                            <input type="hidden" name="action" value="resetpass" />
                            <input class="btn btn-primary btn-flat m-b-30 m-t-30" type="submit" name="submit" value="Submit" />
                            
                            <div class="register-link m-t-15 text-center">
                                <p><a href="<?php echo url('/login'); ?>">Back to login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>