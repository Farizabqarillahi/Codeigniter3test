<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model');
    }

    public function index() {
        $this->load->view('main_menu');
    }

    public function shape_menu($shape) {
        $data['shape'] = $shape;
        $this->load->view('shape_menu', $data);
    }

    public function input_form($shape, $calculation) {
        $data['shape'] = $shape;
        $data['calculation'] = $calculation;
        $this->load->view('input_form', $data);
    }

    public function calculate() {
        $shape = $this->input->post('shape');
        $calculation = $this->input->post('calculation');
        $inputs = $this->input->post();

        $result = $this->model->calculate($shape, $calculation, $inputs);

        $data['result'] = $result;
        $data['shape'] = $shape;
        $data['calculation'] = $calculation;
        $this->load->view('output_form', $data);
    }
}