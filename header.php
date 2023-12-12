<?php
    session_start();
    if(isset($_SESSION["userid"]))
        $userid = $_SESSION["userid"];
    else{
        $userid = "";
    }
    if(isset($_SESSION["username"]))
        $username = $_SESSION["username"];
    else{
        $username = "";
    }
    if(isset($_SESSION["userlevel"]))
        $userlevel = $_SESSION["userlevel"];
    else{
        $userlevel = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_www.css">
</head>
<body>
<header>
    <h3 class="logo">
        <a href="index.php">계명문화대학교 컴퓨터과</a>
    </h3>
    <ul class="top_menu">
        <?php
        if(!$userid){
            echo "<li>홈페이지에 오신 것을 환영합니다~~~</li>";
        }
        else{
            $logged = $username."(Level:".$userlevel.")님 환영합니다.";
            }
        ?>
    </ul>
    <ul class="main_menu">
        <?php
        if(!$userid){
        ?>
        <li><a href="index.php?type=form">회원 가입</a></li>
        <li><a href="index.php?type=login_form">로그인</a></li>
        <?php
         } else{
         ?>
        <li><a href="logout.php">로그아웃</a></li>
        <li><a href="index.php?type=modify_form">정보 수정</a></li>
         <?php
         }
         ?>
         <li><a href="index.php?type=list&table=_notice">공지 게시판</a></li>
         <li><a href="index.php?type=list&table=_qna">QNA 게시판</a></li>
         <li><a href="index.php?type=list&table=_youtube">YOUTUBE 게시판</a></li>
</header>
    </ul>
</html>