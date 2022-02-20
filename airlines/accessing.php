﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Waves</title>
        <link rel="stylesheet" href="style.css">
        <script async src="scripts/jquery.js"></script>
        <style>
            body{
    background-color: #fff;
    top: -5px;
    width: 100%;
}

a{
    text-decoration: none;
    color: black;
}

.span-header-style{
    font-size: 48px;
    font-weight: bold;
    position: absolute;
    top: 5px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.shapka-settings{
    width: auto;
    top: 0px;
    background-color: #eeef;
    height: 50px;
    border: 0px;
    border-radius: 0 10px 10px 0;
}

.content-verst{
    height: 455px;
    width: 1300px;
    text-align: center;
    margin-top: 250px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    background-color:#eeef;
}

.content-pic-pos-1st-line{
    position: absolute;
    height: 200px;
    width: 1300px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    border: 0px;
    border-radius: 15px;
}

.content-pic-pos-2st-line{
    position: absolute;
    height: 200px;
    width: 1300px;
    margin-top: 215px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
}

.element::-webkit-scrollbar {
    width: 0;
  }

  ::-webkit-scrollbar {
    width: 0;
  }

.login{
    position: absolute;
    top: 17px;
    right: 10px;
    width: 50px;
    height: 30px;
}
.icons{
    width: 30px;
    height: 30px;
}
.log-link{
    text-decoration: none;
}
.main-frame-log{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.sign-in-btn{
    position: relative;
    top: 24px;
    background-color: #ccc;
    border: 0px solid;
    border-radius: 15px;
    font-size: 40px;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
}
.sign-in-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.sign-up-btn{
    position: relative;
    top: 44px;
    background-color: #ccc;
    border: 0px solid;
    border-radius: 15px;
    font-size: 40px;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
}
.sign-up-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.back-btn{
    position: relative;
    top: 64px;
    background-color: #ccc;
    border: 0px solid;
    border-radius: 15px;
    font-size: 40px;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
    color: black;
    cursor: pointer;
}
.back-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.login-div{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.logup-div{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.loginup-back-btn{
    position: relative;
    bottom: 0px;
    background-color: #ccc;
    width: 120px;
    margin: auto auto;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 125px;
    left: 60px;
    cursor: pointer;
}
.loginup-back-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.loginup-back-btn-2{
    position: relative;
    background-color: #ccc;
    width: 120px;
    margin: 0 0;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 60px;
    left: 300px;
    cursor: pointer;
}
.loginup-back-btn-2:hover{
    background-color: #cff;
    transition: 0.3s;
}
.login-login-enter-bar{
    position: relative;
    margin: auto auto;
    top: 45px;
    left: 12px;

}
.login-password-enter-bar{
    position: relative;
    margin: auto auto;
    top: 65px;
    
}
.h1_sign_up_in{
    background-color: #ccc;
    border: 0px solid;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
}
#input{
    border: 0px;
    background-color: #ccc;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    cursor: pointer;
}
.log_in_btn{
    position: relative;
    background-color: #ccc;
    width: 120px;
    margin: 0 0;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 105px;
    left: 175px;
    cursor: pointer;
}
.log_in_btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
#input:hover{
    background-color: #cff;
    transition: 0.3s;
}
.log-up-login-psw{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.log_up_user_1stname_enter_bar{
    position: relative;
    top: 20px;
    left: 9px;
}
.log_up_user_2ndname_enter_bar{
    position: relative;
    top: 30px;
}
.log_up_user_bday_enter_bar{
    position: relative;
    top: 40px;
    left: 4px;
}
.log_up_user_email_enter_bar{
    position: relative;
    top: 50px;
    left: 25px;
}
.next-log-up-btn{
    position: relative;
    background-color: #ccc;
    width: 120px;
    margin: 0 0;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 80px;
    left: 175px;
    cursor: pointer;
}
.next-log-up-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}

.wrong_enter_red_light{
    background-color: rgb(230, 67, 67);
}
.back_to_index{
    position: absolute;
    height: 30px;
    width: 180px;
    top: 17px;
    right: 20px;
    text-align: center;
    font-size: 18px;
    font-weight: bolder;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    border: 0px;
    border-radius: 12px;
    cursor: pointer;
}
.back_to_index:hover{
    background-color: #cff;
    transition: 0.3s;
}
.bck_text{
    position: relative;
    top: 3px;
}
.div_4_offers{
    position: relative;
    top: 80px;
    background-color: #eeef;
    height: 350px;
    width: 1000px;
    margin: auto auto;
    border: 0px;
    border-radius: 10px;
}
.div_4_pic{
    position: relative;
    margin: auto 0;
    background-color: #ccc;
    height: 200px;
    width: 400px;
    top: 35px;
    left: 15px;
}
.div_4_h1{
    position: absolute;
    height: 80px;
    width: 500px;
    top: 35px;
    right: 40px;
    text-align: center;
    font-size: 60px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bolder;
}   
.div_4_info{
    position: absolute;
    height: 45px;
    width: 500px;
    right: 40px;
    top: 135px;
    background-color: #ccc;
    text-align: center;
}
.div_4_comp{
    position: absolute;
    top: 195px;
    right: 195px;
    height: 20px;
    width: 200px;
    background-color: #ccc;
    text-align: center;
    font-weight: bold;
    border: 0px;
    border-radius: 10px;
}
.div_4_button{
    position: absolute;
    background-color: #ccc;
    bottom: 25px;
    height: 40px;
    width: 180px;
    right: 400px;
    border: 0px;
    border-radius: 10px;
    cursor: pointer;
}
.div_4_button:hover{
    background-color: #cff;
    transition: 0.3s;
}
.buy_button{
    position: absolute;
    top: 2px;
    left: 65px;
    font-size: 28px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bolder;
}
.center-text{
    text-align: center;

}
        </style>
        
        <script>

        </script>
    </head>

    <body>
        <?php include("blocks/header.php"); ?>
       
        <?php
            if (isset($_REQUEST['hdn_unique'])){
                $unq = $_REQUEST['hdn_unique'];
                if ($unq == "in"){
                    $login = $_REQUEST['hdn_login'];
                    $password = $_REQUEST['hdn_password'];

                    $db = mysql_connect('localhost', 'root', '');
                    mysql_select_db('waves', $db);
                    mysql_set_charset('utf8');
                    
                    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
                    $query_polz = mysql_query($query);
                    $mas = mysql_fetch_array($query_polz);

                    
                    if (mysql_fetch_array($query_polz)){
                        if ($mas['first_name'] == 'admin'){
                            echo"
                            <div class='center-text'><h1>Welcome back, {$mas['first_name']}!</h1><br>
                            <div class='back_to_index'><span class=bck_text><a href='admin_index.php'>Start working</a></span></div></div>
                            ";
                        }
                        else{
                            echo "
                            <div class='center-text'><form action='index.php' method='get'>
                                <h1>Welcome back, {$mas['first_name']}!</h1><br>
                                <input type='hidden' name='id' value='{$mas['id']}'>
                                <input type='submit' value='Continue'>
                            </form></div>";
                        }
                        
                        
                    } 
                    else{
                        echo "
                        <div class='center-text'><h1>Error!</h1><br>    
                        User {$login} doesn't exist!<br><div class='back_to_index'>
                        <span class=bck_text><a href='log.php'>Back to log</a></span></div></div>
                        ";
                    }


                }
                else if($unq == "up"){
                    $login = $_REQUEST['hdn_login'];
                    $password = $_REQUEST['hdn_password'];
                    $first_name = $_REQUEST['hdn_first_name'];
                    $second_name = $_REQUEST['hdn_second_name'];
                    $email = $_REQUEST['hdn_email'];
                    $bday = $_REQUEST['hdn_bday'];

                    $db = mysql_connect('localhost', 'root', '');
                    mysql_select_db('waves', $db);
                    mysql_set_charset('utf-8');

                    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
                    $query_polz = mysql_query($query);
                    $mas = mysql_fetch_array($query_polz);

                    if (mysql_fetch_array($query_polz))
                    {
                        echo "<div class='center-text'><h1>Error!</h1><br>User {$mas['first_name']} {$mas['login']} {$mas['second_name']} exists <br> <div class='back_to_index'>
                        <span class=bck_text><a href='log.php'>Back to log</a></span></div></div>";
                    }
                    else{
                        $query1 = "INSERT INTO users (first_name, second_name, email, bday, login, password) VALUES ('$first_name', '$second_name', '$email', '$bday', '$login', '$password')";
                        $rez = mysql_query($query1);
                        if ($rez == true){
                            echo "<div class='center-text'><h1>Congratulationes!</h1><br>New user {$mas['login']} is logged up.<br><div class='back_to_index'>
                            <span class=bck_text><a href='log.php'>Back to log</a></span></div></div>";
                        } else{
                            echo "<div class='center-text'><h1>Error!</h1><br>Fatal error in inserting new user.<br><div class='back_to_index'>
                            <span class=bck_text><a href='log.php'>Back to log</a></span></div></div>";
                        }
                    }
                }
            }
            else{
                echo "<div class='center-text'>Error!<div class='back_to_index'>
                <span class=bck_text><a href='log.php'>Back to log</a></span></div></div>";
            }
        ?>
    </body>

</html>