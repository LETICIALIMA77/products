 <div id="content">

   <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

     <form class="form-inline">
       <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
         <i class="fa fa-bars"></i>
       </button>
     </form>

     <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
       <div class="input-group">
         <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
         <div class="input-group-append">
           <button class="btn btn-primary" type="button">
             <i class="fas fa-search fa-sm"></i>
           </button>
         </div>
       </div>
     </form>

     <ul class="navbar-nav ml-auto">

       <li class="nav-item dropdown no-arrow d-sm-none">
         <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-search fa-fw"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
           <form class="form-inline mr-auto w-100 navbar-search">
             <div class="input-group">
               <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
               <div class="input-group-append">
                 <button class="btn btn-primary" type="button">
                   <i class="fas fa-search fa-sm"></i>
                 </button>
               </div>
             </div>
           </form>
         </div>
       </li>

       <div class="topbar-divider d-none d-sm-block"></div>

       <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span class="mr-2 d-none d-lg-inline text-gray-600 small">Letícia Lima</span>
           <img class="img-profile rounded-circle" src="../principal/assets/images/undraw_profile_1.svg">
         </a>
       </li>

     </ul>

   </nav>

   <div class="container-fluid">

     <h1 class="h3 mb-2 text-gray-800">Relatório de Vendas (Listagem) </h1>


     <div class="card shadow mb-4">
       <div class="card-header py-3" style="display: flex; justify-content: flex-end">
         <button type="button" class="btn btn-success" style="gap: 15px" id="pdf">
           <i class="bi bi-printer">
             <span class="path1"></span>
             <span class="path2"></span>
             <span class="path3"></span>
             <span class="path4"></span></i>
           Imprimir Pdf
         </button>
       </div>
       <div class="card-body">
         <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <thead>
               <tr>
                 <th>ID Venda</th>
                 <!-- <th>Cliente</th> -->
                 <th>Tipo Pagamento</th>
                 <!-- <th>Valor Integral</th> -->
                 <th>Data da venda</th>
                 <th>Operar</th>
               </tr>
             </thead>
             <tbody>

             </tbody>
           </table>
         </div>
       </div>

     </div>

   </div>

 </div>

 <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="updateModalLabel">Atualização de Clientes</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <table class="table table-bordered">
           <thead>
             <tr>
               <th>Cliente</th>
               <th>Tipo Pagamento</th>
               <th>Valor Integral</th>
             </tr>
           </thead>
           <tbody>
            
           </tbody>
         </table>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
         <button type="button" class="btn btn-primary" id="update">Salvar</button>
       </div>
     </div>
   </div>
 </div>