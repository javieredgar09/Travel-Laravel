@extends('layouts.adminapp')

@section('content')
<div class="container">
  <div class="row">
     <div class="col-sm-6">
     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo Usuario</h3>
              </div>
        <form action="/usuarios" method="POST">
           @csrf
           <div class="card-body">
                <!-- Date range -->
                <div class="form-group">
                  <label>Nombre:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right"  name="name" aria-describedby="Esbribe tu nombre">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Email:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control float-right" name="email" aria-describedby="Esbribe tu email" >
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Contraseña:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control float-right"  aria-describedby="Esbribe tu contraseña" name="password">
                  </div>
                  <!-- /.input group -->
                </div>
            </div> 
            <div class="col-md-8 offset-md-4">  
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection