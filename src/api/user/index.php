<?php

/** 
 * User API
 * 
 * PHP version 8.1
 * 
 * @file     /src/api/user/index.php
 * @category API
 * @package  VirtualPass
 * @author   Jack <duedot43@noreplay-github.com>
 * @license  https://mit-license.org/ MIT
 * @link     https://github.com/Duedot43/VirtualPass
 */
require "../../include/modules.php";
$config = parse_ini_file("../../../config/config.ini");


if (!isset($_GET['key'])) {
    echo json_encode(
        array(
            "success" => 0,
            "reason" => "key_not_set",
            "human_reason" => "API key is not set"
        ),
        true
    );
    err();
    exit();
}
$level = authApi("root", $config['sqlRootPasswd'], "VirtualPass", preg_replace("/[^0-9.]+/i", "", $_GET['key']));
if (!$level[0]) {
    echo json_encode(
        array(
            "success" => 0,
            "reason" => "invalid_key",
            "human_reason" => "Your API key is not valid"
        ),
        true
    );
    authFail();
    exit();
}
//Now we get to the real api
$request = unsetValue(explode("/", $_SERVER['REQUEST_URI']), array("api", "user"));
// If the user requests a user with a GET request
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if ($level[1] == 0 or $level[1] == 1) {
        //level 0 and 1 API

        //
        userExistsErr("root", $config['sqlRootPasswd'], "VirtualPass", $level[2]);
        $user = getUserData("root", $config['sqlRootPasswd'], "VirtualPass", $level[2]);
        $output = array(
            "sysID" => $user['sysID'],
            "firstName" => $user['firstName'],
            "lastName" => $user['lastName'],
            "ID" => $user['ID'],
            "email" => $user['email'],
            "misc" => json_decode($user['misc'])
        );
        echo json_encode($output);
        exit();
        //

    } elseif ((int) $level[1] == 2 and (int) $level[1] == 3) {
        // Level 2 and 3 API

        //

        //

    }
}
if ($_SERVER['REQUEST_METHOD'] == "PUT") {
    if ($level[1] == 0) {
    } elseif ($level[1] == 1) {
    } elseif ($level[1] == 2) {
    } elseif ($level[1] == 3) {
    }
}
if ($_SERVER['REQUEST_METHOD'] == "PATCH") {
    if ($level[1] == 0) {
    } elseif ($level[1] == 1) {
    } elseif ($level[1] == 2) {
    } elseif ($level[1] == 3) {
    }
}
if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
    if ($level[1] == 0) {
    } elseif ($level[1] == 1) {
    } elseif ($level[1] == 2) {
    } elseif ($level[1] == 3) {
    }
}
