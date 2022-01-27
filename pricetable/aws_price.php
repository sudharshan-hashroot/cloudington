<?php
        try {
            $product_data = "./whmcs/products.json";
            $jsondata = file_get_contents($product_data);
            $priceList = json_decode($jsondata);
            foreach ($priceList->product as $dkey => $products) {
                $products = json_decode(json_encode($products), true);
                $product_id = $products['pid'];
                

                if ($product_id == 100) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $a1_module  = json_decode(json_encode($products['module']), true); 
                    $a1_id = $products['pid'];
                    $a1_name  = $products['name'];
                    $a1_aed =  round($pricing['AED']['monthly']);      
                    $a1_gbp =  round($pricing['GBP']['monthly']); 
                    $a1_inr =  round($pricing['INR']['monthly']);        
                    $a1_usd =  round($pricing['USD']['monthly']); 
                    $a1_description = (explode("\r\n", $products['description'] ));
                    $a1_vcpu   = explode(" ",$a1_description[0]);
                    $a1_ram    = explode(" ",$a1_description[1]);
                    $a1_storage= explode(" ",$a1_description[2]);
                    $a1_region = $configoptions['configoption'][0]['options']['option'];
                    $a1_blueprint = $configoptions['configoption'][1]['options']['option'];
                    $a1_instance = $configoptions['configoption'][2]['options']['option'];
                }
                if ($product_id == 101) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $a2_module  = json_decode(json_encode($products['module']), true); 
                    $a2_id = $products['pid'];
                    $a2_name  = $products['name'];
                    $a2_aed =  round($pricing['AED']['monthly']);      
                    $a2_gbp =  round($pricing['GBP']['monthly']); 
                    $a2_inr =  round($pricing['INR']['monthly']);        
                    $a2_usd =  round($pricing['USD']['monthly']); 
                    $a2_description = (explode("\r\n", $products['description'] ));
                    $a2_vcpu   = explode(" ",$a2_description[0]);
                    $a2_ram    = explode(" ",$a2_description[1]);
                    $a2_storage= explode(" ",$a2_description[2]);
                    $a2_region = $configoptions['configoption'][0]['options']['option'];
                    $a2_blueprint = $configoptions['configoption'][1]['options']['option'];
                    $a2_instance = $configoptions['configoption'][2]['options']['option'];
                }
                if ($product_id == 102) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $a3_module  = json_decode(json_encode($products['module']), true); 
                    $a3_id = $products['pid'];
                    $a3_name  = $products['name'];
                    $a3_aed =  round($pricing['AED']['monthly']);      
                    $a3_gbp =  round($pricing['GBP']['monthly']); 
                    $a3_inr =  round($pricing['INR']['monthly']);        
                    $a3_usd =  round($pricing['USD']['monthly']); 
                    $a3_description = (explode("\r\n", $products['description'] ));
                    $a3_vcpu   = explode(" ",$a3_description[0]);
                    $a3_ram    = explode(" ",$a3_description[1]);
                    $a3_storage= explode(" ",$a3_description[2]);
                }
                if ($product_id == 103) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $a4_module  = json_decode(json_encode($products['module']), true); 
                    $a4_id = $products['pid'];
                    $a4_name  = $products['name'];
                    $a4_aed =  round($pricing['AED']['monthly']);      
                    $a4_gbp =  round($pricing['GBP']['monthly']); 
                    $a4_inr =  round($pricing['INR']['monthly']);        
                    $a4_usd =  round($pricing['USD']['monthly']); 
                    $a4_description = (explode("\r\n", $products['description'] ));
                    $a4_vcpu   = explode(" ",$a4_description[0]);
                    $a4_ram    = explode(" ",$a4_description[1]);
                    $a4_storage= explode(" ",$a4_description[2]);
                }
                if ($product_id == 104) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $a5_module  = json_decode(json_encode($products['module']), true); 
                    $a5_id = $products['pid'];
                    $a5_name  = $products['name'];
                    $a5_aed =  round($pricing['AED']['monthly']);      
                    $a5_gbp =  round($pricing['GBP']['monthly']); 
                    $a5_inr =  round($pricing['INR']['monthly']);        
                    $a5_usd =  round($pricing['USD']['monthly']); 
                    $a5_description = (explode("\r\n", $products['description'] ));
                    $a5_vcpu   = explode(" ",$a5_description[0]);
                    $a5_ram    = explode(" ",$a5_description[1]);
                    $a5_storage= explode(" ",$a5_description[2]);
                }
                if ($product_id == 105) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $a6_module  = json_decode(json_encode($products['module']), true); 
                    $a6_id = $products['pid'];
                    $a6_name  = $products['name'];
                    $a6_aed =  round($pricing['AED']['monthly']);      
                    $a6_gbp =  round($pricing['GBP']['monthly']); 
                    $a6_inr =  round($pricing['INR']['monthly']);        
                    $a6_usd =  round($pricing['USD']['monthly']); 
                    $a6_description = (explode("\r\n", $products['description'] ));
                    $a6_vcpu   = explode(" ",$a6_description[0]);
                    $a6_ram    = explode(" ",$a6_description[1]);
                    $a6_storage= explode(" ",$a6_description[2]);
                }
                if ($product_id == 106) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $a7_module  = json_decode(json_encode($products['module']), true); 
                    $a7_id = $products['pid'];
                    $a7_name  = $products['name'];
                    $a7_aed =  round($pricing['AED']['monthly']);      
                    $a7_gbp =  round($pricing['GBP']['monthly']); 
                    $a7_inr =  round($pricing['INR']['monthly']);        
                    $a7_usd =  round($pricing['USD']['monthly']); 
                    $a7_description = (explode("\r\n", $products['description'] ));
                    $a7_vcpu   = explode(" ",$a7_description[0]);
                    $a7_ram    = explode(" ",$a7_description[1]);
                    $a7_storage= explode(" ",$a7_description[2]);
                }
                

                if ($product_id == 65) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $am1_module  = json_decode(json_encode($products['module']), true); 
                    $am1_id = $products['pid'];
                    $am1_name  = $products['name'];
                    $am1_aed =  round($pricing['AED']['monthly']);      
                    $am1_gbp =  round($pricing['GBP']['monthly']); 
                    $am1_inr =  round($pricing['INR']['monthly']);        
                    $am1_usd =  round($pricing['USD']['monthly']); 
                    $am1_description = (explode("\r\n", $products['description'] ));
                    $am1_vcpu   = explode(" ",$am1_description[0]);
                    $am1_ram    = explode(" ",$am1_description[1]);
                    $am1_storage= explode(" ",$am1_description[2]);
                }
                if ($product_id == 67) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $am2_module  = json_decode(json_encode($products['module']), true); 
                    $am2_id = $products['pid'];
                    $am2_name  = $products['name'];
                    $am2_aed =  round($pricing['AED']['monthly']);      
                    $am2_gbp =  round($pricing['GBP']['monthly']); 
                    $am2_inr =  round($pricing['INR']['monthly']);        
                    $am2_usd =  round($pricing['USD']['monthly']); 
                    $am2_description = (explode("\r\n", $products['description'] ));
                    $am2_vcpu   = explode(" ",$am2_description[0]);
                    $am2_ram    = explode(" ",$am2_description[1]);
                    $am2_storage= explode(" ",$am2_description[2]);
                }
                if ($product_id == 47) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $am3_module  = json_decode(json_encode($products['module']), true); 
                    $am3_id = $products['pid'];
                    $am3_name  = $products['name'];
                    $am3_aed =  round($pricing['AED']['monthly']);      
                    $am3_gbp =  round($pricing['GBP']['monthly']); 
                    $am3_inr =  round($pricing['INR']['monthly']);        
                    $am3_usd =  round($pricing['USD']['monthly']); 
                    $am3_description = (explode("\r\n", $products['description'] ));
                    $am3_vcpu   = explode(" ",$am3_description[0]);
                    $am3_ram    = explode(" ",$am3_description[1]);
                    $am3_storage= explode(" ",$am3_description[2]);
                }
                if ($product_id == 48) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $am4_module  = json_decode(json_encode($products['module']), true); 
                    $am4_id = $products['pid'];
                    $am4_name  = $products['name'];
                    $am4_aed =  round($pricing['AED']['monthly']);      
                    $am4_gbp =  round($pricing['GBP']['monthly']); 
                    $am4_inr =  round($pricing['INR']['monthly']);        
                    $am4_usd =  round($pricing['USD']['monthly']); 
                    $am4_description = (explode("\r\n", $products['description'] ));
                    $am4_vcpu   = explode(" ",$am4_description[0]);
                    $am4_ram    = explode(" ",$am4_description[1]);
                    $am4_storage= explode(" ",$am4_description[2]);
                }
                if ($product_id == 49) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $am5_module  = json_decode(json_encode($products['module']), true); 
                    $am5_id = $products['pid'];
                    $am5_name  = $products['name'];
                    $am5_aed =  round($pricing['AED']['monthly']);      
                    $am5_gbp =  round($pricing['GBP']['monthly']); 
                    $am5_inr =  round($pricing['INR']['monthly']);        
                    $am5_usd =  round($pricing['USD']['monthly']); 
                    $am5_description = (explode("\r\n", $products['description'] ));
                    $am5_vcpu   = explode(" ",$am5_description[0]);
                    $am5_ram    = explode(" ",$am5_description[1]);
                    $am5_storage= explode(" ",$am5_description[2]);
                }
                if ($product_id == 50) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $am6_module  = json_decode(json_encode($products['module']), true); 
                    $am6_id = $products['pid'];
                    $am6_name  = $products['name'];
                    $am6_aed =  round($pricing['AED']['monthly']);      
                    $am6_gbp =  round($pricing['GBP']['monthly']); 
                    $am6_inr =  round($pricing['INR']['monthly']);        
                    $am6_usd =  round($pricing['USD']['monthly']); 
                    $am6_description = (explode("\r\n", $products['description'] ));
                    $am6_vcpu   = explode(" ",$am6_description[0]);
                    $am6_ram    = explode(" ",$am6_description[1]);
                    $am6_storage= explode(" ",$am6_description[2]);
                }
                if ($product_id == 51) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $am7_module  = json_decode(json_encode($products['module']), true); 
                    $am7_id = $products['pid'];
                    $am7_name  = $products['name'];
                    $am7_aed =  round($pricing['AED']['monthly']);      
                    $am7_gbp =  round($pricing['GBP']['monthly']); 
                    $am7_inr =  round($pricing['INR']['monthly']);        
                    $am7_usd =  round($pricing['USD']['monthly']); 
                    $am7_description = (explode("\r\n", $products['description'] ));
                    $am7_vcpu   = explode(" ",$am7_description[0]);
                    $am7_ram    = explode(" ",$am7_description[1]);
                    $am7_storage= explode(" ",$am7_description[2]);
                }

                
                if ($product_id == 91) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $as1_module  = json_decode(json_encode($products['module']), true); 
                    $as1_id = $products['pid'];
                    $as1_name  = $products['name'];
                    $as1_aed =  round($pricing['AED']['monthly']);      
                    $as1_gbp =  round($pricing['GBP']['monthly']); 
                    $as1_inr =  round($pricing['INR']['monthly']);        
                    $as1_usd =  round($pricing['USD']['monthly']); 
                    $as1_description = (explode("\r\n", $products['description'] ));
                    $as1_vcpu   = explode(" ",$as1_description[0]);
                    $as1_ram    = explode(" ",$as1_description[1]);
                    $as1_storage= explode(" ",$as1_description[2]);
                }
                if ($product_id == 92) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $as2_module  = json_decode(json_encode($products['module']), true); 
                    $as2_id = $products['pid'];
                    $as2_name  = $products['name'];
                    $as2_aed =  round($pricing['AED']['monthly']);      
                    $as2_gbp =  round($pricing['GBP']['monthly']); 
                    $as2_inr =  round($pricing['INR']['monthly']);        
                    $as2_usd =  round($pricing['USD']['monthly']); 
                    $as2_description = (explode("\r\n", $products['description'] ));
                    $as2_vcpu   = explode(" ",$as2_description[0]);
                    $as2_ram    = explode(" ",$as2_description[1]);
                    $as2_storage= explode(" ",$as2_description[2]);
                }
                if ($product_id == 93) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $as3_module  = json_decode(json_encode($products['module']), true); 
                    $as3_id = $products['pid'];
                    $as3_name  = $products['name'];
                    $as3_aed =  round($pricing['AED']['monthly']);      
                    $as3_gbp =  round($pricing['GBP']['monthly']); 
                    $as3_inr =  round($pricing['INR']['monthly']);        
                    $as3_usd =  round($pricing['USD']['monthly']); 
                    $as3_description = (explode("\r\n", $products['description'] ));
                    $as3_vcpu   = explode(" ",$as3_description[0]);
                    $as3_ram    = explode(" ",$as3_description[1]);
                    $as3_storage= explode(" ",$as3_description[2]);
                }
                if ($product_id == 94) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $as4_module  = json_decode(json_encode($products['module']), true); 
                    $as4_id = $products['pid'];
                    $as4_name  = $products['name'];
                    $as4_aed =  round($pricing['AED']['monthly']);      
                    $as4_gbp =  round($pricing['GBP']['monthly']); 
                    $as4_inr =  round($pricing['INR']['monthly']);        
                    $as4_usd =  round($pricing['USD']['monthly']); 
                    $as4_description = (explode("\r\n", $products['description'] ));
                    $as4_vcpu   = explode(" ",$as4_description[0]);
                    $as4_ram    = explode(" ",$as4_description[1]);
                    $as4_storage= explode(" ",$as4_description[2]);
                }
                if ($product_id == 96) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $as5_module  = json_decode(json_encode($products['module']), true); 
                    $as5_id = $products['pid'];
                    $as5_name  = $products['name'];
                    $as5_aed =  round($pricing['AED']['monthly']);      
                    $as5_gbp =  round($pricing['GBP']['monthly']); 
                    $as5_inr =  round($pricing['INR']['monthly']);        
                    $as5_usd =  round($pricing['USD']['monthly']); 
                    $as5_description = (explode("\r\n", $products['description'] ));
                    $as5_vcpu   = explode(" ",$as5_description[0]);
                    $as5_ram    = explode(" ",$as5_description[1]);
                    $as5_storage= explode(" ",$as5_description[2]);
                }
                if ($product_id == 97) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $as6_module  = json_decode(json_encode($products['module']), true); 
                    $as6_id = $products['pid'];
                    $as6_name  = $products['name'];
                    $as6_aed =  round($pricing['AED']['monthly']);      
                    $as6_gbp =  round($pricing['GBP']['monthly']); 
                    $as6_inr =  round($pricing['INR']['monthly']);        
                    $as6_usd =  round($pricing['USD']['monthly']); 
                    $as6_description = (explode("\r\n", $products['description'] ));
                    $as6_vcpu   = explode(" ",$as6_description[0]);
                    $as6_ram    = explode(" ",$as6_description[1]);
                    $as6_storage= explode(" ",$as6_description[2]);
                }
                if ($product_id == 98) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);                    
                    $pricing  = json_decode(json_encode($products['pricing']), true); 
                    $as7_module  = json_decode(json_encode($products['module']), true); 
                    $as7_id = $products['pid'];
                    $as7_name  = $products['name'];
                    $as7_aed =  round($pricing['AED']['monthly']);      
                    $as7_gbp =  round($pricing['GBP']['monthly']); 
                    $as7_inr =  round($pricing['INR']['monthly']);        
                    $as7_usd =  round($pricing['USD']['monthly']); 
                    $as7_description = (explode("\r\n", $products['description'] ));
                    $as7_vcpu   = explode(" ",$as7_description[0]);
                    $as7_ram    = explode(" ",$as7_description[1]);
                    $as7_storage= explode(" ",$as7_description[2]);
                }
             
                
             
            }
        } catch (Exception $e) {
            echo "error";
        }
    ?>