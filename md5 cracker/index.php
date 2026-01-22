
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">    
        <title>md5 cracker</title>
       
</head>
<body>
              <h1><strong>MD5 cracker</strong></h1>
  <p>This application takes an MD5 hash of a two-character lower case string and attempts to hash all two-character combinations to determine the original two characters.</p>
  <p> Debug output: </p>
<?php

//on gere les cas , si y a pas de parametre
//si parametre present mais chaine vide 
//si preesnt et chaine non vide 
if(!isset($_GET['md5'])){
  echo "Missing md5 parameter";
}elseif (strlen($_GET['md5'])<1){
  echo "Parameter too short";
}else {
   $start=microtime(true); //le temps du debut des tentatives
   $cmp=0; //compteur des tentatives , imprimer les 15 premieres 
   $trouve=false; 
   $res="";
   echo "<pre>";
for ($i=0;$i<10000;$i++){
  //ps md5 est une methode de hachage 
  $pin=str_pad($i,4,"0",STR_PAD_LEFT); //la fonction str_pad complete les vide jsq une taille donnée , puis on specifie le coté de l ajout ici a gauche et transforme l entier en une chaine 
  
  $check=hash('md5',$pin);
  if ($cmp <15){
  echo $check. "  ". $pin . "\n"; // balise br pour sauter la ligne 
  $cmp++;
  }
  if ($check==$_GET['md5']){ // on compare le hash donné et le hash calculé 
    $trouve=true;
    $res=$pin; // on stock le code pin 
    break;
  }
}
echo "</pre>";
$end=microtime(true); //temps de fin 
$time_spent=$end-$start; // le temps d execution 
echo "Elapsed time :".$time_spent ."<br>";
if ($trouve==true){
   echo "PIN : ".$res;
} else {
echo "PIN : Not found";
}
}
?>
<form action="index.php" method="get">
<input type="text" name="md5" size="40">
<button type="submit">crack md5</button> 
</form>
</body>
</html>