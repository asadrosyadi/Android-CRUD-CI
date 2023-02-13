<?php

Class Rest extends MX_Controller {

    function __construct() {
        parent::__construct();
       
    }

   // fungsi untuk CREATE
    public function addStaff()
    {
          // deklarasi variable
          $data1 = $this->input->post('data1');
          $data2 = $this->input->post('data2');
        $data3 = $this->input->post('data3');
          // isikan variabel dengan nama file
          $data['data1'] = $data1;
        $data['data2'] = $data2;
          $data['data3'] = $data3;
          $q = $this->db->insert('data', $data);
          // check insert berhasil apa nggak
          if ($q) {
            $response['pesan'] = 'insert berhasil';
            $response['status'] = 200;
          } else {
            $response['pesan'] = 'insert error';
            $response['status'] = 404;
          }
          echo json_encode($response);
    }
      // fungsi untuk READ
    public function getData()
    {
          $q = $this->db->get('data');
          if ($q -> num_rows() > 0) {
            $response['pesan'] = 'data ada';
            $response['status'] = 200;
            // 1 row
            $response['staff'] = $q->row();
            $response['staff'] = $q->result();
          } else {
            $response['pesan'] = 'data tidak ada';
            $response['status'] = 404;
          }
          echo json_encode($response);
    }
      // fungsi untuk DELETE
    public function deleteStaff()
    {
          $id = $this->input->post('id');
          $this->db->where('id', $id);
          $status = $this->db->delete('data');
          if ($status == true) {
            $response['pesan'] = 'hapus berhasil';
            $response['status'] = 200;
          } else {
            $response['pesan'] = 'hapus error';
            $response['status'] = 404;
          }
          echo json_encode($response);
    }
      // fungsi untuk UPDATE
    public function updateStaff()
    {
          // deklarasi variable
          $id = $this->input->post('id');
          $data1 = $this->input->post('data1');
          $data2 = $this->input->post('data2');
          $data3 = $this->input->post('data3');
          $this->db->where('data', $id);
          // isikan variabel dengan nama file
          $data['data1'] = $data1;
          $data['data2'] = $data2;
          $data['data3'] = $data3;
          $q = $this->db->update('data', $data);
          // check insert berhasil apa nggak
          if ($q) {
            $response['pesan'] = 'update berhasil';
            $response['status'] = 200;
          } else {
            $response['pesan'] = 'update error';
            $response['status'] = 404;
          }
          echo json_encode($response);
    }

	
}