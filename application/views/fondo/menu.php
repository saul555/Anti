<aside class="main-sidebar sidebar-dark-info elevation-4  "  style="background-color:#28a745">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>img/f.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
         
          <h2  class="d-block">Sistema</h2>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
        



               <li class="nav-item menu">
            <a  href="<?php echo base_url(); ?>index.php/estudiantes/index" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pagina Inicioss
               
              </p>
            </a>
            
          </li>
          <li class="nav-item menu">
            <a href="<?php echo base_url(); ?>index.php/usuarios/listaUsuarios" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Lista de Usuarios
               
              </p>
            </a>
            
          </li>
          <li class="nav-item menu">
            <a  href="<?php echo base_url(); ?>index.php/usuarios/agregar" class="nav-link active">
              <i class="nav-icon fas "></i>
              <p>
              Agregar Usuarios
               
              </p>
            </a>
            
          </li>






          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                listas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="<?php echo base_url(); ?>index.php/estudiantes/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estudiantes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/aulas/index" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aulas</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="<?php echo base_url(); ?>index.php/registroD/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro desinfección</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="<?php echo base_url(); ?>index.php/material/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Material de  desinfección</p>
                </a>
              </li>
            </ul>
          </li>





    





          <li class="nav-item menu">
            <a   href="<?php echo base_url(); ?>index.php/usuarios/logout  " class="nav-link active">
              <i class="nav-icon fas "></i>
              <p>
             Salir
             
              </p>


         
            </a>
            
          </li>

         

         
         
         
          
         
       
          
         
         
          
        
     
         
         
        
          
        
         
        




   









          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>