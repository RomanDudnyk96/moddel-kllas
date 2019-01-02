<?php  /// Moodle Configuration File 

unset($CFG);

global $CFG;
$CFG = new stdClass();
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'autoho08.mysql.tools';
$CFG->dbname    = 'autoho08_modl';
$CFG->dbuser    = 'autoho08_modl';
$CFG->dbpass    = 'yYi&9F^85b';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
  'dbport' => '',
);
$CFG->prefix    = '';

$CFG->wwwroot   = 'http://www.autoholding.site';
$CFG->dataroot  = realpath('/home/autoho08/autoholding.site/www/moodledata');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->passwordsaltmain = 'Ir,49h*:*~D_%hYMTaD&Lo+Bo';
require_once(dirname(__FILE__) . '/lib/setup.php');
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>
