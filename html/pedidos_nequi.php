<?php include 'header.php' ?>
<?php include 'sssu.php'?>


<form action="../conexion/servidor_nequi.php" method="POST">
    <div class="container-fluid row">
        <div class="col-lg-6 col-md-6 col-sm-6 align-content-center">
            <div class="mt-5">
                <label for="Nombre" class="form-label"> Nombre completo </label>
                <div class="m-5">
                    <input type="text" class="inp_pedi" name="nombre" placeholder="EJ. Yuna">
                </div>
            </div>
            <div class="mt-5">                
                <label for="Telefono" class="form-label"> Telefono </label>
                <div class="m-5">
                    <input type="text" class="inp_pedi" name="telefono" placeholder="Ej. 3001234567">
                </div>
            </div>
            <div class="mt-5">
                <label for="correo" class="form-label"> Correo electronico </label>
                <div class="m-5">
                    <input type="email" class="inp_pedi" name="email" placeholder="Ej. Alguien@gmail.com">
                </div>
            </div>
            <div class="mt-5">                
                <label for="Telefono" class="form-label"> Direccion</label>
                <div class="m-5">
                    <input type="text" class="inp_pedi" name="direccion" placeholder="Ej. Calle 123 #45-67">
                </div>
            </div>
            <div class="row">
                <div class="mb-2 justify-content-cente col-lg-6 col-md-6 col-sm-12">
                    <label for="Fecha" class="form-label fech"> Fecha entrega </label>
                    <div>
                        <input type="date" name="fecha" class="inp_fech text-white">
                    </div>
                </div>
                <div class="mb-2 justify-content-center col-lg-6 col-md-6 col-sm-12">
                    <label for="Fecha" class="form-label fech"> Hora de entrega</label>
                    <div>
                        <input type="time" name="hora" class="inp_fech text-white">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
            <div>
                    <div class="dropdown justify-content-center">
                    <label for="medio" >Medio de pago</label>
                        <select class="entrada text-white p-1" name="metodo_pago" id="medio">
                            <optiosn selected disabled>Selecciona una opción</option>
                            <option>Mastercard</option>
                            <option>Visa</option>
                            <option>American Express</option>
                            <option>PayPal</option>
                            <option>NEQUI</option>
                        </select>
                    </div>
                    <div>
                        <label for="tarjeta" class="form-label"> Numero de telefono asociado a Nequi </label>
                        <div class="m-5">
                            <input type="text" name="numtelefono" class="inp_pedi" placeholder="XXX-XXX-XXXX">
                        </div>
                    </div>
                    <div>
                        <label for="Nombre" class="form-label"> nombre del titular </label>
                        <div class="m-5">
                            <input type="text"  class="inp_pedi" name="nom" >
                        </div>
                    </div>
                    <div>
                        <label for="Nombre" class="form-label"> correo electronico asociado a Nequi </label>
                        <div class="m-5">
                            <input type="text" class="inp_pedi text-white" name="cor_elec">
                        </div>
                    </div>
                    <div class="text-center ">
                        <input type="submit" value="Enviar Pedido" class="btns text-white p-3 fontt-text rounded-3">
                    </div>
            
        </div>
    </div>
</form>








<?php include 'fotter.php' ?>