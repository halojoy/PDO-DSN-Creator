<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO Installation step 1</title>
    <link rel="stylesheet" type="text/css" href="install/css/install.css">
</head>
<body>

    <h2>PDO Installation step 1</h2>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
        <legend>Select Database</legend>
        <br>
        <select name="driver">
            <option value="sqlite" selected>SQLite</option>
            <option value="mysql">MySQL</option>
            <option value="pgsql">PostgreSQL</option>            
        </select>
        <input type="hidden" name="step" value="1">
        <br><br>
        <input type="submit" value="SUBMIT">
        </fieldset>
    </form>

</body>
</html>
