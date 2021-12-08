<!DOCTYPE html>
<html>
    <head>
        <title>surveyresult.php</title>
    </head>
    <body>
        <div>
            <h1>Survey Results</h1>
            <p>Hi <?= htmlspecialchars($_POST['name'])?>.</p>
            <p>You chose <?= htmlspecialchars($_POST['play_ball'])?> to playing basketball.</p>
            <p>frequency: <?= htmlspecialchars($_POST['time'])?></p> 
            <p>Your shoe preference(s):<br>
                <?php
                    if(isset($_POST['brand1']))
                    {
                        echo "Nike<br/>";
                    }   

                    if(isset($_POST['brand2']))
                    {
                        echo "Adidas<br/>";
                    } 

                    if(isset($_POST['brand3']))
                    {
                        echo "Jordan<br/>";
                    }  

                    if(isset($_POST['brand4']))
                    {
                        echo "Puma<br/>";
                    } 

                    if(isset($_POST['brand5']))
                    {
                        echo "Reebok<br/>";
                    }  
                ?>
            </p>

            <p>Your prefered player: <?= htmlspecialchars($_POST['player'])?></p>

            <p>Your opinion about Basketball: <br>
                <?= htmlspecialchars($_POST['opinion'])?>
            </p>  
        </div>
        <div>
            <a href="index.html"> Return to Homepage</a>
            <a href="nbasurvey.html"> Return to Survey</a>
        </div>
    </body>
</html>