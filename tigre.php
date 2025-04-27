<?php
$felino = "tigre";
include_once 'header.php' 
?>
<main id="main">
    <section id="presentacion" class="container-fluid">
        <div class="row justify-content-center align-items-end min-vh-100 m-0">
            <div class="col text-center py-3">
                <h1>Tigre de bengala</h1>
                <p class="fs-5">El soberano indiscutible de las selvas </p>
            </div>
        </div>
    </section>

    <section id="descripcion" class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img src="img/tigre/descripcion.jpg" class="img-fluid" alt="Un tigre de bengala reposando">
            </div>
            <div class="col-lg-7 py-4 py-md-0">
                <h2 class="text-center">Descripcion</h2>
                <p>El <strong>tigre de Bengala</strong> es uno de los <strong>felinos más majestuosos</strong> y reconocibles del mundo. Su característico <strong>pelaje anaranjado con rayas negras</strong> no solo es impresionante a la vista, sino que le sirve como <strong>camuflaje perfecto</strong> entre la vegetación densa de <strong>selvas y manglares</strong>.
                <br>Habita principalmente en <strong>India, Bangladesh, Nepal y Bután</strong>, donde desempeña un papel clave como <strong>depredador tope</strong>. Al mantener el <strong>equilibrio natural</strong> en las cadenas alimenticias, regula las poblaciones de herbívoros y contribuye al <strong>buen estado de los ecosistemas</strong>.
                <br>Actualmente está en <strong>peligro</strong> debido a la <strong>pérdida de hábitat</strong> y la <strong>caza ilegal</strong>. <strong>Protegerlo</strong> no solo es vital para su supervivencia, sino también para conservar la <strong>biodiversidad</strong> de los entornos donde vive. 
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
            <div class="col-md-4 py-4">
                <img src="img/iconos/camuflaje.png" class="img-fluid mb-4" alt="Icono de camuflaje">
                <p>El tigre de Bengala tiene un pelaje anaranjado con rayas negras únicas, que funciona como camuflaje entre la vegetación densa de selvas y manglares.</p>
            </div>
            <div class="col-md-4 py-4">
                <img src="img/iconos/huella.png" class="img-fluid mb-4" alt="Icono huella">
                <p>El tigre de Bengala caza en solitario, usando su sigilo, fuerza y agudeza visual para sorprender a sus presas.<p>
            </div>
            <div class="col-md-4 py-4">
                <img src="img/iconos/agua.png" class="img-fluid mb-4" alt="Icono gota de agua">
                <p>A diferencia de la mayoría de los felinos, le encanta nadar. Puede cruzar ríos o sumergirse en lagunas para refrescarse o incluso cazar.</p>
            </div>
        </div>
    </section>

    <section id="habitatAlimentacion" class="container text-center">
        <div class="row">
            <div class="col">
                <h2>Habitat y alimentacion</h2>
            </div>
        </div>
    
        <div class="row py-4 justify-content-around border-bottom  border-black">
            <div class="col-12">
                <h3>Habitat</h3>
                <p>El <strong>tigre de Bengala</strong> habita principalmente en <strong>selvas tropicales</strong>, <strong>manglares</strong>, <strong>praderas</strong> y <strong>bosques húmedos del sur de Asia</strong>, especialmente en <strong>India, Bangladesh, Nepal y Bután</strong>. Estos entornos ofrecen la <strong>cobertura vegetal</strong> y las <strong>fuentes de agua</strong> necesarias para su supervivencia, así como una <strong>abundante presencia de presas</strong>. Uno de sus hábitats más emblemáticos es el <strong>delta del Sundarbans</strong>, una región de manglares donde convive con el agua y la espesura del bosque.</p>

            </div>
            <div class="col-md-6">
                <img src="img/tigre/habitat2.jpg" class="img-fluid" alt="Selva">
            </div>
            <div class="col-md-6">
                <img src="img/tigre/habitat.jpg" class="img-fluid" alt="Selva">
            </div>
        </div>

        <div class="row py-4 justify-content-around">

            <div class="col-12">
                <h3>Alimentacion</h3>
                <p>Estos <strong>poderosos felinos</strong> son <strong>cazadores solitarios</strong> y oportunistas, con una dieta basada principalmente en <strong>grandes herbívoros</strong> como <strong>ciervos axis, jabalies, raramente monos</strong> y <strong>jaguares</strong>. Cazan <strong>al acecho</strong>, usando su <strong>pelaje rayado como camuflaje</strong> en la espesura, y pueden consumir hasta <strong>40 kg de carne en una noche</strong>. A diferencia de los leones, rara vez <strong>roban presas</strong> a otros depredadores, pero en ocasiones atacan <strong>ganado</strong> cuando su hábitat se reduce.</p>

            </div>
            <div class="col-md-3">
                <img src="img/tigre/axis.jpg" class="img-fluid" alt="Ciervo axis">
                <h4>Ciervo axis</h4>
            </div>
            <div class="col-md-3">
                <img src="img/tigre/jabali.jpg" class="img-fluid" alt="Jabalí">
                <h4>Jabali</h4>
            </div>
            <div class="col-md-3">
                <img src="img/tigre/jaga.webp" class="img-fluid" alt="Jaguar">
                <h4>Jaguar</h4>
            </div>
            <div class="col-md-3">
                <img src="img/tigre/mono.jpg" class="img-fluid" alt="Mono">
                <h4>Mono</h4>
            </div>
        </div>
    </section>
</main>
<?php include_once 'footer.php' ?>