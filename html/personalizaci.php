<?php include 'header.php' ?>
<?php include 'sssu.php'?>

<form action="../conexion/servidor_personalizaci.php" method="post" id="pref">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 m-5 text-center align-items-center">
                <img src="../img/Personalizacion/vainilla.png" alt="principio" width="600vh" class="img_per"> <br>
                <button type="submit" class="btn bts text-center text-white fontt-text rounded-3">
                    <a href="pedidos.php">
                        Confirmar
                    </a> </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <h2 class="fontt-text"> Elige tus ingredientes preferidos </h2>
                        <h4>Sabor bizcocho</h3>
                            <div class="row sabores justify-content-center text-center align-items-center">
                                <br>
                                <div class="opcion1 offset-lg-1 offset-sm-0 col-lg-2 col-md-2">
                                    <label class="form-label">
                                        <input type="radio" name="sabor" value="chocolate" id="sab">
                                        <svg width="40" height="40">
                                        <circle cx="20" cy="20" r="15" fill="#8c5c54ff" />
                                        </svg>
                                    </label>
                                    <div class="nombre">Chocolate</div>
                                </div>
                                <div class="opcion2 col-lg-2 col-md-2">
                                    <label class="form-label">
                                        <input type="radio" name="sabor" value="matcha" class="iu" id="sab">
                                        <svg width="40" height="40">
                                        <circle cx="20" cy="20" r="15" fill="#77A38E" />
                                        </svg>
                                    </label>
                                    <div class="nombre">Matcha</div>
                                </div>

                                <div class="opcion3 col-lg-2 col-md-2">
                                    <label class="form-label">
                                        <input type="radio" name="sabor" value="redvelvet" class="iu" id="sab">
                                        <svg width="40" height="40">
                                        <circle cx="20" cy="20" r="15" fill="#551A2B" />
                                        </svg>
                                    </label>
                                    <div class="nombre">Red Velvet</div>
                                </div>

                                <div class="opcion4 col-lg-2 col-md-2">
                                    <label class="form-label">
                                        <input type="radio" name="sabor" value="fresa" class="iu" id="sab">
                                        <svg width="40" height="40">
                                        <circle cx="20" cy="20" r="15" fill="#E98A98" />
                                        </svg>
                                    </label>
                                    <div class="nombre">Fresa</div>
                                </div>

                                <div class="opcion5 col-lg-2 col-md-2">
                                    <label class="form-label">
                                        <input type="radio" name="sabor" value="vainilla" class="iu" id="sab">
                                        <svg width="40" height="40">
                                        <circle cx="20" cy="20" r="15" fill="#E8B77B" />
                                        </svg>
                                    </label>
                                    <div class="nombre">Vainilla</div>
                                </div>
                            </div>
                        
                            <h4> Relleno </h4>
                            <input type="text" id="relleno" placeholder="Escribe tu relleno" class="entrada justify-content-center text-center align-items-center p-2" name="rel" required>

                            <h4> Tamaño </h4>
                                <div class="sabores justify-content-center text-center align-items-center p-2">
                                    <input type="radio" id="t14" name="tamano" value="14">
                                    <label for="t14" class="opciones form-label">14 cm</label>

                                    <input type="radio" id="t20" name="tamano" value="20">
                                    <label for="t20" class="opciones form-label">20 cm</label>

                                    <input type="radio" id="t26" name="tamano" value="26">
                                    <label for="t26" class="opciones form-label">26 cm</label>

                                    <input type="radio" id="t32" name="tamano" value="32">
                                    <label for="t32" class="opciones form-label">32 cm</label>
                                </div>
                            <div>
                                <h4> Cobertura </h4> 
                                <input type="text" id="cobertura" placeholder="Cobertura preferida" class="entrada justify-content-center text-center align-items-center p-2" name="cober" required >
                            </div>    
                            
                            <div>
                                <h4> Decoración </h4>
                                <input type="text" id="decoracion" placeholder="Decoración preferida" class="entrada justify-content-center text-center align-items-center p-2" name="decor" required> <br>
                            </div>    
            </div>
            <div class="container-fluid">
                <ul id="pos">

                </ul>
            </div>

        </div>
        
    </div>
</form>








<?php include 'fotter.php' ?>