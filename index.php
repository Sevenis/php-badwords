<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza
e sostituire la badword passata in GET con tre *. -->


<?php

$text = "Odi et amo. Quare id faciam, fortasse requiris. Nescio, sed fieri sentio et excrucior.";
$badword = $_GET['parola'];

$fixword = str_replace($badword, '***', $text);
$length = strlen($text);
echo $fixword . ' - ';
echo '' . 'Lunghezza stringa: ' . $length;
 ?>
