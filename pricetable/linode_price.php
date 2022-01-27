<?php
        try {
            $product_data = "./whmcs/products.json";
            $jsondata = file_get_contents($product_data);
            $priceList = json_decode($jsondata);
            foreach ($priceList->product as $dkey => $products) {
                $products = json_decode(json_encode($products), true);
                $product_id = $products['pid'];

                if ($product_id == 52) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ls1_id = $products['pid'];
                    $ls1_name  = $products['name'];
                    $ls1_description = (explode("\r\n", $products['description'] ));
                    $ls1_vcpu = explode(" ",$ls1_description[1]);
                    $ls1_ram = explode(" ",$ls1_description[2]);
                    $ls1_storage = explode(" ",$ls1_description[4]);
                    $ls1_bandwidth = explode(" ",$ls1_description[3]);            
                    $ls1_aed =  round($products['pricing']['AED']['monthly']);  
                    $ls1_inr =  round($products['pricing']['INR']['monthly']); 
                    $ls1_usd =  round($products['pricing']['USD']['monthly']); 
                    $ls1_gbp =  round($products['pricing']['GBP']['monthly']);     
                    // $ls1_region = $configoptions['configoption'][0]['options']['option'];
                    // $ls1_blueprint = $configoptions['configoption'][1]['options']['option'];                   
                }
                if ($product_id == 53) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ls2_id = $products['pid'];
                    $ls2_name  = $products['name'];
                    $ls2_description = (explode("\r\n", $products['description'] ));
                    $ls2_vcpu = explode(" ",    $ls2_description[1]);
                    $ls2_ram = explode(" ",     $ls2_description[2]);
                    $ls2_storage = explode(" ", $ls2_description[4]);
                    $ls2_bandwidth = explode(" ",$ls2_description[3]);            
                    $ls2_aed =  round($products['pricing']['AED']['monthly']);  
                    $ls2_inr =  round($products['pricing']['INR']['monthly']); 
                    $ls2_usd =  round($products['pricing']['USD']['monthly']); 
                    $ls2_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 54) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ls3_id = $products['pid'];
                    $ls3_name  = $products['name'];
                    $ls3_description = (explode("\r\n", $products['description'] ));
                    $ls3_vcpu = explode(" ",    $ls3_description[1]);
                    $ls3_ram = explode(" ",     $ls3_description[2]);
                    $ls3_storage = explode(" ", $ls3_description[4]);
                    $ls3_bandwidth = explode(" ",$ls3_description[3]);            
                    $ls3_aed =  round($products['pricing']['AED']['monthly']);  
                    $ls3_inr =  round($products['pricing']['INR']['monthly']); 
                    $ls3_usd =  round($products['pricing']['USD']['monthly']); 
                    $ls3_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 55) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ls4_id = $products['pid'];
                    $ls4_name  = $products['name'];
                    $ls4_description = (explode("\r\n", $products['description'] ));
                    $ls4_vcpu = explode(" ",     $ls4_description[1]);
                    $ls4_ram = explode(" ",      $ls4_description[2]);
                    $ls4_storage = explode(" ",  $ls4_description[4]);
                    $ls4_bandwidth = explode(" ",$ls4_description[3]);            
                    $ls4_aed =  round($products['pricing']['AED']['monthly']);  
                    $ls4_inr =  round($products['pricing']['INR']['monthly']); 
                    $ls4_usd =  round($products['pricing']['USD']['monthly']); 
                    $ls4_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 56) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ls5_id = $products['pid'];
                    $ls5_name  = $products['name'];
                    $ls5_description = (explode("\r\n", $products['description'] ));
                    $ls5_vcpu = explode(" ",     $ls5_description[1]);
                    $ls5_ram = explode(" ",      $ls5_description[2]);
                    $ls5_storage = explode(" ",  $ls5_description[4]);
                    $ls5_bandwidth = explode(" ",$ls5_description[3]);            
                    $ls5_aed =  round($products['pricing']['AED']['monthly']);  
                    $ls5_inr =  round($products['pricing']['INR']['monthly']); 
                    $ls5_usd =  round($products['pricing']['USD']['monthly']); 
                    $ls5_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 57) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ls6_id = $products['pid'];
                    $ls6_name  = $products['name'];
                    $ls6_description = (explode("\r\n", $products['description'] ));
                    $ls6_vcpu = explode(" ",     $ls6_description[1]);
                    $ls6_ram = explode(" ",      $ls6_description[2]);
                    $ls6_storage = explode(" ",  $ls6_description[4]);
                    $ls6_bandwidth = explode(" ",$ls6_description[3]);            
                    $ls6_aed =  round($products['pricing']['AED']['monthly']);  
                    $ls6_inr =  round($products['pricing']['INR']['monthly']); 
                    $ls6_usd =  round($products['pricing']['USD']['monthly']); 
                    $ls6_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }

                
                if ($product_id == 58) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ld1_id = $products['pid'];
                    $ld1_name  = $products['name'];
                    $ld1_description = (explode("\r\n", $products['description'] ));
                    $ld1_vcpu = explode(" ",$ld1_description[1]);
                    $ld1_ram = explode(" ",$ld1_description[2]);
                    $ld1_storage = explode(" ",$ld1_description[4]);
                    $ld1_bandwidth = explode(" ",$ld1_description[3]);            
                    $ld1_aed =  round($products['pricing']['AED']['monthly']);  
                    $ld1_inr =  round($products['pricing']['INR']['monthly']); 
                    $ld1_usd =  round($products['pricing']['USD']['monthly']); 
                    $ld1_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 59) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ld2_id = $products['pid'];
                    $ld2_name  = $products['name'];
                    $ld2_description = (explode("\r\n", $products['description'] ));
                    $ld2_vcpu = explode(" ",    $ld2_description[1]);
                    $ld2_ram = explode(" ",     $ld2_description[2]);
                    $ld2_storage = explode(" ", $ld2_description[4]);
                    $ld2_bandwidth = explode(" ",$ld2_description[3]);            
                    $ld2_aed =  round($products['pricing']['AED']['monthly']);  
                    $ld2_inr =  round($products['pricing']['INR']['monthly']); 
                    $ld2_usd =  round($products['pricing']['USD']['monthly']); 
                    $ld2_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 60) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ld3_id = $products['pid'];
                    $ld3_name  = $products['name'];
                    $ld3_description = (explode("\r\n", $products['description'] ));
                    $ld3_vcpu = explode(" ",    $ld3_description[1]);
                    $ld3_ram = explode(" ",     $ld3_description[2]);
                    $ld3_storage = explode(" ", $ld3_description[4]);
                    $ld3_bandwidth = explode(" ",$ld3_description[3]);            
                    $ld3_aed =  round($products['pricing']['AED']['monthly']);  
                    $ld3_inr =  round($products['pricing']['INR']['monthly']); 
                    $ld3_usd =  round($products['pricing']['USD']['monthly']); 
                    $ld3_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 61) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ld4_id = $products['pid'];
                    $ld4_name  = $products['name'];
                    $ld4_description = (explode("\r\n", $products['description'] ));
                    $ld4_vcpu = explode(" ",     $ld4_description[1]);
                    $ld4_ram = explode(" ",      $ld4_description[2]);
                    $ld4_storage = explode(" ",  $ld4_description[4]);
                    $ld4_bandwidth = explode(" ",$ld4_description[3]);            
                    $ld4_aed =  round($products['pricing']['AED']['monthly']);  
                    $ld4_inr =  round($products['pricing']['INR']['monthly']); 
                    $ld4_usd =  round($products['pricing']['USD']['monthly']); 
                    $ld4_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 62) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ld5_id = $products['pid'];
                    $ld5_name  = $products['name'];
                    $ld5_description = (explode("\r\n", $products['description'] ));
                    $ld5_vcpu = explode(" ",     $ld5_description[1]);
                    $ld5_ram = explode(" ",      $ld5_description[2]);
                    $ld5_storage = explode(" ",  $ld5_description[4]);
                    $ld5_bandwidth = explode(" ",$ld5_description[3]);            
                    $ld5_aed =  round($products['pricing']['AED']['monthly']);  
                    $ld5_inr =  round($products['pricing']['INR']['monthly']); 
                    $ld5_usd =  round($products['pricing']['USD']['monthly']); 
                    $ld5_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 63) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ld6_id = $products['pid'];
                    $ld6_name  = $products['name'];
                    $ld6_description = (explode("\r\n", $products['description'] ));
                    $ld6_vcpu = explode(" ",     $ld6_description[1]);
                    $ld6_ram = explode(" ",      $ld6_description[2]);
                    $ld6_storage = explode(" ",  $ld6_description[4]);
                    $ld6_bandwidth = explode(" ",$ld6_description[3]);            
                    $ld6_aed =  round($products['pricing']['AED']['monthly']);  
                    $ld6_inr =  round($products['pricing']['INR']['monthly']); 
                    $ld6_usd =  round($products['pricing']['USD']['monthly']); 
                    $ld6_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                if ($product_id == 64) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);  
                    $ld7_id = $products['pid'];
                    $ld7_name  = $products['name'];
                    $ld7_description = (explode("\r\n", $products['description'] ));
                    $ld7_vcpu = explode(" ",     $ld7_description[1]);
                    $ld7_ram = explode(" ",      $ld7_description[2]);
                    $ld7_storage = explode(" ",  $ld7_description[4]);
                    $ld7_bandwidth = explode(" ",$ld7_description[3]);            
                    $ld7_aed =  round($products['pricing']['AED']['monthly']);  
                    $ld7_inr =  round($products['pricing']['INR']['monthly']); 
                    $ld7_usd =  round($products['pricing']['USD']['monthly']); 
                    $ld7_gbp =  round($products['pricing']['GBP']['monthly']);                      
                }
                
                
             
            }
        } catch (Exception $e) {
            echo "error";
        }
    ?>