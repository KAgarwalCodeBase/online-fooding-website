<?php //include"includes/header.php";?>
<?php include"includes/header.php";?>










<div class="container-fluid top">
<!-------------------------->  
<!------    header --------->
<!-------------------------->
   
    <div class="logo">
   <img src="includes/css/img/img4.png" class="img-responsiv img-circle" width="35%" height="100%">     
    </div>   
   
              
    <div class="cname">
               SN Enterprises
        </div>
    
                </div>
    
    
<div class="row">    
<!-------------------------->  
<!------ main area --------->
<!-------------------------->

  <!-------------------------->  
<!------ side bar  --------->
<!-------------------------->      
       <div class="sidebar container-fluid  col-sm-3 col-md-3 col-lg-3">
       
          
  <ul class="nav nav-pills nav-stacked">
    <li class="active">
    <a href="index.php?source=E_list">EMPLOYEE DETAILS</a></li>
    <li><a href="index.php?source=E_add">ADD EMPLOYEE</a></li>
    <li><a href="#">UPDATE EMPLOYEE DETAILS</a></li>
    <li><a href="index.php?source=addPost">ADD DESIGNATIONS</a></li>
    <li><a href="index.php?source=E_salary">PAYMENT SLIP</a></li>
  </ul>

       </div>
       
     
       
    
       
       
       
       
<!--------------------------------->  
<!------ main content area--------->
<!--------------------------------->      
       <div class="maincontent  col-sm-9 col-md-9 col-lg-9 container ">

<!--       cv cv cv c c cv zfsdvcfszdvfsd-->
<div class="main-content-formatting">
               <?php
               if(!isset($_GET['source']))
                   $_GET['source']="E_list";     
       switch($_GET['source'])
       {
           case "addPost":include"Edesignation.php";   
                  break;
       
           case  "E_salary": include"E_salary.php";  
                  break;
           case  "E_list": include"E_list.php";  
                  break;
           case  "E_add": include"E_add.php";  
                  break;

       }
    ?>

    import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		
	}
}
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		
	}
}
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		
	}
}
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		
	}
}
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		
	}
}
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		
	}
}
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Add extends HttpServlet
{
	public void service(HttpServletRequest req,HttpServletResponse res)throws IOException
	{
		int i=Integer.parseInt(req.getParameter("t1"));
		int j=Integer.parseInt(req.getParameter("t2"));
		int result=i+j;
		PrintWriter out= res.getWriter();
		out.println("Result:"+result);
		
		
	}
}

	}
}

       </div>
       </div>
    </div>
<!-------------------------->  
<!------ footer  ----------->
<!-------------------------->
<div class="row">    

<div class="footer col-lg-12">
    
    </div>
    </div> 
    </div>
<?php include"includes/footer.php";
?>