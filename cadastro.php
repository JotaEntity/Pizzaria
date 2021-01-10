<?php include("navbar.php") ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="estilo/jota.css">
<link rel="stylesheet" href="estilo/stily.css">
<br/>
<br/>
<br/>
<br/>
<br/>

<div class ="col-md-6">
   <div class="form-group">
    Nome:<input type="text" class= "form-control" id="txtNome"  maxlength="10"/> 
  </div>
  <div class = "row">
  <div class ="col-md-4">
   <div class="form-group">
    Data:<input type="text" class= "form-control" id="txtData" onkeypress="mascaraData()" maxlength="10"/> 
  </div>
</div>
</div>
  <div class="row">
  <div class ="col-md-6">
  <div class="form-group">
    CPF:<input type="text" class= "form-control" id ="txtCpf" onkeypress="mascaraCpf()" maxlength="14"/>

  </div>
  </div>
  <div class ="col-md-6">
  <div class="form-group">
    RG:<input type="text" class= "form-control" id ="txtRg" onkeypress="mascaraRg()" maxlength="12"/>
  </div>
  </div>
  </div>
  <div class="form-group">
    Telefone:<input type="text" class= "form-control" id ="txtTelefone" onkeypress="mascaraTelefone()" maxlength="13"/>
  </div>

  <div class="form-group">
    Celular:<input type="text" class= "form-control" id ="txtCel" onkeypress="mascaraCel()" maxlength="14"/>
  </div>

<div class="form-group">
    Cep:<input type="text" class= "form-control" id ="txtCep" onblur="pesquisacep(this.value)" onkeypress="mascaraCep()"/>
  </div>

<div class="form-group">
    Cidade:<input type="text" class= "form-control" id ="txtCidade"/>
  </div>

<div class="form-group">
    Bairro:<input type="text" class= "form-control" id ="txtBairro"/>
  </div>

<div class="form-group">
    Rua:<input type="text" class= "form-control" id ="txtRua"/>
  </div>

<div class="form-group">
    Uf:<input type="text" class= "form-control" id ="txtUf"/>
  </div>

  <div class="form-group">
    Email:<input type="text" class= "form-control" id ="txtEmail" onblur="checarEmail();"/>
  </div>

  <div class="form-group">
   Selecione
   <select class ="form-control">
    <option></option>
    <option>opção 1</option>
    <option>opção 2</option>
    <option>opção 3</option>
    <option>opção 4</option>
   </select>
  </div>

  <input onclick="index.php" type="button" class="btn btn-primary"
  value="enviar"/>
  </div>
  <div class="col-md-6">
  </div>
</div>

</form>
<script type="text/javascript" src="js/cadastro.js"></script>
