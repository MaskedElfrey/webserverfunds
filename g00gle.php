<<!DOCTYPE html>
<html>
    <body>
        <?php
            superglobal $_SERVER['REMOTE_ADDR']
        ?>
        <?= htmlspecialchars($_POST['opinion'])?>
    </body>
</html>