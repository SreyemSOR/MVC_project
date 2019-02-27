<?php
$data =array();
flxible_function($data);
//Default page to load fro the first page is view
function flxible_function(&$data){ //Main action t ostart the system process
    $function = "view";
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function = $action; //Get function amne from action variable
    }
    $function($data); //call function name ($data)
}

function view(&$data){
    //this variable loop in view
    $data['employee_data']=m_get_data();
    $data['page']="employee/view";
}



function add(&$data){
    $data ['employee_data']=m_add_data();
    $data['page'] = 'employee/add';
}

function update(&$data){
    $data['page'] = 'employee/update';
}

function delete(&$data){
   // $data['page'] = 'employee/delete';
   $delete = m_delete_emplyee();
   if($delete){
       $action ='view';
   }else{
       echo 'cannot delete this record!';
   }
   header("Location:index.php?action=$action");
}


?>