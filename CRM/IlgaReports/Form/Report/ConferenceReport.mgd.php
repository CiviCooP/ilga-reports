<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_IlgaReports_Form_Report_ConferenceReport',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'ConferenceReport',
      'description' => 'ConferenceReport (ilga-reports)',
      'class_name' => 'CRM_IlgaReports_Form_Report_ConferenceReport',
      'report_url' => 'ilga-reports/conferencereport',
      'component' => 'CiviCase',
    ),
  ),
);
