<?php 
    include('../connection.php');
    session_start();
    ob_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style>
            /* BASIC */
            html {
            background-color: #56baed;
            }
            body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
            }
            a {
            color: #92badd;
            display:inline-block;
            text-decoration: none;
            font-weight: 400;
            }
            h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display:inline-block;
            margin: 40px 8px 10px 8px; 
            color: #cccccc;
            }
            /* STRUCTURE */
            .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column; 
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
            }
            #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: relative;
            padding: 0px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
            }
            #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
            }
            /* TABS */
            h2.inactive {
            color: #cccccc;
            }
            h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #5fbae9;
            }
            /* FORM TYPOGRAPHY*/
            input[type=button], input[type=submit], input[type=reset]  {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            }
            input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
            background-color: #39ace7;
            }
            input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            }
            input[type=text] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            }
            input[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            }
            input[type=text]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
            }
            input[type=text]:placeholder {
            color: #cccccc;
            }
            input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=password]:placeholder {
  color: #cccccc;
}
            /* ANIMATIONS */
            /* Simple CSS3 Fade-in-down Animation */
            .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            }
            @-webkit-keyframes fadeInDown {
            0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            }
            100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
            }
            }
            @keyframes fadeInDown {
            0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            }
            100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
            }
            }
            /* Simple CSS3 Fade-in Animation */
            @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            .fadeIn {
            opacity:0;
            -webkit-animation:fadeIn ease-in 1;
            -moz-animation:fadeIn ease-in 1;
            animation:fadeIn ease-in 1;
            -webkit-animation-fill-mode:forwards;
            -moz-animation-fill-mode:forwards;
            animation-fill-mode:forwards;
            -webkit-animation-duration:1s;
            -moz-animation-duration:1s;
            animation-duration:1s;
            }
            .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
            }
            .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
            }
            .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
            }
            .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
            }
            /* Simple CSS3 Fade-in Animation */
            .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.2s;
            }
            .underlineHover:hover {
            color: #0d0d0d;
            }
            .underlineHover:hover:after{
            width: 100%;
            }
            /* OTHERS */
            *:focus {
            outline: none;
            } 
            #icon {
            width:60%;
            }
        </style>
    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <!-- Icon -->
                <?php 
                    if(isset($_POST['login'])){
                        $email = $_POST['email'];
                        $password = md5($_POST['password']);
                        $query_select_user = "SELECT * FROM user WHERE email = '$email'";
                        $result_select_user =  $conn->query($query_select_user);
                        if($result_select_user->rowCount()<=0){ //email chua ton tai
                            $message_error = "Email chưa tồn tại";
                        }else{
                            $query_select_user_and_password = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
                            $result_select_user_and_password =  $conn->query($query_select_user_and_password);
                            if($result_select_user_and_password->rowCount()<=0){ //email chua ton tai
                                $message_error = "Nhập sai mật khẩu";
                            }else{
                                $row_select_user_and_password = $result_select_user_and_password->fetch();
                                unset($_SESSION['new_register']);
                                $_SESSION['user_login']['user_id'] = $row_select_user_and_password['user_id'];
                                $_SESSION['user_login']['user_name'] = $row_select_user_and_password['user_name'];
                                header('Location: ../index.php');
                            }
                        }
                    }
                ?>
                <div class="fadeIn first" style="height: 30px;">
                    <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
                    <h3 style="margin-top: 30px">ĐĂNG NHẬP</h3>
                </div>
                <!-- Login Form -->
                <form method="POST" action="">
                    <h5 style="color: red"><?php echo isset($message_error)?$message_error:"" ?></h5>
                    <input type="text" id="login" class="fadeIn second" value="<?php echo isset($_SESSION['new_register'])?$_SESSION['new_register']:"" ?>" name="email" placeholder="Email">
                    <input type="password" id="login" class="fadeIn second" name="password" placeholder="Password" required>
                    <input type="submit" name="login" class="fadeIn fourth" value="Đăng Nhập">
                </form>
                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a href="register.php" class="underlineHover">Đăng ký</a>
                </div>
            </div>
        </div>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </body>
</html>