<?php

include "db.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



        <div >
          <div>
            <div class="col-xl-10">
              <!-- <div class="card rounded-3 text-black"> -->
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class=" p-md-5 my-md-4">
      
                      <div class="text-center">
                        <img src="./Screenshot 2024-08-02 145104.png"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-2 mb-5 pb-1">We are The  TechproTeam</h4>
                      </div>
      
                      <form method="POST"action="login.php"enctype="multipart/form-data">
                        <p>Please login to your account</p>
      
                        <div  class="form-outline mb-2">
                          <input type="email" id="form2Example11" class="form-control"
                            placeholder="Phone number or email address" name ="username" />
                          <label class="form-label" for="form2Example11">Username</label>
                        </div>
      
                        <div  class="form-outline mb-4">
                          <input type="password" id="form2Example22" class="form-control" name="password" />
                          <label class="form-label" for="form2Example22">Password</label>
                        </div>
                         <div>
                         <input type="file" name="fileToUpload" id="fileToUpload">

                         </div>
                        <div class="text-center pt-1 mb-5 pb-1">
                          <input type="submit"  name="login" class="btn  btn-block fa-lg gradient-custom-2 mb-3  w-100"style="background-color:#ff0001" >
                          <label class="form-label" for="form2Example22">Login</label>

                            
                          <a class="text-muted" href="#!">Forgot password?</a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Don't have an account?</p>
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Create new</button>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>