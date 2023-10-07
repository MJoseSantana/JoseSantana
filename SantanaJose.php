<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Impresoras</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }
  h1 {
    font-size: 2rem;
    color: #143642;
  }
  h2 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #143642;
  }
  h3 {
    font-size: 1rem;
    font-weight: bold;
    color: black;
  }
  .topnav {
    overflow: hidden;
    background-color: #143642;
  }
  .content {
    padding: 30px;
    max-width: 600px;
    margin: 0 auto;
  }
  .card {
    background-color: #F8F7F9;
    box-shadow: 2px 2px 12px 1px rgba(140,140,140,.5);
    padding-top:10px;
    padding-bottom:20px;
  }
  footer {
    background-color: #365;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  </style>
</head>
<body>
  <div class="topnav">
    <h1>Impresoras</h1>
  </div>
  <div class="content">
    <div class="card">
      <h2>¿Qué es una impresora?</h2>
      <p>Una impresora es un dispositivo que se utiliza para crear una versión física de un documento electrónico.</p>
      <p>Las impresoras se utilizan en una amplia gama de aplicaciones, desde el hogar hasta el oficina y la industria.</p>
      <img src="imagenes/impresora.jpg" alt="Impresora" style="max-width: 100%;">
    </div>
  </div>
  <div class="content">
    <div class="card">
      <h2>Tipos de impresoras</h2>
      <ul>
        <li>
          <figure>
            <img src="imagenes/impresora-laser.jpg" alt="Impresora láser" style="max-width: 100%;">
            <figcaption>Impresora láser</figcaption>
            <p>Las impresoras láser utilizan un láser para crear una imagen en el papel. Luego, un tóner, que es un polvo de tinta, se adhiere a la imagen. Finalmente, un rodillo de calor transfiere el tóner al papel.</p>
          </figure>
          <p>Las impresoras láser son ideales para imprimir grandes cantidades de documentos, ya que son rápidas y eficientes.</p>
        </li>
        <li>
          <figure>
            <img src="imagenes/impresora-tinta.jpg" alt="Impresora de inyección de tinta" style="max-width: 100%;">
            <figcaption>Impresora de inyección de tinta</figcaption>
            <p>Las impresoras de inyección de tinta utilizan cartuchos de tinta para crear una imagen en el papel. Los cartuchos de tinta contienen tinta líquida, que se expulsa a través de boquillas diminutas para crear la imagen.</p>
          </figure>
          <p>Las impresoras de inyección de tinta son ideales para imprimir documentos con imágenes o fotografías.</p>
        </li>
        ...
      </ul>
    </div>
  </div>
  ...
</body>
</html>
