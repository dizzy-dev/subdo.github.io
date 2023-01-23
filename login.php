<?php
date_default_timezone_set("Asia/Makassar");
include "tools.php";
	$dizzy = file_get_contents("dizzy.txt");
if(isset($_POST['dizzy']))
{
    
        if($dizzy == $_POST['dizzy'])
        {
            $hasil = TRUE;
            $dizzy = $_POST['dizzy'];
        }else{
        	$hasil = FALSE;
        	}
    
    
    if($hasil){ 	
    redirect('./domain.php?dizzy='.$dizzy.'');
    	}
    	}
?>    	
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Yongkru</title>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }

        html,body{
        height: 100%;
        }

        body{
        display: grid;
        place-items: center;
        text-align: center;
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 20s ease infinite;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .content{
        width: 330px;
        background: #dde1e7;
        border-radius: 10px;
        padding: 40px 30px;
        box-shadow: -3px -3px 7px #ffffff73,
                    2px 2px 5px rgba(94, 104, 121, 0.288);
        }

        .content .text{
        font-size: 33px;
        font-weight: 600;
        margin-bottom: 35px;
        color: #000;
        }

        .content .field{
        height: 50px;
        width: 100%;
        display: flex;
        position: relative;
        }

        .field input{
        height: 100%;
        width: 100%;
        padding-left: 45px;
        font-size: 15px;
        outline: none;
        border: none;
        color: #595959;
        background: #dde1e7;
        border-radius: 25px;
        box-shadow: inset 2px 2px 5px #babecc,
                    inset -5px -5px 10px #ffffff73;
        }

        .field input:focus ~ label{
        box-shadow: inset 2px 2px 5px #babecc,
                    inset -1px -1px 2px #ffffff73;
        }

        .field:nth-child(2){
        margin-top: 20px;
        }

        .field span{
        position: absolute;
        width: 50px;
        line-height: 50px;
        color: #595959;
        }

        .field label{
        position: absolute;
        top: 50%;
        left: 45px;
        pointer-events: none;
        color: #666666;
        transform: translateY(-50%);
        }


        .field input:focus ~ label{
        opacity: 0;
        }

        .forgot-pass{
        text-align: left;
        margin: 10px 0 10px 5px;
        }

        .forgot-pass a{
        font-size: 16px;
        color: #3498db;
        text-decoration: none;
        }

        .forgot-pass:hover a{
        text-decoration: underline;
        }

        button{
        margin: 15px 0;
        width: 100%;
        height: 50px;
        color: #000;
        font-size: 18px;
        font-weight: 600;
        background: #dde1e7;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 25px;
        box-shadow: 2px 2px 5px #babecc,
                    -5px -5px 10px #ffffff73;
        }

        button:focus{
        color: #3498db;
        box-shadow: inset 2px 2px 5px #babecc,
                    inset -5px -5px 10px #ffffff73;
        }

        .signup{
        font-size: 13px;
        color: #595959;
        margin: 10px 0;
        }

        .signup a{
        color: #000;
        text-decoration: none;
        }

        .signup a:hover{
        text-decoration: underline;
        }
</style>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="content">
<div class="text">DOMAIN.COM</div>
<form method="POST" action="" autocomplete="off">
<div class="field">
<span class="fas fa-lock"></span>
<input type="text" name="dizzy" placeholder="Masukan Password" required>
</div>
<button type="submit">LOGIN</button>
<div class="signup">Created with ❤️ by
<a href="https://wa.me/6283892120320">Dizzycloud</a>
</div>
</form>
</div>
</body>
</html>
