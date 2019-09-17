<?php
echo "ik ga twee getallen met elkaar vermedigvuldigen
eerste getal?";

$nummer1 = readline(":");
readline_add_history($nummer1);

print("tweede getal?");
$nummer2 = readline(":");
readline_add_history($nummer2);

print_r("uw resultaat is:") && print_r($nummer1 * $nummer2);

