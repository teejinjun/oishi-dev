<?php

$hostURL=$_SERVER['HTTP_HOST'];
if ( $hostURL == 'www.oishi.com.my' OR $hostURL == 'oishi.com.my')
{
    $dbhost         =   '127.0.0.1';
    $dbusername     =   'oishicom_dbo';
    $dbpassword     =   'knZtc8rehbVp';
    $dbname         =   'oishicom_2016';
} 
else
{
    $dbhost         =   'localhostss';
    $dbusername     =   'root';
    $dbpassword     =   '';
    $dbname         =   'oishi';
}