<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE DE CONTACT POUR ME CONTACTER !</title>
</head>
<body align=center>
<fieldset>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name : <input type="text" name="fname">
    <br/><br/>
    <input type="submit"/>
</form>
</fieldset>
    <?php
    if  ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['fname'];
        if (empty($name)){
            echo "! Name is empty !";
        } else{
            print("<br/><br/>");
            echo "Name = " . $name;
        }
    }



    /*
    echo 'Le programme demarre....';
    $x = 75;
    $p = ' zocolat';
    $z = $x.$p;
    echo $z;
    echo "\n" ;

    $x = 75;
    $y = 25;
    $a = $x + $y;
    echo $a;
    echo "\n" ;

    function addition(){
        $a = $x + $y;
    }
    addition();
    echo $a;
    echo "\n" ;

    $x = 75;
    $y = 25;
    function addition(){
        $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $z;

    print($_SERVER['PHP_SELF']);
    print("<br/><br/>");
    print($_SERVER['SERVER_NAME']);
    print("<br/><br/>");
    print($_SERVER['HTTP_HOST']);
    print("<br/><br/>");
    print($_SERVER['HTTP_USER_AGENT']);
    print("<br/><br/>");
    print($_SERVER['SCRIPT_NAME']);
*/
    ?>

</body>
</html>