<?php 

    require "../model/db.php";

    include("../permanentes/top.php");
    include("../permanentes/header.php");
?>

<section class="margin_body container_section_index"> 
    <div class="containerTitleSection">
        <h2 class="Title">Registro Modelos</h2>
    </div>
    <div class="containerDIVs">
        <form id="formRegister" class="bgBurbble" name="formRegister">
            <div class="containerInputs">
                <label for="nombre">Nombre del modelo:</label>
                <input name="nombre" type="text">
            </div>
            <div class="containerInputs">
                <label for="celular">Cédula:</label>
                <input name="celular" type="number">
            </div>
            <div class="containerInputs">
                <label for="celular">Celular:</label>
                <input name="celular" type="number">
            </div>
            <div class="containerInputs">
                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text">
            </div>
            <div class="containerInputs selectPag">
                <label for="dolar">% de ganancias:</label>
                <select name="" id="">
                    <option value="sel">Seleccionar</option>
                    <option value="50">50%</option>
                    <option value="60">60%</option>
                    <option value="70">70%</option>
                    <option value="80">80%</option>
                </select>
            </div>
            <div class="containerInputs">
                <label for="date">Fecha de ingreso:</label>
                <input type="date">
            </div>
            <div class="containerInputs">
                <button id="registrarModelo" type="submit"> Registrar </button>
            </div>
        </form>
        <div class="containerModels bgBurbble">
            <h2 class="Title">Cantidad de modelos</h2>
            <span class="numberModel">25</span>
        </div>
    </div>
</section>

<script src="../js/registro.js"></script>

<?php
    include("../permanentes/footer.php")
?>