<?php
defined('TYPO3_MODE') or die();

$additionalFields = [
    'lg_name_en' => 'pnd_external_id',
];

\Bzga\BzgaBeratungsstellensuche\Utility\ExtensionManagementUtility::addAdditionalFieldsToTable($additionalFields,
    'static_languages');

unset($additionalFields);
