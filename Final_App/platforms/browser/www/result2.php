<?php 
    require("config.php"); 
    header('Access-Control-Allow-Origin: *');  
    
   /* if(!empty($_POST)){ 
        
        $query = "CALL InsertResult(?,?,?,?)"; 
         
        // Security measures
        
        try {  
            $stmt = $db->prepare($query); 
			$stmt->bindParam(1, $_POST['q1'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
			$stmt->bindParam(2, $_POST['q2'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
			$stmt->bindParam(3, $_POST['q3'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
			$stmt->bindParam(4, $_POST['q4'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
            $result = $stmt->execute(); 
        } 
        catch(PDOException $ex){ 
            
            die("Failed to run query: " . $ex->getMessage());
            echo("Failed to run query". $ex->getMessage());
                               
        
        } 
        */
        
        $query = "CALL exportResults(?)"; 
        $value = 2;
        // Security measures
        
        try {  
            $stmt = $db->prepare($query); 
			$stmt->bindParam(1, $value, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
            $result = $stmt->execute(); 
        } 
        catch(PDOException $ex){ 
            
            
            die("Failed to run query: " . $ex->getMessage());
            echo("Failed to run query". $ex->getMessage());
            
        
        } 

        $row = $stmt->fetch(); 
        
        if($row){ 
            
          
           
           $data = Array($row['Yes'],$row['Maybe'],$row['No']);
           
           echo json_encode($data);
           
           
       } 
 
   // } 
?> 
