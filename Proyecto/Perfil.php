<?php
session_start();
$no_cuenta= $_SESSION['usermane'];//413112576


if(!isset($no_cuenta)){

        header("location: index.php");
}else{

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assents/css/Perfil.css">
    <nav class="navbar navbar-expand-lg bg-light"><!--Inicio del Contenedor del NavBar-->
      <div class="container-fluid">
        <iframe src="assents/Imagenes/Gifts/gif Barril.gif" width="140" height="100" frameborder="100" scrolling="no"></iframe>
        <a class="navbar-brand" href="#">LA WIKI DEL 8</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="EL8.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Blog.php">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Personajes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Olivia.php">Olivia Garcia Leyva "Tia Pati"</a></li>
                <li><a class="dropdown-item" href="Roberto Gomez.php">Roberto Gomez Bolaños "El chavo del 8"</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="Carlos Villagran Eslava.php">Carlos Villagrán Eslava "Quico"</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Perfil.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Capitulos "Proximamente"</a>
            </li>
               <li class="nav-item">
              <a type="button" class="btn btn-outline-danger" href="index.php">Logout</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav><!--Fin del Contenedor del NavBar-->
    <title>Profile</title>
    
    
</head>

<body>
    
<td><?php echo $mostrar["nombre_usuario"] ?></td>

  <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="EL8.php">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Numero de Cuenta</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <h6><?php echo $no_cuenta; ?></h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

</body>

<footer> <!--Inicio de Pie de pagina-->

  <div class="pie" style="margin-top: 15% ;"><!--Inicio del contendor del pie de pagina-->
      <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.356);">
          <div class="card-header" style="color: rgba(0, 0, 0, 0.945);">
              <h3>© LA WIKI DEL 8</h3>
          </div>
          <div class="card-body" style="background-color:rgba(155, 153, 153, 0.568);">
              <div class="row col-md-7 offset-md-3"><!--Inicio Contendor de la informacion dentro del pie de pagina-->
                  <table>
                      <thead>
                          <strong>
                              <tr>
                                  <th>
                                      <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                              <li class="breadcrumb-item active" style="color: #000;"
                                                  aria-current="page">Contáctenos</li>
                                          </ol>
                                      </nav>
                                  </th> <!--tag de negritas en los encabezados de las columnas-->
                                  <th>
                                      <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                              <li class="breadcrumb-item active" style="color: #000;"
                                                  aria-current="page">Redes Sociales</li>
                                          </ol>
                                      </nav>
                                  </th>
                                  <th>
                                      <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                              <li class="breadcrumb-item active" style="color: #000;"
                                                  aria-current="page">Contáctenos</li>
                                          </ol>
                                      </nav>
                                  </th>
                              </tr>
                          </strong>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                  <a href="Blog.html" class="link-dark"><img src="assents/Imagenes/Fondos/icons8-contact-40.png" alt="">Contacto</a>
                              </td>

                              <td>
                                  <a href="https://www.facebook.com/ElChavodelOchoOficial/"
                                      class="link-dark"><img src="assents/Imagenes/Fondos/icons8-facebook-50.png" alt="">Facebook</a>
                              </td>
                              <td>
                                  <a href="#" class="link-dark"><img src="assents/Imagenes/Fondos/icons8-terms-and-conditions-40.png" alt=""> Términos y Condiciones</a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <a href="Blog.html" class="link-dark">
                                      <div style="margin-top: 2% ;"><img src="assents/Imagenes/Fondos/icons8-drawing-compass-40.png" alt="">Redacción</div>
                                  </a>
                              </td>
                              <td> <a href="#" class="link-dark">
                                      <div style="margin-top: 2% ;"><img src="assents/Imagenes/Fondos/icons8-instagram-48.png" alt="">Instagram</div>
                                  </a></td>
                              <td> <a href="#" class="link-dark">
                                      <div style="margin-top: 2% ;"><img src="assents/Imagenes/Fondos/icons8-privacy-policy-40.png" alt="">Política de Privacidad</div>
                                  </a></td>
                          </tr>
                          <tr>
                              <td>
                                  <a href="Blog.html" class="link-dark">
                                      <div style="margin-top: 2% ;"><img src="assents/Imagenes/Fondos/icons8-contact-40.png" alt="">Contacto Comercial</div>
                                  </a>
                              </td>
                              <td>
                                  <a href="https://twitter.com/" class="link-dark">
                                      <div style="margin-top: 2% ;"> <img src="assents/Imagenes/Fondos/icons8-twitter-50.png" alt="">Twitter </div>
                                  </a>
                              </td>
                          </tr> <!--tag de las filas-->
                          <tr>
                              <td> <a href="Blog.html" class="link-dark">
                                      <div style="margin-top: 3% ;"><img src="assents/Imagenes/Fondos/icons8-employ-40.png" alt="">Empleo</div>
                                  </a></td>
                          </tr> <!--tag de las filas-->
                      </tbody>
                  </table>
              </div><!--Fin Contendor de la informacion dentro del pie de pagina-->
              <img src="assents/Imagenes/Gifts/electyrocutado.gif" alt="">
          </div>
          <div>
          </div>
          <div class="card-footer text" style="color: #000;">
              Todos Los Derechos Reservados © 2023 Fes Aragon
          </div>
      </div>
  </div><!--Fin del contendor del pie de pagina-->

</footer><!--Fin de pie de pagina-->
</html>
