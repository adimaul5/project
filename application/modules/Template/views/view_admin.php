<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Admin Elecomp</title>

    <?php
    // Page Title
    if(isset($theme['assets']['header']['title']))
      echo $this->template->get_title() . "\n";

    // Meta Tags
    if(isset($theme['assets']['header']['meta'])) {
      foreach($this->template->get_meta() as $meta_tag) {
        echo $meta_tag . "\n";
      }
    }

    // Custom CSS Files
    if(isset($theme['assets']['header']['css'])) {
      foreach($this->template->get_css() as $css_file) {
        echo $css_file . "\n";
      }
    }

    // Custom JS Files
    if(isset($theme['assets']['header']['js'])) {
      foreach($this->template->get_js('header') as $js_file) {
        echo $js_file . "\n";
      }
    }
  ?>  

  </head>
<script type="text/javascript">
var table;
// Clear Search & Reload Tabel
function reload_table() { table.search(''); table.ajax.reload(null,false); }
function modal_show() { $('#modal_form').modal('show'); }
function modal_hide() { $('#modal_form').modal('hide'); }
function swal_berhasil() { swal({ title:"SUCCESS", text:"Berhasil", type: "success", closeOnConfirm: true}); }
function swal_error(msg) { swal({ title:"ERROR", text: msg, type: "warning", closeOnConfirm: true});  }
// Delete Data
function delete_data(table,id) {
  swal({
    title:"Hapus Data", text:"Yakin akan menghapus data ini?", type: "warning",
    showCancelButton: true, confirmButtonText: "Hapus", closeOnConfirm: true,
  },
  function(){
        $.ajax({ 
            url : "<?= site_url()?>admin/delete/"+table+'/'+id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                $('#modal_form').modal('hide');
        swal({ title:"SUCCESS", text:"Hapus Berhasil", type: "success", closeOnConfirm: true}); 
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown) {
        swal({ title:"ERROR", text:"Error deleting data", type: "warning", closeOnConfirm: true}); 
            }
        });
  });
}
function undelete_data(table,id) {
  $.ajax({
    url : "<?= site_url()?>admin/undelete/"+table+'/'+id, 
    type: "POST",
    dataType: "JSON",
    success: function(data) {
      $('#modal_form').modal('hide');
      swal({ title:"SUCCESS", text:"Data Berhasil Dikembalikan", type: "success", closeOnConfirm: true}); 
      reload_table();
    },
    error: function (jqXHR, textStatus, errorThrown) {
      swal({ title:"ERROR", text:"Error undeleting data", type: "warning", closeOnConfirm: true}); 
    }
  });
}

BASE_URL = '<?php echo base_url();?>';
</script>
<body class="no-skin">
    <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar">
      <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
      </script>

      <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
          <a href="#" class="navbar-brand">
            <small>
              Admin Web Elecomp
            </small>
          </a>
          <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
            <span class="sr-only">Toggle user menu</span>

            <img src="<?= base_url(); ?>assets/public/themes/admin-lte/avatars/avatar2.png" alt="Jason's Photo" />
          </button>

          <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
          <ul class="nav ace-nav">
            <li class="light-blue user-min">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="<?= base_url(); ?>assets/public/themes/admin-lte/avatars/avatar2.png" alt="Jason's Photo" />
                <span class="user-info">
                  <small>Welcome,</small>
                  <?php echo $this->session->userdata('admin_nama');?>
                </span>

                <i class="ace-icon fa fa-caret-down"></i>
              </a>

              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-cog"></i>
                    Settings
                  </a>
                </li>

                <li>
                  <a href="profile.html">
                    <i class="ace-icon fa fa-user"></i>
                    Profile
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="<?=base_url()?>Login/logout">
                    <i class="ace-icon fa fa-power-off"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </div>

        <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
      
          <ul class="nav navbar-nav">
          
          </ul>


        </nav>
      </div>
    </div>

 
    <div class="main-container" id="main-container">
      <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
      </script>


      <div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse">
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
          <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
              <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
              <i class="ace-icon fa fa-pencil"></i>
            </button>


            <button class="btn btn-warning">
              <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
              <i class="ace-icon fa fa-cogs"></i>
            </button>

          </div>

          <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
          </div>
        </div>

          
           <?php  
              if(isset($parts['navbar'])) {
                    echo $parts['navbar'];
                }   
          ?>

        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
      </div>


      <div class="main-content">
        <div class="main-content-inner">
          <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
              <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="ace-icon fa fa-cog bigger-130"></i>
              </div>

              <div class="ace-settings-box clearfix" id="ace-settings-box">
                <div class="pull-left width-50">
                  <div class="ace-settings-item">
                    <div class="pull-left">
                      <select id="skin-colorpicker" class="hide">
                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                      </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                  </div>
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                  </div>
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                  </div>
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                  </div>
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                  </div>
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                      Inside
                      <b>.container</b>
                    </label>
                  </div>

                </div>

                <div class="pull-left width-50">
                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                  </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                  </div>

                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-xs-12">
                <div class="alert alert-info visible-sm visible-xs">
                  <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                  </button>
                  Please note that
                  <span class="blue bolder">top menu style</span>
                  is visible only in devices larger than
                  <span class="blue bolder">991px</span>
                  which you can change using CSS builder tool.
                </div>

                <div class="well well-sm visible-sm visible-xs">
                  Top menu can become any of the 3 mobile view menu styles:
                  <em>default</em>
,
                  <em>collapsible</em>
                  or
                  <em>minimized</em>.
                </div>
              

                <?php 
                    if(isset($content)) {
                        echo $content;
                    }
                ?>
      

              </div>
            </div>
          </div>
        </div>
      </div>
  <?php  
      if(isset($parts['footer'])) {
            echo $parts['footer'];
        }   
  ?>
  




    <?php
        if(isset($theme['assets']['footer']['js'])) {
            foreach($this->template->get_js('footer') as $js_file) {
                echo $js_file . "\n";
            }
        }

    ?>        
</body>
</html> 