<?php
        try {
            $product_data = "./whmcs/products.json";
            $jsondata = file_get_contents($product_data);
            $priceList = json_decode($jsondata);
            foreach ($priceList->product as $dkey => $products) {
                $products = json_decode(json_encode($products), true);
                $product_id = $products['pid'];
                

                if ($product_id == 75) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $s1_module  = json_decode(json_encode($products['module']), true); 
                    $s1_id = $products['pid'];
                    $s1_name  = $products['name'];
                    $s1_description = (explode("\r\n\r\n", $products['description'] ));
                    $s1_aed =  round($pricing['AED']['monthly']);      
                    $s1_gbp =  round($pricing['GBP']['monthly']); 
                    $s1_inr =  round($pricing['INR']['monthly']);        
                    $s1_usd =  round($pricing['USD']['monthly']);        
                  
                }
                if ($product_id == 107) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $s2_module  = json_decode(json_encode($products['module']), true); 
                    $s2_id = $products['pid'];
                    $s2_name  = $products['name'];
                    $s2_description = (explode("\r\n\r\n", $products['description'] ));
                    $s2_aed =  round($pricing['AED']['monthly']);      
                    $s2_gbp =  round($pricing['GBP']['monthly']); 
                    $s2_inr =  round($pricing['INR']['monthly']);        
                    $s2_usd =  round($pricing['USD']['monthly']);        
                  
                }
                if ($product_id == 108) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $s3_module  = json_decode(json_encode($products['module']), true); 
                    $s3_id = $products['pid'];
                    $s3_name  = $products['name'];
                    $s3_description = (explode("\r\n\r\n", $products['description'] ));
                    $s3_aed =  round($pricing['AED']['monthly']);      
                    $s3_gbp =  round($pricing['GBP']['monthly']); 
                    $s3_inr =  round($pricing['INR']['monthly']);        
                    $s3_usd =  round($pricing['USD']['monthly']);        
                  
                }
                if ($product_id == 110) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $s4_module  = json_decode(json_encode($products['module']), true); 
                    $s4_id = $products['pid'];
                    $s4_name  = $products['name'];
                    $s4_description = (explode("\r\n\r\n", $products['description'] ));
                    $s4_aed =  round($pricing['AED']['monthly']);      
                    $s4_gbp =  round($pricing['GBP']['monthly']); 
                    $s4_inr =  round($pricing['INR']['monthly']);        
                    $s4_usd =  round($pricing['USD']['monthly']);        
                  
                }
             
            }
        } catch (Exception $e) {
            echo "error";
        }
    ?>