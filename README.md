facebook_login_sample
=====================

## アプリケーションを登録
- 参考URL: http://www.msng.info/archives/2012/10/facebook-login-with-php.php

## APP IDとAPP SECRETを追加
```
$config = array(
    'appId'  => 'YOUR APP ID',
    'secret' => 'YOUR APP SECRET'
);
```

## ログアウト後に遷移するページのリンクを指定

```
$params = array(
        'next' => 'AFTER LOGOUT URL', // after logging out, redirect to this link.
        'access_token' => $facebook->getAccessToken(),
    );
```
