<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="public\css\telaLogin.css">
</head>

<body>
  <div class="loginFundo">
    <div class="login-page">
      <div class="form">
        <form>
          <input class="form-control" type="text" placeholder="Usuário">
          <input class="form-control" type="password" placeholder="Senha">
          <div class="d-grid gap-2" id="btn-success">
            <button class="btn btn-primary" id="btn-success" type="button">Entrar</button>
          </div>
        </form>
        <br>
        <div class="link_resetPassword">
          <p>Esqueci a <a class="link" href="#">senha</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>