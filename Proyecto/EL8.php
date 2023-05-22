
<?php include "header.php" ?>

  <title>EL8</title>

<body>
  <div class="container"> <!--Contendeor de la imagen inicio div-->
    <div class="info">
      <p>
        El Chavo del 8 es una serie de televisión de comedia situacional mexicana, creada y protagonizada por Roberto
        Gómez Bolaños, producida por Televisión Independiente de México. Comenzó a transmitirse el 26 de febrero de
        1973 por Canal 8 y finalizó sus transmisiones el 7 de enero de 1980.
      </p>
      <p>
        Este programa trataba sobre las vivencias de un grupo de personas que habitaban una vecindad mexicana donde su
        protagonista, el Chavo, hacia travesuras junto con sus amigos que ocasionaban malentendidos y discusiones
        entre los mismos vecinos, por lo general de tono cómico. El guion surgió de un sketch escrito por Gómez Bolaños
        en donde un niño pobre de ocho años discute con un vendedor de globos en un parque, dicho sketch se emitió por
        primera vez el 20 de junio de 1971.
      </p>
      <div class="col-md-10 offset-md-1 " ;>
        <img src="assents/Imagenes/Fondos/Vecindad Bonita.jpg" alt="" style="width: 50rem;" >
      </div>
      <div class="infodespues">
        <p>
          ¿Quién no ha soñado con ir a la vecindad de El Chavo del 8? Probablemente existe quienes lo han deseado desde los inicios del programa hace más de 50 años, y ahora gracias a la realidad virtual, 
          tanto adultos como pequeños de nuevas y antiguas generaciones podrán conocerla de manera virtual la famosa "La Vecindad de El Chavo''.
        </p>
      </div>
    </div>
  </div> <!--Contendeor de la imagen fin div-->

  <div class>
      <div class="llevarV col-md-7 offset-md-5">
        <button class="btn btn-dark" type="button"  data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Conoce La vecindad</button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
          aria-labelledby="offcanvasWithBothOptionsLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">¿Quieres conocer la Vecindad?</h5>
            <div class="fondo"></div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" >
            <p>A continuacion podras hacer un recorrido en un escenario 3D, gracias a "Cesar Espitia"</p>
            <img src="assents/Imagenes/Gifts/chipote.gif" alt="">
            <div class="botonir"><!--Inicio del contendor del boton Ir-->
              <a class="btn btn-dark" href="Vecindad.html" role="button">IR</a>
            </div><!--Inicio del contendor del boton Ir-->
          </div>
      </div>
  </div>
 
  </div>

</body>

<?php include "footer.php" ?>
