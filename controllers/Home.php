<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
	{
    $this->load->model('penduduk_model');
    $data['penduduk']= $this->penduduk_model->get_penduduk();
    $this->load->view('templates/home', $data);
	}
  public function penduduk()
  {
    $this->load->view('pages/input_data');

  }
  public function save()
  {
    $this->load->model('penduduk_model');
    $this->penduduk_model->savePenduduk();
  }
  function del_pen(){
    $this->db->where('nik',$this->uri->segment(3));
    $this->db->delete('biodata');
    redirect('home/index');
  }
  function penduduk_edit()
  {
    $this->load->model('penduduk_model');
    $data['penduduk'] = $this->penduduk_model->penduduk_nik($this->uri->segment(3));
    $this->load->view('pages/update_penduduk',$data);
  }
  function update()
  {
    $this->load->model('penduduk_model');
    $this->penduduk_model->update_penduduk();
		redirect('home/index');
  }
  function view()
  {
    $this->load->model('penduduk_model');
    $data['penduduk'] = $this->penduduk_model->penduduk_nik($this->uri->segment(3));
    $this->load->view('pages/view_penduduk', $data);
  }
}
