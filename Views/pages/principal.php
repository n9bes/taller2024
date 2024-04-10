<!DOCTYPE html>
<html lang="en">
<body>
    <main class="cuerpo">

    <div class="carrusel">

        <!-- Indicadores Abajo -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <!-- Imagenes Componentes -->
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('./assets/img/main1.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('./assets/img/main2.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('./assets/img/main3.jpg');?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- Botones Adelante/Atras -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    
    <section>
        <div class="aclaracion">
            <div class="aclaracion-cartas">
                <div class="aclaracion-carta aclaracion-descuento">
                    <img src="<?php echo base_url('./assets/img/coin.png');?>" alt="moneda imagen" width="80">
                    <div class="contenido">
                        <h4 class="descuento-title">Descuento del 20%</h4>
                        <span>Abonando en Efectivo al Contado</span>
                    </div>
                </div>
                <div class="aclaracion-carta aclaracion-garantia">
                    <img src="<?php echo base_url('./assets/img/shield.png');?>" alt="escudo imagen" width="80">
                    <div class="contenido">
                        <h4 class="garantia-title">Garantias Oficiales</h4>
                        <span>De hasta 12 meses, para todos los productos afiliados</span>
                    </div>
                </div>
                <div class="aclaracion-carta aclaracion-devolucion">
                    <img src="<?php echo base_url('./assets/img/chargeback.png');?>" alt="devolucion imagen" width="80">
                    <div class="contenido">
                        <h4 class="devolucion-title">Devolucion Gratis</h4>
                        <span>Solo necesitas hablarlo con el soporte</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="destacados">
            <h1>Destacados</h1>
            <div class="destacados-productos">
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
            </div>
         </div>   
    </section>

    <section>
        <div class="cloud-vid">
            <video autoplay loop muted plays-inline disablepictureinpicture class="videoInput">
                <source src="<?php echo base_url('./assets/img/cloudsVid.mp4');?>" type="video/mp4">
            </video>
        </div>
    </section>

    <section>
        <div class="novedades">
            <h1>Novedades</h1>
            <div class="novedades-productos">
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
                <div class="carta-producto"></div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="newslatter">
            <div class="newslatter-texto">
                <h1>Newslatter</h1>
                <h2>¡Recibe notificaciones sobre nuestros productos!</h2>
            </div>
            <div class="newslatter-barra">
                <input type="newslatter-email" class="newslatter-input" placeholder="example@gmail.com... Te esperamos!" id="newslatter-email">
                <button type="submit" class="newslatter-submit">Enviar</button>
            </div>
        </div>
    </section>

    <section>
        <div class="imagen-ilustrativa-end">
            <h1> INSERTAR IMAGEN </h1>
        </div>
    </section>

    </main>
</body>
</html>