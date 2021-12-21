<!DOCTYPE html>
<html>
    <body>
        <?= htmlspecialchars($_POST['search'])?>
        <?php
            $server = "localhost";
            $username = "maskedelfrey";
            $password = "g00gle123";
            $database = "g00gle";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from ip_add;";
            $result = mysqli_query($conn, $sql);

            $ip = $_SERVER['REMOTE_ADDR'];
            echo $ip;
        ?>
    </head>
    </body>
</html>