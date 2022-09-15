<?php declare(strict_types=1);
//To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file
 // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days"); 
// since strict is enabled and "5 days" is not an integer, an error will be thrown     
?>