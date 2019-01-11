<?php 
function addEmploy()
{
    global $connection;
if(isset($_POST['submit']))
{ $Eid=$_POST['Eid'];
  $Ename=$_POST['Ename'];
  $Edob=$_POST['Edob'];  
  $Edesignation=$_POST['Edesignation'];
  $Eemail=$_POST['Eemail'];  
  $Emobil=$_POST['Emobil'];
  $Edoj=$_POST['Edoj'];  
 
$query = "insert into employee(Eid,Ename,Edob,Edesignation,Eemail,Emobil,Edoj) ";
$query.="values ('{$Eid}','{$Ename}','{$Edob}','{$Edesignation}','{$Eemail}','{$Emobil}','{$Edoj}')";
    $result=mysqli_query($connection,$query);
    if(!$result)
       die("query failed".mysqli_error($connection));
}

}
?>


<?php
function displayEmployRecord()
{    global $connection;
    $query="select * from employee";
        $result=mysqli_query($connection,$query);
         $SNO=0;
        while($row=mysqli_fetch_assoc($result))
        {   
              $SNO=$SNO+1;
              $Eid=$row['Eid'];
              $Ename=$row['Ename'];
              $Edob=$row['Edob'];  
              $Edesignation=$row['Edesignation'];
              $Eemail=$row['Eemail'];  
              $Emobil=$row['Emobil'];
              $Edoj=$row['Edoj'];  

                 
                 
            echo "<tr>";
            echo "<td>$SNO</td>";
            echo "<td>$Eid</td>";
            echo "<td>$Ename</td>";
            echo "<td>$Edoj</td>";
            
            echo "<td>$Edesignation</td>";
            echo "<td>$Edob</td>";
            echo "<td>$Eemail</td>";
            echo "<td>$Emobil</td>";
            
            echo "<td><a href='E_list.php?delete=$Eid'>DELETE</a></td>";
            echo "<td><a href='E_add.php?edit=$Eid'>EDIT</a></td>";
            echo "<td><a href='#'>ADD</a></td>";
            echo "</tr>";    
        
        
        }
}
?>




<?php
 function employSalarySlip()
{   global $connection;
    $query1="select * from employee";
        $result1=mysqli_query($connection,$query1);
        if(!$result1)
            die("query failed".mysqli_error($connection));
        $SNO=0;
        while($row1=mysqli_fetch_assoc($result1))
         { $SNO=$SNO+1;
           $Eid=$row1['Eid'];
           $Ename=$row1['Ename'];
                      echo "<tr>";
                      echo "<td>$SNO</td>";
                      echo "<td>$Eid</td>";
                      echo "<td>$Ename</td>";
               $Edesignation=$row1['Edesignation'];
               $query2="select * from designation where Dname='$Edesignation'";
                $result2=mysqli_query($connection,$query2);
                if(!$result2)
                    die("query failed".mysqli_error($connection));
                      
          
               while($row2=mysqli_fetch_assoc($result2))
                {
                      $Dname=$row2['Dname'];
                      $DBasicSalary=$row2['DBasicSalary'];  
                      $DHRA=$row2['DHRA'];
                      $DTA=$row2['DTA'];  
                      $DDA=$row2['DDA'];
                      $DMedicalAllowance=$row2['DMedicalAllowance'];  
                      $DIncentive=$row2['DIncentive'];   
                      $DTotal= $DBasicSalary+$DHRA+$DTA+$DDA+$DMedicalAllowance+$DIncentive;
                      echo "<td>$DBasicSalary</td>";
                      echo "<td>$DHRA</td>";
                      echo "<td>$DTA</td>";
                      echo "<td>$DDA</td>";
                      echo "<td>$DMedicalAllowance</td>";
                      echo "<td>$DIncentive</td>";
                      echo "<td>$DTotal</td>";
                      echo "</tr>";  
                }
        }

}
?>







<?php 
function addDesignation()
{global $connection;
if(isset($_POST['Dsubmit']))
{
  $Dname=$_POST['Dname'];
  $DBasicSalary=$_POST['Dbsalary'];  
  $DHRA=$_POST['Dhra'];
  $DTA=$_POST['Dta'];  
  $DDA=$_POST['Dda'];
  $DMedicalAllowance=$_POST['Dma'];  
  $DIncentive=$_POST['Di'];  

$query = "insert into designation(Dname,DBasicSalary,DHRA,DTA,DDA,DMedicalAllowance,DIncentive) ";
$query.="values ('{$Dname}','{$DBasicSalary}','{$DHRA}','{$DTA}','{$DDA}','{$DMedicalAllowance}',{$DIncentive})";
    $result=mysqli_query($connection,$query);
    if(!$result)
       die("query failed".mysqli_error($connection));
}}
?>





<?php

function deleteEmployeRecord()
{global $connection;
if(isset($_GET['delete']))
{
    $E_id=$_GET['delete'];
    $query="delete from employee where Eid='{$E_id}'";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        die("query failed".mysqli_error($connection));
    }
}
}
?>