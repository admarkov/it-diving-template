<?php

use SubStalker\SubStalker;

require_once 'vendor/autoload.php';

main();

function main() {
  $app = new SubStalker(Config::GROUP_ID, Config::ACCESS_TOKEN);
  $app->listen();
}
