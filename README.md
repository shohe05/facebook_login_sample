Facebook Login
=====================

### FBにアプリケーションを登録
- 参考URL: http://www.msng.info/archives/2012/10/facebook-login-with-php.php

### index.phpを編集

#### APP IDとAPP SECRETを追加(index.php)
```php
$config = array(
    'appId'  => 'YOUR APP ID',
    'secret' => 'YOUR APP SECRET'
);
```

#### ログアウト後に遷移するページのURLを指定

```php
$params = array(
        'next' => 'AFTER LOGOUT URL', // after logging out, redirect to this link.
        'access_token' => $facebook->getAccessToken(),
    );
```
