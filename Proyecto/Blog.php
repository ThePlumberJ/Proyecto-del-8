
<?php include "header.php" ?>

<title>Blog</title>

<body>
    
    <div class="container"> <!--Inicio del contenedor de todo-->
        <div class="info"> <!--Inicio del contenedor de la info-->
            <p>
                La wiki del 8 es un pequeño blog donde mostramos informacion acerca del chavo del 8, junto con los
                actores que deieron vida a los famosos personajes de la serie y su dedicacion alctual.
            </p>
            <p>
                Los grandes editores de este blog somos 2 personas "Jimenez Ramos Jaime" y "Montserrat García Valencia"
                <img src="assents/Imagenes/Gifts/piedrazo.gif" alt="">
            <div class="moverboton"> <!--Inicio del contenedor de mover el boton-->
                <div class="conocenos"> <!--Inicio del contendor del boton de conocenos-->
                    <div class="col-md-8 offset-md-4">
                        <div class="Carrusel">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Conocenos
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Quienes Somos</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleControls" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="assents/Imagenes/Fondos/James.jpg" class="img-fluid"
                                                            alt="...">
                                                        <p style="color">
                                                            Hola soy Jaime tengo 21 años, soy estudiante de la carrera
                                                            Ingenieria en Computacion en Fes Aragon
                                                            me gusta la ciberseguridad y todo lo que este relacionado a la cienca
                                                            del universo soy la mera banda conoceme
                                                        </p>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--Fin del contendor del boton de conocenos-->
            </div> <!--Fin del contenedor de mover el boton-->
            </p>
            <p>
                Si deseas formar parte de este equipo no dudes en comunicarte con nostros para brindarte
                informacion y nos cuentes sobre tus experiencias laborales
            </p>
            <p>
                Existe una vacante para ti
            </p>
            <p>
                <div class="contacto">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo de contacto</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Platicanos de ti,te queremos concer y dejanos
                            un breve resumen de tus experiencias laborales
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </p>
        </div> <!--Fin del contenedor de la info-->

        <div class="boton_enviar"><!--Inicio contendor del boton de enviar-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Enviar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Gracias</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Nosotros nos comunicaremos con tigo lo antes posible gracias por enviar tus datos
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> <!--end modal-->
        </div><!--Fin del contenedor del boton de enviar-->
    </div> <!--Fin del contenedor de todo-->

</body>

<?php include "footer.php" ?>
