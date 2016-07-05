
<style>

</style>

<form action="{$BASE_URL}auth/loginpost" method="post" class="center" style="width: 300px">
    <input class="form-control interval" type="text" name="login">
    <input class="form-control interval" type="password" name="password">

    <div class="center">
        <input type="submit" class="btn btn-primary interval" value="Войти в систему">
        <div class="interval">
        <a style="font-size: 10px;" class="center" href="{$BASE_URL}auth/register">Cоздать профиль</a>
        </div>
    </div>
</form>