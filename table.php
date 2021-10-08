<!DOCTYPE html>
<html>
    <body>
        <?php
            $server = "localhost";
            $username = "maskedelfrey";
            $password = "Bloodtatoo108";
            $database = "basketball";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if(!$conn) 
            {
                die("Connection failed: ".mysqli_connect_error());
            }

            $sql = "select * from player;";
            $result = mysqli_query($conn, $sql);

            foreach ($result as $row){
                echo "id: {$row['id']} | Name: {$row['name']} | Position: {$row['position']} | Age: {$row['age']}</br>";
            }
        ?>
    </body>
</html>