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

//$template = 'view';
//$title = 'bookmark';

$view = [];
$view['title'] = 'bookmark';
$view['template'] = 'view';

$view['bookmarks'] = find_all();


if (isset($_GET['id'])
    && $_GET['id'] != ''
    && ctype_digit((string) $_GET['id'])
    ) {
    $view['bookmark'] = find_one_by_id($_GET['id']);
} else {
    $view['bookmark'] = [];
 }

render($view);
//require_once dirname(__FILE__).'/templates/base.html.php';