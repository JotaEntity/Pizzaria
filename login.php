<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="estilo/jota.css">
<link rel="stylesheet" href="estilo/stily.css">

<script src="js/login.js"></script>

<form action="/index.php" method="post">
  <div class="imgcontainer">
    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="E-mail" name="email" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Senha" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Me lembre
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button onclick="logar()" type="button" class="cancelbtn">Cancelar</button>
    <span class="psw">Esqueceu <a href="#">Senha?</a></span>
  </div>
</form>
