<!DOCTYPE html>
<html>
    <body>
        <?= htmlspecialchars($_POST['search'])?>
        <?php
            $server = "localhost";
            $username = "root";
            $password = "g00gle123";
            $database = "g00gle";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            $ip = $_SERVER['REMOTE_ADDR'];
            $res = $_POST['search'];

            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from ip_add;";
            
            $sql = "INSERT INTO search_results (search, ip_add)
            VALUES ('$res', '$ip')";
            $result = mysqli_query($conn, $sql);

            foreach ($result as $row){
                echo "id: {$row['id']} | Search: {$row['search']} | IP Address: {$row['ip_add']}</br>";
            }
        ?>
    </head>
    </body>
</html>