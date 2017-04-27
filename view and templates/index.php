<?php
/**
 * View all bookmarks.
 *
 * @link http://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017
 */
require_once dirname(__FILE__).'/inc/debug.inc.php';
require_once dirname(__FILE__).'/templates/templates.inc.php';
require_once dirname(__FILE__).'/inc/bookmarks.inc.php';
/*
$template = 'index';
$title = 'bookmarks';
$bookmarks = find_all();
*/

$view = [];
$view['title'] = 'bookmarks';
$view['template'] = 'index';

$view['bookmarks'] = find_all();

//require_once dirname(__FILE__).'/templates/base.html.php';
render($view);
?>
