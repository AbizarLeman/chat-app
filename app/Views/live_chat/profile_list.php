<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Chat App - Live Chat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container primary-color" style="margin-bottom: 20vh;">
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
                            <div class="col-md-4 text-center mt-3">
                                <div class="card text-center">
                                    <div class="card-header text-white" style="background-color: #A21441;">
                                        '.$profile->fullname.'
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">'.$profile->ubd_programme.'</h5>
                                        <p class="card-text">'.$profile->self_description.'</p>
                                        <div class="d-grid gap-2">
                                            <a href="'.site_url('Chat/'.$profile->profile_id).'" class="btn" style="background-color: #14A275;color: white;">Chat now!</a>
                                        </div>
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