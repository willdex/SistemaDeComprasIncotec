  @extends ('layouts.cpanelp')
@section ('contenido') 

  <div class="row">


    <div class="col-lg-1">  
    </div>


@if(Auth::user()->privilegio != 1)

  <div class="col-lg-10">  

    @foreach($idcategoria as $a)

    <center> <h1 style="text-transform: uppercase; font-weight: bold;"> {{$a->nombre}} </h1> </center>

    @endforeach


      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive" style="overflow-x:inherit">


      <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
          <thead>
            <th style="font-size: 16px;"><center>Título</center></th>
            <th style="font-size: 16px;"><center>Categoria</center></th>
            <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
            <th style="font-size: 16px;"><center>Opciones</center></th>
          </thead>
          <tbody align="center" id="body_empresa">          
          @foreach($idc as $mov)
          <tr>
            <td style="font-size: 15px;">{{$mov->titulo}}</td>          
            <td style="font-size: 15px;">{{$mov->nombre}}</td>
            <td style="font-size: 15px;">{{$mov->fecha}}</td>
            <td style="font-size: 15px;"> <a href="{!! nl2br(e($mov->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a> 
            <a href='mailto:compras@incotec.cc'><button class='btn btn-primary' style='background-color: black; font-size: 14px;'>Enviar Propuesta</button></a>
            </td>
          </tr>
          @endforeach
          </tbody>          
      </table>

      <div class="pull-left">  {!!$idc->render()!!}  </div>

      </div>
    </div>


  </div>

@endif 



<!-- //////////////////////////////////////// A D M I N //////////////////////////////////////////////////////// -->


@if(Auth::user()->privilegio == 1)

  <div class="col-lg-10">  

    @foreach($idcategoria as $a)

    <center> <h1 style="text-transform: uppercase; font-weight: bold;"> {{$a->nombre}} </h1> </center>

    @endforeach


      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive" style="overflow-x:inherit">


      <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
          <thead>
            <th style="font-size: 16px;"><center>Título</center></th>
            <th style="font-size: 16px;"><center>Categoria</center></th>
            <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
            <th style="font-size: 16px;"><center>Opciones</center></th>
          </thead>
          <tbody align="center" id="body_empresa">          
          @foreach($idc as $mov)
          <tr>
            <td style="font-size: 15px;">{{$mov->titulo}}</td>          
            <td style="font-size: 15px;">{{$mov->nombre}}</td>
            <td style="font-size: 15px;">{{$mov->fecha}}</td>
            <td style="font-size: 15px;"> 

              <a href="{!! nl2br(e($mov->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a> 
              
            </td>
          </tr>
          @endforeach
          </tbody>          
      </table>

      <div class="pull-left">  {!!$idc->render()!!}  </div>

      </div>
    </div>


  </div>

@endif 



    <div class="col-lg-1">  
    </div>


  </div>

@endsection
