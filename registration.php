<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: #f2f2f2;
        }
        .heading {
            text-align: center;
            font-size: 4rem;
            color: #333;
            background: #66ff66;
        }

        .heading span {
            color: #fff;
        }
        .signup {
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 2rem;
        }
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 2.5rem;
            box-shadow: 0.5rem 0.5rem rgba(0, 0, 0, 0.1);
            border: 0.1rem solid rgba(0, 0, 0, 0.1);
            background: #fff;
            border-radius: 0.5rem;
            width: 90%;
            max-width: 40rem;
        }
        label {
            color: #000;
            font-size: 1rem;
            align-self: flex-start;
            margin-top: 1rem;
        }
        .box {
            align-self: justify;
            padding: 0.5rem;
            font-size: 1rem;
            color: #333;
            text-transform: none;
            border: 0.1rem solid rgba(0, 0, 0, 0.1);
            margin: 0.7rem 0;
            border-radius: 0.2rem;
            width: 80%;
        }
        input[type="submit"] {
            padding: 1rem 2rem;
            font-size: 1.5rem;
            color: #fff;
            background: #66ff66;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 1rem;
        }

        input[type="submit"]:hover {
            background: #55cc55;
        }
        .alert_warning {
            
            background-color:#ff000080;
            font-size: 1rem;
            align-self: flex;
            padding :1rem 2rem;
            border-radius:0.5rem;
        }
       

        /* Responsive Design */
        @media (max-width: 768px) {
            .heading {
                font-size: 3rem;
            }

            form {
                width: 95%;
                padding: 1.5rem 2rem;
            }

            label {
                font-size: 1.2rem;
            }

            .box {
                font-size: 1.2rem;
            }

            input[type="submit"] {
                font-size: 1.2rem;
            }

        }

    </style>
</head>
<body>
<?php 

?>

<section class="signup" id="signup">
    <h1 class="heading"><span>Sign</span>up</h1>

        <div class="row">
                            
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<p class ='alert_warning'>All fields shoulf fill !</p>";
                        }elseif($_GET["error"] == "invalidemail"){
                            echo "<p class ='alert_warning'>This e mail is not valid !</p>";
                        }
                        elseif($_GET["error"] == "alreadyregister"){
                            echo "<p class ='alert_warning'>This e-mail have alredy registered !</p>";
                        }
                        elseif($_GET["error"] == "pwdlenth"){
                            echo "<p class ='alert_warning'>Passwords should contin at least 8 characters !</p>";
                        } elseif($_GET["error"] == "passwordsmismatch"){
                            echo "<p class ='alert_warning'>Passwords mismatch !</p>";
                        }

                    }
                ?>
           
            <form action="includes/registration.inc.php" method="post">
                <input type="text" id="name" name="name"  class="box"  placeholder ="name..">
                
    
                <input type="email" id="email" name="email" required class="box" placeholder ="email..">
                
            
                <input type="tel" id="mobile" name="mobile" required class="box" placeholder ="mobile">
                
                
                <input type="text" id="address" name="address" required class="box" placeholder ="addres">
                
                
                <input type="password" id="password" name="password" required class="box" placeholder ="password">
                
                <input type="password" id="password_verify" name="password_verify" required class="box" placeholder ="password ">
                
                <input type="submit" value="Sign Up" name="submit">
            </form>
        </div>
</section>

</body>
</html>
