<?php
/**
 * @file
 * Settings page callback file for the taxonomy_block module.
 */

/**
 * Menu callback;
 */
 
function taxonomy_block_admin_settings() {
  $form = array();
  // only administrators can access this function
  
  // Generate the form - settings applying to all patterns first
  $form['taxonomy_block_settings'] = array(
    '#type' => 'fieldset',
    '#weight' => -30,
    '#title' => t('Basic settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE
  );
 
  $vocabs = db_query("SELECT vid, name from {vocabulary} order by name");
  $vocab_array = array();
  while ($term_parent = db_fetch_object($vocabs)) {
     $vocab_array[$term_parent->vid] = $term_parent->name;
  }

  $form['taxonomy_block_settings']['taxonomy_block_settings_vid'] = array(
    '#type' => 'select',
    // '#size' => 3,
    '#title' => t("Select a Vocabulary"),
    '#default_value' => variable_get('taxonomy_block_settings_vid', 1),
    '#description' => t("Select Vocabulary for used by taxonomy block."),
    '#options' => $vocab_array
  );  
  
  $form['taxonomy_block_settings']['taxonomy_block_settings_max_term'] = array(
    '#type' => 'textfield',
    '#title' => t("Maximum number of term to display"),
    '#default_value' => variable_get('taxonomy_block_settings_max_term', 0),
    '#description' => t("Enter 0 to display all terms.")
  ); 
  
  $form['taxonomy_block_settings']['taxonomy_block_settings_node_count'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show node count'),
    '#default_value' => variable_get('taxonomy_block_settings_node_count', 1)
  );    
  
  $form['taxonomy_block_settings']['taxonomy_block_settings_order_by'] = array(
    '#type' => 'select',
    '#title' => t("Order by"),
    '#default_value' => variable_get('taxonomy_block_settings_order_by', 0),
    '#options' => array(t("Name"), t("Weight"))
  ); 
  
  $form['taxonomy_block_settings']['taxonomy_block_settings_order_type'] = array(
  '#type' => 'select',
  '#title' => t('Order Type'),
  '#default_value' => variable_get('taxonomy_block_settings_order_type', 0),
  '#options' => array(t("ASC"), t("DESC"))
  );
  
  
  return system_settings_form($form);
}
