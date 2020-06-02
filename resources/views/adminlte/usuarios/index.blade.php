@extends('layouts.adminapp')

@section('content')
{{-- <div class="container">
 <h2> Lista de Usuarios Registrados <a href='usuarios/create'><button type="button" class="btn btn-success float-right">Agregar Usuario</button></a></h2> --}}

<div class="row">
     <!-- Left col -->
  <div class="col-md-8">
  <div class="card">
              <div class="card-header border-dark bg-primary">
                <h3 class="card-title">Lista de Usuarios</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
    <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                
        
                </tr>
                </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
            <div class="btn-group btn-group-sm">
            </div>
            
            <form action="{{ route('usuarios.destroy',$user->id) }}" method="POST">
                            <a href="{{ route('usuarios.edit' , $user->id) }}"><button type="button" class="btn btn-primary rigth">Editar</button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
            </td>
        
            </tr> 
    @endforeach
        
        
    </tbody>
   </table>
                <div class="card-footer clearfix">
                <a href='usuarios/create' class="btn btn-sm btn-info float-left">Crear nuevo usuario</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                </div>
              <!-- /.card-footer -->
            </div>

    </div>
    
              <!-- /.info-box-content -->
    </div>         

</div>
<div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
</div>
</div>

@endsection