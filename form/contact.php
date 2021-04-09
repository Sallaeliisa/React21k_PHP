<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

$sent_status = mail('salla.vuorikko@edu.bc.fi', 'Sent from ' . $_POST['username'], $_POST['message']);

if ($sent_status) {
    echo 'Message was delivered';
}else {
    echo 'Email was not sent';
}

?>