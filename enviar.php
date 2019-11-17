<!DOCTYPE html>
<html>
  <head>
    <title>ELECTROREDES DEL CASANARE| Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <div id="marca">
          <h1><span class="resaltado">ELECTROREDES</span>  DEL CASANARE</h1>
        </div>
        <nav>
          <ul>
              <li><a href="index.html">Inicio</a></li>
              <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="Galeria.html">Galeria</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="Lista.html">Lista de precios</a></li>
             <li class="actual"><a href="contacto.html">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>

   

    <section id="main">
      <div class="contenedor">
        <article id="main-col">
          <h1>Contacto --- MENSAJE ENVIADO!</h1>
          <form>
            <?php 
$myemail = 'frahider645@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            <br>
            <label>Email</label>
            <input type="text" name="email" placeholder="Ingresa tu email">
            <br>
            <label>Teléfono</label>
            <input type="text" name="telefono" placeholder="Ingresa tu teléfono">
            <br>
            <label>Celular</label>
            <input type="text" name="nombre" placeholder="Ingresa tu celular">
            <br>
            <label>Mensaje</label>
            <textarea></textarea>
            <br>
            <input type="submit" name="enviar" value="Enviar">
          </form>
        </article>
      </div>
    </section>
    
 <section id="boletin">
      <div class="contenedor">
        <h1>Sigue nuestra pagina!</h1>
        <form>
          <input type="email" placeholder="Ingrese su Email...">
          <button type="submit" class="boton1">Suscribirse</button>
        </form>
      </div>
    </section>
    <P></P>
    