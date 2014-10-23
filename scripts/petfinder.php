<?php
        header("Content-Type: application/json");
        
        $lastOffset=$_REQUEST["offset"];
        $id = $lastOffset;
        $options = array(
                'cacheDir' => '/tmp/',
                'lifeTime' => 18000
        );
                $API_SECRET = "699f92103535d2c2ac96727eb3198620";
                $API_PUBLIC = "bc71418f1c279e171b924fb2afc692dd";
                $API_URL = "http://api.petfinder.com/";
                $API_COMMAND = "shelter.getPets";
                $options = "?key=".$API_PUBLIC."&id=ON233&offset=".$lastOffset."&count=10&output=full&format=json";
                $request = $API_URL.$API_COMMAND.$options;
                $handle = fopen($request, "r");
                $contents = stream_get_contents($handle);
                fclose($handle);
        print($contents);
?>