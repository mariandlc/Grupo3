<?php
require_once('requires.php');
?>

<?php abrirHtml('Inicio', ''); ?>
<?php cabecera(); ?>

      <div id="carousel-example-generic" class="carousel slide carusel-home" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/run1.jpg" alt="">
              <div class="carousel-caption">
              </div>
            </div>

          <div class="item">
            <img src="images/run2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>


          <div class="item">
            <img src="images/run3.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

          <div class="titulo">
            <h2>¿Vamos a correr? Sumáte hoy.</h2>
          </div>

    <div class="container">
      <section class="places-run-bsas">
        <h2>Lugares para correr en Buenos Aires</h2>
        <article class="palermo">
          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div data-aos="fade-right">
                <h3>Palermo </h3>
              </div>
              <div data-aos="fade-right">
                <p><strong>Distancia</strong>: 9km.</p>
                <p>
                  <strong>Punto de salida</strong>: Centro de Información Turística (CIT) Planetario. Av. Sarmiento 4200 y av. Figueroa Alcorta.
                </p>
                <p>
                  <strong>Recorrido</strong>: MALBA, Jardín Japonés, Planetario, Rosedal de Palermo, Monumento a los Españoles, Museo de Arte Decorativo, Museo Nacional de Bellas Artes, Facultad de Derecho.
                </p>
                <p>
                  <strong>Día y horario</strong>: 2º sábado y 4º domingo del mes a las 10 am.
                </p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div data-aos="fade-right">
                <img src="images/palermo.jpg" alt="" class="img-rounded">
              </div>
            </div>

          </div>

        </article>

        <article class="puerto-madero">
          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div data-aos="fade-right">
                <h3>Puerto Madero</h3>
              </div>
              <div data-aos="fade-right">
                <p><strong>Distancia</strong>: 6 km.</p>
                <p>
                  <strong>Punto de salida</strong>: Juana Manuela Gorriti 200, dique 4. Centro de Atención al Turista: Puerto Madero.
                </p>
                <p>
                  <strong>Recorrido</strong>: Puente de la Mujer, Parque Mujeres Argentinas, Monumento al Tango y Monumento a Fangio, Iglesia Nuestra Señora de la Esperanza, Reserva Ecológica, Glorieta, Museo Fortabat.
                </p>
                <p>
                  <strong>Día y horario</strong>: 1° domingo, 3° sábado y 5° domingo a las 10 am.
                </p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div data-aos="fade-zoom">
                <img src="images/p-madero.jpg" class="img-rounded"  alt="">
              </div>
            </div>

          </div>

        </article>

        <article class="puerto-madero">
          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div data-aos="fade-right">
                <h3>La Boca</h3>
              </div>
              <div data-aos="fade-right">
                <p><strong>Distancia</strong>: 6 km.</p>
                <p>
                  <strong>Punto de salida</strong>: Juana Manuela Gorriti 200, dique 4. Centro de Atención al Turista: Puerto Madero.
                </p>
                <p>
                  <strong>Recorrido</strong>: Puente de la Mujer, Parque Mujeres Argentinas, Monumento al Tango y Monumento a Fangio, Iglesia Nuestra Señora de la Esperanza, Reserva Ecológica, Glorieta, Museo Fortabat.
                </p>
                <p>
                  <strong>Día y horario</strong>: 1° domingo, 3° sábado y 5° domingo a las 10 am.
                </p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div data-aos="fade-right">
                <img src="images/la-boca.jpg" class="img-rounded" alt="">
              </div>
            </div>

          </div>

        </article>



      </section>


<?php footer(); ?>
<?php cerrarHtml(); ?>
