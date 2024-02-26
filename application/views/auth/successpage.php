<img class="wave" src="<?= base_url()?>assets/auth-page/img/wave-purple.svg">
    <div class="container">
        <div class="img">
            <img src="<?= base_url()?>assets/auth-page/img/auth-3d-purple/3.png">
        </div>
        <div class="confirm-container">
            <div class="content">
            <?php if (isset($success)): ?>
                <h2><?= $success ?></h2>
            <?php else: ?>
                <h2>Registration Successful</h2>
            <?php endif; ?>
                
                <i class="far fa-check-circle"></i>
                <div class="btn-container">
                    <a href="<?= site_url('login') ?>" class="btn-action">login</a>
                </div>
            </div>
        </div>
    </div>