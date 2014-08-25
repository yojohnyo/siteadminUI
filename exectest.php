<?php

$directory = "C:\Users\John\Documents\acquia_desktop\acquia-drupal-7.30.35.6147";
$drushcmd="drush @loc.acquia-drupal-7-30-35-614 cron";

//chdir($directory);

//print getcwd();
print exec($drushcmd, $output);
var_dump($output);

?>