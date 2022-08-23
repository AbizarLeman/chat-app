<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 20vh;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin: 2vh;"><h1>You are chatting with!</h1></div>
            </div>
        </div>
        <hr style="border-top: 3px solid #bbb;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" style="max-height: 50vh;overflow: auto;">
                        <h5 class="card-title text-center">Chat</h5>
                        <hr style="border-top: 1px solid #bbb;">
                        <div class="row d-flex justify-content-center">
                            <div style="position: relative;left: -10%;width: 70%;color: white;background-color: #bbb;margin-top: 1rem;padding: 1rem;border-radius: 1rem;">
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div style="position: relative;left: 10%;width: 70%;color: white;background-color: #bbb;margin-top: 1rem;padding: 1rem;border-radius: 1rem;">
                                <p class="card-text">With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nulla debitis maiores ea pariatur facere perspiciatis ducimus mollitia tempore at, deleniti consequatur quia blanditiis laboriosam molestias, velit, explicabo voluptas! Reprehenderit?</p>
                            </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="input-group" style="width: 95%; margin-bottom: 1rem;">
                                <input type="text" class="form-control" placeholder="Send message...">
                                <button class="btn btn-dark" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 1rem;position: fixed;left: 0;right: 0;bottom: 0;width: 100%;background-color: black;justify-content: left;align-items: center;z-index: 10;">
            <div class="col-md-2">
                <div class="d-grid">
                    <button class="btn btn-dark" type="button" onclick="location.href='<?php echo site_url('Chat'); ?>'">Back</button>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>