<?php

/*one way to print string*/
echo 'Hello World';
echo "<br>";
$greeting = "Hi!";
$name = "Sebastian Sulbaran";
echo "<br>";

/* Second way to print a string*/
echo "$greeting, $name";
echo "<br>";

/* Third way to print a string */
echo "Hi!, " . $name;
echo "<br>";

/*Fourth way optional using brackets*/
echo "{$greeting}, {$name}";
