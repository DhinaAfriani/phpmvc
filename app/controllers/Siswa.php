<?php

class Siswa extends Controller{
    public $data = ['title' => 'siswa'];
    public function  index(){
        
    $data = [
        // 'title' => this->$data['title'],
        'nama' => 'queen'
    ];

        $data['title ']= "siswa";
        $data['nama']= "queen";
        $this->view("templates/header", $data);
        $this->view("siswa/index", $data);
        $this->view("templates/footer", $data);
    }

    public function biodata()
    {
        $data['title']='biodata';
        $data['kelas'] = 'xi pplg 1';

        $this->view("template/header", $data);
        $this->view("template/footer", $data);
        $this->view("siswa/detail", $data);
        // echo"ini adalah siswa/index";
        
    }
}