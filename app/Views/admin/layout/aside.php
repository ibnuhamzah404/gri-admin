   <aside class="main-sidebar sidebar-dark-primary elevation-4">

       <a href="index3.html" class="brand-link">
           <img src="<?= base_url() . 'assets/admin/img/logo.png' ?>" alt=" AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
           <span class="brand-text font-weight-light">GRI </span>
       </a>

       <div class="sidebar">

           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="<?= base_url() . 'assets/admin/img/user.jpg' ?>" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                   <a href="#" class="d-block">Alexander Pierce</a>
               </div>
           </div>



           <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                   <?php
                    $url = uri_string();
                    $exurl = explode("/", $url);
                    ?>

                   <li class="nav-item">
                       <a href="<?= base_url('admin/') ?>" class="nav-link <?php if ($exurl[1] == '') {
                                                                                echo "active";
                                                                            } ?>">
                           <i class="nav-icon fas fa-suitcase "></i>
                           <p>
                               Dashboard

                           </p>
                       </a>
                   </li>

                   <li class="nav-item">
                       <a href="<?= base_url('admin/proyek') ?>" class="nav-link <?php if ($exurl[1] == 'proyek') {
                                                                                        echo "active";
                                                                                    } ?>">
                           <i class="nav-icon fas fa-suitcase "></i>
                           <p>
                               Data Proyek

                           </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="pages/widgets.html" class="nav-link">
                           <i class="nav-icon fas fa-file"></i>
                           <p>
                               Laporan Harian
                               <span class="right badge badge-danger">New</span>
                           </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="pages/widgets.html" class="nav-link">
                           <i class="nav-icon fas fa-tasks"></i>
                           <p>
                               Laporan Mingguan
                               <span class="right badge badge-danger">New</span>
                           </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="pages/widgets.html" class="nav-link">
                           <i class="nav-icon fas fa-calendar"></i>
                           <p>
                               Laporan Bulanan
                               <span class="right badge badge-danger">New</span>
                           </p>
                       </a>
                   </li>

               </ul>
           </nav>

       </div>

   </aside>