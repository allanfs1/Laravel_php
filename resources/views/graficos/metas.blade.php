
@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    <h1> Calendario</h1>
    <!-- CSS-->
<style>
*{box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #5AAF9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #FFA;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

</style>
@stop

@section('content')

<div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>Outubro<br><span style="font-size:25px">2019</span></li>
  </ul>
</div>

<ul class="weekdays">
  <li>S</li>
  <li>D</li>
  <li>S</li>
  <li>T</li>
  <li>Q</li>
  <li>Q</li>
  <li>S</li>
</ul>

<ul class="days">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
  

</ul>
<br>

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

     <div class = "col-md-3 col-sm-6 col-xs-12">
        <div class = "info-box">
          <span class="info-box-icon bg-orange">
             <i class="fa fa-star" aria-hidden="true"></i>
          </span>
          <div class="info-box-content"> 
              <span class="info-box-text">Metas</span>
              <span class="info-box-number">25%</span>
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
                       <td>RS:{{$produto->valor}}</td>
                       <td>{{$produto->peso}}g</td>
                       <td>{{$produto->codigo}}</td>
                       <td>
                           <a href="{{ route('graficos.show',  $produto->id) }}" class="btn btn-primary btn-xs">
                            <i class="fas fa-fx fa-eye"></i>
                           </a>

                           <a href="{{ route('graficos.edit',  $produto->id) }}" class="btn btn-warning btn-xs">
                             <i class="fas fa-fx fa-edit"></i>
                           </a>


                           <!-- botao de exclusao -->
                           <form action="{{ route('graficos.destroy', $produto->id) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
                             <input type="hidden" name="_method" value="DELETE">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                             <button type="submit" class="btn btn-xs btn-danger">
                                 <i class="fas fa-fx fa-trash-alt"></i>
                             </button>
                           </form>     
                                   
                         </td>

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

