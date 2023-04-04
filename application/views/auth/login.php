<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Memanggil file CSS Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">
</head>
<div class="container d-flex flex-column justify-content-center mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mt-3 mb-3">
                        <img src="assets/img/logo.png" alt=""> <span style="font-size: 24px;" class="ms-2 text-white">Teflon</span>
                    </div>

                    <?= $this->session->flashdata('message') ?>

                    <form class="mx-5" method="post" action="<?php echo base_url('auth/login'); ?>">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4 mb-4" id="login">log in</button>
                        <div>
                            <a href="<?php echo base_url('auth/registration'); ?>" class="text-white">sign up</a>
                            <p class="text-white mt-3">This login is only for admins so other than admins can't access it</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Memanggil file JS Bootstrap -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>