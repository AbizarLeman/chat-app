<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Live Chat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 20vh;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin: 2vh;"><h1>Live Chat</h1></div>
                <div style="margin: 2vh;"><p>Chat with your fellow students here!</p></div>
            </div>
        </div>
        <hr style="border-top: 3px solid #bbb;">
        <div class="row d-flex justify-content-center">
            <?php 
                foreach ($profiles as $profile) {
                    if ($profile->user_account_id != $user_account_id) {
                        echo '
                            <div class="col-md-4 text-center">
                                <div class="card text-center">
                                    <div class="card-header">
                                        '.$profile->fullname.'
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">'.$profile->ubd_programme.'</h5>
                                        <p class="card-text">'.$profile->hobby.'</p>
                                        <a href="'.site_url('Chat/'.$profile->profile_id).'" class="btn btn-dark">Chat now!</a>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>
<?= $this->endSection() ?>