<?php

use Unity\Framework\AppManager;

require '../vendor/autoload.php';

$app = AppManager::make();

$providers = require '../sys/providers.php';
$app->setServiceProviders($providers);

$config = $app->get('configManager')->build();

echo $config->get('database.type');