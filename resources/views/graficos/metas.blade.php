
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
@stop