<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
 body{
    background-color: plum;
 }



</style>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="post" action = "">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name  = "fname"class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name = "lname" class="form-control form-control-lg" />
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
                    <input type="email" id="emailAddress" class="form-control form-control-lg"  name="email"/>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

<div class="form-outline">
  <input type="text" id="firstName" name  = "username"class="form-control form-control-lg" />
  <label class="form-label" for="firstName">Username</label>
</div>

</div>
<div class="col-md-6 mb-4">

<div class="form-outline">
  <input type="password" id="firstName" name  = "password"class="form-control form-control-lg" />
  <label class="form-label" for="firstName">Password</label>
</div>

</div>

                
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phone"/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg" name="nationality">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                  <label class="form-label select-label">Choose Nationality</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" name="submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- <h1>User Registration</h1>
<form action="" method="post">
    <label for="fname">firstName</label>
    <input type="text" id="name"  name="fname" placeholder="Your firstname.."/>
    <label for="lname">lastname</label>
    <input type="text" id="email" name="lname" placeholder="Your lastname.."/>
   <label for="lname">Telephone</label>
    <input type="telephone" id="email" name="phone" placeholder="Your lastname.."/>
     <label for="lname">Email</label>
    <input type="email" id="text" name="email" placeholder="Your lastname.."/>
    <label for="lname">Username</label>
    <input type="text" id="text" name="username" placeholder="Your lastname.."/>
    <label for="lname">password</label>
    <input type="password" id="text" name="password" placeholder="Your lastname.."/>
    <label for="lname" name="nationality" >Nationality</label>
     <select name="nationality" style="margin-left: 5px;">
       <option value="rwamda">rwanda</option>
       <option value="kenya">kenya</option>
       <option value="tanzania">tanzania</option>
       <option value="Uganda">uganda</option>
     </select>
 <label for="gender"> Gender</label>
                   <input type="radio" name="gender" id="male" value="Male"><label for="Male"
                       class="special">Male</label>
                   <input type="radio" name="gender" id="female" value="Female"><label for="Female"
                       class="special">Female</label>
                     
              
  
   
    <input type="submit" name="submit" value="Submit" class="submit"/>
  </form> -->
</body>



</html>