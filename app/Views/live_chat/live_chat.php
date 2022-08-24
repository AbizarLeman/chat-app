<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Live Chat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 20vh;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin: 2vh;"><h1>You are chatting with <?php echo $profile->fullname; ?>!</h1></div>
            </div>
        </div>
        <hr style="border-top: 3px solid #bbb;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="max-height: 50vh;overflow: auto;" id="chatBox">
                        <h5 class="card-title text-center">Chat</h5>
                        <hr style="border-top: 1px solid #bbb;">
                        <div class="row d-flex justify-content-center" id="chatContainer">
                            <?php
                                if (!empty($messages)) {
                                    $position = "";
                                    $background_color = "";
    
                                    foreach ($messages as $message) {
                                        $date = date_create($message->created_at);
    
                                        if ($message->receiver_user_account_id == $user_account_id) {
                                            $position = "left: -15%;";
                                            $color = "#bbb";
                                        } else {
                                            $position = "left: 15%;";
                                            $color = "black";
                                        }
    
                                        echo '
                                            <div style="position: relative;'.$position.';width: 60%;color: white;background-color: '.$color.';margin-top: 1rem;padding: 1rem;border-radius: 0.5rem;">
                                                <p class="card-text">'.$message->message.'</p>
                                                <p class="card-text" style="font-size: 0.7rem;">'.date_format($date,"m/d/Y").' '.date_format($date,"H:i").'</p>
                                            </div>
                                        ';
                                    }
                                } else {
                                    echo '<p class="card-text text-center" style="color: grey;">Say hi to '.$profile->fullname.'!</p>';
                                }
                            ?>
                        </div>
                        <hr style="border-top: 1px solid white;">
                        <div class="row d-flex justify-content-center">
                            <div class="input-group" style="width: 95%; margin-bottom: 1rem;">
                                <input type="text" class="form-control" id="messageInput" placeholder="Send message...">
                                <button class="btn btn-dark" type="button" onclick="sendMessage()">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 1rem;position: fixed;left: 0;right: 0;bottom: 0;width: 100%;background-color: black;justify-content: left;align-items: center;z-index: 10;">
            <div class="col-md-2 mt-1">
                <div class="d-grid">
                    <button class="btn btn-dark" type="button" onclick="showModal()">View Profile</button>
                </div>
            </div>
            <div class="col-md-2 mt-1">
                <div class="d-grid">
                    <button class="btn btn-dark" type="button" onclick="location.href='<?php echo site_url('Chat'); ?>'">Back</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="profileModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo 'Profile'; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
                                <div class="col-md-6" style="margin-top: 1rem;">
                                    <label class="form-label">Fullname:</label>
                                    <input disabled class="form-control" type="text" name="fullname" value="<?php echo $profile->fullname; ?>">
                                </div>
                                <div class="col-md-6" style="margin-top: 1rem;">
                                    <label class="form-label">Date of Birth:</label>
                                    <input disabled class="form-control" type="date" name="date_of_birth" value="<?php echo $profile->date_of_birth; ?>">
                                </div>
                            </div>
                            <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
                                <div class="col accordion" id="accordionExample" style="margin-top: 2rem;">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <label class="form-label"><h3>Contact</h3></label>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4" style="margin-top: 1rem;">
                                                        <label class="form-label">Address:</label>
                                                        <input disabled class="form-control" type="text" name="address" value="<?php echo $profile->address; ?>">
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 1rem;">
                                                        <label class="form-label">Phone Number:</label>
                                                        <input disabled class="form-control" type="text" name="phone_number" value="<?php echo $profile->phone_number; ?>">
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 1rem;">
                                                        <label class="form-label">Email:</label>
                                                        <input disabled class="form-control" type="email" name="email" value="<?php echo $profile->email; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <label class="form-label"><h3>Biography</h3></label>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4" style="margin-top: 1rem;">
                                                        <label class="form-label">Nationality:</label>
                                                        <input disabled class="form-control" type="text" name="nationality" value="<?php echo $profile->nationality; ?>">
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 1rem;">
                                                        <label class="form-label">UBD Programme:</label>
                                                        <input disabled class="form-control" type="text" name="ubd_programme" value="<?php echo $profile->ubd_programme; ?>">
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 1rem;">
                                                        <label class="form-label">Hobby:</label>
                                                        <input disabled class="form-control" type="text" name="hobby" value="<?php echo $profile->hobby; ?>">
                                                    </div>
                                                    <div class="col-12" style="margin-top: 1rem;">
                                                        <label class="form-label">Self Description:</label>
                                                        <input disabled class="form-control" type="text" name="self_description" value="<?php echo $profile->self_description; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const conn = new WebSocket('ws://localhost:9788?sender_user_account_id=<?php echo (isset($user_account_id)) ? $user_account_id : null; ?>&receiver_user_account_id=<?php echo (isset($profile->user_account_id)) ? $profile->user_account_id : null; ?>')
        const messageInput = document.getElementById("messageInput")
        const chatContainer = document.getElementById("chatContainer")

        const setScrollOnBottom = () => {
            const chatBox = document.getElementById("chatBox")
            chatBox.scrollTop = chatBox.scrollHeight
        }

        conn.onopen = function(e) {
            console.log("Connection established!")
        }

        conn.onmessage = function(e) {
            const messageBubble = document.createElement("div")
            
            messageBubble.style.cssText = "position: relative;left: -15%;width: 60%;color: white;background-color: #bbb;margin-top: 1rem;padding: 1rem;border-radius: 0.5rem;"
            messageBubble.innerHTML = `<p class="card-text">${e.data}</p>`
            chatContainer.append(messageBubble)
            setScrollOnBottom()
        }

        const sendMessage = () => {
            const messageBubble = document.createElement("div")

            messageBubble.style.cssText = "position: relative;left: 15%;width: 60%;color: white;background-color: black;margin-top: 1rem;padding: 1rem;border-radius: 0.5rem;"
            messageBubble.innerHTML = `<p class="card-text">${messageInput.value}</p>`
            chatContainer.append(messageBubble)

            conn.send(messageInput.value)
            messageInput.value = ""
            setScrollOnBottom()
        }

        messageInput.addEventListener("keydown", (e) => {
            if (e.code === "Enter") { 
                sendMessage()
            }
        })

        const showModal = () => {
            let profileModal = new bootstrap.Modal(document.getElementById("profileModal"))
            profileModal.show()
        }

        window.addEventListener('load', () => {
            setScrollOnBottom()
        }, false)
     </script>
<?= $this->endSection() ?>