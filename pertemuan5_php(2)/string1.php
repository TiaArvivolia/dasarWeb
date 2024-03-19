<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Accusamus inventore velit sint iusto dolor dolorum distinctio omnis in 
    esse. Quibusdam perspiciatis inventore sint! Est qui minima id 
    voluptates ipsam in!";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";