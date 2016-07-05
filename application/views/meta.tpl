<html>
<head>
    <meta charset="utf-8">
    <title>Тестовое задание "ЕвроСофт" Артамонов А.А.</title>
</head>
<body>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!--Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/assets/style.css">

<div class="main">
    <div class="header">
        <img src="{$BASE_URL}assets/images/rocket.png">
        <h1>Тестовое задание "ЕвроСофт"</h1>
    </div>


    <div class="navigation">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="{$BASE_URL}"><span class="glyphicon glyphicon-home"></span>  Главная</a></li>
            <li role="presentation"><a href="{$BASE_URL}images/upload/"><span class="glyphicon glyphicon-cloud-upload"></span>  Загрузка</a></li>
            {if isset($smarty.session.login) && false}
                <li role="presentation"><a href="{$BASE_URL}/images/index?user={$smarty.session.user_id}"><span class="glyphicon glyphicon-list"></span> Мои изображения</a></li>
                <li role="presentation">    <a href="{$BASE_URL}auth/login"><span class="glyphicon glyphicon-home"></span> Выход из системы</a></li>
                <li role="presentation">    <a href="{$BASE_URL}auth/login"><span class="glyphicon glyphicon-home"></span> Вход в систему</a></li>
                {else}
            {/if}



        </ul>
    </div>
    <div class="content">







