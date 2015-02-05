<?php
require_once 'class/deal.php';
$dealer = new Deal(TRUE, TRUE);
//echo PHP_EOL;
echo 'Dealed card number:      ' . $dealer->getDealedCardNr().PHP_EOL;
echo 'Remaining cards on deck: ' . $dealer->countDeck().PHP_EOL;
