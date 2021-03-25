<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE DE CONTACT</title>
</head>
<body align=center>

<fieldset>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1>T ki ?</h1>
    Name : <br/><input type="text" name="name"><br/>
    Email : <br/><input type="text" name="email"><br/>
    WebSite : <br/><input type="text" name="website"><br/>
    Comment : <br/><textarea name="comment" rows="5" cols="40"></textarea><br/>
    <br/><br/>
    <h1>Saixse...</h1>
    <input type="radio" name="gender" value="female">Female<br/>
    <input type="radio" name="gender" value="male">Male<br/>
    <input type="radio" name="gender" value="Sebastien">Sebastien<br/>
    <input type="radio" name="gender" value="other">Other<br/>

    <input type="submit"/>
</form>
</fieldset>
    <?php
    
    if  ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['name'];
        if (empty($name)){
            echo "! Name is empty !";
        } else{
            print("<br/><br/>");
            echo "Name = " . $name;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        echo 'name = '.$_POST['name'] . '<br/>';
        echo 'email = '.$_POST['email'] . '<br/>';
        echo 'website = '.$_POST['website'] . '<br/>';
        echo 'comment = '.$_POST['comment'] . '<br/>';
        echo 'gender = '.$_POST['gender'] . '<br/>';
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