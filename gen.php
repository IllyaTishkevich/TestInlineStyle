<?php
$content = '';
$selector = '';
$classes = '';

for ($i = 0; $i < 101; $i++) {
    $content .= ".a".$i." { background-color: yellow }". PHP_EOL;
    $selector .= ".a".$i;
    $classes .= "a".$i." ";
}

$content .= $selector." { background-color: yellow }". PHP_EOL;
file_put_contents('style.css', $content);
print_r($classes);