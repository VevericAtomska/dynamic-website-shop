<?php
$message_sent = false;
$error_message = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

        $message_sent = true;
    } else {
        $error_message = '<div class="error-message-container"><span class="error-message">Please fill in all fields before submitting a message.</span></div>';


    }
}
?>

<?php if (!empty($error_message)): ?>
    <div class="errormessage">
        <p><?= $error_message ?></p>
    </div>
<?php endif; ?>

<?php if (!empty($message_sent) && empty($error_message)): ?>
    <div class="messagecontact">
        <p>Your message has been sent successfully!</p>
    </div>
<?php endif; ?>

<?php if (empty($message_sent) || !empty($error_message)): ?>
    <div class="contact-form">
        <h1>Contact</h1>
        <form method="post">
            <label for="name">Name</label>
            <input name="name" type="text" class="feedback-input" placeholder="Enter your name" value="<?= $_POST['name'] ?? '' ?>"/>

            <label for="email">Email</label>
            <input name="email" type="text" class="feedback-input" placeholder="Enter your email" value="<?= $_POST['email'] ?? '' ?>"/>

            <label for="message">Message</label>
            <textarea name="message" class="feedback-input" placeholder="Enter your message"><?= $_POST['message'] ?? '' ?></textarea>

            <button type="submit">Send</button>
        </form>
    </div>

<?php endif; ?>





<div class="map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1468685409143!2d21.89578261368772!3d43.31838669327145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0b16f291241%3A0x5d4587d453cb8630!2z0KPQvdC40LLQtdGA0LfQuNGC0LXRgiDQodC40L3Qs9C40LTRg9C90YPQvA!5e0!3m2!1ssr!2srs!4v1640094244419!5m2!1ssr!2srs" width="1200" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

</div>

</page-contact>
</html>