<?php

/**
 * @file
 * Admin sending email.
 */

/**
 * Menu callback - admin form for sending email.
 */
function inventory_forecast_admin() {  
	  $form = array();
	  $form['inventory_forecast_email_weekly'] = array(
	    '#type' => 'textarea',
	    '#title' => t('Weekly Sending'),
	    '#default_value' => variable_get('inventory_forecast_email_weekly'),
	    '#description' => t("Enter email address for report, ex: tom@example.com;john@example.com."),
		'#rows' => 3,
		'#resizable' => TRUE,
	    '#required' => FALSE,
	  );
	$form['inventory_forecast_email_monthly'] = array(
	    '#type' => 'textarea',
	    '#title' => t('Monthly Sending'),
	    '#default_value' => variable_get('inventory_forecast_email_monthly'),
	    '#description' => t("Enter email address for report, ex: tom@example.com;john@example.com."),
		'#rows' => 3,
		'#resizable' => TRUE,
	    '#required' => FALSE,
	  );
	  return system_settings_form($form);

}


