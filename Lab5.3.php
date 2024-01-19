<?php
$string="<ul>
<li>Coffee</li>
<li>Tea</li>
<li>Milk</li>
</ul>";

preg_match_all('/<li>(.*?)<\/li>/', $string, $matches);

foreach ($matches[1] as $text){
    echo $text . "\n";
}
?>