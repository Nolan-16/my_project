<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    <link rel="stylesheet" href="/css/build/login/index.css">
</head>

<body>
    <main id="login">
    <?php if ($variables["isLoginActive"]) { ?>
        <h2 class="title">ログイン状態</h2>
        <a href="/login/unregister">ログアウト</a>
    <?php } else { ?>
    <h2 class="title">新規登録</h2>
    <form ref="registerForm" method="POST" action="/login/register">
        @csrf
        <div>
            ID : <input type="text" v-model="id" name="id">
        </div>
        <div>
            PW : <input type="text" v-model="password" name="password">
        </div>
        <div>
            <button type="button" v-on:click="registerSubmit">送信</button>
        </div>
    </form>
    <?php } ?>

    <h2 class="title">ログイン</h2>
    <form ref="loginForm" method="POST" action="/login/sign_in">
        @csrf
        <div>
            ID : <input type="text" v-model="id" name="id">
        </div>
        <div>
            PW : <input type="text" v-model="password" name="password">
        </div>
        <div>
            <button type="button" v-on:click="loginSubmit">送信</button>
        </div>
    </form>
    </main>
    <script src="/js/build/login/index.js"></script>
</body>

</html>
