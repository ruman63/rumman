<?php

return [
    'build' => [
        'destination' => 'dist',
    ],
    'baseUrl' => '',
    'active' => function ($page, $selection) {
        return str_contains($page->getPath(), $selection) ? 'active' : '';
    },
    'author' => 'Ruman Saleem',
    'website' => 'http://rummansaleem.me',
    'production' => false,
    'collections' => [
        'skills' => [
            'sort' => 'order',
        ],
        'posts' => [
            'path' => 'blog/{filename}',
        ],
    ],
];
