<?php error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <input type="number" placeholder="h" name="hour">
        <input type="number" placeholder="m" name="minute">
        <input type="number" placeholder="s" name="second">
        <input type="submit" value="Start">
    </form>
    <?php
    try {
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        $second = $_POST['second'];
    } catch (Throwable $e) {
        echo "Welcome";
    }

    function countdown(){
        $count = "Timer";
        for ($i = 0; $i <= 10; $i++){
            $count = $count . $i;
            return $count;
        }
    }

        //try to append the isset functions::comma not functioning on keyboard
        if (isset($hour) && isset($minute) && isset($second)){
            $hour = (int)$hour * 60 * 60 ?? 0;
            $minute = (int)$minute * 60 ?? 0;
            $second = (int)$second ?? 0;
            $timeadd = 0;
            $timeadd = $hour + $minute + $second;
            $time = time() + $timeadd;
            // echo $time . "<br>";
            echo $timeadd;
            echo "<br>";
            // echo countdown();
            echo "<br>";
            // echo $minute;
            $countdown =  0;
            if (time() + 1){
                $timeadd--;
                echo $timeadd;
            }
            if (is_numeric($time)){
                setcookie("time", "", time() + $timeadd);
            }
        }
    ?>
</body>
</html>