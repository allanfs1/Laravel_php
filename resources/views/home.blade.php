@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    <h1> Nome</h1>
    
@stop

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ficha Pessoal</h3>
  </div>

  <div class="panel-body">
         <div>
            <div class="box box-danger">
               <div>
                 <img src="../public/img/avatar_man.jpg" width="100" class="img-circle">
                 </div>
                <div class="box-header with-border">
                    <h1 class="box-title">D<small>ados</small></h3>
                      <div class="box-tools pull-right"></div>
                      <span class="label label-danger">Allan</span>
                      <div>
                        <br>
                        <div>
                          <li><b>Nome:Allan F de Souza</b></li>
                        </div>

                        <div>
                         <li>Data:/00/00/00</li>
                        </div>

                        <div>
                         <li><b>RG:4596979793</b></li>
                        </div>

                        <div>
                         <li>CPF:49939394</li>
                        </div>

                        <div>
                         <li>Cod:001</li>
                        </div>

                      </div>
                </div>
            </div>
         </div>
       <div class="pull-right">
         <button type="button" class="btn btn-success btn-sm">Atualizar</button>
      </div>
       <br><br>
   </div>
</div> 

<div class="panel panel-primary">
          <div class="panel-heading clearfix">
              <h2><i>Produtos do vendedor</i></h2>
              <div class="pull-left">
                <a href="" class="btn btn-success btn-sm"><i class="fas fa-fax fa-sync-alt"></i> Atualizar</a>
                <a href="" class="btn btn-warning btn-sm"><i class="fa fa-cube" aria-hidden="true"></i> Style </a>
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
                      <tr>
                       <td>1</td>
                       <td>Perfume</td>
                       <td>Kaiak</td>
                       <td>10</td>
                       <td>120,34</td>
                       <td>345g</td>
                       <td>0001</td>
                      </tr>
                     </tbody>
                  </table>
           </div>

         <div class="panel-footer">
            <b> Produtos Cadastrados</b>
         </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
         <div class="col-md-12">
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h4 class="box-title"><i>Chat Direto</i></h4>

                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">3</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                      <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander R.P</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../public/img/avatar_man2.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Camila Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 h</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../public/img/mulher2.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../public/img/mulher3.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        ola como você vai ?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../public/img/mulher.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        I would love to.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                  </div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="../public/img/avatar.png" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                            <span class="contacts-list-msg">I will be waiting for...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                            <span class="contacts-list-msg">I'll call you back at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                            <span class="contacts-list-msg">Where is your new...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                            <span class="contacts-list-msg">Can I take a look at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src=" " alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                            <span class="contacts-list-msg">Never mind I found...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                            <button type="button" class="btn btn-warning btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
</div> 

<div class="box box-warning direct-chat direct-chat-warning">
      <h3 class="box-header with-border">
         <h3 class="box-title">Historico</h3>
            <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="" class="badge bg-red" data-original-title="3 New Messages">145</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                      <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
             </div>
           </h3>
       </div> 

       <div class="box-body">
        <!-- Conversations are loaded here -->
        <div class="direct-chat-messages">
         <!-- Message. Default to the left -->
           <div class="direct-chat-msg">
             <div class="direct-chat-info clearfix">
               <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left"> Allan Ferreira de Souza</span>
                    <span class="direct-chat-timestamp pull-right">14:23 </span>
                </div>    
               </div>
             </div> 
         </div>   
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