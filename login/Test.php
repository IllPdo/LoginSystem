<?php
$name = "       JANE_DOE@computerscience2026!!!    ";

echo str_replace("JANE_DOE", "jane.doe", trim(str_replace("@","_", trim(str_replace("computerscience2026!!!","cs2026", $name)))));

?>
