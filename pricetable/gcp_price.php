<?php
        try {
            $product_data = "./whmcs/products.json";
            $jsondata = file_get_contents($product_data);
            $priceList = json_decode($jsondata);
            foreach ($priceList->product as $dkey => $products) {
                $products = json_decode(json_encode($products), true);
                $product_id = $products['pid'];

                if ($product_id == 17) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g1_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g1_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g1_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g1_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 18) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                    $g2_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                    $g2_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                    $g2_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                    $g2_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 20) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g3_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g3_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g3_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g3_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 21) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g4_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g4_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g4_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g4_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 22) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g5_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g5_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g5_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g5_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 23) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g6_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g6_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g6_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g6_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 24) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g7_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g7_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g7_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g7_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 25) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g8_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g8_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g8_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g8_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 26) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g9_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g9_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g9_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g9_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 27) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g10_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g10_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g10_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g10_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
                if ($product_id == 28) {
                    $configoptions = json_decode(json_encode($products['configoptions']), true);
                      $g11_aed =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['AED']['monthly']);      
                      $g11_gbp =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['GBP']['monthly']); 
                      $g11_inr =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['INR']['monthly']);        
                      $g11_usd =  round($configoptions['configoption'][1]['options']['option'][0]['pricing']['USD']['monthly']); 
                }
             
            }
        } catch (Exception $e) {
            echo "error";
        }
    ?>