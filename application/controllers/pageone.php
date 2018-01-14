<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pageone extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('Pageone_database');
    }

    public function index() {
        header('Access-Control-Allow-Origin: *');

        $data['title'] = '';

        $this->load->view('pageone', $data);
    }

    public function addSample() {
        header('Access-Control-Allow-Origin: *');

        $data['title'] = '';
        $pageone_database_service = new Pageone_database();
        $dataz['name'] = $_POST["userName"];
        $dataz['type'] = $_POST["typeSelect"];
        $pageone_database_service->saveData($dataz);

        $this->load->view('pageone', $data);
    }

    public function viewList() {

        $pageone_database_service = new Pageone_database();
        $data['title'] = '';

        $data['pagetwo_list'] = $pageone_database_service->get_all_data();

        $this->load->view('pagetwo', $data);
    }

    public function updateSample($id) {
        header('Access-Control-Allow-Origin: *');

        $data['title'] = '';
        $pageone_database_service = new Pageone_database();
        $data['list'] = $pageone_database_service->get_data($id);

        $this->load->view('pagethree', $data);
    }

    public function updateSampleDB() {
        header('Access-Control-Allow-Origin: *');

        $data['title'] = '';
        $pageone_database_service = new Pageone_database();
        $dataz['id'] = $_POST["id"];
        $dataz['name'] = $_POST["userName"];
        $dataz['type'] = $_POST["typeSelect"];
        $pageone_database_service->update_data($dataz);


        $pageone_database_service = new Pageone_database();
        $data['list'] = $pageone_database_service->get_data($_POST["id"]);

        $this->load->view('pagethree', $data);
    }

    public function chart(){
        $data['title'] = '';
      
        $pageone_database_service = new Pageone_database();
        $data['team'] = $pageone_database_service->team();
        header('Access-Control-Allow-Origin: *');
        $this->load->view('pageFour', $data);
    }

}
