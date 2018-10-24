@extends ('layout.admin')
@section ('titulo')
	Usuarios
@section ('servicios')
  {{sizeof($voluntarios)}}
@endsection
@stop

@section ('barra_lateral')
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">FUNCIONES</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="#"><i class="fa fa-home fa-fw"></i> <span>Home</span></a></li>
        <li class="active"><a href="{{url('voluntarios')}}"><i class="fa fa-users"></i> <span>Voluntarios</span></a></li>
        <li ><a href="#"><i class="fa fa-building"></i> <span>Areas</span></a></li>
         <li class="treeview">
          <a href="#"><i class="fa fa-ambulance"></i> <span>Servicios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Observaciones</a></li>
            <li><a href="#">Validar Servicios</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-bar-chart"></i> <span>Reportes</span></a></li>
</ul>
@endsection
@section ('page_header')
  <h1>
        MODULO DE VOLUNTARIOS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Voluntarios</a></li>
        <li class="active">Registro</li>
      </ol>
@endsection
@section ('contenido')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="row">
                  <div class="col-lg-12 col-xs-2">
                    <!-- small box -->
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3>{{sizeof($voluntarios)}}
                        </h3>

                        <p>Voluntarios Registrados</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="{{url('voluntarios/create')}}" class="small-box-footer">
                        Crear Voluntario <i class="fa fa-plus-circle"></i>
                      </a>
                    </div>
                  </div>
                </div>  
                  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>DNI</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>AREA</th>
                  <th>ESTADO</th>
                  <th>TIPO VOLUNTARIO</th>
                  <th>VER DETALLE</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($voluntarios as $voluntario)
                      <tr>
                        <td>{{ $voluntario->id_voluntario }}</td>
                        <td>{{ $voluntario->nombre }}</td>
                        <td>{{ $voluntario->apellido }}</td>
                        <td>{{ $voluntario->area }}</td>
                        <td>
                           @if ($voluntario->estado==1)
                              <span class="badge bg-green">activo</span>
                            
                           @else
                              <span class="badge bg-red">inactivo</span>
                           @endif
                        </td>
                        <td>{{ $voluntario->tipo }}</td>
                        <td><a href="/voluntarios/{{$voluntario->id_voluntario}}" class="btn btn-primary">Ver Detalle</a></td>
                      </tr>
                  @endforeach
                </tbody>
                <tfoot>
               <tr>
                  <th>DNI</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>AREA</th>
                  <th>ESTADO</th>
                  <th>TIPO VOLUNTARIO</th>
                  <th>VER DETALLE</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
@endsection