<?php

/**
 * @file
 * Contains the url query parameter default plugin.
 */

/**
 * Default argument plugin to use a query parameter from the URL.
 */
class views_plugin_argument_default_query extends views_plugin_argument_default {

  function option_definition() {
    $options = parent::option_definition();
    $options['parameter'] = array('default' => '');
    $options['default_value'] = array('default' => '');

    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $form['parameter'] = array(
      '#type' => 'textfield',
      '#title' => t('Parameter name'),
      '#default_value' => $this->options['parameter'],
    );

    $form['default_value'] = array(
      '#type' => 'textfield',
      '#title' => t('Default value'),
      '#default_value' => isset($this->options['default_value']) ? $this->options['default_value'] : '',
      '#description' => t('If you would like this filter to be ignored if there is no matching parameter value, set this field to the Exception value, e.g. "All".'),
    );
  }

  function get_argument() {
    $query_parameters = drupal_get_query_parameters();

    if (($parameter = $this->options['parameter']) && !empty($query_parameters[$parameter])) {
      return $query_parameters[$parameter];
    }

    return isset($this->options['default_value']) ? $this->options['default_value'] : '';
  }

  function convert_options(&$options) {
    if (!isset($options['parameter']) && isset($this->argument->options['default_argument_query'])) {
      $options['parameter'] = $this->argument->options['default_argument_query'];
    }
  }
}
