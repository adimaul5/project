<?php
	class MY_Controller extends CI_Controller{
		
	}
	class MY_Admin extends MY_Controller{
		
		public function __construct(){
			parent:: __construct();
			$this->load->library('template');
        	$this->template->set_platform('public');
        	$this->template->set_theme('admin-lte');  
			if($this->session->userdata("admin_username") == FALSE){
				redirect("Login/");
			}
			$this->_loadcss();
        	$this->_loadjs();
        	$this->_loadpart();
			
		}

	protected function _loadpart() {
       // $data_header['active'] = 'beranda';
        $this->template->set_part('navbar', 'Template/view_menu');
       // $data_footer['footer'] = $this->M_home->view('setting_ukuran');        
        $this->template->set_part('footer', 'Template/vfooter');
    }


    protected function _loadcss() {
        $this->template->set_css('bootstrap.css');        
        $this->template->set_css('font-awesome.css');        
        $this->template->set_css('ace-fonts.css');        
        $this->template->set_css('ace.css');

         $this->template->set_css('ace.onpage-help.css');

        $this->template->set_css(base_url().'assets/public/themes/admin-lte/css/themes/sunburst.css','remote'); 

        $this->template->set_css(base_url().'assets/public/themes/admin-lte/plugins/sweetalert/sweetalert.css','remote');        
        $this->template->set_css(base_url().'assets/public/themes/admin-lte/plugins/select2/select2.min.css', 'remote');
        $this->template->set_css(base_url().'assets/public/themes/admin-lte/j-ui/jquery-ui.css', 'remote');
        $this->template->set_css(base_url().'assets/public/themes/admin-lte/DataTables/datatables.css', 'remote'); 
        $this->template->set_css(base_url().'assets/public/themes/admin-lte/DataTables/datatables.min.css', 'remote'); 
        //$this->template->set_css('skin-blue.min.css');    
    }

    protected function _loadjs() {    
        $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace-extra.js','header', 'remote');
        $this->template->set_js(base_url().'assets/public/themes/admin-lte/jquery/jquery-2.1.4.min.js','header', 'remote');
       // $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/bootstrap.js','header', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.scroller.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.colorpicker.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.fileinput.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/elements.typeahead.js','footer','remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.wysiwyg.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.spinner.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.treeview.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.wizard.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.aside.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.ajax-content.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.touch-drag.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.sidebar.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.sidebar-scroll-1.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.submenu-hover.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.widget-box.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.settings.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.settings-rtl.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.settings-skin.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.widget-on-reload.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/elements.onpage-help.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/js/ace/ace.onpage-help.js','footer', 'remote');

       //   $this->template->set_js(base_url().'assets/public/themes/admin-lte/plugins/sweetalert/sweetalert.min.js','footer', 'remote');
       //  $this->template->set_js(base_url().'assets/public/themes/admin-lte/plugins/select2/select2.min.js','footer', 'remote');
        // $this->template->set_js(base_url().'assets/public/themes/admin-lte/tiny_mce/tiny_mce_src.js','footer', 'remote');
        // $this->template->set_js(base_url().'assets/public/themes/admin-lte/j-ui/jquery3.js','footer', 'remote');
        // $this->template->set_js(base_url().'assets/public/themes/admin-lte/j-ui/jquery-ui.js','footer', 'remote');
        // $this->template->set_js(base_url().'assets/public/themes/admin-lte/j-ui/datatablejs.js','footer', 'remote');
        // $this->template->set_js(base_url().'assets/public/themes/admin-lte/DataTables/datatables.js','footer', 'remote');
        // $this->template->set_js(base_url().'assets/public/themes/admin-lte/DataTables/datatables.min.js','footer', 'remote');
        // $this->template->set_js('jquery.counterup.min.js','footer');
        // $this->template->set_js('custom.js','footer');
        // $this->template->set_js(base_url().'build/vue.js','footer', 'remote');  
        // $this->template->set_js(base_url().'build/vue-router.js','footer', 'remote'); 
        // $this->template->set_js(base_url().'build/vue-animated-list.js','footer', 'remote'); 
        // $this->template->set_js(base_url().'build/vue-validator.js','footer', 'remote');       
    }


	}

	
	
?>