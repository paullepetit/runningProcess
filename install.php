<?php
function plugin_version_runningProcess()
{
return array('name' => 'Running process',
'version' => '1.0',
'author'=> 'Community, Valentin DEVILLE',
'license' => 'GPLv2',
'verMinOcs' => '2.2');
}

function plugin_init_runningProcess()
{
$object = new plugins;
$object->add_cd_entry("runningProcess","other");

$object->sql_query("CREATE TABLE IF NOT EXISTS `runningprocess` (
                      `ID` INT(11) NOT NULL AUTO_INCREMENT,
                      `HARDWARE_ID` INT(11) NOT NULL,
                      `CPUUSAGE` VARCHAR(255) DEFAULT NULL,
                      `TTY` VARCHAR(255) DEFAULT NULL,
                      `STARTED` VARCHAR(15) DEFAULT NULL,
                      `VIRTUALMEMORY` VARCHAR(255) DEFAULT NULL,
                      `PROCESSNAME` VARCHAR(255) DEFAULT NULL,
                      `PROCESSID` VARCHAR(255) DEFAULT NULL,
                      `USERNAME` VARCHAR(255) DEFAULT NULL,
                      `PROCESSMEMORY` VARCHAR(255) DEFAULT NULL,
                      `COMMANDLINE` VARCHAR(255) DEFAULT NULL,
                      `DESCRIPTION` VARCHAR(255) DEFAULT NULL,
                      `COMPANY` VARCHAR(255) DEFAULT NULL,
                      PRIMARY KEY  (`ID`,`HARDWARE_ID`)
                      ) ENGINE=INNODB;");

}

function plugin_delete_runningProcess()
{
$object = new plugins;
$object->del_cd_entry("runningProcess");
$object->sql_query("DROP TABLE `runningprocess`");

}
