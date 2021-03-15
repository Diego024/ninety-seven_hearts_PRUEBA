<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../resources/styles/css/dashboard/Index.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <body>

    <div class="d-flex " id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar--img">
                <img src="https://www.howdeniberia.com/wp-content/uploads/2018/05/Disney-logo-png-transparent-download.png" alt="" id="sidebar--img__logo">
            </div>
            <div class="sidebar--separator">
                <div class="sidebar--separator__line"></div>
            </div>
            <div class="sidebar--info__container">
                <div class="sidebar--info__img">
                    <img src="../../resources/statics/images/profile-cuadrado.jpg" alt="" id="info--img__user">
                </div>
                <div class="sidebar--info__data">
                    <p class="sidebar--info__text">Bienvenido,</p>
                    <p class="sidebar--info__name">Diego Pacheco</p>
                </div>
            </div>
            <div class="sidebar--separator">
                <div class="sidebar--separator__line"></div>
            </div>
            <div class="list-group list-group-flush">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left btn--header__texto" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mantenimientos
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Dashboard</a>
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Shortcuts</a>
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Overview</a>
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Events</a>
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Profile</a>
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Status</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed btn--header__texto" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Datos
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Events</a>
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Profile</a>
                                <a href="#" class="list-group-item list-group-item-action btn--boton__texto">Status</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" id="logout--button" class="list-group-item list-group-item-action btn--boton__texto">Status</a>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
    
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
            </nav>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    
    <!-- Bootstrap Bundle -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
    
    </body>
</html>
