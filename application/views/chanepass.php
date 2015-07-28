<form method="post" accept-charset="utf-8">
    <?foreach ($data as $key => $value):?>
        <span class="label label-important"><?= myErrors($key,$value);?></span>
        <br/>
    <? endforeach;?>
    <label for="username">Старый пароль:</label>
    <input id="password_old" type="password" name="password_old" />
    <br />    
    <label for="password">Новый пароль:</label>
    <input id="password_new" type="password" name="password_new" />
     <br />    
    <label for="password_confirm">Подтвердить пароль:</label>
    <input id="password_confirm" type="password" name="password_confirm" />
    <br />    
    <button type="submit">Изменить</button>
</form> 
<?
function myErrors($key,$value){
    switch ($key) {
        case 'password_old':
            return "Старый пароль ".$value;
            break;
        case 'password_new':
            return "Новый пароль ".$value;
            break;
        case 'password_confirm':
            return "Подтвердить пароль ".$value;
            break;
        case 'password_confirm':
            return "Подтвердить пароль ".$value;
            break;
    }
}
?>