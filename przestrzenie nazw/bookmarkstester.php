<?php

require_once dirname(__FILE__).'/inc/debug.inc.php';
require_once dirname(__FILE__).'/Data/autoload.php';

use Data\Arr\Bookmarks;

$bookmarksManager = new Bookmarks();
$bookmarks = $bookmarksManager->findAll();
$bookmark = $bookmarksManager->findOneById(1);

var_dump($bookmarks);
var_dump($bookmark);
