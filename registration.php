<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>  
        <div>
            <form action="registration.php" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                                <h1>Registration</h1>
                                <p>Fill up the form</p>
                                <hr class ="col-mb-3">

                                <lable for="firstname" ><b>First Name</b></lable>
                                <input class="form-control" id="firstname" type="text" name="firstname" required >

                                <lable for="lastname" ><b>Last Name</b></lable>
                                <input class="form-control" id="lastname" type="text" name="lastname" required >

                                <lable for="email" ><b>email address</b></lable>
                                <input class="form-control" id="email"  type="email" name="email" required >

                                <lable for="phonenumber" ><b>Phone Number</b></lable>
                                <input class="form-control" id="phonenumber" type="text" name="phonenumber" required >

                                <lable for="password" ><b>Password</b></lable>
                                <input class="form-control" id="password" type="password" name="password" required >
                                <hr class ="col-mb-3">
                                <input class ="btn btn-primary"type="submit" id="register" name="create" value="Create">
                                <a href="login.php" class="ml-2">Login</a>
                                
                        </div>
                </div>
                </div>
            
            </form>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type ="text/javascript">
    $(function(){
        $('#register').click(function(e){


            var valid = this.form.checkValidity();
            if(valid){
            var firstname  =$('#firstname').val();
            var lastname   =$('#lastname').val();
            var  email     =$('#email').val();
            var phonenumber =$('#phonenumber').val();
            var password    =$('#password').val();

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data:{firstname:firstname, lastname:lastname,email:email,phonenumber:phonenumber,password:password},
                    success: function(data){
                        Swal.fire({
                                'title':'Successful',
                                'text': data,
                                'type': 'success'
                            })

                    },
                    error: function(data){
                        Swal.fire({
                                'title':'Error',
                                'text': 'there were errors while saving yhe data',
                                'type': 'error'
                            })
                        
                    }

                });

                
            }else{
                
            }


        });
            
    });
      
</script>
</body>
</html>