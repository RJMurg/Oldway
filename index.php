<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I&C Demo Webapp</title>
    <link href="style.css?c=<?php echo time();?>" rel=stylesheet> <!--Thanks Derv for this!-->
</head>

<body>
    <script>
        funtion incrementClicks(){
            
        }
    </script>

    <?php
        // Gives relevant time details
        $hour = date("G");
        intval($hour);

        if($hour < 12 && $hour >= 6){
            echo "<h1 class='title large nogap'>Good Morning";

            if($_SESSION["name"] != ""){
                echo ", ".$_SESSION["name"];
            }

            echo "!</h1>";
        }
        elseif($hour >= 12 && $hour < 17){
            echo "<h1 class='title large nogap'>Good Afternoon";

            if($_SESSION["name"] != ""){
                echo ", ".$_SESSION["name"];
            }

            echo "!</h1>";
        }
        elseif($hour >= 17 && $hour < 20){
            echo "<h1 class='title large nogap'>Good Evening";

            if($_SESSION["name"] != ""){
                echo ", ".$_SESSION["name"];
            }

            echo "!</h1>";
        }
        elseif($hour >= 20 && $hour < 6){
            echo "<h1 class='title large nogap'>Good Night";

            if($_SESSION["name"] != ""){
                echo ", ".$_SESSION["name"];
            }

            echo "!</h1>";
        }
        else{
            echo $hour;
        }
    ?>

    <h2 class="subtitle medium nogap">Welcome to the demo one-page app.</h2>

    <?php
    if($_SESSION["error_msg"] != ""){
        echo "<div class='toast'>";
        echo $_SESSION["error_msg"];
        echo "</div>";

        unset($_SESSION["error_msg"]);
    }
    ?>

    <?php
    if($_SESSION["name"] != ""){
        require_once 'logout_form.html';
    }
    else{
        require_once 'login_form.html';
    }
    ?>
</body>

</html>