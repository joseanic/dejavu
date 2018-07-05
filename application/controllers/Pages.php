<?php
class Pages extends CI_Controller{
    public function view($page='home'){
        if(!File_exists(APPPATH.'views/pages/'.$page.'.php')){
            //No tenemos la pagina que estan buscando
            show_404();
        }
        $data['title']=ucfirst($page);
        // Cargan las vistas para mostrarla al usuario.
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}