<?php
        try {
            $product_data = "./whmcs/products.json";
            $jsondata = file_get_contents($product_data);
            $priceList = json_decode($jsondata);
            foreach ($priceList->product as $dkey => $products) {
                $products = json_decode(json_encode($products), true);
                $product_id = $products['pid'];

                if ($product_id == 31) {
                    $d1_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d1_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d1_id = $products['pid'];
                    $d1_product_name = $products['name'];           
                    $d1_description = (explode("\r\n", $products['description'] ));                   
                    $d1_vcpu = explode(" ",     $d1_description[0]);
                    $d1_ram = explode(" ",      $d1_description[1]);
                    $d1_storage = explode(" ",  $d1_description[3]);
                    $d1_bandwidth = explode(" ",$d1_description[2]);
                    
                    $d1_aed =  round($products['pricing']['AED']['monthly']);  
                    $d1_inr =  round($products['pricing']['INR']['monthly']); 
                    $d1_usd =  round($products['pricing']['USD']['monthly']); 
                    $d1_gbp =  round($products['pricing']['GBP']['monthly']);    
                    $d1_region = $d1_configoptions['configoption'][0]['options']['option'];
                    $d1_blueprint = $d1_configoptions['configoption'][1]['options']['option'];                  
                }
                
                if ($product_id == 32) {
                    $d2_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d2_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d2_id = $products['pid'];
                    $d2_product_name = $products['name'];           
                    $d2_description = (explode("\r\n", $products['description'] ));                   
                    $d2_vcpu = explode(" ",     $d2_description[0]);
                    $d2_ram = explode(" ",      $d2_description[1]);
                    $d2_storage = explode(" ",  $d2_description[3]);
                    $d2_bandwidth = explode(" ",$d2_description[2]);                    
                    $d2_aed =  round($products['pricing']['AED']['monthly']);  
                    $d2_inr =  round($products['pricing']['INR']['monthly']); 
                    $d2_usd =  round($products['pricing']['USD']['monthly']); 
                    $d2_gbp =  round($products['pricing']['GBP']['monthly']);       
                    $d2_region =    $d2_configoptions['configoption'][0]['options']['option'];
                    $d2_blueprint = $d2_configoptions['configoption'][1]['options']['option'];                
                }
                if ($product_id == 33) {
                    $d3_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d3_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d3_id = $products['pid'];
                    $d3_product_name = $products['name'];           
                    $d3_description = (explode("\r\n", $products['description'] ));                   
                    $d3_vcpu = explode(" ",     $d3_description[0]);
                    $d3_ram = explode(" ",      $d3_description[1]);
                    $d3_storage = explode(" ",  $d3_description[3]);
                    $d3_bandwidth = explode(" ",$d3_description[2]);                    
                    $d3_aed =  round($products['pricing']['AED']['monthly']);  
                    $d3_inr =  round($products['pricing']['INR']['monthly']); 
                    $d3_usd =  round($products['pricing']['USD']['monthly']); 
                    $d3_gbp =  round($products['pricing']['GBP']['monthly']);    
                    $d3_region =     $d3_configoptions['configoption'][0]['options']['option'];
                    $d3_blueprint = $d3_configoptions['configoption'][1]['options']['option'];                   
                }
                if ($product_id == 34) {
                    $d4_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d4_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d4_id = $products['pid'];
                    $d4_product_name = $products['name'];           
                    $d4_description = (explode("\r\n", $products['description'] ));                   
                    $d4_vcpu = explode(" ",     $d4_description[0]);
                    $d4_ram = explode(" ",      $d4_description[1]);
                    $d4_storage = explode(" ",  $d4_description[3]);
                    $d4_bandwidth = explode(" ",$d4_description[2]);                    
                    $d4_aed =  round($products['pricing']['AED']['monthly']);  
                    $d4_inr =  round($products['pricing']['INR']['monthly']); 
                    $d4_usd =  round($products['pricing']['USD']['monthly']); 
                    $d4_gbp =  round($products['pricing']['GBP']['monthly']); 
                    $d4_region =     $d4_configoptions['configoption'][0]['options']['option'];
                    $d4_blueprint = $d4_configoptions['configoption'][1]['options']['option'];                      
                }
                if ($product_id == 35) {
                    $d5_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d5_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d5_id = $products['pid'];
                    $d5_product_name = $products['name'];           
                    $d5_description = (explode("\r\n", $products['description'] ));                   
                    $d5_vcpu = explode(" ",     $d5_description[0]);
                    $d5_ram = explode(" ",      $d5_description[1]);
                    $d5_storage = explode(" ",  $d5_description[3]);
                    $d5_bandwidth = explode(" ",$d5_description[2]);                    
                    $d5_aed =  round($products['pricing']['AED']['monthly']);  
                    $d5_inr =  round($products['pricing']['INR']['monthly']); 
                    $d5_usd =  round($products['pricing']['USD']['monthly']); 
                    $d5_gbp =  round($products['pricing']['GBP']['monthly']);      
                    $d5_region =     $d5_configoptions['configoption'][0]['options']['option'];
                    $d5_blueprint = $d5_configoptions['configoption'][1]['options']['option'];                 
                }
                if ($product_id == 36) {
                    $d6_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d6_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d6_id = $products['pid'];
                    $d6_product_name = $products['name'];           
                    $d6_description = (explode("\r\n", $products['description'] ));                   
                    $d6_vcpu = explode(" ",     $d6_description[0]);
                    $d6_ram = explode(" ",      $d6_description[1]);
                    $d6_storage = explode(" ",  $d6_description[3]);
                    $d6_bandwidth = explode(" ",$d6_description[2]);                    
                    $d6_aed =  round($products['pricing']['AED']['monthly']);  
                    $d6_inr =  round($products['pricing']['INR']['monthly']); 
                    $d6_usd =  round($products['pricing']['USD']['monthly']); 
                    $d6_gbp =  round($products['pricing']['GBP']['monthly']);   
                    $d6_region =     $d6_configoptions['configoption'][0]['options']['option'];
                    $d6_blueprint = $d6_configoptions['configoption'][1]['options']['option'];                    
                }
                if ($product_id == 37) {
                    $d7_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d7_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d7_id = $products['pid'];
                    $d7_product_name = $products['name'];           
                    $d7_description = (explode("\r\n", $products['description'] ));                   
                    $d7_vcpu = explode(" ",     $d7_description[0]);
                    $d7_ram = explode(" ",      $d7_description[1]);
                    $d7_storage = explode(" ",  $d7_description[3]);
                    $d7_bandwidth = explode(" ",$d7_description[2]);                    
                    $d7_aed =  round($products['pricing']['AED']['monthly']);  
                    $d7_inr =  round($products['pricing']['INR']['monthly']); 
                    $d7_usd =  round($products['pricing']['USD']['monthly']); 
                    $d7_gbp =  round($products['pricing']['GBP']['monthly']);        
                    $d7_region =     $d7_configoptions['configoption'][0]['options']['option'];
                    $d7_blueprint = $d7_configoptions['configoption'][1]['options']['option'];               
                }
                if ($product_id == 38) {
                    $d8_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d8_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d8_id = $products['pid'];
                    $d8_product_name = $products['name'];           
                    $d8_description = (explode("\r\n", $products['description'] ));                   
                    $d8_vcpu = explode(" ",     $d8_description[0]);
                    $d8_ram = explode(" ",      $d8_description[1]);
                    $d8_storage = explode(" ",  $d8_description[3]);
                    $d8_bandwidth = explode(" ",$d8_description[2]);                    
                    $d8_aed =  round($products['pricing']['AED']['monthly']);  
                    $d8_inr =  round($products['pricing']['INR']['monthly']); 
                    $d8_usd =  round($products['pricing']['USD']['monthly']); 
                    $d8_gbp =  round($products['pricing']['GBP']['monthly']);      
                    $d8_region =     $d8_configoptions['configoption'][0]['options']['option'];
                    $d8_blueprint = $d8_configoptions['configoption'][1]['options']['option'];                 
                }
                if ($product_id == 39) {
                    $d9_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d9_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d9_id = $products['pid'];
                    $d9_product_name = $products['name'];           
                    $d9_description = (explode("\r\n", $products['description'] ));                   
                    $d9_vcpu = explode(" ",     $d9_description[0]);
                    $d9_ram = explode(" ",      $d9_description[1]);
                    $d9_storage = explode(" ",  $d9_description[3]);
                    $d9_bandwidth = explode(" ",$d9_description[2]);                    
                    $d9_aed =  round($products['pricing']['AED']['monthly']);  
                    $d9_inr =  round($products['pricing']['INR']['monthly']); 
                    $d9_usd =  round($products['pricing']['USD']['monthly']); 
                    $d9_gbp =  round($products['pricing']['GBP']['monthly']);   
                    $d9_region =     $d9_configoptions['configoption'][0]['options']['option'];
                    $d9_blueprint = $d9_configoptions['configoption'][1]['options']['option'];                    
                }
                if ($product_id == 40) {
                    $d10_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d10_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d10_id = $products['pid'];
                    $d10_product_name = $products['name'];           
                    $d10_description = (explode("\r\n", $products['description'] ));                   
                    $d10_vcpu = explode(" ",     $d10_description[0]);
                    $d10_ram = explode(" ",      $d10_description[1]);
                    $d10_storage = explode(" ",  $d10_description[3]);
                    $d10_bandwidth = explode(" ",$d10_description[2]);                    
                    $d10_aed =  round($products['pricing']['AED']['monthly']);  
                    $d10_inr =  round($products['pricing']['INR']['monthly']); 
                    $d10_usd =  round($products['pricing']['USD']['monthly']); 
                    $d10_gbp =  round($products['pricing']['GBP']['monthly']);        
                    $d10_region =    $d10_configoptions['configoption'][0]['options']['option'];
                    $d10_blueprint = $d10_configoptions['configoption'][1]['options']['option'];               
                }
                if ($product_id == 42) {
                    $d11_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d11_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d11_id = $products['pid'];
                    $d11_product_name = $products['name'];           
                    $d11_description = (explode("\r\n", $products['description'] ));                   
                    $d11_vcpu = explode(" ",     $d11_description[0]);
                    $d11_ram = explode(" ",      $d11_description[1]);
                    $d11_storage = explode(" ",  $d11_description[3]);
                    $d11_bandwidth = explode(" ",$d11_description[2]);                    
                    $d11_aed =  round($products['pricing']['AED']['monthly']);  
                    $d11_inr =  round($products['pricing']['INR']['monthly']); 
                    $d11_usd =  round($products['pricing']['USD']['monthly']); 
                    $d11_gbp =  round($products['pricing']['GBP']['monthly']);     
                    $d11_region =    $d11_configoptions['configoption'][0]['options']['option'];
                    $d11_blueprint = $d11_configoptions['configoption'][1]['options']['option'];                  
                }
                if ($product_id == 43) {
                    $d12_configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $d12_pricing  = json_decode(json_encode($products['pricing']), true);  
                    $d12_id = $products['pid'];
                    $d12_product_name = $products['name'];           
                    $d12_description = (explode("\r\n", $products['description'] ));                   
                    $d12_vcpu = explode(" ",     $d12_description[0]);
                    $d12_ram = explode(" ",      $d12_description[1]);
                    $d12_storage = explode(" ",  $d12_description[3]);
                    $d12_bandwidth = explode(" ",$d12_description[2]);                    
                    $d12_aed =  round($products['pricing']['AED']['monthly']);  
                    $d12_inr =  round($products['pricing']['INR']['monthly']); 
                    $d12_usd =  round($products['pricing']['USD']['monthly']); 
                    $d12_gbp =  round($products['pricing']['GBP']['monthly']);     
                    $d12_region =    $d12_configoptions['configoption'][0]['options']['option'];
                    $d12_blueprint = $d12_configoptions['configoption'][1]['options']['option'];                  
                }
                
                
              
                
             
            }
        } catch (Exception $e) {
            echo "error";
        }
    ?>