<?php include 'header.php' ?>

<form action="../conexion/servidor_regis.php" method="post" id="regis">
    <div class="container-fluid row mt-5">
            <div class="login-container col-lg-6 col-md-6 col-sm-6">
                    <div class="soft-card">
                        <div class="comfort-header">
                            <div class="gentle-logo">                   
                            </div>
                            <h1 class="comfort-title"> Registrarse </h1>
                            <p class="gentle-subtitle"> 행복한 하루 되세요 <br> ¡Que tengas un día feliz!. </p>
                        </div>
                        
                            <div class="soft-field">
                                <div class="field-container">
                                    <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                                    <label for="usuario"> Usuario </label>
                                    
                                </div>
                            </div>

                            <div class="soft-field">
                                <div class="field-container">
                                    <input type="email" id="emaill" name="email" required autocomplete="email" placeholder="Email">
                                    <label for="email"> Email </label>
                                    
                                </div>
                            </div>

                            <div class="soft-field">
                                <div class="field-container">
                                    <input type="password" id="passwordd" name="passwordd" required autocomplete="current-password" placeholder="Contraseña">
                                    <label for="passwordd">Contraseña</label>
                                    </button>
                                </div>
                            
                            <button type="submit" class="comfort-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="button-background"></div>
                                <span class="button-text">Sign up</span>
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso de ingreso</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Creo sesion correctamente
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn">
                                                <a href="inisesi.php">Ir a iniciar sesion</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="comfort-signup">
                                <span class="signup-text">Have an account?</span>
                                <a href="inisesi.php" class="comfort-link signup-link">Sign in</a>    
                            </div>

                        </div>    
                    </div>    
            </div>

            <div class="resgistrarse inicio col-lg-6 col-md-6 col-sm-6 text-center align-content-center">
                <div class="iniciocont regiss">
                    <img src="../img/logo/Mocha_s_blossom-removebg-preview.png" alt="Logo" class="mc" width="100px" > 
                    <h1 class="cih"> “할수있다! </h1> <br>
                    <h1 class="pd">¡PUEDES HACERLO! </h1>
                    <img src="../img/decoraciones/Screenshot_2025-09-13_194328-removebg-preview.png" alt="brownie" class="brr">
                </div>
            </div>
        <div class="container-fluid usario">
            <ul id="loginn">
                
            </ul>
         </div>
    </div>    
</form>




<?php include 'fotter.php' ?>