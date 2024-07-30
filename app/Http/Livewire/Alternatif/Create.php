<?php

namespace App\Http\Livewire\Alternatif;

use App\Models\Alternatif;
use Livewire\Component;

class Create extends Component
{
    // variabel penampung data dari input
    public $kode;
    public $nama;
    public $kelas;
    public $kota;

    // rules untuk validasi
    protected $rules = [
        'kode' => 'required',
        'nama' => 'required',
        'kelas' => 'required',
        'kota' => 'required',
    ];

    public function render()
    {
        return view('livewire.alternatif.create');
    }

    // method untuk simpan data alternatif
    public function store()
    {
        $this->validate();

        Alternatif::create([
            'kode' => $this->kode,
            'name' => $this->nama,
            'kelas' => $this->kelas,
            'kota' => $this->kota,
        ]);

        $this->reset();
        $this->emit('saved');
    }
}
