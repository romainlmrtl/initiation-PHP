<form method="post" action="index.php?p=200">
    <input type="number" name="P">
</form>
<a href="?p=55">page55</a>
<p>
<?php
//Récupération params du get

//$_GET 
//Les informations passées dans l'url

//P=1 & CLIENT=Bob
//$_GET['P']
//$_GET['CLIENT']
echo $_REQUEST['P']??'Pas de valeur';
?>
</p>
<?php
var_dump($_POST);
var_dump($_GET);
var_dump($_REQUEST);