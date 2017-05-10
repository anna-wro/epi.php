<?php
/**
 * Routing and controllers.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */

use Controller\HelloController;
use Controller\BookmarkController;

$app->mount('/hello', new HelloController());
$app->mount('/bookmark', new BookmarkController());