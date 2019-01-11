<?php //include"includes/header.php";?>      
<?php addEmploy(); ?>
<?php
if(isset($_GET['edit']))
{
    $E_id=$_GET['edit'];
    $query="select * from employee where Eid='{$E_id}'";
    $result=mysqli_query($connection,$query);

    if(!$result)
    {
        die("Query failed".mysqli_error($connectioin));
    }
    
    echo "hello I am kaushal Agarwal";
    
    
}

?>            

           
<!--            <div class="container">-->
            <form class="form-horizontal" action=""  method="post">
                 <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="Eid">Employee ID</label>
                    
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="Eid" required>
                     </div></div>
                <div class="form-group form-group-sm">
                    <label  class="col-sm-3 control-label" for="Ename">Employee Name</label>
                    
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="Ename" required>
                    </div></div>
               <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label"  for="Edob">Employee DOB</label><div class="col-sm-4">
                    <input type="date" class="form-control" name="Edob">
                   </div></div>
               <div class="form-group form-group-sm">
                    <label  class="col-sm-3 control-label"  for="Edesignation">Designation</label>
                   <div class="col-sm-4">
                   <select name="Edesignation" id="Edesignation">
                   <?php
                      
                        $query1="select * from designation";
                        $the_result=mysqli_query($connection,$query1);
                         if(!$the_result)
                          die("query failed".mysqli_error($connection)); 
                       
                       while($row=mysqli_fetch_assoc($the_result))
                       {   $Dname=$row['Dname'];
                           echo "<option value='{$Dname}'>{$Dname}</option>";
                           
                       }
                    ?>
                   
                       
                   
                   </select>
                    
                     
<!--                     <input type="text" class="form-control" name="Edesignation" required>-->
                   </div></div>
                 <div class="form-group form-group-sm">
                    <label  class="col-sm-3 control-label"  for="Eemail">Email</label>
                    <div class="col-sm-4">
                    <input type="email" class="form-control" name="Eemail" required >
                     </div></div>
                
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label"  for="Emobil">Mobile no.</label><div class="col-sm-4">
                    <input type="tel" class="form-control" name="Emobil" required>
                    </div></div>
                 <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label"  for="Edoj">Employee DOJ</label><div class="col-sm-4">
                    <input type="date" class="form-control" name="Edoj" required>
                     </div></div>
               
                   
               
                <div class="form-group form-group-sm">
                    <input class="btn btn-primary focus " type="submit"  name="submit">
                </div>
           </form>    
<!--            </div>-->
<?php //include"includes/footer.php";?>
