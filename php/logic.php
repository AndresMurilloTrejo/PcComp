<?php
session_start();

if(isset($_POST['comprar'])){
    switch($_POST['comprar']){
        case 'Añadir':
                $Nombre = $_POST['Nombre'];
                $Precio = $_POST['Precio'];
                $Descripcion = $_POST['Descripcion'];
                $Imagen = $_POST['Imagen'];

                if(!isset($_SESSION['pccomp'])){
                    $producto = array(
                        'Nombre' => $Nombre,
                        'Precio' => $Precio,
                        'Descripcion' => $Descripcion,
                        'Imagen' => $Imagen
                    );
                    $_SESSION['pccomp'][0]=$producto;
                }else{
                    $nameProductos=array_column($_SESSION['pccomp'],"Nombre");
                        if(in_array($Nombre,$nameProductos)){
                        ?>
                            <script>
                                   document.getElementById('error').innerHTML='<span style="color:red">Este articulo ya esta añadido al carrito</span>';
                            </script>
                        <?php
                    }else{
                    $NumeroProductos=count($_SESSION['pccomp']);
                    $producto = array(
                        'Nombre' => $Nombre,
                        'Precio' => $Precio,
                        'Descripcion' => $Descripcion,
                        'Imagen' => $Imagen
                    );
                    $_SESSION['pccomp'][$NumeroProductos]=$producto;
                }
            }
        break;

        case 'Eliminar':
            $Nombre = $_POST['Nombre'];

            foreach($_SESSION['pccomp'] as $indice=>$producto){
            
                if($producto['Nombre']==$Nombre){
                    unset($_SESSION['pccomp'][$indice]);
                }

            }
        break;
    }
}

?>