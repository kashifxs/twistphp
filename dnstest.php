<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];  
   $url_components = parse_url($url);
   parse_str($url_components['query'], $params);
$domain=$params['name'];

if(!empty($domain)
  $txt = dns_get_record($domain,DNS_TXT);
  else
    $txt= "404 not found"
    
    exho $txt;
    exit(1);
?>
