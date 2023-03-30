<?php
include DIR_TEMPLATE . "page_nav.php";
include DIR_CONTACT . "page_contact.php";
include DIR_TEMPLATE . "page_footer.php";






if ($_POST) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $name = preg_replace('#[^\w\p{Cyrillic}]+#u', ' ', $name);
    $message = strip_tags($message);
    $message = htmlspecialchars($message, ENT_QUOTES);

    if ($name == '')
        $_error[] = 'Enter a name';

    if ($email == '')
        $_error[] = 'Enter an e-mail address';
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        $_error[] = 'E-mail address not valid';

    if ($message == '')
        $_error[] = 'Enter a message';

    if (empty($_error)) {
        $headers =	"From: $name <$email>\r\n" .
            "Reply-To: $email\r\n" .
            "X-Mailer: PHP mailer";

        if (true)
            //if (@mail('pesicivan2002@gmail.com', 'Message from web site', $message, $headers))
            $_message[] = 'Your message has been successfully sent.';
        else
            $_error[] = 'An error has occurred. Your message has not been sent to the site administrator';
    }
}

?>
