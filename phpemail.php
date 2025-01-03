<?php
$url = 'https://api.elasticemail.com/v2/email/send';

try{
        $post = array('from' => 'web.prabal@outlook.com',
        'fromName' => 'Your Company Name',
        'apikey' => '2162CFC5580104EC7128B7AFCEBE57DB94DDEF7F497F6CBDC8F9F589B4AFBCAED1E302016D68A4578183783B6F923361',
        'subject' => 'Your Subject',
        'to' => 'mithun.ultra@yahoo.com',
        'bodyHtml' => '<h1>Html Body</h1>',
        'bodyText' => 'Text Body',
        'isTransactional' => false);
        
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        
        $result=curl_exec ($ch);
        curl_close ($ch);
        
        echo $result;    
}
catch(Exception $ex){
    echo $ex->getMessage();
}
?>
