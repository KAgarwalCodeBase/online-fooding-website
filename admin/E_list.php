<?php //include"includes/header.php";?>
<?php deleteEmployeRecord();?>


<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
        <td>S.no</td>
        <td>Employee ID</td>
        <td>Employee Name</td>
        
          <td>DOJ</td>
        <td>Designation</td>
        <td>DOB</td>
        <td>Email</td>
        <td>Mobile no.</td>
      
       
      </thead>
    <tbody>
       <?php displayEmployRecord();?>
        </tbody>
</table>
</div>


<?php //include"includes/footer.php";?>