<?php

$ecomm_server_url     = 'https://vpos.te.sia.eu:8443/ecomm/MerchantHandler';
$ecomm_client_url     = 'https://vpos.te.sia.eu/ecomm/ClientHandler';
$cert_url             = '/var/www/html/domain/certs/1234567keystore.pem'; //full path to keystore file
$cert_pass            = 'testpass'; //keystore password
$currency             = '978'; //978=EUR 840=USD 941=RSD 703=SKK 440=LTL 233=EEK 643=RUB 891=YUM

/* Uncomment this when you go to production system, also change keystore and password
$ecomm_server_url     = 'https://vpos.sia.eu:8443/ecomm/MerchantHandler';
$ecomm_client_url     = 'https://vpos.sia.eu/ecomm/ClientHandler';
*/

//MySQL config
//!!!!! DO NOT CREATE DATABASE OR TABLE YOURSELF, IT WILL BE DONE AUTOMATICALY. CHANGE ONLY USER, PASS, HOST. !!!!!
$db_user                =     'database_user';
$db_pass                =     'database_password';
$db_host                =     'database_hosthost';
$db_database            =     'database_name';
$db_table_transaction   =     'transaction';
$db_table_batch         =     'batch';
$db_table_error         =     'error';
