<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

    public function index()
    {
        $this->load->view('index');
    }

	public function welcome()
	{
		$this->load->view('welcome');
	}

    public function planform()
    {
        $this->load->view('planform');
    }

    public function plan_manager()
    {
        $this->load->view('planmanager');
    }

    public function plan_manager_success()
    {
        $this->load->view('planmanager_success');
    }

    public function call_center()
    {
        $this->load->view('call_center');
    }

    public function sales()
    {
        $this->load->view('sales');
    }

    public function installation()
    {
        $this->load->view('installation');
    }

    public function corporate()
    {
        $this->load->view('corporate');
    }
}
