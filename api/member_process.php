<?php

// db 연결
include "../inc/dbconfig.php";
include "../inc/member.php";

// 아이디 중복 테스트

$mem = new Member($db);

$id = $_POST["id"];

if ($_POST["mode"] == "id_check") {
    if ($mem->id_exists($id)) {
        // echo "아이디가 존재 합니다";
        $arr = ['result' => 'fail'];
        $json = json_encode($arr); //arr을 json 포맷을 바꾼다. {"result":"fail"}
        die($json);

    } else {
        // echo "사용할 수 있는 아이디 입니다.";
        die(json_encode(['result' => 'success']));
    }
}
