
<?php
//entrada 
$n1 = $_GET['numero1'];
$n2 = $_GET['numero2'];
$n3 = $_GET['numero3'];
//processamento
$resultado = ($n1 + $n2 + $n3)/3;
//saida

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
<form class="form-horizontal" method="GET" action="dados.php">
        <fieldset>
        
        <!-- Form Name -->
        <legend>CALCULAR MEDIA</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero1">nota 1</label>  
          <div class="col-md-4">
          <input id="numero1" name="numero1" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero2">nota 2</label>  
          <div class="col-md-4">
          <input id="numero2" name="numero2" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero2">nota 3</label>  
          <div class="col-md-4">
          <input id="numero2" name="numero3" type="text" placeholder="" class="form-control input-md">
            
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

        <div>
            resultado: <?php echo $resultado; ?>
        </div>

</body>
</html>