<?php
require_once "configuracionSchema.php";
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
?>
