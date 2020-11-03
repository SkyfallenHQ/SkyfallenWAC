<?php
require_once "../SkyfallenCodeLib/SkyfallenTokenExchanger.php";
require_once "../SWAC_Config.php";
session_name("DeveloperIDSession");
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /");
    exit;
}
if(isset($_GET["app"])){
    if($_GET["app"] == "1"){
        $token = SkyfallenCodeLibrary\SkyfallenTokenExchanger::createToken($tokenlink,$_SESSION["username"]);
        header("location: https://updatesconsole.theskyfallen.com/?swac_tokenlogin=".$token);
    }
    if($_GET["app"] == "2"){
        $token = SkyfallenCodeLibrary\SkyfallenTokenExchanger::createToken($tokenlink,$_SESSION["username"]);
        header("location: https://appcenter.theskyfallen.com/?swac_tokenlogin=".$token);
    }
    if($_GET["app"] == "3"){
        $token = SkyfallenCodeLibrary\SkyfallenTokenExchanger::createToken($tokenlink,$_SESSION["username"]);
        header("location: https://id.theskyfallen.com/?swac_tokenlogin=".$token);
    }
    if($_GET["app"] == "4"){
        $token = SkyfallenCodeLibrary\SkyfallenTokenExchanger::createToken($tokenlink,$_SESSION["username"]);
        header("location: https://giris.kucukrobotcuk.com/auth/?redirect_to=https%3A%2F%2Fgiris.kucukrobotcuk.com%2F%3Foauth%3Dauthorize%26response_type%3Dcode%26client_id%3DNmwPmeMukgWsttcdHMyaJzTJWM8sAdIPPldmZM7j%26client_secret%3DG2FBFH9ZI2ADafuqJo9t0bAJhBtFf1lrbhEosuf8%26redirect_uri%3Dhttps%253A%252F%252Fwww.kucukrobotcuk.com%252F%253Fauth%253Dsso%26state%3Dhttps%253A%252F%252Fwww.kucukrobotcuk.com&swac_tokenlogin=".$token);
    }
    if($_GET["app"] == "5"){
        $token = SkyfallenCodeLibrary\SkyfallenTokenExchanger::createToken($tokenlink,$_SESSION["username"]);
        header("location: https://theskyfallen.company/?swac_logintoken=".$token);
    }
    if($_GET["app"] == "6"){
        $token = SkyfallenCodeLibrary\SkyfallenTokenExchanger::createToken($tokenlink,$_SESSION["username"]);
        header("location: https://login.theskyfallen.com/auth/?redirect_to=https%3A%2F%2Flogin.theskyfallen.com%2F%3Foauth%3Dauthorize%26response_type%3Dcode%26client_id%3D3GqQ6hyGQeyoj2UQ0psXsKKQUJZ1sYXX6mKzOgh7%26client_secret%3DZ6iltHoj2dYLoJYo3Vckxn9T3lSDgdJiIc9At5BxI%26redirect_uri%3Dhttps%253A%252F%252Fwww.theskyfallen.com%252F%253Fauth%253Dsso%26state%3Dhttps%253A%252F%252Fwww.theskyfallen.com&swac_tokenlogin=".$token);
    }
    exit;
}
?>
<html>
    <head>
        <title>Skyfallen Web App Center</title> 
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        <div class="heading-box">
            <h1 class="heading-txt">Skyfallen Web App Center</h1>
            <br>
            <h2 class="overview-txt"> Welcome, <?= $_SESSION["username"] ?> | <a href="/?logout=true">Log out</a></h2>
        </div>
        <div class="app-picker">
            <div class="row">
                <a href="?app=1" id="appone" onclick="fadeinoutapp('#appone')">
                <div class="box row">
                    <img class="appimg" src="image/SkyfallenServiceLogos-01.png">
                </div>
                </a>
                <a href="?app=2" id="apptwo" onclick="fadeinoutapp('#apptwo')">
                <div class="box row">
                    <img class="appimg" src="image/SkyfallenServiceLogos-02.png">
                </div>
                </a>
                <a href="?app=3" id="appthree" onclick="fadeinoutapp('#appthree')">
                <div class="box row">
                    <img class="appimg" src="image/SkyfallenServiceLogos-03.png">
                </div>
                </a>
            </div>
            <div class="row">
                <a href="?app=4" id="appfour" onclick="fadeinoutapp('#appfour')">
                <div class="box row">
                    <img class="appimg" src="image/SkyfallenServiceLogos-04.png">
                </div>
                </a>
                <a href="?app=5" id="appfive" onclick="fadeinoutapp('#appfive')">
                <div class="box row">
                    <img class="appimg" src="image/SkyfallenServiceLogos-05.png">
                </div>
                </a>
                <a href="?app=6" id="appsix" onclick="fadeinoutapp('#appsix')">
                <div class="box row">
                    <img class="appimg" src="image/SkyfallenServiceLogos-06.png">
                </div>
                </a>
            </div>
        </div>
    </body>
</html>