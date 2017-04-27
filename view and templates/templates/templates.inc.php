<?php
/**
 * Templates support.
 *
 * @link http://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017
 */

/**
 * Render view.
 *
 * @param array  $view   View data
 * @param string $layout Layout file name
 */
function render($view, $layout = 'base') {
    $view['templates_dir'] = dirname(dirname(__FILE__)).'/templates';
    $view['template_ext'] = '.html.php';

    require_once $view['templates_dir'].'/'.$layout.$view['template_ext'];
}
