<?php require 'connect.php'?>
<?php
 
 $conn = mysqli_connect($servername, $username, $password, $db);
 $response = array();
 if(isset($_POST['email']))
 {
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            

            $query = "SELECT * FROM users";

            //get result
            $result = mysqli_query($conn,$query);
            $num = mysqli_num_rows($result);
            //fetch data
            //$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

            for ($i=0; $i < $num; $i++) { 
                $row = mysqli_fetch_array($result);
            
                $e = $row['email'];
                if($e === $email)
                {
                    $response['error'] = true;
                    $response['message'] = "user already exists";

                }else {
                    $response['error'] = false;
                    $response['message'] = "everything fine";
                }

        
        
                
            }
      
                
            echo json_encode($response);
        }
    
    



?>