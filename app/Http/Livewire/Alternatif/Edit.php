<?php

namespace App\Http\Livewire\Alternatif;

use App\Models\Alternatif;
use Livewire\Component;

class Edit extends Component
{
    // property penampung data alternatif yang dikirim dari route
    public $alternatif;

    // syarat rules untuk validasi input
    protected $rules = [
        'alternatif.kode' => 'required',
        'alternatif.name' => 'required',
        'alternatif.kelas' => 'required',
        'alternatif.kota' => 'required',
    ];

    // method mount dieksekusi sebelum method render
    public function mount($id)
    {
        $this->alternatif = Alternatif::find($id);
    }

    public function render()
    {
        return view('livewire.alternatif.edit');
    }

    public function update()
    {
        $this->validate();

        $this->alternatif->save();

        $this->emit('saved');
    }
}
