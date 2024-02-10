<?php
// db 연결
include "./inc/dbconfig.php";
include "./inc/member.php";

// 아이디 중복 테스트

$id = "kingchobo";

$mem = new Member($db);

if ($mem->id_exists($id)) {
    echo "아이디가 존재 합니다";
} else {
    echo "사용할 수 있는 아이디 입니다.";
}
