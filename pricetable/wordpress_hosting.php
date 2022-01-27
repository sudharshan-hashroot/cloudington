<?php
        try {
            $product_data = "./whmcs/products.json";
            $jsondata = file_get_contents($product_data);
            $priceList = json_decode($jsondata);
            foreach ($priceList->product as $dkey => $products) {
                $products = json_decode(json_encode($products), true);
                $product_id = $products['pid'];
                

                if ($product_id == 111) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $w1_module  = json_decode(json_encode($products['module']), true); 
                    $w1_id = $products['pid'];
                    $w1_name  = $products['name'];
                    $w1_description = (explode("\r\n\r\n", $products['description'] ));
                    $w1_aed =  round($pricing['AED']['monthly']);      
                    $w1_gbp =  round($pricing['GBP']['monthly']); 
                    $w1_inr =  round($pricing['INR']['monthly']);        
                    $w1_usd =  round($pricing['USD']['monthly']);        
                  
                }
                if ($product_id == 112) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $w2_module  = json_decode(json_encode($products['module']), true); 
                    $w2_id = $products['pid'];
                    $w2_name  = $products['name'];
                    $w2_description = (explode("\r\n\r\n", $products['description'] ));
                    $w2_aed =  round($pricing['AED']['monthly']);      
                    $w2_gbp =  round($pricing['GBP']['monthly']); 
                    $w2_inr =  round($pricing['INR']['monthly']);        
                    $w2_usd =  round($pricing['USD']['monthly']);        
                  
                }
                if ($product_id == 113) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $w3_module  = json_decode(json_encode($products['module']), true); 
                    $w3_id = $products['pid'];
                    $w3_name  = $products['name'];
                    $w3_description = (explode("\r\n\r\n", $products['description'] ));
                    $w3_aed =  round($pricing['AED']['monthly']);      
                    $w3_gbp =  round($pricing['GBP']['monthly']); 
                    $w3_inr =  round($pricing['INR']['monthly']);        
                    $w3_usd =  round($pricing['USD']['monthly']);        
                  
                }
           
             
            }
        } catch (Exception $e) {
            echo "error";
        }
    ?>