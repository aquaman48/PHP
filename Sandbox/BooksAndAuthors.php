<?php
$Books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
$Authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
$RealNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");
for ($i = 0; $i < count($Books); ++$i)
echo "<p>The real name of {$Authors[$i]}, ".
"the author of \"{$Books[$i]}\", ".
"is {$RealNames[$i]}.</p>";

for ($i = 0; $i < count($Books); ++$i)
echo "<p>The title \"{$Books[$i]}\" contains " .
strlen($Books[$i]) . " characters and " .
str_word_count($Books[$i]) . " words.</p>";
?>