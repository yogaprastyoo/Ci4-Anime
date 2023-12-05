<?php

namespace App\Controllers;

use App\Models\AnimeModel;

class Anime extends BaseController
{
    protected $animeModel;
    public function __construct()
    {
        $this->animeModel = new AnimeModel();
    }

    public function index()
    {
        // $anime = $this->animeModel->findAll();
        $data = [
            'title' => 'Home || Anime',
            'anime' => $this->animeModel->getAnime()
        ];
        return view('portofolio/anime/index', $data);
    }

    public function details($slug)
    {

        $data = [
            'title' => "Anime || Details",
            'anime' => $this->animeModel->getAnime($slug)
        ];
        if (empty($data['anime'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul anime ' . $slug . ' tidak ditemukan.');
        }
        return view('portofolio/anime/detail', $data);
    }

    public function add()
    {
        $data = [
            'title' => "Anime || Add",
            'validation' => \Config\Services::validation()
        ];
        return view('portofolio/anime/add', $data);
    }

    public function save()
    {
        // falidasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[anime.judul]',
                'errors' => [
                    'required' => 'Judul anime harus di isi.',
                    'is_unique' => 'Judul anime telah terdafatar.'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,9024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto tarlalu besar',
                    'is_image' => 'Yang anda masukkan bukan foto',
                    'mime_in' => 'Yang anda masukkan bukan foto'
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/anime/add')->withInput()->with('validation', $validation);

            return redirect()->to('/anime/add')->withInput();
        }

        // ambil cover
        $fileCover = $this->request->getFile('cover');

        // apakah gambar di upload ?
        if ($fileCover->getError() == 4) {
            $namaCover = 'default.jpg';
        } else {
            // ambil nama file
            // $namaCover = $fileCover->getName();
            $namaCover = $fileCover->getRandomName();

            // pindahkan file ke folder img
            $fileCover->move('img/anime', $namaCover);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->animeModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'produser' => $this->request->getVar('produser'),
            'studio' => $this->request->getVar('studio'),
            'genre' => $this->request->getVar('genre'),
            'cover' => $namaCover
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahakan');

        return redirect()->to('/anime');
    }


    public function delete($id)
    {


        // Cari gambar berdasarkan id
        $anime = $this->animeModel->find($id);

        // Cek jika gambarnya default
        if ($anime['cover'] != 'default.jpg') {
            // Hapus Folder
            unlink('img/anime/' . $anime['cover']);
        }

        $this->animeModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/anime');
    }


    public function edit($slug)
    {
        $data = [
            'title' => "Anime || Edit",
            'validation' => \Config\Services::validation(),
            'anime' => $this->animeModel->getAnime($slug)
        ];
        return view('portofolio/anime/edit', $data);
    }
    public function update($id)
    {
        session();
        $animeLama = $this->animeModel->getAnime($this->request->getVar('slug'));

        if ($animeLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'is_unique[anime.judul]';
        }

        // falidasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Judul anime harus di isi.',
                    'is_unique' => 'Judul anime telah terdafatar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/anime/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->animeModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'produser' => $this->request->getVar('produser'),
            'studio' => $this->request->getVar('studio'),
            'genre' => $this->request->getVar('genre'),
            'cover' => $this->request->getVar('cover'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diupdate');

        return redirect()->to('/anime');
    }
}
