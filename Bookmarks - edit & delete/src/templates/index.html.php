<?php
/**
 *
 */
?>
    <?php if (isset($view['bookmarks']) && count($view['bookmarks'])) : ?>

        <table>
            <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>tag</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($view['bookmarks'] as $bookmark) : ?>
                <tr>
                    <td>
                        <?php echo $bookmark['title']; ?>
                    </td>
                    <td>
                        <?php echo $bookmark['url']; ?>
                    </td>
                    <td>
                        <?php foreach ($bookmark['tags'] as $tag) : ?>
                            <?php echo $tag; ?>
                        <?php endforeach; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>
            Bookmarks not found!
        </p>
    <?php endif; ?>

