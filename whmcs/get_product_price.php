<?php
try {
    $product_data = "products.json";
    $jsondata = file_get_contents($product_data);
    $priceList = json_decode($jsondata);
    // echo "<pre>"; print_r($priceList->product); echo "</pre>";

    foreach ($priceList->product as $dkey => $products) {
    
        $products = json_decode(json_encode($products), true);
        $product_id = $products['pid'];
        $product_name = $products['name'];
        

   
        if ($product_id == 52) {      
            $configoptions = json_decode(json_encode($products['configoptions']), true);                    
            $pricing  = json_decode(json_encode($products['pricing']), true); 
            $a1_module  = json_decode(json_encode($products['module']), true); 
            $a1_id = $products['pid'];
            $a1_name  = $products['name'];
            $region = $configoptions['configoption'][1];
            $blueprint = $configoptions['configoption'][1]['options']['option'];

            $a1_aed =  round($pricing['AED']['monthly']);      
            $a1_gbp =  round($pricing['GBP']['monthly']); 
            $a1_inr =  round($pricing['INR']['monthly']);        
            $a1_usd =  round($pricing['USD']['monthly']); 
            $a1_description = (explode("\r\n", $products['description'] ));
            $a1_vcpu   = explode(" ",$a1_description[0]);
            $a1_ram    = explode(" ",$a1_description[1]);
            $a1_storage= explode(" ",$a1_description[2]);

            echo "<br>";
            echo "<b>Regions</b>";
            echo "<pre>";  
            echo json_encode($configoptions);
            echo "</pre>";  
        
        //  foreach($region as $i){
        //      echo $i['name']."- <b>".$i['id']."</b>";
        //      echo "<br>";
        //  }
         echo "<br>";
         echo "<b>Blueprint</b>";
         echo "<br>";     
      foreach($blueprint as $i){
          echo $i['name']."- <b>".$i['id']."</b>";
          echo "<br>";
      }
      echo "<br>";
   
 
      
         
        
     

        }
     
  
       

       
    }
} catch (Exception $e) {
    echo "error";
}
?>