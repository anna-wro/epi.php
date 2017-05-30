<?php
/**
 *
 */
?>
<?php if (isset($view['bookmark']) && count($view['bookmark'])) : ?>

    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>URL</th>
            <th>tag</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $view['bookmark']['title']; ?>
                </td>
                <td>
                    <?php echo $view['bookmark']['url']; ?>
                </td>
                <td>
                    <?php foreach ($view['bookmark']['tags'] as $tag) : ?>
                            <?php echo $tag; ?><br>
                    <?php endforeach; ?>
                </td>
            </tr>
        </tbody>
    </table>
<?php else : ?>
    <p>
        Bookmarks not found!
    </p>
<?php endif; ?>

