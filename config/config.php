<?php
//Base folder, if any. Leave blank if site is in root web folder.
#$base_url = '/ilslabel';
$base_url = '/wmslabelsuqtr';
$site_title = 'Labeling';
//Default page title
$page_title = 'ILS Labeling';

/*
    * This variable defines the number of individual
    * labels on your sheet of two column label stock.
    *  This is here so you can prevent waste on partially
    * used label stock.
*/
$labelStartOptions = 12;

if (defined('WSKEY') === FALSE) {
    define('WSKEY', 'j5pnAhzZWmdXtNaWesqKaubhIOaCANTrid6pIzURDvuRLRuscUCBLAxrhfhB4ZXmgoEK5ghX2riTRrnC');
}

if (defined('BIBKEY') === FALSE) {
    #define('BIBKEY', 'Your BIBKey. Use WSKey unless told otherwise');
    define('BIBKEY', 'j5pnAhzZWmdXtNaWesqKaubhIOaCANTrid6pIzURDvuRLRuscUCBLAxrhfhB4ZXmgoEK5ghX2riTRrnC');
}

if (defined('SECRET') === FALSE) {
    define('SECRET', '55CzEt35anj8ZVBjbp535CsVdQ3wH8aL');
}

if (isset($inst_id) === FALSE) {
    $inst_id = '75437';
}

if (defined('URL') === FALSE) {
    #define('URL', 'https://circ.{your datacenter}.worldcat.org/LHR');
    define('URL', 'https://circ.sd04.worldcat.org/LHR'); # canada
    #define('URL', 'https://circ.sd01.worldcat.org/LHR');
}

if (defined('BIBURL') === FALSE) {
    define('BIBURL', 'http://www.worldcat.org/webservices/catalog/content');
}

if (defined('METHOD') === FALSE) {
    define('METHOD', 'GET');
}
