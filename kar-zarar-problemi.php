<?php
// kar ve zarar problemi
// yapım:sefa sayğan
$maliyet=100;
$indveyakar=20;
 
$islem=$maliyet*$indveyakar/100;
echo "İndirimli Satışı: ".($maliyet-$islem);
echo "<br>";
echo "Karlı Satışı: ".($maliyet+$islem);
echo "<br>";
echo "İndirimli satıştan %20 karlı satış: ".($maliyet-$islem)*($maliyet+$islem)/100;
 
?>