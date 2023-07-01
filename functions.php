<?php
function isEmailExists($db, $tableName, $email)
{
    $sql = "SELECT * FROM " . $tableName . " WHERE email='" . $email . "'";
    $results = $db->query($sql);
    $row = $results->fetch_assoc();
    return (is_array($row) && count($row) == 1);
}

function isPhoneExists($db, $tableName, $phone)
{
    $sql = "SELECT * FROM " . $tableName . " WHERE Phone_Number='" . $phone . "'";
    $results = $db->query($sql);
    $row = $results->fetch_assoc();
    return (is_array($row) && count($row) == 1);
}