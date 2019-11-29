@extends('adminlte::page')

@section('title', 'update')

@section('content_header')
<h1><i class="fa fa-retweet" aria-hidden="true"></i><b> Alterar Dados do Formulário</b></h1>
@stop

<!-- div.panel.panel-default  -->
@section('content')
  <form action= "{{ route('graficos.update', $dados->id) }}" method="POST">
   {{ csrf_field() }} 
   <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">

      <div class="panel-heading">
         cadastro de Produtos
      </div>


     <div class="panel-body">
     
     <div class="form-group">
          <label for="produto" >Produto:</label>
          <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
           <input type="text" id="produto" name="produto" class="form-control" value="{{$dados->produto}}">
        </div>
     </div>
         
     <div class="form-group">
          <label for="data" >Data:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input type="date" id="data" name="data" class="form-control"  value="{{$dados->data}}">
          </div>
     </div>


     <div class="form-group">
          <label for="marca" >marca:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-retweet" aria-hidden="true"></i></span>
            <input type="text" id="marca" name="marca" class="form-control"  value="{{$dados->marca}}">
          </div>
     </div>



     <div class="form-group">
          <label for="quantidade">Quantidade:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
            <input type="text" id="quantidade" name="quantidade" class="form-control"  value="{{$dados->quantidade}}">
           </div>
     </div>


     <div class="form-group">
       <label for="valor" nome do contato>valor:</label>
       <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-suitcase" aria-hidden="true"></i></span>
            <input type="text" id="valor" name="valor" class="form-control"  value="{{$dados->valor}}">
       </div>
     </div>

     <!--
     <div class="form-group">
          <label for="datatempo" nome do contato>Validade:</label>
          <input type="text" id="datatempo" name="datatempo" class="form-control">
          
     </div>
       -->
     


     <div class="form-group">
       <label for="peso" nome do contato>Peso:</label>
       <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-hourglass" aria-hidden="true"></i></span>
           <input type="text" id="peso" name="peso" class="form-control"  value="{{$dados->peso}}">
         </div>
     </div>


     <div class="form-group">
        <label for="codigo" nome do contato>Codigo:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
            <input type="text" id="codigo" name="codigo" class="form-control"  value="{{$dados->codigo}}">
          </div>
     </div>
   </div>


    <div class="panel-footer">
      <a href="http://localhost/site/public/metas" class="btn btn-default">
        <i class="fas fa-reply"></i> voltar
      </a>

      <button  type="submit" class="btn btn-success">
         <i class="fas fa-save"></i>Gravar
       </button>         
    </div>

  </div>  
</form>
@stop


@section('css')

@stop


@section('js')

@stop