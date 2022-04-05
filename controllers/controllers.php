<?php
declare(strict_types = 1);
function getTransactionFiles( string $filePath) : array 
{
    $files = [];

    foreach(scandir($filePath) as $file)
    {
        // var_dump($file);
        if(is_dir($file))
        {
            continue;
        }
        // echo $file;
        $files[] = $filePath . $file;
    }

    return $files;

}


function getTransactions(string $fileName) : array
{
    if(!file_exists($fileName))
    {
        trigger_error('file '. $fileName . ' Does not exist', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r'); 
    fgetcsv($file);

    // print_r($file);

    $transactions_data = [];

    while(($singleTransaction = fgetcsv($file)) !== FALSE)
    {
        // if($transaction_row !== null){
        //     $singleTransaction = 
        // }

        $transactions_data[] = $singleTransaction;
        
    }

    return $transactions_data;
}