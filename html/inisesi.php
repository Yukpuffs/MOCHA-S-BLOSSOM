<?php include 'header.php' ?>

<form action="../conexion/servidor_ini.php" method="post" id="formularioinicio">
    <div class="container-fluid row mt-5 ">
            <div class="inicio col-lg-6 col-md-6 col-sm-6 text-center align-content-center ">
                <div class="iniciocont">
                    <img  class="mc" src="../img/logo/Mocha_s_blossom-removebg-preview.png" alt="Logo" width="100px"> 
                    <h1 class="cih mt-5"> “할수있다! </h1> <br>
                    <h1>¡PUEDES HACERLO! </h1>
                    <img class="pst mt-5" src="../img/decoraciones/chess.png" alt="brownie" >
                </div>
            </div>

            <div class="login-container col-lg-6 col-md-6 col-sm-6 p-sm-5">
                <div class="soft-card  justify-content-center align-content-center text-center">
                    <div class="comfort-header">
                        <h1 class="comfort-title"> Iniciar Sesión </h1>
                        <p class="gentle-subtitle"> 인생은 케이크 같아요 <br> La vida es como un pastel. </p>
                    </div>
                    
                    <form class="comfort-form" id="loginForm" novalidate>
                        <div class="soft-field">
                            <div class="field-container">
                                <input type="email" id="email" name="email" required autocomplete="email" >
                                <label for="email"> Email </label>
                                
                            </div>
                            <span class="gentle-error" id="emailError"></span>
                        </div>

                        <div class="soft-field">
                            <div class="field-container">
                                <input type="password" id="password" name="passwordd" required autocomplete="current-password">
                                <label for="passwordd">Contraseña</label>
                                </button>
                            </div>
                        <div>
                            <a href="#" class="comfort-link">Forgot password?</a>
                        </div>
                        <button type="submit" class="comfort-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="button-text">Sign in</span>
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso de ingreso</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Inicio sesión correctamente
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn">
                                            <a href="menu.php">Ir al menu</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <div class="comfort-signup">
                            <span class="signup-text">Don't have an account?</span>
                            <a href="registrarse.php" class="comfort-link signup-link">Sign up</a>    
                        </div>
                </div>
            </div>    
    </div>    

    <div class="container-fluid usario">
        <ul id="login">
            
        </ul>
    </div>
    
</form>








<?php include 'fotter.php' ?>