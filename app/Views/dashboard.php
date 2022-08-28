<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Chat App - Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container primary-color" style="margin-bottom: 20vh;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin: 2vh;"><h1>Welcome to Chat App!</h1></div>
            </div>
        </div>
        <hr style="border-top: 3px solid #bbb;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #A21441;">
                        <h5 class="card-title text-center text-white">How to use Chat App?</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-text text-field-color">
                            <ul>
                                <li>First, create a profile in the Profile page.</li>
                                <li>After creating the profile, you can now view and edit your personal details.</li>
                                <li>Chat feature will only be available after your profile has been created.</li>
                                <li>To began chatting, browse through the profile list in the Live Chat page.</li>
                                <li>Click the "Chat now!" button on the profile of the person you want to chat with.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>