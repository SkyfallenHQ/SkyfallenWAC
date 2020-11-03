<?php


namespace SkyfallenCodeLibrary;


class SkyfallenTokenExchanger
{
    public static function deleteToken($link,$token){
        $sql = "DELETE FROM token WHERE token='".$token."'";
        mysqli_query($link,$sql);
    }
    public static function createToken($link,$username,$command = "LOGIN",$permission = "LO",$valid = 60,$creator = "TokenExchangerLibrary"){
        $token = md5(uniqid(rand(), true));
        $expire = time() + $valid;
        $sql = "INSERT INTO token (token,username,command,permission,creation,expire,creator) VALUES ('".$token."','".$username."','".$command."','".$permission."','".time()."','".$expire."','".$creator."')";
        mysqli_query($link,$sql);
        return $token;
    }
}