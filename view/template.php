<!DOCTYPE html>
<html>
   <title>User</title>
   <script src="view/jquery-1.9.1.js" ></script>
   <script src="view/list.js" ></script>
   <script src="view/bootstrap-3.3.7/js/bootstrap.min.js"></script>
   <link href="view/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
   <link href="view/style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body data-gr-c-s-loaded="true">
<div class="container mt-4">
   
   <div class="card col-sm-6">
       <legend class="header">
           <h3 class="pull">User Manager</h3>
       </legend>
       
       <?php //random pages 
       include "view/". $data['page'] . ".php";   
       //add all page
     // include "view/employee/view.php";  //add page one by one
     ?>        
      

        
         
</div>
   </div> 
    
</body>
</html>
