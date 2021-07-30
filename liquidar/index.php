<?php 

    require "../model/db.php";

    include("../permanentes/top.php");
    include("../permanentes/header.php");

    $fecha = date("F j, Y");

    $dataSelect = [];

    $sql = "SELECT nombre from modelos2";
    $query = mysqli_query($conn, $sql);
    while( $dataQuery = mysqli_fetch_row($query)){
        array_push($dataSelect,  $dataQuery);
    };

?>
<section class="margin_body container_section_index"> 
    <div class="containerTitleSection">
        <h2 class="Title">Quincena de Modelos</h2>
        <h3 class="date"> <?php echo $fecha ?></h3>
    </div>
    <div class="containerDIVs">
        <form class="bgBurbble" id="dataLiquidacion" name="dataLiquidacion">
            <h2 class="">Formulario de Liquidación</h2>
            <div class="containerInputs selectPag" >
                <label for="nombre">Nombre del modelo:</label>
                <select name="NombreModelo" id="nombreModelo " class=""> 
                    <option value="">Selecciona un Modelo</option>
                    <?php foreach ($dataSelect as $k => $v) : ?>
                        <?php foreach ($v as $ke => $va) : ?>
                            <option value="<?= $va ?> "><?= $va?> </option>
                            <?php endforeach ?>
                    <?php endforeach ?>
                    </select>
                <label for=""> <?php  $dataSelect  ?></label>
            </div>
            <div class="containerInputs">
                <label for="dolar">Valor del dólar:</label>
                <input type="number" name="dolar" id="dolar">
            </div>
            <div class="containerInputs labelPage">
                <label for="">Páginas que trabaja: </label>
                <div class="containerInputs">
                    <div class="containerCB contentPag">
                        <div class="contentDatos">
                            <input type="checkbox" id="chaturbate">
                            <label for="Chaturbate" class="chaturbate"> Chaturbate </label>
                        </div>
                    </div>
                    <div class="containerBon contentPag">
                        <div class="contentDatos">
                            <input type="checkbox" id="bonga">
                            <label for="bonga" class="bonga"> bonga </label>
                        </div>
                    </div>
                    <div class="containerStrip contentPag">
                        <div class="contentDatos">
                            <input type="checkbox" id="stripchat"> 
                            <label for="Stripchat" class="stripchat"> Stripchat </label>
                        </div>
                    </div>
                    <div class="containerAmateur contentPag">
                        <div class="contentDatos">
                            <input type="checkbox" id="amateur">
                            <label for="Amateur" class="amateur">  Amateur </label>
                        </div>
                    </div>
                    <div class="containerStream contentPag">
                        <div class="contentDatos">
                            <input type="checkbox" id="streamate">
                            <label for="streamate" class="streamate">  streamate </label>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="containerInputs selectPag">
                <div class="containerBonificacion">
                    <div class="contentBonificacion">
                        <label for="dolar">Bonificación:</label>
                        <select name="" id="bonificacion">
                            <option>Seleccionar</option>
                            <option name="si" value="si">Si</option>
                            <option name="no" value="no">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="containerInputs">
                <button> Procesar Quincena </button>
            </div>
        </form>
    </div>

</section>

<script src="../js/liquidar.js"></script>

<?php
    include("../permanentes/footer.php")
?>