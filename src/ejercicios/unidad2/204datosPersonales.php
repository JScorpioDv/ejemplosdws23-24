<?php
/*Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido,
email, año de nacimiento y teléfono. Luego muéstralos por pantalla dentro de una tabla.*/

    $salida = "<html>";
    $salida.= "<head><title>Datos Personales del Usuario".$_POST['nombre']."</title></head>";
    $salida.= "<body>
                <table border='1px'>
                    <tr>
                        <td>Nombre</td><td>".$_POST['nombre']."</td>
                    </tr>
                    <tr>
                        <td>Apellidos</td><td>".$_POST['apellidos']."</td>
                    </tr>
                    <tr>
                        <td>Correo Electrónico</td><td>".$_POST['correo']."</td>
                    </tr>
                    <tr>
                        <td>Año de nacimiento</td><td>".$_POST['anyo']."</td>
                    </tr>
                    <tr>
                        <td>Teléfono</td><td>".$_POST['telefono']."</td>
                    </tr>
                </table>            
            </body>
            </html>";

    echo $salida;