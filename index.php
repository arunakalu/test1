<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Boostrap Div</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



        <script>
            //check page is fully loaded
            $("document").ready(function () {
                $("#btn1").click(function () {
                    //create variables for take the textbox values
                    $username = $("#txt1").val();
                    $upasswors = $("#txt2").val();
                    

                    //using post method to send value to server and take response
                    $.post("index_new.php",
                            {
                                //send data to cathe the $_REQUEST
                                uname: $username, upassword: $upasswors
                            }

                    , function (data, status) {
                        $result = data.trim();
                        if ($result == 1)
                        {
                            alert("Hey " + $username + "!  You are welcome to cPanel");
                            
                            //redirect to Congratulations.php form
                            window.location = "Congratulations.php";

                        }
                        else
                        {
                            alert("User Name or Password wrong." +"\nPlease check your User name and Password again.");
                            
                        }

                    }
                    );
                    ///

                });

            });
        </script>



    </head>
    <body >
        <div class="container">
            <br><br>

            <div class="row" >
                <div class="col-sm-12" style="background-color: #3300cc; color: #ffff33;">
                    <div class="row">
                        <div class="col-sm-12" style="background-color: #000066; color: #ffff33; padding-top: 20px; padding-bottom: 20px;"><h1 class="text-center">cPanel</h1></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="background-color: #0033cc; color: #ffffff;"> 

                            <form role="form">
                                <div class="form-group" style="padding-top: 40px; padding-left: 50px;padding-right: 50px;">
                                    
                                    <label>User Name</label>

                                    <input type="text" id="txt1" class="form-control">
                                </div>  
                                <div class="form-group" style="padding-top: 30px; padding-bottom: 30px; padding-left: 50px; padding-right: 50px;">
                                    <label>Password</label>
                                    <input type="password" id="txt2" class="form-control">
                                    <br>
                                    <br>
                                     <button type="button" class="btn btn-primary" id="btn1">Log in</button>
                                </div>  
                               
                            </form>



                        </div>
                    </div>


                </div>

            </div>

        </div>
    </body>
</html>
