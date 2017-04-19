<?php
class Penduduk_model extends CI_Model {

	public function __construct(){
        parent::__construct();

    }

    function savePenduduk()
    {
			$w='WNI';
			$tgl=date('Y/m/d');
			$now= strtotime(date("Y/m/d"));
			$mb= date('Y/m/j', strtotime('+5 year',$now));

			$option=array(
  			'0'=>"Pilih Agama",
        'Islam'=>"Islam",
        'Kristen Protestan'=>"Kristen Protestan",
        'Kristen Khatolik'=>'Kristen Khatolik',
        'Budha'=>'Budha',
        'Hindu'=>'Hindu',
				'Konghucu'=>'Konghucu'
      );
			$jk=array(
				'0'=>'Pilih Jeniskelamin',
				'L'=>'Laki-laki',
				'P'=>'Perempuan',
			);
      $data= array(
        'nik'							=> $this->get_auto_id('PD'),
  			'nama'						=> $this->input->post('nd') . " " . $this->input->post('nb'),
  			'tempatlahir'			=> $this->input->post('tl'),
  			'tgl_lahir'				=> $this->input->post('tgl'),
  			'j_kel'						=> $this->input->post('jk',$jk),
  			'alamat'					=> $this->input->post('al'),
        'agama'						=> $this->input->post('agama',$option),
        'pekerjaan' 			=> $this->input->post('pk'),
        'kewarganegaraan' => $w,
        'tgl_input' 			=> $tgl,
        'masa_berlaku' 		=> $mb
  		);
  		$this->db->insert('biodata',$data);

			if (condition == TRUE) {
			 redirect('home/index');
			}

    }
		function get_auto_id($kode){
			$this->db->select('max(nik) as id',FALSE)
				->from('biodata')->limit(1);
			$row =	$this->db->get();

			$r_id = current($row->result());
			$id = sprintf('%03d',substr($r_id->id,3,3)+1);

			return $kode.$id;
		}
		function get_penduduk()
		{
			$this->db->select( '*' )
				->from('biodata');
				$result = array();

				$query = $this->db->get();

				if ($query->num_rows() > 0) {
					$result = $query->result();
				}
				return $result;
		}
			function penduduk_nik($kodepdd){
				$this->db->select('*')
					->from('biodata')
					->where('nik',$kodepdd);
				$q = $this->db->get();

				return $q->result();
		}
		
		function update_penduduk()
		{
			$option=array(
				'0'=>"Pilih Agama",
				'Islam'=>"Islam",
				'Kristen Protestan'=>"Kristen Protestan",
				'Kristen Khatolik'=>'Kristen Khatolik',
				'Budha'=>'Budha',
				'Hindu'=>'Hindu',
				'Konghucu'=>'Konghucu'
			);
			$jk=array(
				'0'=>'Pilih Jeniskelamin',
				'L'=>'Laki-laki',
				'P'=>'Perempuan',
			);
			$data= array(
  			'nama'						=> $this->input->post('nd'),
  			'tempatlahir'			=> $this->input->post('tl'),
  			'tgl_lahir'				=> $this->input->post('tgl'),
  			'j_kel'						=> $this->input->post('jk',$jk),
  			'alamat'					=> $this->input->post('al'),
        'agama'						=> $this->input->post('agama',$option),
        'pekerjaan' 			=> $this->input->post('pk'),
  		);
			$this->db->where('nik',$this->input->post('nik'));
			$this->db->update('biodata',$data);

			if (condition == TRUE) {
			 redirect('home/index');
			}

    }

  }
