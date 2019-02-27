  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                    <div class="card show-lg">
                            <div class="card-body">
                                <a href="index.php"><button class="material-icons btn-warning text-info">arrow_back </button></a><hr>
                               <form action="index.php" method="POST">
                                   <div class="form-group">
                                       <input type="text" name="fname" class="form-control" placeholder="firstname" required>
                                   </div>
                                   <div class="form-group">
                                       <input type="text" name="lname" class="form-control" placeholder="Lastname" required>
                                   </div>
                                   
                                   <div class="form-group">
                                        <input type="text" name="age" class="form-control" placeholder="Age" required>
                                    </div>
                                   
                                   <div class="form-group">
                                       <input type="number" name="salary" class="form-control" placeholder="salary" required>
                                   </div>
                                  
                                 
                                    <div class="form-group">
                                           <button class="btn btn-primary " type="submit" name="btn-add">Add Row</button>
                                           <button class="btn btn-danger float-right " type="submit" name="btn-delete">Delete Row</button>
                                           
                                    </div>
                                    <button class="btn btn-success " type="submit" name="btn-save">Save</button>
                                    
                               </form>
                            </div>
                        </div>
            </div>
            <div class="col-4"></div>
        </div>

        <?php
        include_once 'connection.php';
       
        if(isset($_POST['btn-save'])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $age=$_POST['age'];
            $salary=$_POST['salary'];
            $query = "INSERT INTO   employee(firstname,lastname,age,salary) VALUES('$fname','$lname','$age','$salary')";
            $result = mysqli_query($conn, $query);
            return $result;
           
        }

        ?>
  
