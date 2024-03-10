    <?php
        require 'includes/app.php';
        incluirTemplate('header');
    ?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source src="build/img/nosotros.webp" type="image/webp">
                    <source src="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo facere ducimus quaerat debitis, ipsum veniam aliquam aliquid nihil modi quos repellendus, autem consectetur non. Distinctio ab eligendi sapiente nemo animi.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo facere ducimus quaerat debitis, ipsum veniam aliquam aliquid nihil modi quos repellendus, autem consectetur non. Distinctio ab eligendi sapiente nemo animi.
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptate pariatur voluptatum doloribus minima quod fugit blanditiis voluptatem nostrum dolores ullam iste quia tempore, ipsa delectus velit error, quos dolore!
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

    <?php
        incluirTemplate('footer');
    ?>
