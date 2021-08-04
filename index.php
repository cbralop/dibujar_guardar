<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dibujar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="mt-5 container">
      <div class="row justify-content-center">
        <div id="signature-pad" class="signature-pad col-md-6" >
            <div class="description">Firme aqu&iacute;</div>
            <div class="signature-pad--body">
              <canvas class="col-md-12" style="height:300px; border: 1px black solid; " id="canvas"></canvas>
              <canvas class="col-md-12 d-none" style="height:300px; border: 1px black solid; " id='blankCanvas'></canvas>
            </div>
            
            <form id="form" action="" method="post">
              <input type="hidden" name="base64" value="" id="base64">
              <button id="saveandfinish" class="btn btn-success">Guardar</button>
              <input type="button" onclick="limpiar()" class="btn btn-warning" value="Limpiar">
            </form>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <img src="" class="col-md-12" alt="" id="img_signature">
          <div id="mensaje"></div>
        </div>
      </div>
    </div>
    
    <script src="libraries/jquery-3.6.0.min.js"></script>
    <script src="libraries/signature_pad.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>

