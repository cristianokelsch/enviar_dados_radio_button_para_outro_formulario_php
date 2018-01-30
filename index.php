<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form class="form-horizontal" action="recebe_dados_formulario.php" method="POST" enctype="multipart/form-data" >
                <fieldset>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="nome">Radio Button</label>  
                        <div class="col-md-5">
                            <input type="radio" name="radio" value="um">Opção 1<br>
                            <input type="radio" name="radio" value="dois">Opção 2<br>
                            <input type="radio" name="radio" value="três">Opção 3<br>
                        </div>
                         <button type="submit" class="btn btn-success"> Enviar Dados Radio Button </button>
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </body>
</html>
