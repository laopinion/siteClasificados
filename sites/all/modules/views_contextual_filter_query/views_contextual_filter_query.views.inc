<?php

/**
 * @file
 * Provide views handlers and plugins that allow usage of url query values.
 */

/**
 * Implements hook_views_plugins().
 */
function views_contextual_filter_query_views_plugins() {
  $plugins = array(
    'argument default' => array(
      'query' => array(
        'title' => t('Query parameter from URL'),
        'handler' => 'views_plugin_argument_default_query',
      ),
    ),
  );

  return $plugins;
}

