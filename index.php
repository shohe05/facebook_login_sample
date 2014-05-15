<?php
require_once("src/facebook.php");

$config = array(
    'appId'  => 'YOUR APP ID',
    'secret' => 'YOUR APP SECRET'
);

$facebook = new Facebook($config);
//もしユーザがログインしていたら
if ($facebook->getUser()) {
    //ユーザ情報を取得
    $user = $facebook->api('/me');
    //ユーザ情報を出力
    echo '<img src="https://graph.facebook.com/' . $user['id'] . '/picture" alt="">';
    echo "こんにちは。" . $user['name'] . "さん。";

    $params = array(
        'next' => 'AFTER LOGOUT URL', // after logging out, redirect to this link.
        'access_token' => $facebook->getAccessToken(),
    );
    $facebook->destroySession();
    echo "<a href='" . $facebook->getLogoutUrl($params) . "'>ログアウト</a>";
} else {
    //ログイン用のリンクを出力
    echo "<a href='". $facebook->getLoginUrl() ."'>facebookでログイン</a>";
}
