<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Planta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php  
    include_once ('menu.php');
?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <br>
                <h3>Alta de alumnos</h3>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="TipoPlanta" class="form-label"><strong>Tipo de Planta</strong></label>
                        <input type="text" class="form-control" id="TipoPlanta" name="TipoPlanta">
                    </div>
                    <div class="col-md-6">
                        <label for="Origen" class="form-label"><strong>Origen de Planta</strong></label>
                        <input type="text" class="form-control" id="Origen" name="Origen">
                    </div>
                    <div class="col-md-6">
                        <label for="Origen" class="form-label"><strong>¿En dónde quiere implementado?</strong></label>
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione una opción</option>
                        <option value="1">Huerto</option>
                        <option value="2">Jardin</option>
                        <option value="3">Granja</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <br><br>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Necesita asistencia?
                        </label>
                    </div>
                    <div class="col-md-3">
                    <br><br>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ¿Le hace falta herramientas de trabajo?
                        </label>
                    </div>


                    <div class="col-md-3">
                        <br>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Proyecto personal
                        </label>
                    </div>
                    <div class="col-md-3">
                        <br>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Proyecto colaborativo
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>