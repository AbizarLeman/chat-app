<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
Chat App - Live Chat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container primary-color" style="margin-bottom: 20vh;">
    <div class="row d-flex flex-row">
        <div class="col-md text-center">
            <div style="margin: 2vh;">
                <h1><?php echo $profile->fullname; ?></h1>
            </div>
        </div>
    </div>
    <hr style="border-top: 3px solid #bbb;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body" style="max-height: 60vh;overflow: auto;" id="chatBox">
                    <h5 class="card-title text-center">Chat History</h5>
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
                                    $color = "#14A275";
                                } else {
                                    $position = "left: 15%;";
                                    $color = "#A21441";
                                }

                                echo '
                                    <div style="position: relative;'.$position.';max-width: 60%;color: white;background-color: '.$color.';margin-top: 1rem;padding: 1rem;border-radius: 0.5rem;">
                                        <p class="card-text">' . $message->message . '</p>
                                        <p class="card-text" style="font-size: 0.7rem;">'.date_format($date, "m/d/Y H:i").'</p>
                                    </div>
                                ';
                            }
                        } else {
                            echo '<p class="card-text text-center" style="color: grey;">Say hi to ' . $profile->fullname . '!</p>';
                        }
                        ?>
                    </div>
                    <hr style="border-top: 1px solid white;">
                    <div class="row d-flex justify-content-center" style="margin-top: 2rem;">
                        <div class="input-group" style="width: 100%; margin-bottom: 1rem;position: absolute;left: 0;right: 0;bottom: 0;">
                            <input type="text" class="form-control" id="messageInput" placeholder="Send message...">
                            <button class="btn" type="button" onclick="sendMessage()" style="background-color: #A21441; color: white;">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 mt-3">
            <div class="d-grid">
                <button class="btn" type="button" onclick="showModal()" style="background-color: #A21441; color: white;">View Profile</button>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="d-grid">
                <button class="btn" type="button" onclick="location.href='<?php echo site_url('Chat'); ?>'" style="background-color: #A21441; color: white;">Back</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="profileModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="margin-bottom: 5rem; z-index: 20;">
                <div class="modal-header" style="background-color: #A21441;">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><?php echo 'Profile'; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo view('profile\profile_details'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const conn = new WebSocket('<?php echo getenv('app.websocketURL'); ?>?sender_user_account_id=<?php echo (isset($user_account_id)) ? $user_account_id : null; ?>&receiver_user_account_id=<?php echo (isset($profile->user_account_id)) ? $profile->user_account_id : null; ?>')
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
        const currentDate = new Date()
        const currentDateString = ("0" + currentDate.getDate()).slice(-2) + "/" + ("0" + (currentDate.getMonth() + 1)).slice(-2) + "/" + currentDate.getFullYear() + " " + currentDate.getHours() + ":" + currentDate.getMinutes()

        const messageBubble = document.createElement("div")

        messageBubble.style.cssText = "position: relative;left: -15%;width: 60%;color: white;background-color: #14A275;margin-top: 1rem;padding: 1rem;border-radius: 0.5rem;"
        messageBubble.innerHTML = `<p class="card-text">${e.data}</p><p class="card-text" style="font-size: 0.7rem;">${currentDateString}</p>`
        chatContainer.append(messageBubble)
        setScrollOnBottom()
    }

    const sendMessage = () => {
        if (messageInput.value.trim() !== "") {
            const currentDate = new Date()
            const currentDateString = ("0" + currentDate.getDate()).slice(-2) + "/" + ("0" + (currentDate.getMonth() + 1)).slice(-2) + "/" + currentDate.getFullYear() + " " + currentDate.getHours() + ":" + currentDate.getMinutes()

            const messageBubble = document.createElement("div")

            messageBubble.style.cssText = "position: relative;left: 15%;width: 60%;color: white;background-color: #A21441;margin-top: 1rem;padding: 1rem;border-radius: 0.5rem;"
            messageBubble.innerHTML = `<p class="card-text">${messageInput.value}</p><p class="card-text" style="font-size: 0.7rem;">${currentDateString}</p>`
            chatContainer.append(messageBubble)

            conn.send(messageInput.value)
            messageInput.value = ""
            setScrollOnBottom()
        }
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