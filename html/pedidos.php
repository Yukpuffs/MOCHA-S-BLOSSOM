<?php include 'header.php' ?>
<?php include 'sssu.php'?>


<form action="../conexion/servidor_pedidos.php" method="POST" id="pedidos">
    <div class="container-fluid m-4">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                <h1 class=" fs-4"> Datos personales </h1>
                <div class="mt-4">
                    <label for="Nombre" class="form-label"> Nombre completo </label>
                    <div class="m-3">
                        <input type="text" class="inp_pedi" name="nombre" id="completo">
                    </div>
                </div>
                <div class="mt-4">                
                    <label for="Telefono" class="form-label"> Direccion</label>
                    <div class="m-3">
                        <input type="text" class="inp_pedi" name="direccion" id="direcio">
                    </div>
                </div>
                <div class="mt-4">                
                    <label for="Telefono" class="form-label"> Telefono </label>
                    <div class="m-3">
                        <input type="text" class="inp_pedi" name="telefono" id="teleo">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="correo" class="form-label"> Correo electronico </label>
                    <div class="m-3">
                        <input type="email" class="inp_pedi" name="email" id="q">
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-2 justify-content-cente col-lg-6 col-md-6 col-sm-12">
                        <label for="Fecha" class="form-label fech"> Fecha entrega </label>
                        <div>
                            <input type="date" name="fecha" class="inp_fech text-white" id="fecha_en">
                        </div>
                    </div>
                    <div class="mb-2 justify-content-center col-lg-6 col-md-6 col-sm-12">
                        <label for="Fecha" class="form-label fech"> Hora de entrega</label>
                        <div>
                            <input type="time" name="hora" class="inp_fech text-white" id="hora">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                <h1 class=" fs-4"> Datos pedido</h1>                              
                        <div class="dropdown mb-4 mt-4">
                            <label for="medio" >Medio de pago</label>
                                <select class="entrada text-white p-1" id="medio">
                                    <option selected disabled>Selecciona una opción</option>
                                    <option name="metodo_pago">Mastercard</option>
                                    <option name="metodo_pago">Visa</option>
                                    <option name="metodo_pago">American Express</option>
                                    <option name="metodo_pago">PayPal</option>
                                    <option name="metodo_pago">NEQUI</option>
                                </select>
                        </div>
                        <div>
                            <label for="tarjeta" class="form-label"> Numero tarjeta </label>
                            <div class="m-3">
                                <input type="text" maxlength="10" name="Num_tarj" class="inp_pedi" placeholder="XXXX-XXXX-XXXX-XXXX" id="tarjt" max>
                            </div>
                        </div>
                        <div>
                            <label for="Nombre" class="form-label"> CVV </label>
                            <div class="m-3">
                                <input type="text" maxlength="4" class="inp_pedi" name="cvv" placeholder=" 123" id="cvv">
                            </div>
                        </div>
                        <div>
                            <label for="Nombre" class="form-label"> Fecha Caducidad</label>
                            <div class="m-3">
                                <input type="date" class="inp_pedi text-white" name="fech_cad" id="fc">
                            </div>
                        </div>
                        <div class="mt-4">
                            <input type="submit" value="Enviar Pedido" class="btns text-white p-2 fontt-text rounded-3">
                        </div>
            </div>    
        <div class="container-fluid">
            <ul id="pedd">

            </ul>
        </div>
    </div>
</form>




<?php include 'fotter.php' ?>