<?php
/**
 * Data file.
 *
 * @link http://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017
 */

/**
 * Find all records.
 *
 * @return array Result
 */
function find_all() {
    return [
        [
            'title' => 'PHP manual',
            'url'   => 'http://php.net',
            'tags'  => [
                'PHP',
                'manual',
            ],
        ],
        [
            'title' => 'Silex',
            'url'   => 'http://silex.sensiolabs.org',
            'tags'  => [
                'PHP',
                'framework',
                'Silex',
            ],
        ],
        [
            'title' => 'Learn Git Branching',
            'url'   => 'http://learngitbranching.js.org',
            'tags'  => [
                'tools',
                'Git',
                'VCS',
                'tutorials',
            ],
        ],
        [
            'title' => 'PhpStorm',
            'url'  => 'https://www.jetbrains.com/phpstorm',
            'tags' => [
                'tools',
                'IDE',
                'PHP',
            ],
        ],
        [
            'title' => 'Twig',
            'url'  => 'http://twig.sensiolabs.org',
            'tags' => [
                'tools',
                'templates',
                'Twig',
                'Silex',
                'PHP',
            ],
        ],
    ];
}

/**
 * @param $id
 * @return array|mixed
 */

function find_one_by_id($id) {


    $bookmarks = find_all();
    $bookmark = [];

    if (isset($bookmarks[$id]) && count($bookmarks[$id])) {
        $bookmark = $bookmarks[$id];
    }


/*
    $bookmarks = find_all();
    $bookmark = [];

    if (isset($bookmarks) && count($bookmarks)) {
        foreach ($bookmarks as $key => $value) {
            if ($key == $id) {
                foreach ($value as $key2 => $value2) {
                    if ($key2 == 'tags') {
                        $bookmark[$key2] = [];
                        //foreach ($value2 as $key3 => $value3) $bookmark[$key3] = $value3;
                        //foreach ($value2 as $key3 => $value3)(
                        //    $key3 => $value3;
                        //);
                        //$iletagow = count($bookmarks[$key2]);
                        $tab = [];
                        //for($i =0;$i<count($bookmarks[$key]);i++){
                        foreach ($value2 as $i => $value3) {
                            $tab[$i] = $value3;
                        }
                        $bookmark[$key2] = $tab;
                    } else {
                        $bookmark[$key2] = $value2;
                    }
                }
            }
        }
    }
*/
    return $bookmark;
}