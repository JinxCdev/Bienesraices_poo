<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    
    require '../../includes/app.php';
    
    use App\Propiedad;
    use App\Vendedor;
    use Intervention\Image\ImageManagerStatic as Image;

    estaAutenticado();

    $propiedad = new Propiedad();

    //Consulta para obtener todos los vendedores
    $vendedores = vendedor::All();

    //Arreglo mensaje de errores
    $errores = Propiedad::getErrores();

    //Ejecuta el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        /** Crea una nuevo instancia **/
        $propiedad = new Propiedad($_POST['propiedad']);
        
        /** Subida de archivos**/
        //genarar nombre unico
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        //Setear la imagen
        //Realiza un resize a la imagen con intervention
        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
            $propiedad->setImagen($nombreImagen);
        }

        //validar
        $errores = $propiedad->validar();
        
        //Revisar que el arreglo de errores este vacio
        if(empty($errores)) {

            //Crear la carpeta para subir imagen
            if(!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
            }

            //Guarda la imagen en el servidor
            $image->save(CARPETA_IMAGENES . $nombreImagen);

            //Guarda en la base de datos
            $propiedad->guardar();
        }
    }
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="admin" class="boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach;?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php'?>
            
            <input type="submit" class="boton-verde" value="Crear Propiedad">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>