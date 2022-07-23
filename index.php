<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/78af0e5939.js" crossorigin="anonymous"></script>
    <title>Purge Techno - City</title>
    <!-- favicon link  -->
    <link rel="shortcut icon" href="img/logo.b59bf2b7.svg" type="image/x-icon">
    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css link  -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	
	$toEmail = "mahmudul489@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	 
	"\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

                <form name="contactFormEmail" method="post">
                    <div class="email-signup">
                        <div class="email-img">
                            <img src="img/ButtonBar-Top&Longer-01.png" alt="">
                            <div class="input-one">
                                <input type="email" name="userEmail"
                                    placeholder="Just click here to enter your email address." required=""
                                    maxlength="250" value="" id="userEmail">
                            </div>
                        </div>
                        <div class="email-img-two">
                            <div class="img-shorter">
                                <img src="img/ButtonBar-Bottom&Shorter-01.png" alt="">
                                <div class="input-two">
                                    <input type="text" name="userName" id="userName"
                                        placeholder="Then, click here to enter your username." required=""
                                        maxlength="100" value="">
                                </div>
                            </div>
                            <div class="img-button-b">

                            <button type="submit" name="send" class="button">                                        
                                  </button>


                                <h3>Click to sign up!</h3>
                            </div>

                        </div>
                    </div>
                </form>
               
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>