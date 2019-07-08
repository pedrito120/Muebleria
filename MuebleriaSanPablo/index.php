<?php
// put your code here
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="header">
            <div class="row">
                <div class="logo col-md-6 col-md-8">
                    <img src="imagenes/logoOficial 3.0 - Color blanco.png" alt="">
                </div>
                <div class="buscador col-md-4">
                    <input type="text" placeholder="  Buscar Producto...">
                </div>
            </div>
            <div class="row">
                <div class="nav">
                    <nav class="col-md-12">
                        <ul>
                            <li><a href="">Muebles en general</a></li>
                            <li><a href="">Colchones</a></li>
                            <li><a href="">Camas</a></li>
                            <li><a href="">Comedores</a></li>
                            <li><a href="">Iinfatiles</a></li>
                            <li><a href="">Otros</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="sNoticia ">
                <h2>Noticias</h2>
                <div class="row">
                    <div class="col-md-4">
                        <article class="noticias">
                            <img src="imagenes/mueble.jpg" alt="">
                            <h4>¡Muebles nuevos!</h4>
                            <div class="nota">
                                <p>Somos una empresa nacida en la ciudad de Tehuacán, Puebla, en el año de 1986. 
                                    Nuestro objetivo es ofrecer artículos de la más alta calidad en el mercado local. 
                                    Desde nuestros inicios hemos tenido la visión de estar a la vanguardia en los productos y servicios que ofrecemos, 
                                    renovándonos y reinventándonos constantemente.
                                </p>
                                <a href="#">Ver más</a>
                            </div>
                        </article>    
                    </div>
                    <div class="col-md-4">
                        <article class="noticias">
                            <img src="imagenes/mueble.jpg" alt="">
                            <h4>¡Muebles nuevos!</h4>
                            <div class="nota">
                                <p>Somos una empresa nacida en la ciudad de Tehuacán, Puebla, en el año de 1986. 
                                    Nuestro objetivo es ofrecer artículos de la más alta calidad en el mercado local. 
                                    Desde nuestros inicios hemos tenido la visión de estar a la vanguardia en los productos y servicios que ofrecemos, 
                                    renovándonos y reinventándonos constantemente.
                                </p>
                                <a href="#">Ver más</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="noticias">
                            <img src="imagenes/mueble.jpg" alt="">
                            <h4>¡Muebles nuevos!</h4>
                            <div class="nota">
                                <p>Somos una empresa nacida en la ciudad de Tehuacán, Puebla, en el año de 1986. 
                                    Nuestro objetivo es ofrecer artículos de la más alta calidad en el mercado local. 
                                    Desde nuestros inicios hemos tenido la visión de estar a la vanguardia en los productos y servicios que ofrecemos, 
                                    renovándonos y reinventándonos constantemente.
                                </p>
                                <a href="#">Ver más</a>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>


        <div class="sOfertas container">
            <h2>Ofertas</h2>
            <div class="row">
                <div class="oferta col-md-4">
                    <img src="imagenes/oferta.jpg" alt="">
                </div>
                <div class="oferta col-md-4">
                    <img src="imagenes/oferta.jpg" alt="">
                </div>
                <div class="oferta col-md-4">
                    <img src="imagenes/oferta.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="sFormulario container">
            <h2>Contactanos</h2>
            <form action="">
                <div class="form row">
                    <div class="caja col-md-6">
                        Nombre: <br>
                        <input type="text" name="nombre">
                    </div>
                    <div class="caja col-md-6">
                        Apellidos <br>
                        <input type="text" name="apellido">
                    </div>
                    <div class="caja col-md-6">
                        Correo: <br>
                        <input type="email" name="correo">
                    </div>
                    <div class="caja col-md-6">
                        Asunto: <br>
                        <input type="text" name="asunto">
                    </div>
                    <div class="texto col-md-12">
                        Descripcion: <br>
                        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                        <br>
                        <input type="submit" value="Enviar">
                    </div>

                </div>
            </form>
        </div>
        <div class="footer">
            <footer class="row">
                <div class="contacto col-md-4">
                    <h3>Teléfono</h3>
                    <p><i class="fas fa-phone"></i></p>
                    <p></p>
                </div>
                <div class="direccion col-md-4">
                    <h3>Dirección</h3>
                    <p><i class="fas fa-map-marker-alt"></i></p>
                </div>
                <div class="correo col-md-4">
                    <h3>Correo</h3>
                    <p><i class="fas fa-envelope"></i></p>
                </div>
            </footer>
        </div>
    </body>
</html>
