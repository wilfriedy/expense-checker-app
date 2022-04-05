<?php

declare(strict_types = 1);

$root_path = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('CONTROLS_PATH' , $root_path . 'controllers'. DIRECTORY_SEPARATOR) ;
define('FILES_PATH', $root_path . 'transaction_files'. DIRECTORY_SEPARATOR);

require_once CONTROLS_PATH . 'controllers.php';

$files_to_read = getTransactionFiles(FILES_PATH);

$transaction_value = [];

foreach($files_to_read as $file);
{
    echo $file;
    $transaction_value = array_merge($transaction_value,getTransactions($file));
}

print_r($transaction_value);


print_r($files_to_read);