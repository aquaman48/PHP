<?php
$FirstName = "Don";
$SecondName = "Dan";
echo "<p>The names \"$FirstName\" and \"$SecondName\"
 have " . similar_text($FirstName, $SecondName) .
" characters in common.</p>";
echo "<p>You must change " . levenshtein($FirstName,
$SecondName). " character(s) to make the names
\"$FirstName\" and \"$SecondName\" the same.</p>";


?>