@extends('adminlte::page')

@section('title', 'Exibir')

@section('content_header')
<h1>Exibição dos dados do contato</h1>
@stop

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Exibe os dados do contato
  </div>

    <div class="panel-body">
      <table class= "table table-bordered table-hover table-striped">
         <tbody>
              <tr>
                <td class="col-md-2">ID</td>
                <td class="col-md-10">{{$dados->id}}</td>
              </tr>
          
              <tr>
                <td class="col-md-2">Produto</td>
                <td class="col-md-10">{{$dados->produto}}</td>

              </tr>

            
              <tr>
                <td class="col-md-2">marca</td>
                <td class="col-md-10">{{$dados->marca}}</td>

              </tr>


             
              <tr>
                <td class="col-md-2">Quantidade</td>
                <td class="col-md-10">{{$dados->quantidade}}</td>

              </tr>


              <tr>
                <td class="col-md-2">valor R$</td>
                <td class="col-md-10">{{$dados->valor}}</td>

              </tr>


              <tr>
                <td class="col-md-2">Peso</td>
                <td class="col-md-10">{{$dados->peso}}g</td>

              </tr>


             
              <tr>
                <td class="col-md-2">Codigo</td>
                <td class="col-md-10">{{$dados->codigo}}</td>

              </tr>



              <tr>
                <td class="col-md-2">Data</td>
                <td class="col-md-10">{{date('d/m/Y',strtotime($dados->data))}}</td>
            
              </tr>

           
                

         </tbody>
      </table>
    </div>



    <div class="panel-footer">
      <a href="http://localhost/site/public/metas" class="btn btn-default">
        <i class="fas fa-reply"></i> voltar
      </a>

    </div>

</div>
@stop



@section('css')

@stop



@section('js')

@stop