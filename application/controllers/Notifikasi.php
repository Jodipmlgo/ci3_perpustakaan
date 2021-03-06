 <?php

 class Notifikasi extends CI_Controller{
     public function __construct(){
         parent::__construct();

         if(empty($this->session->userdata('id_petugas'))) {
        	redirect('login');
		}

         $this->load->model(array('notifikasi_model', 'mahasiswa_m'));
     }

     public function index(){
        $this->read();
    }

    private function read(){

        $data = array(
            'theme_page' => 'notifikasi/read_notifikasi',
            'judul' => 'Notifikasi',
        );

        $this->load->view('theme/index', $data);
    }

    public function datatables() {
        //menunda loading (bisa dihapus, hanya untuk menampilkan pesan processing)
        //sleep(3000);

        //memanggil fungsi model datatables
        $list = $this->notifikasi_model->get_datatables();
        $data = array();
        $no = $this->input->post('start');

        //mencetak data json
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field['NIM'];
            $row[] = $field['nama'];
            $row[] = $field['no_telepon'];
            $row[] = $field['kode_peminjaman'];
            $row[] = $field['keterangan'];
            
            $data[] = $row;
        }
    
        //mengirim data json
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->notifikasi_model->count_all(),
            "recordsFiltered" => $this->notifikasi_model->count_filtered(),
            "data" => $data,
        );

        //output dalam format JSON
        echo json_encode($output);
    }
    
    public function insert(){
        $data_nim = $this->mahasiswa_m->read();
        $data = array(
            'theme_page' => 'notifikasi/insert_notifikasi',
            'judul' => 'Notifikasi',
            'data_nim' => $data_nim
        );

        $this->load->view('theme/index', $data);
    }

    public function ajax(){
        $nim = $this->input->get('nim');
        $data_mahasiswa = $this->mahasiswa_m->readRow($nim);

        $data = array(
                'kode_peminjaman' => $data_mahasiswa['no_telepon']
        );

        echo json_encode($data);
    }

    public function insert_submit(){
        $keterangan = $this->input->post('keterangan');
        $jum_denda = $this->input->post('jum_denda');

        $data = array(
            'keterangan' => $keterangan,
            'jumlah_denda' => $jum_denda,
        );

        $this->denda_model->insert($data);
        redirect('denda');
    }

    public function update(){
        $id = $this->uri->segment(3);
        $data_denda = $this->denda_model->rowRead($id);


        $data = array(
            'theme_page' => 'denda/update_denda',
            'judul' => 'Data Petugas',
            'data_denda' => $data_denda
        );
        $this->load->view('theme/index', $data);
    }

    public function update_submit(){
        $id = $this->uri->segment(3);

        $keterangan = $this->input->post('keterangan');
        $jum_denda = $this->input->post('jum_denda');

        $data = array(
            'keterangan' => $keterangan,
            'jumlah_denda' => $jum_denda,
        );

        $data_denda = $this->denda_model->update($data, $id);

        redirect('denda');
    }

    public function delete(){
        $id = $this->uri->segment(3);

        $data_petugas = $this->denda_model->delete($id);
        redirect('denda');
    }
 }