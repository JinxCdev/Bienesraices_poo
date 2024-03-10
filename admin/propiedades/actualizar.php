<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');

    use App\Propiedad;
    use App\Vendedor;
    require '../../includes/app.php';

    //Impotar Intervention Image
    use Intervention\Image\ImageManagerStatic as Image;

    estaAutenticado();

    //Validar la URL por id valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    
    if(!$id) {
        header('location: /admin');
    }

    //Obtener los datos de la propiedad
    $propiedad = Propiedad::find($id);

    //Consulta para obtener todos los vendedores
    $vendedores = vendedor::All();

    //Arreglo mensaje de errores
    $errores = Propiedad::getErrores();

    //Ejecuta el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        //Asignar los atributos
        $args = $_POST['propiedad'];
        $propiedad->sincronizar($args);

        //Validacion
        $errores = $propiedad->validar();

        //genarar nombre unico
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        //Subida de achivos
        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
            $propiedad->setImagen($nombreImagen);
        }

        //Revisar que el arreglo de errores este vacio
        if(empty($errores)) {
            // Almacenar la imagen
            if($_FILES['propiedad']['tmp_name']['imagen']) {
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }
            
            $propiedad->guardar();
        }
    }

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach;?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php'; ?>

            <input type="submit" class="boton-verde" value="Actualizar Propiedad">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>