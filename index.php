    <?php
        require 'includes/app.php';
        incluirTemplate('header', $inicio = true);
    ?>

    <main class="contenedor seccion">
        <h2>Mas Sobre Nosotros</h2>
        <div class="iconos-nostros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex placeat repellat animi vitae tempore nesciunt officiis esse ullam fuga architecto saepe sunt eveniet, veniam temporibus dolore suscipit nihil! Voluptatibus, modi.
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex placeat repellat animi vitae tempore nesciunt officiis esse ullam fuga architecto saepe sunt eveniet, veniam temporibus dolore suscipit nihil! Voluptatibus, modi.
                </p>
            </div>
            
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Seguridad" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex placeat repellat animi vitae tempore nesciunt officiis esse ullam fuga architecto saepe sunt eveniet, veniam temporibus dolore suscipit nihil! Voluptatibus, modi.
                </p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <?php
            $limite = 3;
            include 'includes/templates/anuncios.php';
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>
            Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad
        </p>
        <a href="contacto.html" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/11/2023</span> por: <span>Admin</span></p>
                        
                        <p>
                            Consejos para construit una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/11/2023</span> por: <span>Admin</span></p>
                        
                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a cambiar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
    
            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente froma, muy buena atenta y la casa que me ofrecieron cumple con todas mis expectativas
                </blockquote>
                <p>- Jinson Castillo</p>
            </div>
        </section>
    </div>

    <?php
        incluirTemplate('footer');
    ?>

