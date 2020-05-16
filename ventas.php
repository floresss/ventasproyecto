<html lang="en">
    <head>
        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title >VENTAS</title>
    </head>
    <body style="background: #591255">
        <br />
        <div  class="p-3 mb-2  text-white" align="center">
            <h1>Nike Factory</h1>
        </div>
        <div align="right">
            <a href="index.html">Salir</a>
        </div>
        <br />
    <?php
      if(isset($_GET['producto']))
      {
       include('Conexion.php');
       $con= new Conexion();
       $producto=$_GET['producto'];
       $precio=$_GET['precio'];

       $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
       //echo " -------- Datos de producto ".$_GET['producto']." --- Precio".$_GET['precio'];
       $consulta=$con->query($query);
       $con->close();
       ?>
      <div align="center" >
       <table align=center border="8" bgcolor="silver">
        <tr bgcolor="silver">
           <td>
            <p>Producto</p>
           </td>
           <td>
            <p>Precio</p>
           </td>
        </tr>
        <?php 
        
         $con= new Conexion();
         $query="SELECT * FROM `carrito` WHERE 1";
         $pro=$con->query($query);
         $con->close();

         while($row=mysqli_fetch_assoc($pro))
        {
         echo "
            <tr>
           <td>
            <p>".$row['producto']."</p>
           </td>
           <td>
            <p>".$row['precio']."</p>
           </td>
        </tr>
            ";
        }
        ?>
       </table>
     </div>
       <br/>
     <?php
 }
    ?>

    <div align="center" >
        <table border="1
		
		"  bgcolor="white">
		<tr  bgcolor="white">
		<td>NOMBRE</td>
		<td>DESCRIPCION</td>
		<td>PRODUCTO</td>
		<td>AGREGAR CARRITO</td>
		</tr>
            <tr bgcolor="orange">
                <td> Air Force 1 </td>
                <td>
                    Las Air Force 1 aparecieron por primera vez en 1982 y revolucionaron el mundo de las zapatillas. Fueron las primeras zapatillas de baloncesto con Nike Air, aunque desde entonces su naturaleza innovadora ha dejado paso a su estatus como icono del estilo urbano.
                    <br />
                    Nike Air Force 1, la historia de un icono.
                    <br />
                    Precio de Q999.00
                </td>
                <td>   <img src="af1.png" height="150px" width="150px" alt="" /> </td>
				<td><a href="?producto=AF1&precio=999">Agregar a carrito</a><td>
            </tr>
            <tr bgcolor="orange">
                <td> Air Jordan 1 </td>
                <td>
                    Las Air Jordan I se diseñaron para Michael Jordan y aquello supuso muchos cambios. El primero, que por primera vez un jugador negro era la imagen de una marca tan grande como Nike.
                    <br />
                    El primero, que por primera vez un jugador negro era la imagen de una marca tan grande como Nike.
                    <br />
                    Precio de Q1800.00
                </td>
                <td>   <img src="aj1.jpg" height="150px" width="150px" alt="" /> </td> 
				<td> <a href="?producto=AJ1&precio=1800">Agregar a carrito</a></td>
            </tr>
            <tr bgcolor="orange">
                <td> Air Max 97 </td>
                <td>
                    Son las Nike que llevaba la Spice Girl deportista, las que promocionaba Carl Lewis, las que avanzaban con su tono brillante un nuevo milenio que despues, es asi, no fue para tanto.
                    <br />
                    Representan fielmente los ultimos años 90.
                    <br />
                    Precio de Q2000.00
                </td>
                <td>   <img src="am97.jpg" height="150px" width="150px" alt="" /> </td>
				  <td><a href="?producto=AM97&precio=2000">Agregar a carrito</a></td>
            </tr>
            <tr bgcolor="orange">
                <td> Nike More Uptempo </td>
                <td>
                     Uptempo fue creada para jugadores que no encajaban en el molde de un guardia poderoso, e incluso no existia en los comienzos de los sneakers de Nike Basketball.
                    <br />
                    Para todos aquellos jugadores en el medio, Uptempo.
                    <br />
                    Precio de Q1700.00
                </td>
                <td>   <img src="uptempo.jpg" height="150px" width="150px" alt="" /> </td> 
				<td> <a href="?producto=Uptempo&precio=1700">Agregar a carrito</a></td>
            </tr>
            <tr bgcolor="orange">
                <td> Air Max 1 </td>
                <td>
                    En 1979 cuando Frank Rudy, inventor y antiguo trabajador de la NASA, fue contratado por Nike para desarrollar tecnicas de amortiguacion.
                    <br />
                    Pronto desarrolló lo que hoy conocemos como AIR, una unidad de aire en la suela de la zapatilla para amortiguar.
                    <br />
                    Precio de Q1200.00
                </td>
                <td>   <img src="am1.jpg" height="150px" width="150px" alt="" /></td>
				<td> <a href="?producto=AM1&precio=1200">Agregar a carrito</a></td>
            </tr>

        </table>

    </div>
</body>
</html>