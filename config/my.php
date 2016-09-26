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

/* To use master and slave database feature, uncomment this.
$config->slaveDB->host     = 'localhost';
$config->slaveDB->port     = '3306';
$config->slaveDB->name     = 'demo'; 
$config->slaveDB->user     = 'root'; 
$config->slaveDB->password = ''; */
