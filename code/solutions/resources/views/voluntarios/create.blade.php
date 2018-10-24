@extends ('layout.admin')
@section ('titulo')
	Crear Usuario

@endsection
@section ('barra_lateral')
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">FUNCIONES</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="#"><i class="fa fa-home fa-fw"></i> <span>Inicio</span></a></li>
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
        <li class="active">Crear Registro</li>
      </ol>
@endsection
@section ('contenido')

          <!-- general form elements -->
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="box box-primary">
                  <div class="box-header with-border">
                 <h3 class="box-title">Crear Voluntario</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" class="form-group" method="POST" action="/voluntarios">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">DNI</label>
                      <input type="text" name="dni" class="form-control" placeholder="Ingrese DNI">
                    </div>
                    <div class="form-group">
                      <label for="">Nombre</label>
                      <input type="text" name="nombre" class="form-control"  placeholder="Ingrese Nombre">
                    </div>
                    <div class="form-group">
                      <label for="">Apellido</label>
                      <input type="text" name="apellido" class="form-control" placeholder="Ingrese Apellido">
                    </div>
                    <div class="form-group">
                        <label>Area</label>
                        <select class="form-control" name="area">
                          <option>FBI</option>
                          <option>GRD</option>
                          <option>Logística</option>
                          <option>Salud</option>
                          <option>Voluntariado</option>
                          <option>Presidencia</option>
                          <option>Consejo Provincial</option>
                        </select>
                     </div>
                    <div class="form-group">
                        <label>Tipo Voluntario</label>
                        <select class="form-control" name="tipo_voluntario">
                          <option>Administrador</option>
                          <option>Coordinador/Jefe</option>
                          <option>Coordinador_Area</option>
                          <option>Voluntario</option>
                        </select>
                     </div>
                     <!-- 
                      <div class="form-group">
                        <label for=""> Fotos</label>
                        <input type="file" name="archivo">
                      </div> -->
                  </div>
                  
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </div>
                </form>
                </div>
              </div>
         </div>
@endsection 