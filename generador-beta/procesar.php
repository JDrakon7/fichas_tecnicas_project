<?php


if (isset($_POST['idFicha'])) {
    $idFicha = $_POST['idFicha'];
    
    // Definir la ruta base donde se encuentran las fichas
    $rutaBaseFichas = 'fichas/' . $idFicha;

    // Verificar si existe la carpeta para el ID de la ficha
    if (is_dir($rutaBaseFichas)) {

        // Leer el título desde el archivo titulo.txt
        $archivoTitulo = $rutaBaseFichas. '/titulo.txt';
        $titulo = file_exists($archivoTitulo) ? file_get_contents($archivoTitulo) : 'Titulo no disponible.';
        
        // Leer la descripción desde el archivo "descripcion.txt"
        $archivoDescripcion = $rutaBaseFichas . '/descripcion.txt';
        $descripcion = file_exists($archivoDescripcion) ? file_get_contents($archivoDescripcion) : 'Descripción no disponible.';

        // Leer la información general desde "general_info.txt"
        $archivoGeneralInfo = $rutaBaseFichas . '/general_info.txt';
        $generalInfo = file_exists($archivoGeneralInfo) ? file_get_contents($archivoGeneralInfo) : 'Información general no disponible.';

        // Leer los materiales desde "materials_appendix.txt"
        $archivoMaterialsAppendix = $rutaBaseFichas . '/materials_appendix.txt';
        $materialsAppendix = file_exists($archivoMaterialsAppendix) ? file_get_contents($archivoMaterialsAppendix) : 'Materiales no disponibles.';

        // Obtener la imagen del producto (puede ser .png, .jpg, etc.)
        $rutaImagen = $rutaBaseFichas . '/producto.png';
        $imagen = file_exists($rutaImagen) ? $rutaImagen : 'imagen_no_disponible.png';

        // Obtener la categoría del producto (puede ser .svg, .png, etc.)
        $rutaCategoria = $rutaBaseFichas . '/categoria-parques-agua.svg';
        $categoria = file_exists($rutaCategoria) ? $rutaCategoria : 'categoria_no_disponible.svg';

        // Obtener la imagen del logo de la empresa
        $rutaLogoEmpresa = $rutaBaseFichas . '/logo-principal.svg';
        $logoEmpresa = file_exists($rutaLogoEmpresa) ? $rutaLogoEmpresa : 'logo_no_disponible.svg';

        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="styles.css">
            <title>Ficha Técnica del Producto</title>
        </head>
        <body>
            <!-- Header -->
            <header>
                <div class="logo-empresa">
                    <img src="' . $logoEmpresa . '" alt="Logo de la Empresa">
                    <h1 class="nombre-producto">' . htmlspecialchars($titulo) . '</h1>
                </div>

                <div class="categoria-producto">
                    <img src="' . htmlspecialchars($categoria) . '" alt="Categoría del Producto">
                </div>
            </header>

            <!-- Main Content -->
            <div class="contenido">
                <!-- Imagen del Producto -->
                <div class="imagen-producto">
                    <img src="' . htmlspecialchars($imagen) . '" alt="Imagen del Producto">
                </div>

                <!-- Sidebar -->
                <aside class="sidebar">
                    <!-- Tabla General Information -->
                    <table class="general-info">
                        <tr><th colspan="2">General Information</th></tr>
                        <tr><td>' . nl2br(htmlspecialchars($generalInfo)) . '</td></tr>
                    </table>

                    <!-- Tabla Materials Appendix -->
                    <table class="materials-appendix">
                        <tr><th colspan="2">Materials - Appendix</th></tr>
                        <tr><td>' . nl2br(htmlspecialchars($materialsAppendix)) . '</td></tr>
                    </table>
                </aside>

                <!-- Descripción del Producto -->
                <div class="descripcion-producto">
                    <p>' . nl2br(htmlspecialchars($descripcion)) . '</p>
                </div>
            </div>

            <!-- Footer -->
            <footer>
                <div class="footer-content">    
                    <p>FO-D&D-07 PRODUCT SHEET V2</p>
                </div>
            </footer>
        </body>
        </html>';
        
    } else {
        // Si no existe la carpeta para el ID proporcionado
        echo "No se encontró una ficha técnica con ese ID.";
    }
} 

























































// if (isset($_POST['idFicha'])) {
    // $idFicha = $_POST['idFicha'];
    
    // Definir la ruta base donde se encuentran las fichas
    // $rutaBaseFichas = 'fichas/' . $idFicha;

    // Verificar si existe la carpeta para el ID de la ficha
    // if (is_dir($rutaBaseFichas)) {

        
        // leer el titulo desde el archivo titulo.txt
        // $archivoTitulo = $rutaBaseFichas. '/titulo.txt';
        // $titulo = file_exists($archivoTitulo) ? file_get_contents($archivoTitulo) : 'Titulo no disponible.';
        
        // Leer la descripción desde el archivo "descripcion.txt"
        // $archivoDescripcion = $rutaBaseFichas . '/descripcion.txt';
        // $descripcion = file_exists($archivoDescripcion) ? file_get_contents($archivoDescripcion) : 'Descripción no disponible.';

        // Leer los detalles adicionales desde "detalles.txt"
        // $archivoDetalles = $rutaBaseFichas . '/table.txt';
        // $detalles = file_exists($archivoDetalles) ? file_get_contents($archivoDetalles) : 'Detalles no disponibles.';

        // Obtener la imagen del producto (puede ser .png, .jpg, etc.)
        // $rutaImagen = $rutaBaseFichas . '/producto.png';
        // $imagen = file_exists($rutaImagen) ? $rutaImagen : 'imagen_no_disponible.png';

        // Obtener la categoría del producto (puede ser .svg, .png, etc.)
        // $rutaCategoria = $rutaBaseFichas . '/categoria-parques-agua.svg';
        // $categoria = file_exists($rutaCategoria) ? $rutaCategoria : 'categoria_no_disponible.svg';

        //  Obtener la imagen del logo de la empresa
        //  $rutaLogoEmpresa = $rutaBaseFichas . '/logo-principal.svg';
        //  $logoEmpresa = file_exists($rutaLogoEmpresa) ? $rutaLogoEmpresa : 'logo_no_disponible.svg';

//         echo '
//         <!DOCTYPE html>
//         <html lang="es">
//         <head>
//             <meta charset="UTF-8">
//             <meta name="viewport" content="width=device-width, initial-scale=1.0">
//             <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
//             <link rel="stylesheet" href="styles.css">
//             <title>Ficha Técnica del Producto</title>
//         </head>
//         <body>
//             <!-- Header -->
//             <header>
//                 <div class="logo-empresa">
//                     <img src="' . $logoEmpresa . '" alt="Logo de la Empresa">
//                     <h1 class="nombre-producto">' . htmlspecialchars($titulo) . '</h1>
//                 </div>


//                 <div class="categoria-producto">
//                     <img src="' .  htmlspecialchars($categoria) . '" alt="Categoría del Producto">
//                 </div>
//             </header>

//             <!-- Main Content -->
//             <div class="contenido">
//                 <!-- Imagen del Producto -->
//                 <div class="imagen-producto">
//                     <img src="' . htmlspecialchars($imagen) . '" alt="Imagen del Producto">
//                 </div>

//                 <!-- Sidebar -->
//                 <aside class="sidebar">
//                     <table class="general-info">
//                         <tr><th colspan="2">General Information</th></tr>
//                         <tr><td>' . nl2br(htmlspecialchars($detalles)) . '</td></tr>
//                     </table>

//                     <table class="materials-appendix">
//                         <tr><th colspan="2">Materials - Appendix</th></tr>
//                         <tr><td>Información adicional sobre los materiales</td></tr>
//                     </table>
//                 </aside>

//                 <!-- Descripción del Producto -->
//                 <div class="descripcion-producto">
//                     <p>' . nl2br(htmlspecialchars($descripcion)) . '</p>
//                 </div>
//             </div>

//             <!-- Footer -->
//             <footer>
//                 <div class="footer-content">    
//                     <p>FO-D&D-07 PRODUCT SHEET V2</p>
//                 </div>
//             </footer>
//         </body>
//         </html>';
        
//     } else {
//         // Si no existe la carpeta para el ID proporcionado
//         echo "No se encontró una ficha técnica con ese ID.";
//     }
// } 

