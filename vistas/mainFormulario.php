<!doctype html>
<html lang="en">
    <head>
        <title>Hola</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>

    <body>
        <div class="container d-flex justify-content-center mt-5">
        <form class="row g-3" action="../controladores/libros.controlador.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="opcion" value="insertarLibro">
  <div class="col-md-6">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo">
  </div>
  <div class="col-md-6">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor">
  </div>
  <div class="col-md-4">
    <label for="genero" class="form-label">Género</label>
    <select id="genero" class="form-select" name="genero">
      <option selected>escoge...</option>
      <option>Acción</option>
      <option>Ciencia ficción</option>
      <option>Romance</option>
      <option>Terror</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" placeholder="">
  </div>
  <div class="col-12 mt-4">
    <button type="submit" class="btn btn-outline-primary">Guardar</button>
    <button type="submit" class="btn btn-outline-warning">Descargar csv</button>
  </div>
</form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
