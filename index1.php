<?php date_default_timezone_set('Europe/Paris'); ?>

<h1>DU HTML</h1>
<p>Paragraphe</p>
<h1>DU PHP</h1>
<p><?php
    $date=date ("D d M Y");    
    echo "Hello world <br>";
    echo "Nous somme le <b>{$date}</b> et aujourd'hui il fait beau.</b>";
?>
</p>