    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>  

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen propiedad">
        </picture>

        <p class="informacion-meta">Escriot el: <span>20/10/2023</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eaque inventore omnis expedita ratione totam laboriosam dolor vel pariatur distinctio ut sit odio iure perspiciatis doloribus architecto nobis, facere rem!  
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta aliquam unde, quibusdam accusamus earum ipsam ipsum iusto pariatur alias fuga. Optio ad ducimus reiciendis porro, impedit dolore quibusdam officiis illum!
            </p>
        </div>
    </main>

    <?php
        incluirTemplate('footer');
    ?>
