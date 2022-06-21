<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<style>
  body{
    background-color: plum;
  }
  /* *{
    margin: 0;
    padding: 0;

}

form{

    width: 500px;
    height:700px;
    background-color: skyblue;
    display: flex;
    justify-content: center;
    flex-direction: column;
     margin-left: 40%;
    margin-top: 100px;
    

}
h1{
    text-align: center;
    margin-top: 10px;
}
.pr{
    margin-top: 10px;
}
input{
    margin-left: 80px;
    width: 200px;
    margin-top: 20px;
    padding: 10px;

}
label{
    margin-left: 80px;
}
.submit{
    background-color: brown;
    width: 120px;
    margin-top: 20px;

} */


</style>
<body>
  <h1>Update User</h1>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="post" action = "" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName"  value="<?php echo $user->firstName;?>"name= "fname"class="form-control form-control-lg" />
                    <?php 
    //  echo form_error('fname')
    ?> 
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name = "lname" class="form-control form-control-lg" value="<?php echo $user->lastName;?>" />
                    <?php 
    //  echo form_error('lname')
    ?>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
               
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                 

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg"  name="email" value="<?php echo $user->email;?>"/>
                    <?php 
//  echo form_error('email')
  ?>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

<div class="form-outline">
  <input type="text" id="firstName" name  = "username"class="form-control form-control-lg"value="<?php echo $user->username;?>" />
  <?php 
//  echo form_error('username')
  ?>
  <label class="form-label" for="firstName">Username</label>
</div>

</div>
<div class="col-md-6 mb-4">

<div class="form-outline">
  <input type="password" id="firstName" name  = "password"class="form-control form-control-lg" value="<?php echo $user->password;?>" />
  <?php 
//  echo form_error('password')
  ?>

  <label class="form-label" for="firstName">Password</label>
</div>

</div>

                
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phone" value="<?php echo $user->telephone;?>"/>
                    <?php 
    //  echo form_error('phone')
    ?>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg" name="nationality" value="<?php echo $user->nationality;?>">
                  <?php 
    //  echo form_error('nationality')
    ?>
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                  <label class="form-label select-label">Choose Nationality</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="upadte" name="update" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>