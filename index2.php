<h1>Récupération du GET</h1>
<h2>Liens exemple</2>
<ul>
    <li><a href="?q=">q vide</a></li>
    <li><a href="?q=Hello world &repeat=1">Hello !</a></li>
</ul>
<h2>Valeur du paramètre q (exemple)</h2>
<ul>
    <li>Valeur :<?php echo $_GET["q"]?></li>
    <li>Valeur :<?php echo $_GET["repeat"]??0 ?></li>
</ul>