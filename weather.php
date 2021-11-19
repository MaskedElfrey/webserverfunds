<!DOCTYPE html>
<html>
    <body>
        <p>Here are the results:<br>
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
    </body>
</html>