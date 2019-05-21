<?php

/**
 * @file
 * civicrm_authenticated.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function civicrm_authenticated_user_default_roles() {
  $roles = array();

  // Exported role: civicrm authenticated.
  $roles['civicrm authenticated'] = array(
    'name' => 'civicrm authenticated',
    'weight' => 3,
  );

  return $roles;
}
