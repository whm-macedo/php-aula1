<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo de IMC</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<form class="form-horizontal" action="calcular.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Peso Ideal</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Altura</label>  
  <div class="col-md-4">
  <input id="textinput" name="altura" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sexo">Sexo</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="sexo-0">
      <input type="radio" name="sexo" id="sexo-0" value="1" checked="checked">
      Masculino
    </label>
	</div>
  <div class="radio">
    <label for="sexo-1">
      <input type="radio" name="sexo" id="sexo-1" value="2">
      Feminino
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="calcular"></label>
  <div class="col-md-4">
    <button id="calcular" name="calcular" class="btn btn-primary">Calcular</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>