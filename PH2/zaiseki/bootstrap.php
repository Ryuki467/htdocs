<?php

require 'core/ClassLoader.php';

$loader = new ClassLoader();
//dirname 親ディクトリのパスを返す
$loader->registerDir(dirname(__FILE__).'/core');
$loader->registerDir(dirname(__FILE__).'/models');
$loader->register();
