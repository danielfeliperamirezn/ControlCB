<?php 
    include("../permanentes/top.php");
    include("../permanentes/header.php");

    $fecha = date("F j, Y");

?>
<section class="margin_body container_section_index"> 
    <div class="containerTitleSection">
        <h2 class="Title">Quincena de Modelos</h2>
        <h3 class="date"> <?php echo $fecha ?></h3>
    </div>
    <div class="containerDIVs">
        <form action="" method="post" class="bgBurbble">
            <h2 class="">Forumalio de Liquidación</h2>
            <div class="containerInputs">
                <label for="nombre">Nombre del modelo:</label>
                <input name="nombre" type="text">
            </div>
            <div class="containerInputs">
                <label for="dolar">Valor del dólar:</label>
                <input name="dolar" type="number">
            </div>
            <div class="containerInputs">
                <label for="">Páginas que trabaja: </label>
                    <div class="containerInputs">
                    <label for="Chaturbate"> <input name="Chaturbate" type="checkbox"> Chaturbate </label>
                    <label for="bonga"> <input name="bonga" type="checkbox"> bonga </label>
                    <label for="Stripchat"> <input name="Stripchat" type="checkbox"> Stripchat </label>
                    <label for="Amateur"> <input name="Amateur" type="checkbox"> Amateur </label>
                    <label for="streamate"> <input name="streamate" type="checkbox"> streamate </label>
                </div> 
            </div>
            <div class="containerInputs selectPag">
                <label for="dolar">Bonificación:</label>
                <select name="" id="">
                    <option value="si">Seleccionar</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="containerInputs">
                <button> Procesar Quincena </button>
            </div>
        </form>
    </div>

</section>

<?php
    include("../permanentes/footer.php")
?>