<?php
/**
 *
 */
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>
            <?php echo $view['title']; ?>
        </title>
    </head>
    <body>
        <?php if (!file_exists($view['templates_dir'].'/'.$view['template'].$view['template_ext'])) : ?>
            <?php $view['template'] = '404'; ?>
        <?php endif; ?>
        <?php require_once  $view['templates_dir'].'/'.$view['template'].$view['template_ext']; ?>
    </body>
</html>