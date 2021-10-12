<!DOCTYPE html>
<html>
    <head>
        <title>products.php</title>
    </head>
    <body>
        <div>
            <p>You have requested <?= htmlspecialchars($_POST['quantity'])?> <?= htmlspecialchars($_POST['product'])?>(s).</p>
            </p>  
        </div>
    </body>
</html>