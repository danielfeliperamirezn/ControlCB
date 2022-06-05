<?php 

    require "../model/db.php";

    include("../permanentes/top.php");
    include("../permanentes/header.php");

    $sql = "SELECT id from modelos2 order by id";
    $query = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($query);

?>

<section class="margin_body container_section_index"> 
    <div class="containerTitleSection">
        <h2 class="Title">Registro Modelos</h2>
    </div>
    <div class="containerDIVs">
        <form id="formRegister" class="bgBurbble" name="formRegister">
            <section class="containerFormNormal">
                <section class="containerGlobalForm">
                    <section class="containerDataEmpresarial">
                        <div class="containerInputs">
                            <label for="nombre">Nombre del modelo:</label>
                            <input name="nombre" type="text">
                        </div>
                        <div class="containerInputs">
                            <label for="cedula">Cédula:</label>
                            <input name="cedula" type="number">
                        </div>
                        <div class="containerInputs">
                            <label for="celular">Celular:</label>
                            <input name="celular" type="number">
                        </div>
                        <div class="containerInputs">
                            <label for="nacionalidad">Nacionalidad:</label>
                            <input type="text" name="nacionalidad">
                        </div>
                        <div class="containerInputs">
                            <label for="date">Fecha de ingreso:</label>
                            <input type="date" name="fechadeingreso">
                        </div>
                        <div class="containerInputs">
                            <label for="cumpleanos">Cumpleaños</label>
                            <input type="date" name="cumpleanos">
                        </div>
                    </section>
                    <section class="containerDataEmpresarial">
                        <div class="containerInputs">
                            <label for="nombreArtistico">Nombre Artistico:</label>
                            <input name="nombreArtistico" type="text">
                        </div>
                        <div class="containerInputs selectPag">
                            <label for="tipoDeTrabajo">Tipo de Trabajo:</label>
                            <select name="tipoDeTrabajo" id="">
                                <option value="-">Seleccionar</option>
                                <option value="Grupo">Grupo</option>
                                <option value="Pareja">Pareja</option>
                                <option value="Satelite">Satelite</option>
                                <option value="individual">individual</option>
                                <option value="tecleador">Tecleador</option>
                            </select>
                        </div>
                        <div class="containerInputs selectPag">
                            <label for="porcentaje">% de ganancias:</label>
                            <select name="porcentaje" id="">
                                <option value="-">Seleccionar</option>
                                <option value="40">40%</option>
                                <option value="50">50%</option>
                                <option value="60">60%</option>
                                <option value="70">70%</option>
                                <option value="80">80%</option>
                                <option value="85">85%</option>
                                <option value="90">90%</option>
                            </select>
                        </div>
                        <div class="containerInputs">
                            <label for="cuentaBancaria">Banco:</label>
                            <input name="banco" type="text" placeholder="Banco">
                        </div>
                        <div class="containerInputs selectPag">
                            <label for="tipoDeCuenta">Tipo de Cuenta:</label>
                            <select name="tipoDeCuenta" id="">
                                <option value="-">Seleccionar</option>
                                <option value="ahorros">Ahorros</option>
                                <option value="corriente">Corrienta</option>
                            </select>
                        </div>
                        <div class="containerInputs">
                            <label for="NúmeroDeCuenta">Número de cuenta:</label>
                            <input name="numeroDeCuenta" type="number" placeholder="Número de Cuenta">
                        </div>
                    </section>
                </section>
                <section class="containerPage">
                    <div class="containerInputsPage">
                        <label for="chaturbate">chaturbate
                            <input name="chaturbate" type="checkbox">
                        </label>
                        <label for="BongaCams">BongaCams
                            <input name="bonga" type="checkbox">
                        </label>
                        <label for="Stripchat">Stripchat
                            <input name="stripchat" type="checkbox">
                        </label>
                        <label for="StreaMate">StreaMate
                            <input name="StreaMate" type="checkbox">
                        </label>
                        <label for="xlove">xlove
                            <input name="xlove" type="checkbox">
                        </label>
                        <label for="f4f">f4f
                            <input name="f4f" type="checkbox">
                        </label>
                        <label for="streamate">streamate
                            <input name="streamate" type="checkbox">
                        </label>
                        <label for="cams">cams
                            <input name="cams" type="checkbox">
                        </label>
                        <label for="cam4">cam4
                            <input name="cam4" type="checkbox">
                        </label>
                    </div>
                </section>
            </section>
            <div class="containerInputs">
                <button id="registrarModelo" type="submit"> Registrar </button>
            </div>
        </form>
        <div class="containerModels bgBurbble">
            <h2 class="Title">Cantidad de modelos</h2>
            <span class="numberModel"> <?php echo $rowCount ?> </span>
            <div class="containerButtonModelos">
                <button>Ver modelos</button>
            </div>
        </div>
    </div>
</section>

<script src="../js/registro.js"></script>

<?php
    include("../permanentes/footer.php")
?>