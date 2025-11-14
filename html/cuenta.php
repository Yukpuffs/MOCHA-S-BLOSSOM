<?php include 'header.php' ?>
<?php include 'sssu.php'?>

<form action="../conexion/servidor_cuenta.php" method="post" id="usuario">
    <div class="container-fluid m-4">
        <div class="row">
            <div class="justify-content-start col-lg-3 col-md-3 col-sm-12 text-center">
                <img src="../Img/usuario/capi.png" class="img-fluid" alt="..." width="100px">
            </div>
            <div class="justify-content-start col-lg-1 col-md-1 col-sm-12 text-center">
                <p>User name <img src="../Img/botones/edit.png" alt="" width="20px"></p>
                <p><strong>ID USER ######</strong></p>
            </div>
            <div class="justify-content-center col-lg-4 col-md-3 col-sm-12 text-center">
                <a href="pedidos.php" class="text-white text-decoration-none"><img src="../Img/botones/cora.png" alt="" width="30vh"></a>
                <p>Lista de deseos </p>
            </div>
            <div class="justify-content-center col-lg-4 col-md-3 col-sm-12 text-center">               
                <a href="carritoo.php" class="text-white text-decoration-none"><img src="../Img/botones/shop.png" alt="" width="30vh"></a>
                <p>Mi carrito</p>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <h1 class="fs-5">Datos Personales <img src="../Img/botones/edit.png" width="20px"></h1>
                <div class="m-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="entrada inp_pedi" required>
                </div>
                <div class="m-4">
                    <label for="corre_E">Correo Electronico</label>
                    <input type="email" name="corre_E" id="corre_E" class="entrada inp_pedi" required autocomplete="email">
                </div>
                <div class="m-4">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="entrada inp_pedi" required>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <div class="m-4">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="entrada inp_pedi" required>
                </div>
                <div class="m-4">
                    <label for="tarj">Numero Tarjeta</label>
                    <input type="text" name="num_tarj" id="tarj" class="entrada inp_pedi" required>
                </div>

            </div>
        </div>    
        <div class="container-fluid">
            <ul id="da">

            </ul>
        </div>
    </div>
</form>



<?php include 'fotter.php' ?>