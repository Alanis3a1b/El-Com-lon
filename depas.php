<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL COMÆLÓN - Departamentos</title>
    <link rel="shortcut icon" href="images/Logo comal@3x-8.png">
    <link href="styledepas.css" rel="stylesheet">
</head>
<body>  
    <header class="container-fluid">
        <section class="table-content">
            <div align="center">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>
                                <a href="depas.php"> <img src="images/Logo.png" alt="logo" width="180" height="70"></a>
                            </th>
                            <th><a href="depas.php">Inicio</a></th>
                            <th><a href="depas.php">Restaurante</a></th>
                            <th><a href="depas.php">Cafeterías</a></th>
                            <th><a href="depas.php">Departamentos</a></th>
                            <th>
                                <img src="images/barradebusqueda.webp" alt="barradebusqueda" width="200" height="40">
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>
    </header>

    <div class="container">
        <div class="titulo">
            <p><a>Departamentos</a></p>
        </div>
    </div>

    <br>


    <!-- Secciones de departamentos -->

    <div class="container">
        <article align="center">
            <table border="0" align="center">
                <thead>
                    <tr>
                        <th colspan="3"><h4 class="heading">Zona Occidental</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="filas"><a onclick="showRestaurants('Ahuachapan', 'occidental')"><img src="images/departamentos/Ahuachapan@3x.png" height="35%" width="35%" alt="Ahuachapan"></a></td>
                        <td class="filas"><a onclick="showRestaurants('Santa Ana', 'occidental')"><img src="images/departamentos/Santa Ana@3x.png" height="35%" width="35%" alt="Santa Ana"></a></td>
                        <td class="filas"><a onclick="showRestaurants('Sonsonate', 'occidental')"><img src="images/departamentos/Sonsonate@3x.png" height="35%" width="35%" alt="Sonsonate"></a></td>
                    </tr>           
                </tbody>
            </table>
            <div id="restaurants-occidental" style="display:none; margin-top: 20px;"></div>
        </article>
    </div>

    <br>

    <div class="container">
        <article align="center">
            <table border="0" id="tabla2" align="center">
                <thead>
                    <tr>
                        <th colspan="6"><h4 class="heading">Zona Central</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="filas"><a onclick="showRestaurants('La Libertad', 'central')"><img src="images/departamentos/La Libertad@3x.png" height="75%" width="75%" alt="La Libertad"></a></td>
                        <td class="filas"><a onclick="showRestaurants('San Salvador', 'central')"><img src="images/departamentos/San Salvador@3x.png" height="75%" width="75%" alt="San Salvador"></a></td>
                        <td class="filas"><a onclick="showRestaurants('Cuscatlan', 'central')"><img src="images/departamentos/Cuscatlan@3x.png" height="75%" width="75%" alt="Cuscatlán"></a></td>
                        <td class="filas"><a onclick="showRestaurants('Chalatenango', 'central')"><img src="images/departamentos/Chalatenango@3x.png" height="75%" width="75%" alt="Chalatenango"></a></td>
                        <td class="filas"><a onclick="showRestaurants('Cabañas', 'central')"><img src="images/departamentos/Cabañas@3x.png" height="75%" width="75%" alt="Cabañas"></a></td>
                        <td class="filas"><a onclick="showRestaurants('San Vicente', 'central')"><img src="images/departamentos/San Vicente@3x.png" height="75%" width="75%" alt="San Vicente"></a></td>
                    </tr>
                </tbody>
            </table>
            <div id="restaurants-central" style="display:none; margin-top: 20px;"></div>
        </article>
    </div>

    <br>

    <div class="container">
        <article align="center">
            <table border="0" id="tabla3" align="center">
                <thead>
                    <tr>
                        <th colspan="4"><h4 class="heading">Zona Oriental</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="filas"><a onclick="showRestaurants('San Miguel', 'oriental')"><img src="images/departamentos/San Miguel@3x.png" height="50%" width="50%" alt="San Miguel"></a></td>
                        <td class="filas"><a onclick="showRestaurants('Usulután', 'oriental')"><img src="images/departamentos/Usulutan@3x.png" height="50%" width="50%" alt="Usulután"></a></td>
                        <td class="filas"><a onclick="showRestaurants('La Unión', 'oriental')"><img src="images/departamentos/La Unión @3x.png" height="50%" width="50%" alt="La Unión"></a></td>
                        <td class="filas"><a onclick="showRestaurants('Morazán', 'oriental')"><img src="images/departamentos/Morazan@3x.png" height="50%" width="50%" alt="Morazán"></a></td>
                    </tr>
                </tbody>
            </table>
            <div id="restaurants-oriental" style="display:none; margin-top: 20px;"></div>
            <br> 
        </article>
    </div>

    <br>

    <div class="container">
        <section align="center">
            <table border="0" id="tabla4" align="center">
                <thead>
                    <tr>
                        <th colspan="3"><h4 class="heading">Sugerencias para ti</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="filasextra"><a href="detallesSimmerDown.php"><img src="images/Comida/Elote loco@3x.png" height="45%" width="45%" alt="Elote"></a></td>
                        <td class="filasextra"><a href="detallesSimmerDown.php"><img src="images/Comida/Pupusas@3x.png" height="50%" width="50%" alt="Pupusas"></a></td>
                        <td class="filasextra"><a href="detallesSimmerDown.php"><img src="images/Comida/Tamales@3x.png" height="50%" width="50%" alt="Tamales"></a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <br>
    <script src="scriptdepas.js"></script>
    <footer>
        <p align="center">Copyright © 2024. Todos los derechos reservados.</p>
    </footer>
    
</body>
</html>
