<?php 
include('connect.php');

        
        
            $F_Name="ms";
            $F_Phone="232323";
            $F_Occupation="ss";
            $M_Name="asasa";
            $M_Phone="233233";
            $M_Occupation="asass";
            $Guardian_is ="saas"; 
            $G_Name ="ascac"; 
            $G_Relation ="aeeeerg"; 
            $G_Email ="garge";
            $G_Phone ="43343434"; 
            $G_Occupation ="saswqe";
            $TEST="herherhe";
           
             $sql="INSERT INTO parents(`F_Name`,`F_Phone`,`F_Occupation`,`F_Photo`,`M_Name`,`M_Phone`,`M_Occupation`,`M_Photo`)VALUES('$F_Name','$F_Phone','$F_Occupation','$TEST','$M_Name','$M_Phone','$M_Occupation','$TEST')";

            // $sql.="INSERT INTO guradian(`Guardian_is`,`G_Name`,`G_Relation`,`G_Email`,`G_photo`,`G_Phone`,`G_Occupation`)VALUES(`$Guardian_is`,`$G_Name`,`$G_Relation`,`$G_Email`,`ytry`,`$G_Phone`,`$G_Occupation`)";
            if ($con->query($sql)===TRUE) {
                echo "DATA INSERT SUCCESS";
            }
            else
            {
                echo "Error ".$sql."<br>".$con->error;
            }
          
        
    
 ?>