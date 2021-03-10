<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ninety-Seven Heart</title>
        <!-- Style -->
        <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
     <!--INICIO DEL HEADER Y NAV-->
     <header class="cabecera">
        <div class="logo">
            <a href="index.php"><img src="https://www.howdeniberia.com/wp-content/uploads/2018/05/Disney-logo-png-transparent-download.png" alt=""></a>
        </div>
        <div class="opciones">
            <div class="opciones--menu">
                <a href="SignIn.php"><img src="../../resources/statics/icons/usuarios.png" alt=""></a>
                <img src="../../resources/statics/icons/favoritos.png" alt="">
                <img src="../../resources/statics/icons/carrito.png" alt="">
                <span class="menu--carrito__texto">
                    Carrito
                </span>
            </div>
            <div class="opciones--buscar">
                <form action="" class="buscar">
                    <input type="search" class="buscar--input" placeholder="Buscar" size="45" spellcheck="true">
                    <button class="buscar--button">Buscar</button>
                </form>
            </div>
        </div>
    </header>

    <div class="separador"></div>

    <nav class="menu sticky-top">
        <div class="menu--titulo">
            <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
        </div>
        <div class="menu--categorias menu--hidden" id="categories">
            <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
            <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
            <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
            <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
            <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
            <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
            <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>
        </div>
    </nav>

    <br><!--TITULO-->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>AQUÍ VA EL TÍTULO PANTALONES</h1>
            </div>
        </div>
    </div>
    <br><!--CARDS-->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://i.pinimg.com/originals/e4/09/af/e409af1fb23ed7703174ad3d1afe52a0.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Pantalón formal para dama</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card" style="width: 20rem;">
                    <img src="https://www.dhresource.com/600x600s/f2-albu-g17-M01-FD-25-rBVa4V_QRUqAHfYjAAJLb3L5NrM644.jpg/women-casual-stitching-sweatpants-women-high.jpg" class="card-img-top" alt="..." style="height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Pantalón tipo Jogger</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://img.ltwebstatic.com/images3_pi/2020/10/10/160233357044224ab3080c952835571fb40b02d26b_thumbnail_600x.webp" class="card-img-top" alt="..." style="Height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Pantalón jogger con cadenas</h5>
                        <p class="card-text">$36.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://ae01.alicdn.com/kf/HTB1kv83lkOWBuNjSsppq6xPgpXaY/Venta-caliente-Harem-Pantalones-mujer-2018-nuevo-verano-Ol-Pantalones-Casual-Harem-pantalones-el%C3%A1stico-de-alta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pantalón rosado</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card" style="width: 20rem;">
                    <img src="https://www.dhresource.com/600x600s/f2-albu-g9-M00-C2-C9-rBVaWF1jKlSATP_WAAVG1LPj0tw683.jpg/arrival-jeans-wholesale-woman-denim-pencil.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Pantalón Jeans azul</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://www.dhresource.com/f2/albu/g11/M01/7D/C3/rBNaFV8ZVm-Adf9ZAAGLoEFXwIk993.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Leggins de colores variados</h5>
                        <p class="card-text">$36.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <!--PAGINATION-->
    <div class="container">
        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link text-danger" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link text-danger" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-danger" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-danger" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link text-danger" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="separador"></div>
     <!--INICIO DEL FOOTER-->
    <footer class="pie">
        <div class="container">
          <div class="row">
            <div class="col">
            <br>
              <a href="FAQ.php" class="text-dark"><p>Preguntas frecuentes</p></a>
            </div> 
            <div class="col">
            <br>
              <p><a href="https://www.instagram.com/ninety_sevenheart/" class="text-dark"><img src="../../resources/statics/images/instagram_logo.png"> @ninety-sevenheart</p></a>
            </div>
            <div class="col">
            <br>
              <p><img src="../../resources/statics/images/facebook.png"> Ninety-Seven Heart</p>
            </div>
            <div class="col">
            <br>
              <p><img src="../../resources/statics/images/whatsapp.png">2222-2222</p>
            </div>
          </div>   
          <div class="row justify-content-center">
                <p>Derechos reservados - Ninety-Seven Heart 2021</p>
          </div>        
        </div>
    </footer>
    <!-- App -->
    <script type="module" src="../../app/features/public/index.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>