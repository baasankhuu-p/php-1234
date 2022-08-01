<?php
session_start();
// dd($_SESSION);
$ognoo = _post('ognoo', 10);
$utga = _post('utga', 255);
$togtmol = _post('togtmol', 2);
$turul = _post('turul', 15);
$hariltsagch = _post('hariltsagch', 100);
$mungu_usuh = _post('mungu_usuh', 10);
$mungu_buurah = _post('mungu_buurah', 10);
$hurungu_usuh = _post('hurungu_usuh', 10);
$hurungu_buurah = _post('hurungu_buurah', 10);
$baraa_usuh = _post('baraa_usuh', 10);
$baraa_buurah = _post('baraa_buurah', 10);
$avlaga_usuh = _post('avlaga_usuh', 10);
$avlaga_buurah = _post('avlaga_buurah', 10);
$ur_usuh = _post('ur_usuh', 10);
$ur_buurah = _post('ur_buurah', 10);
$orlogo = _post('orlogo', 10);
$zardal = _post('zardal', 10);

try {
    $success = _exec("
    insert into transaction set
    ognoo=?,
    utga=?,
    togtmol=?,
    turul=?,
    hariltsagch=?,
    mungu_usuh=?,
    mungu_buurah=?,
    hurungu_usuh=?,
    hurungu_buurah=?,
    baraa_usuh=?,
    baraa_buurah=?,
    avlaga_usuh=?,
    avlaga_buurah=?,
    ur_usuh=?,
    ur_buurah=?,
    orlogo=?,
    zardal=?,
    create_user_id=?,
    create_time=now()
",
        "sssssiiiiiiiiiiiii",
        [
            $ognoo,
            $utga,
            $togtmol,
            $turul,
            $hariltsagch,
            $mungu_usuh,
            $mungu_buurah,
            $hurungu_usuh,
            $hurungu_buurah,
            $baraa_usuh,
            $baraa_buurah,
            $avlaga_usuh,
            $avlaga_buurah,
            $ur_usuh,
            $ur_buurah,
            $orlogo,
            $zardal,
            $_SESSION['idusers'],
        ]
        ,
        $count
    );
} catch (Exception $e) {
    // echo 'ERROR: ' . $e->getMessage() . ' <br> ' . $e->getFile() . ' <br> ' . $e->getLine();
    $_SESSION['errors'] = ['Таны системд алдаа гарлаа. Та дараа дахин оролдоно уу'];
}
redirect('/user/home');