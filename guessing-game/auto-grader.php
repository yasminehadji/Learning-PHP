<html>
<head>
<title>Guessing Game for Yasmine Hadij 8063281e</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php
$number=25;
if (!isset($_GET['guess'])){
    echo "Missing guess parameter";
}elseif(strlen($_GET['guess'])<1){
    echo "Your guess is too short";
}elseif(!is_numeric($_GET['guess'])){
    echo "Your guess is not a number";
}elseif($_GET['guess']<$number){
    echo "Your guess is too low";
}elseif($_GET['guess']>$number){
    echo "Your guess is too high";
}elseif($_GET['guess']==$number) {
    echo  "Congratulations - You are right";
}
?>
</p>
</body>
</html>