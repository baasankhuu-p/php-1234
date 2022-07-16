<?php
//Бичиглэл богино
//DB ажиллаж буй үйлдэл бүрийг

@$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno() === 1049) {
    die("ийм нэртэй баз байхгүй");
} elseif (mysqli_connect_errno() === 1045) {
    die('Хэрэглэгчийн мэдээлэл буруу байна');
} elseif (mysqli_connect_errno()) {
    die('Алдаа гарлаа: ' . mysqli_connect_error());
}
function _exec($sql, $type, $sqlParam, &$count)
{
    global $con;
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, $type, ...$sqlParam);
    $success = mysqli_stmt_execute($stmt);
    $count = mysqli_stmt_affected_rows($stmt);
    _close_stmt($stmt);
    return $success;
}

function _select(&$stmt, &$count, $sql, $types, $sqlParams, &...$bindParams)
{
    global $con;
    $stmt = mysqli_prepare($con, $sql);

    if (!is_null($types)) {
        mysqli_stmt_bind_param($stmt, $types, ...$sqlParams);
    }
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $count = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_bind_result($stmt, ...$bindParams);
    return $stmt;
}
function _selectRow(&$stmt, &$count, $sql, $types, $sqlParams, &...$bindParams)
{
    _select($stmt, $count, $sql, $types, $sqlParams, ...$bindParams);
    _fetch($stmt);
}
function _selectAll(&$stmt, &$count, $sql, &...$bindParams)
{
    _select($stmt, $count, $sql, null, null, ...$bindParams);
}
function _close_stmt($stmt)
{
    mysqli_stmt_close($stmt);
}

function _close_con($stmt = null)
{
    global $con;
    if (!is_null($stmt)) {
        _close_stmt($stmt);
    }
    mysqli_close($con);
}
function _fetch($stmt)
{
    return mysqli_stmt_fetch($stmt);
}