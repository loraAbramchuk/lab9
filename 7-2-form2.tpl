<form action="" method="POST" enctype="multipart/form-data">
    <table width="400" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr>
            <td width="200">Имя</td>
            <td><input type="text" size="20" name="Name"></td>

        </tr>
        <tr><td>сообщение</td><td><textarea rows="10" cols="30" name="Message"></textarea> </td></tr>
        <tr>
            <td width="300">Добавьте картинку</td>
            <td><p><input type="file" size="20" name="ufile" multiple accept=""></td>
        </tr>
        <tr><td colspan="2" align="center"><input type="submit" name="send" value="Отправить!" /> </td> </tr>
        <tr><td height="50"></td><td></td> </tr>

        <tr><td colspan="2">{COMMENT}</td></tr>

        <tr><td colspan="2">{COMMENT3}</td></tr>

    </table>



</form>