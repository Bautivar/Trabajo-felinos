<?php
$felino = "leon";
include_once 'header.php' 
?>
<main id="main">
    <section id="presentacion" class="container-fluid">
        <div class="row justify-content-center align-items-end vh-100">
            <div class="col text-center py-3">
                <h1>El león</h1>
                <p class="fs-5">El rey indiscutible de la sabana</p>
            </div>
        </div>
    </section>

    <section id="descripcion" class="container">
        <div class="row align-items-betweenjustify-content-between">
            <div class="col-lg-5">
                <img src="img/leon/descripcion.jpg" class="img-fluid" alt="Un Leon macho y hembra">
            </div>
            <div class="col-lg-7 p-4 p-md-0">
                <h2 class="text-center">Descripcion</h2>
                <p>El león es uno de los animales más <strong>imponentes</strong> del planeta y el único gran felino que vive en grupos sociales, conocidos como <strong>manadas</strong>. Su <strong>melena</strong>, su <strong>rugido</strong> y su presencia lo han convertido en un símbolo universal de <strong>fuerza</strong> y <strong>liderazgo</strong>.<br>Habita principalmente en las <strong>sabanas africanas</strong>, donde cumple un rol clave como <strong>depredador tope</strong>, manteniendo el equilibrio natural al controlar las poblaciones de herbívoros. Gracias al <strong>trabajo en equipo</strong>, las leonas realizan la mayor parte de la caza, mientras el macho protege el territorio.
                <br>Más allá de su impacto ecológico, el león ha sido <strong>venerado</strong> por culturas de todo el mundo, apareciendo en <strong>mitos, escudos y leyendas</strong>. Hoy está <strong>amenazado</strong> por la pérdida de hábitat y la caza, lo que hace crucial su <strong>protección</strong> para conservar tanto su especie como su entorno.
            </div>
        </div>
    </section>
    
    <section id="caracteristicas" class="container-fluid text-center">
        <div class="row m-0">
            <div class="col">
                <h2>Caracteristicas</h2>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-4 py-5">
                <img src="img/iconos/manada.png" class="img-fluid mb-4" alt="Icono de multitud de personas">
                <p>El único gran felino que vive en grupos sociales organizados, conocidos como manadas.</p>
            </div>
            <div class="col-md-4 py-5">
                <img src="img/iconos/rugido.png" class="img-fluid mb-4" alt="Icono rugido">
                <p>Su rugido puede escucharse hasta 8 km de distancia, imponiendo respeto en la sabana.</p>
            </div>
            <div class="col-md-4 py-5">
                <img src="img/iconos/leon.png" class="img-fluid mb-4" alt="Icono leon">
                <p>La melena del macho es única entre los felinos y varía en tamaño y color según su estado de salud y edad.</p>
            </div>
        </div>
    </section>

    <section id="habitatAlimentacion" class="container text-center">
        <div class="row">
            <div class="col">
                <h2>Habitat y alimentacion</h2>
            </div>
        </div>
    
        <div class="row py-5 justify-content-around border-bottom  border-black">
            <div class="col-12 px-4 p-md-0">
                <h3>Habitat</h3>
                <p>Los leones habitan principalmente <strong>sabanas abiertas</strong>, <strong>pastizales</strong> y <strong>matorrales</strong> de <strong>África subsahariana</strong>, con una pequeña población en el <strong>bosque de Gir (India)</strong>. Prefieren territorios con <strong>agua disponible</strong> y <strong>abundancia de presas</strong>, como ñus y cebras. Su <strong>adaptabilidad</strong> les permite vivir en zonas semiáridas, pero evitan los <strong>desiertos</strong> y las <strong>selvas densas</strong>. La <strong>pérdida de hábitat</strong> por la expansión humana es su <strong>mayor amenaza</strong>.</p>
            </div>
            <div class="col-md-6">
                <img src="img/leon/sabana2.jpg" class="img-fluid" alt="Habitat del leon">
            </div>
            <div class="col-md-6">
                <img src="img/leon/sabana.jpg" class="img-fluid" alt="Habitat del leon">
            </div>
        </div>

        <div class="row py-5 justify-content-around">

            <div class="col-12 px-4 p-md-0">
                <h3>Alimentacion</h3>
                <p>Los leones son <strong>carnívoros estrictos</strong> y <strong>cazadores cooperativos</strong>. Su dieta se basa principalmente en <strong>grandes herbívoros</strong> como <strong>jabalíes, cebras, búfalos y antílopes</strong>, que abaten trabajando en equipo durante la noche o al amanecer. Las leonas ejecutan el <strong>90% de las cacerías</strong>, usando estrategias de <strong>emboscada</strong> en terrenos abiertos. Aunque pueden comer hasta <strong>30 kg de carne</strong> en una sola ingesta, su <strong>éxito de caza</strong> es bajo (<strong>30%</strong>), por lo que a menudo <strong>roban presas</strong> a hienas o guepardos. Los <strong>machos dominantes</strong> tienen prioridad para alimentarse, seguidos por las hembras y las crías.</p>
            </div>
            <div class="col-md-3">
                <img src="img/leon/impala.jpeg" class="img-fluid" alt="Impala">
                <h4>Impala</h4>
            </div>
            <div class="col-md-3">
                <img src="img/leon/cebra.jpg" class="img-fluid" alt="Cebra">
                <h4>Cebra</h4>
            </div>
            <div class="col-md-3">
                <img src="img/leon/bufalo.jpg" class="img-fluid" alt="Búfalo">
                <h4>Búfalo</h4>
            </div>
            <div class="col-md-3">
                <img src="img/leon/jabali.jpg" class="img-fluid" alt="Jabali">
                <h4>Jabalí</h4>
            </div>
        </div>
    </section>
</main>
<?php include_once 'footer.php' ?>