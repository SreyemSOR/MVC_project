
<?php
//select data from db 
function m_get_data(){
    $query = "Select * from employee"; //select data from tbl_employee
    include "connection.php";
    $result = mysqli_query($conn,$query); // connect to db and query
    $rows = []; 
    if($result && mysqli_num_rows($result)>0){ //check if selcet can get the result is rows or not 
        while ($get_array = mysqli_fetch_assoc($result)){ //loop it for get array
            $rows[]= $get_array;
        }
    }
  
    return $rows;

}
    function m_delete_emplyee(){
        include 'connection.php';
        $id = $_GET['id'];
        $query = "DELETE FROM  employee WHERE id = '$id'";
        $result =mysqli_query($conn,$query);
        return $result;
    }

 function m_update_employee(){
     include 'connection.php';
     include 'add.php';
     $id = $_GET['id'];
     if(isset($_POST['btn-save'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $salary=$_POST['salary'];
        $query = "UPDATE FROM  employee WHERE (firstname='$fname',lastname='$lname',age='$age',salary='$salary')";
        $result = mysqli_query($conn, $query);
        return $result;
       
    }
    

 }