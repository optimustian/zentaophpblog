<?php
$config->installed    = true;  
$config->debug        = true;  
$config->requestType  = 'PATH_INFO';    // PATH_INFO or GET.
$config->requestFix   = '-';
$config->webRoot      = '/blog/'; 

$config->db->host     = 'localhost';
$config->db->port     = '3306';
$config->db->name     = 'zentaophp'; 
$config->db->user     = 'root'; 
$config->db->password = '123456';
/*$config->db->host     = '575ed73d50cff.gz.cdb.myqcloud.com';
$config->db->port     = '10551';
$config->db->name     = 'sddman'; 
$config->db->user     = 'cdb_outerroot'; 
$config->db->password = 'sql_109227175';*/

/* To use master and slave database feature, uncomment this.
$config->slaveDB->host     = 'localhost';
$config->slaveDB->port     = '3306';
$config->slaveDB->name     = 'demo'; 
$config->slaveDB->user     = 'root'; 
$config->slaveDB->password = ''; */
