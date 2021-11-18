<?php

include("keys.php");

?>

<!DOCTYPE html>
<html lang="es">
  <head>
  

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,minimum-scale=1,initial-scale=1"
    />

    <title>▷ Clases Online de Primaria e Inglés| academiajiim.online</title>
    <meta
      name="description"
      content="Si buscas una academia de inglés online o quieres apuntar a tu hijo a una academia online de clases de primaria, este es tu sitio!"
    />
    <meta name="author" content="academiajiim.online" />
    

    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta property="og:type" content="website" />
    <meta
      property="og:title"
      content="▷ Clases Online de Primaria e Inglés| academiajiim.online"
    />
    <meta
      property="og:description"
      content="Si buscas una academia de inglés online o quieres apuntar a tu hijo a una academia online de clases de primaria, este es tu sitio!"
    />
    <meta property="og:image" content="https://academiajiim.online/images/academia_redes_blanco.png" />
    <meta property="og:url" content="https://academiajiim.online/" />
    <meta property="og:site_name" content="academiajiim.online" />

    <link rel="stylesheet" href="./styles/styles.css" type="text/css" />
    
    <link rel="canonical" href="https://academiajiim.online"/> 


    <script type="application/ld+json">
      {
        "@context": "http://www.schema.org",
        "@type": "WebSite",
        "name": "▷ Clases Online de Primaria e Inglés| academiajiim.online",
        "alternateName": "▷ Clases Online de Primaria e Inglés",
        "url": "https://academiajiim.online"
      }
    </script>
  <meta name="google-site-verification" content="xVg2ZUtP5ysdovRoaYkkvi5DgWwij5K1nQP_raER2nw" />
  </head>

  <body>
    <header class="cabecera">
      <a href="https://academiajiim.online/" title="Comparador de bonos de casino online" alt="Comparador de bonos de casino online" rel="home" class="logo-icono">Academia Jiim</br><p class="sublogo-icono">.online
      </p></a>

      <div class="topnav" id="myTopnav">
        <a href="./index.php"class="active">Inicio</a>
        <a href="./clases-de-primaria.php">Primaria</a>
        <a href="./clases-de-ingles-todos-los-niveles.php">Inglés</a>
        <a href="./contacto.html">Contacto</a>
        <a href="./quienes-somos.html">Nosotros</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </header>
    <main class="main">
      <div class="main_title">
        <img
        src="./images/primaria/logo.png"
        alt="Logo academia online de inglés y primaria"
        title="Logo academia online de inglés y primaria"
        width="200"
        />





<?php


if($_POST['firstname'] && $_POST['lastname'] && $_POST['email'] && $_POST['classrom']){
  

  if($_POST['subject']){
    $comment = $_POST['subject'];
  }else{
    $comment = $_POST['subject'];
  }

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $classrom = $_POST['classrom'];
  
              // Varios destinatarios
              $para = $email;

              $titulo = 'Petición clase online';

              // mensaje
              $mensaje = '
              <!DOCTYPE html>
              <html lang="es" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
                <head>
                  <meta charset="utf-8" />
                  <meta name="viewport" content="width=device-width,initial-scale=1">
                  <meta name="x-apple-disable-message-reformatting">
                  <title></title>
                  <style>
                    table, td, div, h1, p {font-family: Arial, sans-serif;}
                  </style>
                </head>
                <body style="margin:0;padding:0;">
                  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                    <tr>
                      <td align="center" style="padding:0;">
                        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                          <tr>
                            <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                              <img src="https://academiajiim.online/images/primaria/logo-url.png" alt="" width="300" style="height:auto;display:block;" />
                            </td>
                          </tr>
                          <tr>
                            <td style="padding:36px 30px 42px 30px;">
                              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                  <td style="padding:0 0 36px 0;color:#153643;">
                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Información Jiim Class</h1>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Hemos recibido tu correo y en breves un responsable se pondrá en contacto contigo para darte toda la información que necesites.</p>
                                    <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="https://www.academiajiim.online" style="color:#ee4c50;text-decoration:underline;">Descubre más en nuestra web</a></p>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding:0;">
                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                      <tr>
                                        <td style="width:260px;padding:0;vertical-align:top;color:#153643;">
                                          <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://academiajiim.online/images/inicio/academia-de-clases-online-primaria-todos-los-cursos.png" alt="" width="260" style="height:auto;display:block;" /></p>
                                          <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Tenemos las mejores clases online de primaria. Enseñamos todas las asignaturas de todos los cursos. Descúbrenos!</p>
                                          <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="https://academiajiim.online/clases-de-primaria.php" style="color:#ffa500;text-decoration:underline;">Clases de primaria online</a></p>
                                        </td>
                                        <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
                                        <td style="width:260px;padding:0;vertical-align:top;color:#153643;">
                                          <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://academiajiim.online/images/inicio/academia-de-clases-online-ingles-todos-los-niveles.jpg" alt="" width="260" style="height:auto;display:block;" /></p>
                                          <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Tenemos las mejores clases online de inglés. Enseñamos todos los niveles desde A1 a C1. Descúbrenos!</p>
                                          <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="https://academiajiim.online/clases-de-ingles-todos-los-niveles.php" style="color:#ffa500;text-decoration:underline;">Clases de inglés online</a></p>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td style="padding:30px;background:#ffa500;">
                              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                  <td style="padding:0;width:50%;" align="left">
                                    <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                      &reg; Academia Jiim, Jiim 2021<br/><a href="https://www.academiajiim.online" style="color:#ffffff;text-decoration:underline;">Academia Jiim</a>
                                    </p>
                                  </td>
                                  <td style="padding:0;width:50%;" align="right">
                                    <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                                      <tr>
                                        <td style="padding:0 0 0 10px;width:38px;">
                                          <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://academiajiim.online/images/primaria/academia_instagram.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                        </td>
                                        <td style="padding:0 0 0 10px;width:38px;">
                                          <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://academiajiim.online/images/primaria/academia-facebook.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </body>
              </html>';

              // Para enviar un correo HTML, debe establecerse la cabecera Content-type
              $cabeceras  = "MIME-Version: 1.0" . "\r\n";
              $cabeceras .= "From: rrhh@academiajiim.online" . "\r\n";
              $cabeceras .= "Reply-To: rrhh@academiajiim.online" . "\r\n";
              $cabeceras .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
              $cabeceras .= "X-Mailer PHP/". phpversion();

              // Enviarlo
              $mail = @mail($para, utf8_decode($titulo), utf8_decode($mensaje), $cabeceras);
              if($mail){
                // Varios destinatarios
                
                $mensaje = '
                <!DOCTYPE html>
                <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
                  <head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="x-apple-disable-message-reformatting">
                    <title></title>
                    <style>
                      table, td, div, h1, p {font-family: Arial, sans-serif;}
                    </style>
                  </head>
                  <body style="margin:0;padding:0;">
                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                      <tr>
                        <td align="center" style="padding:0;">
                          <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                            <tr>
                              <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                                <img src="https://academiajiim.online/images/primaria/logo-url.png" alt="" width="300" style="height:auto;display:block;" />
                              </td>
                            </tr>
                            <tr>
                              <td style="padding:36px 30px 42px 30px;">
                                <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                  <tr>
                                    <td style="padding:0 0 36px 0;color:#153643;">
                                      <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Información Jiim Class</h1>
                                      <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Hemos recibido un correo de '.$fname.' '.$lname.'.</p>
                                      <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Su email es: '.$email.'</p>
                                      <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Ha pedido información de la asignatura de: '.$classrom.'</p>
                                      <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Y nos ha comentado que: '.$comment.'</p>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding:30px;background:#ffa500;">
                                <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                  <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                      <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                        &reg; Academia Jiim, Jiim 2021<br/><a href="https://www.academiajiim.online" style="color:#ffffff;text-decoration:underline;">Academia Jiim</a>
                                      </p>
                                    </td>
                                    <td style="padding:0;width:50%;" align="right">
                                      <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                                        <tr>
                                          <td style="padding:0 0 0 10px;width:38px;">
                                            <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://academiajiim.online/images/primaria/academia_instagram.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                          </td>
                                          <td style="padding:0 0 0 10px;width:38px;">
                                            <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://academiajiim.online/images/primaria/academia-facebook.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </body>
                </html>';

                $para = "rrhh@academiajiim.online";

                $titulo = 'Petición clase online '.$fname.'.';

                $cabeceras  = "MIME-Version: 1.0" . "\r\n";
                $cabeceras .= "From: rrhh@academiajiim.online" . "\r\n";
                $cabeceras .= "Reply-To: rrhh@academiajiim.online" . "\r\n";
                $cabeceras .= "Content-type: text/html; charset=UTF-8" . "\r\n";
                $cabeceras .= "X-Mailer PHP/". phpversion();

                $mail2 = @mail($para, utf8_decode($titulo), utf8_decode($mensaje), $cabeceras);
                if($mail2){
                  echo "<h1>Formulario enviado</h1><p>Formulario enviado correctamente</p></div><div><p>Recuerda revisar el correo no deseado o la carpeta de Spam!</p></div></main>";
                }else{
                  echo "<h1>Formulario no enviado 2</h1><p>El formulario no se ha podido enviar</p></div></main>";
                }
              }else{
                echo "<h1>Formulario no enviado 1</h1><p>El formulario no se ha podido enviar</p></div></main>";
              }
}

?>
