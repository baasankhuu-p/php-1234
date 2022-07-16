amjilttai burtgegdlee
<?php
dd($_POST);
$username = _post('username', 50);
$phone = _post('phone', 15);
$email = _post('email', 150);
$userpassword = _post('userpassword', 50);
/*extract($_POST);//Postoor orj irsen key-iin huvisagchid hadgalna  */
_exec(
    "insert into users set name=?, pass=?, phone=?, email=?",
    'ssss',
    [$username, $userpassword, $phone, $email],
    $count);