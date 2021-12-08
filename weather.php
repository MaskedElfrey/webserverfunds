<!DOCTYPE html>
<html>
    <body>
        <p>Results:<br>
            <?php
                $raw = `./bme280`;
                $deserialized = json_decode($raw);
            
                if(isset($_POST['var1']))
                {
                    echo "Temperature: {$deserialized->temperature}<br/>";
                }   

                if(isset($_POST['var2']))
                {
                    echo "Pressure: {$deserialized->pressure}<br/>";
                } 

                if(isset($_POST['var3']))
                {
                    echo "Altitude: {$deserialized->altitude}<br/>";
                }   
            ?>
        </p>
        <div>
        <a href="weather.html"> Return</a>
        </div>
    </body>
</html>