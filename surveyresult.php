<!DOCTYPE html>
<html>
    <head>
        <title>surveyresult.php</title>
    </head>
    <body>
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>

        <div>Hi <?php echo htmlspecialchars($_POST['name']); ?>.
        </div>
    </body>
</html>