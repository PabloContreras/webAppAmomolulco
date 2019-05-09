@extends('layouts.app')
 <!--     Fonts and icons     -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario de solicitud de constancia domiciliaria</div>

                <div class="card-body">                    
                    <form>
                      <fieldset>
                        <legend>Proporcionanos los siguientes datos para iniciar el trámite</legend>
                        
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@dominio.com" name="correoElectronico">
                          <small id="emailHelp" class="form-text text-muted">Por este medio te avisaremos el estatus de tu constancia</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" class="form-control" id="nombre" placeholder="Pablo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido paterno</label>
                          <input type="text" class="form-control" id="apellidoMaterno" placeholder="Contreras">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido materno</label>
                          <input type="text" class="form-control" id="apellidoPaterno" placeholder="Gutiérrez">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Dirección</label>
                            <textarea class="form-control" id="direccion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Número de años que ha habitado dicha vivienda</label>
                          <input type="number" class="form-control" id="" placeholder="6">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Clave INE</label>
                          <input type="number" class="form-control" id="" placeholder="xxxxxxxxxxx">
                        </div>
                        <div class="form-group">
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                          <small id="fileHelp" class="form-text text-muted">Adjunta una foto de alguna identificación con foto para verificar tu domicilio<small>
                        </div>
                        <center>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aceptar</button>
                        </center>
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Casi terminamos </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Al dar click en <em>aceptar</em> estás accediendo a nuestra <a href="#">política de privacidad</a> y aceptando nuestros <a href="#">términos y condiciones</a>, así mismo toda la información ingresada es totalmente confidencial y no se compartirá con nadie. 
        Se te notificará por correo electrónico el estátus de tu constancia domiciliaria.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <p class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            Hecho con <i class="fa fa-heart" aria-hidden="true"></i> por <a href="#">Equipo buena maravilla onda dinamita escuadron lobo</a>
        </p>
    </div>
</footer>
@endsection