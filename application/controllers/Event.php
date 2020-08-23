<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('eventmodel');
    }

	public function index()
	{
		$data = array('container' => 'event');
		$this->load->view('templates/templates', $data);
    }
    
    public function detailevent($RunNo=""){
        $eventdetail = $this->eventmodel->get_detail($RunNo);
        $data = array('container'   => 'detail-event',
                      'eventdetail' => $eventdetail);
		$this->load->view('templates/templates', $data);
    }

    public function myevent() {
        $this->cek_login();
        $data = array('container' => 'my-event');
		$this->load->view('templates/templates', $data);
    }

    public function buatevent() {
        $this->cek_login();
        $data = array('container' => 'create-event');
        $this->load->view('templates/templates', $data);
    }

    public function validation_save(){
        $this->cek_login();
        $this->form_validation->set_rules('Judul', 'Judul', 'required');
        $this->form_validation->set_rules('Tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('Waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('event/buatevent');
        } else {
            $Judul     = $this->input->post('Judul');
            $Tanggal   = $this->input->post('Tanggal');
            $Waktu     = $this->input->post('Waktu');
            $Deskripsi = $this->input->post('Deskripsi');
            $MailTo    = $this->input->post('AlamatPekerjaan');
            $Lampiran  = $_FILES['Lampiran']; 

            if($Lampiran!=""){
                $config['upload_path']          = './assets/upload/event';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['file_name']            = "event_".date('YmdHis')."_".preg_replace("/[^A-Za-z0-9?! ]/","", $this->session->userdata('Nama'));
                $config['overwrite']            = true;
                $config['max_size']             = 5120; // 5MB

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('Lampiran')) {
                    $LampiranName = $this->upload->data("file_name");
                } else {
                    $LampiranName = "default.png";
                }
            }

            $data = [
                'Judul'     => $Judul,
                'Tanggal'   => $Tanggal,
                'Waktu'     => $Waktu,
                'Deskripsi' => $Deskripsi,
                'MailTo'    => $MailTo,
                'Lampiran'  => $LampiranName
            ];

            $insert = $this->eventmodel->insertevent("events", $data);

            if($insert){
                $this->session->set_flashdata('msgnewevent', '1');
                redirect('/event/myevent');
            } else {
                $this->session->set_flashdata('msgnewevent', '0');
                redirect('/event/myevent');
            }
        }
    }
   
    public function fetch_event(){
        $page = $_GET['page'];
        $data = $this->eventmodel->fetch_data_event($page);
        $output = '';
        foreach($data as $row){
            $vEventUrl  = site_url('event/detailevent/'.$row->RunNo);
            $vDeskripsi = strlen($row->Deskripsi) > 130 ? substr($row->Deskripsi,0,130)."..." : $row->Deskripsi;
            $output .= '
            <div class="masonry-large-block__item col-12 col-sm-6 col-lg-4 col-xl-4">
                <a class="news-masonry-item" href="'.$vEventUrl.'">
                  <div class="news-masonry-item__content" style="height: 269px;">
                    <div class="news-masonry-item__header">
                      <div class="news-masonry-item__category">Event</div>
                      <div class="news-masonry-item__date">'.date('d/m/Y', strtotime($row->Tanggal)).'</div>
                    </div>
                    <div class="news-masonry-item__title">'.$row->Judul.'</div>
                    <div class="news-masonry-item__text">'.$vDeskripsi.'</div>
                    <div class="news-masonry-item__continue">Continue
                      <span class="news-masonry-item__continue-icon icofont-rounded-right"></span>
                    </div>
                  </div>
                </a>
            </div>';
        }
        echo $output;
    }

}
