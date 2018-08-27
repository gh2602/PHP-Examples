<?php
if ($_POST) {
    echo '<pre>';
    echo(print_r($_POST, true));
    echo '</pre>';
    if (isset($_POST['action_button'])) {
        $submitted_array = array_keys($_POST['action_button']);
        echo($_POST['action_button'][$submitted_array[0]] . " " . $submitted_array[0]);
    }
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
    </select>
    <br>
    <input type="submit" value="submit me!" name="mainsubmit"/>

    <br/>
    <input type="image" src="im.bmp" name="sub"/>
    <br>
    <input type="submit" value="add" name="action_button[01]"/>
    <input type="submit" value="edit" name="action_button[01]"/>
    <br>
    <input type="submit" value="add" name="action_button[02]"/>
    <input type="submit" value="edit" name="action_button[02]"/>
</form>