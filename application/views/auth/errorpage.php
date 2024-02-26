<img class="wave" src="<?= base_url()?>assets/auth-page/img/wave-purple.svg">
    <div class="container">
        <div class="img">
            <img src="<?= base_url()?>assets/auth-page/img/auth-3d-purple/5.png">
        </div>
        <div class="confirm-container">
            <div class="content">
                <h4><?= $error;  ?></h4>
                
                <i class="fas fa-exclamation-circle"></i>
                <div class="btn-container">
                    <a href="<?= site_url('login') ?>" class="btn-action">Try again</a>
                </div>
            </div>
        </div>
    </div>