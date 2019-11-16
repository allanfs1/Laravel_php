
@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    <h1> Nome</h1>
    
@stop

@section('content')
<div class="panel panel-default">
   <div class="panel-body">
  <section class = "content">
    <div class="row">
      <div class = "col-md-3 col-sm-6 col-xs-12">
       <div class="info-box">
         <span class="info-box-icon bg-aqua">
            <i class="ion ion-ios-gear-outline"></i>
         </span>
         <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
          </div>
       </div> 
     
   </div>

    <div class = "col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow">
              <i class="ion ion-ios-people-outline"></i>
            </span>
          <div class="info-box-content">
              <span class="info-box-text">Membros</span>
              <span class="info-box-number">4,939</span>
           </div>
       </div>
   </div>    
   <div class = "col-md-3 col-sm-6 col-xs-12">
        <div class = "info-box">
          <span class="info-box-icon bg-red">
             <i class="fa fa-id-card" aria-hidden="true"></i>
          </span>
          <div class="info-box-content"> 
              <span class="info-box-text">Vendas</span>
              <span class="info-box-number">R$:13,939</span>
          </div>
        </div>
     </div>   
  </div>  
     </section>
  </div>
</div>

<div class="panel panel-primary">
          <div class="panel-heading clearfix">
              <h2><i>Produtos do vendedor</i></h2>
              <div class="pull-left">
                <a href="#" class="btn btn-success btn-sm"><i class="fas fa-fax fa-sync-alt"></i> Atualizar</a>
                <a href="{{ route('graficos.create') }}" class="btn btn-warning btn-sm"><i class="fa fa-cube" aria-hidden="true"></i> Formulario</a>
             </div>
          </div>

          <div class="panel-body">
              <table  id = "tabela" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Produto</th>
                      <th>Marca</th>
                      <th>Quantidade</th>
                      <th>valor</th>
                      <th>peso</th>
                      <th>codigo</th>
                
                    </tr>
                 </thead>
                   <tbody>     
                     @foreach($dados as $produto)
                      <tr>
                       <td>{{$produto->produto}}</td>
                       <td>{{$produto->data}}</td>
                       <td>{{$produto->marca}}</td>
                       <td>{{$produto->quantidade}}</td>
                       <td>{{$produto->valor}}</td>
                       <td>{{$produto->peso}}</td>
                       <td>{{$produto->codigo}}</td>
                      </tr>
                      @endforeach
                     </tbody>
                  </table>
           </div>

         <div class="panel-footer">
            <b> Produtos Cadastrados</b>
         </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> 
$(document).ready( function () {
    $('#tabela').DataTable();
} );
</script>
@stop