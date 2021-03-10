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
                <h1>AQUÍ VA EL TÍTULO LENCERÍA</h1>
            </div>
        </div>
    </div>
    <br><!--CARDS-->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="data:image/jpeg;base64,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" class="card-img-top" alt="..."  style="height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Lencería morada</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card" style="width: 20rem;">
                    <img src="https://i.pinimg.com/236x/3a/2d/f5/3a2df5cb2fc94705ed40c8b7a781be20.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Lencería varicolor</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://image.dhgate.com/0x0s/f2-albu-g10-M00-F4-5D-rBVaWVx_Mm2AZJ8yAAWk92Qi7VU719.jpg/para-mujer-sissy-lencer-a-sexy-bikini-lace.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Set de lencería</h5>
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
                    <img src="https://images-americanas.b2w.io/produtos/2515384841/imagens/moda-feminina-de-quatro-pecas-lingerie-sexy-de-chiffon-cuecas-pijamas-sutia-fio-dental-cinta-liga/2515384841_1_large.jpg" class="card-img-top" alt="..." style="height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Set de lencería cuerpo completo</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card" style="width: 20rem;">
                    <img src="https://i.pinimg.com/originals/05/6b/a6/056ba695f877804aca7f5468bff5473d.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Set de lencería roja</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://i0.wp.com/ae01.alicdn.com/kf/HTB1oi_Yob1YBuNjSszhq6AUsFXaG/3-piezas-ropa-interior-Mujer-encaje-Tanga-G-String-Sexy-Lencer%C3%ADa-mujer-Tanga-T-Mujer-ropa.jpg?crop=5,2,900,500&quality=2886" class="card-img-top" alt="..." style="height: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">Lencería 3 piezas</h5>
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