<?php

Kirby::plugin('shallowred/tags', [

  'snippets' => [
    'tag' => __DIR__ . '/snippets/tag.php',
  ],

  'siteMethods' => [

    'getParamTag' => function ($url, $key, $label, $paramName) {
      $isActive = $key === param($paramName) || $key === get($paramName);
      $href = url($url, $isActive ? [] : ['params' => [$paramName => $key]]);

      return snippet('tag', [
        'label' => $label,
        'attrs' => [
          'data-value' => $key,
          'data-param' => $paramName,
          'href' => $href,
          'data-active' => $isActive ? 'true' : 'false',
        ],
      ], true);
    }
  ]
]);
