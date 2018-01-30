<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            
            <div class="alert alert-success" role="alert">
                <p class="text-center"> <strong> Dados Recebidos (Radio Button) </strong>  </p>
            </div>  
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="nome">RADIO BUTTON RECEBIDO</label>  
                        <div class="col-md-5">
                            <input type="text" id="radio_recebido" name="radio_recebido" placeholder="Nome" class="form-control input-md" value="<?php echo $_POST['radio'] ?>" required="">
                        </div>
                    </div>

                </fieldset>
        </div>
    </body>
</html>
