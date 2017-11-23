<?php

/**
* Implementation of hook_rules_event_info().
*/
function node_access_rules_rules_event_info() {
  $events = array();
 
  $events['node_access_rules_create'] = array(
    'label' => t('Request for create rights'),
    'group' => t('Node Access'),
    'variables' => array(
      'node' => array(
        'type' => 'node',
        'label' => t('Node to create')
      ),
    )
  );
  
  $events['node_access_rules_view'] = array(
    'label' => t('Request for view rights'),
    'group' => t('Node Access'),
    'variables' => array(
      'node' => array(
        'type' => 'node',
        'label' => t('Node to view')
      ),
    )
  );

  $events['node_access_rules_edit'] = array(
    'label' => t('Request for edit rights'),
    'group' => t('Node Access'),
    'variables' => array(
      'node' => array(
        'type' => 'node',
        'label' => t('Node to edit')
      ),
    )
  );

  $events['node_access_rules_delete'] = array(
    'label' => t('Request for delete right'),
    'group' => t('Node Access'),
    'variables' => array(
      'node' => array(
        'type' => 'node',
        'label' => t('Node to delete')
      ),
    )
  );

  return $events;
	
}

/**
 * Implements hook_rules_action_info().
 */
function node_access_rules_rules_action_info() {
  $actions = array();

  $actions['node_access_rules_allow_access'] = array(
    'label' => t('Allow editing/viewing/creating/deleting of Node'),
    'group' => t('Node Access'),
    'base' => 'node_access_rules_allow',
    'callbacks' => array(
      'execute' => 'node_access_rules_action_allow',
    ),
  );

  $actions['node_access_rules_deny_access'] = array(
    'label' => t('Do not allow editing/viewing/creating/deleting of Node'),
    'group' => t('Node Access'),
    'base' => 'node_access_rules_deny',
    'callbacks' => array(
      'execute' => 'node_access_rules_action_deny',
    ),
  );
    
  return $actions;
}

function node_access_rules_action_allow() {
  global $node_access_rules;
  $node_access_rules = NODE_ACCESS_ALLOW;
}

function node_access_rules_action_deny() {
  global $node_access_rules;
  $node_access_rules = NODE_ACCESS_DENY;
}
