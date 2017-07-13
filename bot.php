<?php
function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randstring;
}

$i = 0;
while (true) {
	$username = RandomString();
	$password = RandomString();
	$keys = RandomString();
	$priv_key = RandomString();
	$submit_to_scammer = file_get_contents("https://sauma.me/steam.php?u=".$username."&p=".$password."&s=".$keys."&i=".$priv_key."");
	echo "Submited request with ID: ".$i." | Result: ".$submit_to_scammer.PHP_EOL;
	$i++;
}
?>