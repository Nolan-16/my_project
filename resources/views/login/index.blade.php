<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>

<body>

    <?php if ($valiables["isLoginActive"]) { ?>
        <a href="/login/unregister">ログアウト</a>
    <?php } else { ?>
    <h2>新規登録</h2>
    <form method="POST" action="/login/register">
        @csrf
        <div>
            ID : <input type="text" name="id">
        </div>
        <div>
            PW : <input type="text" name="password">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php } ?>
</body>

</html>
