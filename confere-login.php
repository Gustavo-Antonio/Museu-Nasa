<?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if (($login == 'adm') && ($senha == '1234')){
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: area-restrita/index-area-restrita.php");
    }

    else{
        echo ("<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <title>Login Nasa Museum</title>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!--===============================================================================================-->	
            <link rel='icon' type='image/png' href='imgs/icone.png'/>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='fonts/font-awesome-4.7.0/css/font-awesome.min.css'>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='fonts/Linearicons-Free-v1.0.0/icon-font.min.css'>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='fonts/iconic/css/material-design-iconic-font.min.css'>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='css/login.css'>
        <!--===============================================================================================-->
        </head>
        <body style='background-color: #999999;'>
            
            <div class='limiter'>
                <div class='container-login100'>
                    <div class='login100-more' style='background-image: url(imgs/fundo1.jpg);'></div>
        
                    <div class='wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50'>
                        <center><img src='imgs/Logo Museum.png'></center>
                        
                        
                        <form class='login100-form validate-form' method='post' action='confere-login.php'>
                            <span class='login100-form-title p-b-59'>
                            <center>Login</center>
                            </span>
        
                            <div class='wrap-input100 validate-input' data-validate='Digite um nome!'>
                                <span class='label-input100'>Usu??rio</span>
                                <input class='input100' type='text' name='txtlogin' placeholder='Usu??rio'>
                                <span class='focus-input100'></span>
                            </div>
                        
                            
        
                    
                            <div class='wrap-input100 validate-input' data-validate = 'Digite uma senha!'>
                                <span class='label-input100'>Senha</span>
                                <input class='input100' type='password' name='txtsenha' placeholder='*************'>
                                <span class='focus-input100'></span>
                    
                            </div>
                            <a href='#' style='hover=red;'> Esqueceu seu login ou senha?<a>
                            <br>
                            <br>
                            <a href='#' style='hover=red;'> N??o tem uma conta? Registre-se aqui.<a>
                            <br>
                            <br>
                            <br>
                          
                            <p style='color:red'> Usu??rio e(ou) senha incorreto(s)! <p> 
                            
                            <div class='flex-m w-full p-b-33'>
                            
        
                                
                            </div>
                            
                            <div class='container-login100-form-btn' >
                                <div class='wrap-login100-form-btn'>
                                    <div class='login100-form-bgbtn'></div>
                                    <center>
                                    <button type='submit' class='login100-form-btn' style='position: center'>
                                    <b>Entrar<b>
                                    </button>
                                    </center>
                                </div>
        
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        
        <!--===============================================================================================-->
            <script src='js/main.js'></script>
        
        </body>
        </html>");

        
    }

?>