<?php
        try {
            $product_data = "./whmcs/products.json";
            $jsondata = file_get_contents($product_data);
            $priceList = json_decode($jsondata);
            foreach ($priceList->product as $dkey => $products) {
                $products = json_decode(json_encode($products), true);
                $product_id = $products['pid'];
                

                if ($product_id == 114) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $v1_module  = json_decode(json_encode($products['module']), true); 
                    $v1_id = $products['pid'];
                    $v1_name  = $products['name'];
                    $v1_description = (explode("\r\n", $products['description'] ));
                    $v1_type = explode(" ",     $v1_description[0]); 
                    $v1_vcpu = explode(" ",     $v1_description[1]);
                    $v1_ram = explode(" ",      $v1_description[2]);
                    $v1_storage = explode(" ",  $v1_description[4]);
                    $v1_bandwidth = explode(" ",$v1_description[3]);   
                    $v1_aed =  round($pricing['AED']['monthly']);      
                    $v1_gbp =  round($pricing['GBP']['monthly']); 
                    $v1_inr =  round($pricing['INR']['monthly']);        
                    $v1_usd =  round($pricing['USD']['monthly']); 
                                       
                }
                if ($product_id == 118) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $v2_module  = json_decode(json_encode($products['module']), true); 
                    $v2_id = $products['pid'];
                    $v2_name  = $products['name'];
                    $v2_description = (explode("\r\n", $products['description'] ));
                    $v2_type = explode(" ",     $v2_description[0]); 
                    $v2_vcpu = explode(" ",     $v2_description[1]);
                    $v2_ram = explode(" ",      $v2_description[2]);
                    $v2_storage = explode(" ",  $v2_description[4]);
                    $v2_bandwidth = explode(" ",$v2_description[3]);   
                    $v2_aed =  round($pricing['AED']['monthly']);      
                    $v2_gbp =  round($pricing['GBP']['monthly']); 
                    $v2_inr =  round($pricing['INR']['monthly']);        
                    $v2_usd =  round($pricing['USD']['monthly']); 
                                       
                }
                if ($product_id == 119) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $v3_module  = json_decode(json_encode($products['module']), true); 
                    $v3_id = $products['pid'];
                    $v3_name  = $products['name'];
                    $v3_description = (explode("\r\n", $products['description'] ));
                    $v3_type = explode(" ",     $v3_description[0]); 
                    $v3_vcpu = explode(" ",     $v3_description[1]);
                    $v3_ram = explode(" ",      $v3_description[2]);
                    $v3_storage = explode(" ",  $v3_description[4]);
                    $v3_bandwidth = explode(" ",$v3_description[3]);   
                    $v3_aed =  round($pricing['AED']['monthly']);      
                    $v3_gbp =  round($pricing['GBP']['monthly']); 
                    $v3_inr =  round($pricing['INR']['monthly']);        
                    $v3_usd =  round($pricing['USD']['monthly']); 
                                       
                }
           
             
            }
        } catch (Exception $e) {
            echo "error";
        }
    ?>