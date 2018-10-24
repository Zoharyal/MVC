<?php
# cli-config.php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'entityManager.php']);

use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);