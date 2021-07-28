<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png" />
    <link rel="stylesheet" href="assets/styles.css" />
    <title>Formulario</title>
  </head>
  <body>
    <main>
      <div class="form-container">
        <h2>Información de estudiante</h2>
        <div class="division"></div>
        <form action="results.php" method="POST">
          <div class="form-control">
            <label for="name">Nombre</label>
            <input
              type="text"
              name="name"
              placeholder="Ingresa tu nombre"
              id=""
              required
            />
          </div>
          <div class="form-control">
            <label for="lastname">Apellido</label>
            <input
              type="text"
              name="lastname"
              placeholder="Ingresa tu apellido"
              id=""
              required
            />
          </div>
          <div class="form-control">
            <label for="address">Dirección</label>
            <input
              type="text"
              name="address"
              placeholder="Ingresa tu dirección"
              id=""
              required
            />
          </div>
          <div class="form-control">
            <label for="phone">Teléfono</label>
            <input
              type="tel"
              name="phone"
              placeholder="Ingresa tu número de teléfono"
              id=""
              required
            />
          </div>
          <div class="form-control mail">
            <label for="mail">Correo electrónico</label>
            <input
              type="mail"
              name="mail"
              placeholder="example@example.com"
              id=""
              required
            />
          </div>
          <div class="form-control message">
            <label for="message">Mensaje</label>
            <textarea
              name="message"
              placeholder="Deja tu mensaje"
              id=""
              required
              cols="10"
              rows="10"
              autocomplete="off"
            ></textarea>
          </div>
          <div class="form-control">
            <label for="grade1">Nota 1</label>
            <input
              type="text"
              name="grade1"
              placeholder="Ingresa la nota 1"
              id=""
              required
            />
          </div>
          <div class="form-control">
            <label for="mail">Nota 2</label>
            <input
              type="text"
              name="grade2"
              placeholder="Ingresa la nota 2"
              id=""
              required
            />
          </div>
          <div class="form-control">
            <label for="mail">Nota 3</label>
            <input
              type="text"
              name="grade3"
              placeholder="Ingresa la nota 3"
              id=""
              required
            />
          </div>
          <div class="form-control">
            <button type="submit" name="submit" id="">Enviar</button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
