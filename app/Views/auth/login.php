<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="<?php echo base_url('bootstrap.min.css'); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('style.css'); ?>" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container d-flex justify-content-center p-">
        <div class="card col-12 col-md-5 shadow-sm" style="margin: 5rem;">
            <div class="card-body">
                <h5 class="card-title mb-5" style="color: #A21441;"><?= lang('Auth.login') ?></h5>

                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= $error ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>

                <?php if (session('message') !== null) : ?>
                    <div class="alert alert-success" role="alert"><?= session('message') ?></div>
                <?php endif ?>

                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Username -->
                    <div class="mb-2">
                        <input type="text" class="form-control" name="username" inputmode="text" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
                    </div>

                    <!-- Password -->
                    <div class="mb-2">
                        <input type="password" class="form-control" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required />
                    </div>

                    <div class="d-grid">
                        <button class="btn" type="submit" style="background-color: #A21441; color: white;"><?= lang('Auth.login') ?></button>
                    </div>

                    <?php if (setting('Auth.allowRegistration')) : ?>
                        <p class="text-center" style="color: #A21441;"><?= lang('Auth.needAccount') ?> <a href="<?= url_to('register') ?>"><?= lang('Auth.register') ?></a></p>
                    <?php endif ?>

                </form>
            </div>
        </div>
    </div>
</body>

<style>
    body {
        background-color: #14A275;
    }
</style>

</html>