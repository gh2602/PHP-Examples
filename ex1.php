<?php
if ($_POST) {
    echo '<pre>';
    echo(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Name: <input type="text" name="personal[name]"/><br/>
    Email: <input type="text" name="personal[email]"/><br/>
    Beer: <br/>
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br/>
    <input type="image" src="im.bmp" name="sub"/>

    <input type="submit" value="submit me!"/>
</form>