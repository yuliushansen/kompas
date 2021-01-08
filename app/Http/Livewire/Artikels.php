<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

class Artikels extends Component
{
    public $artikels, $user_id, $judul, $berita, $artikel_id, $status;
    public $isModal = 0;

    public function render()
    {
        $user = auth()->user();
        $this->artikels = DB::table('artikels')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('artikels.*','users.name as name_user')
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'DESC')->get();
        return view('livewire.artikels');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->user_id = '';
        $this->judul = '';
        $this->berita = '';
        $this->artikel_id = '';
    }

    public function store()
    {
        $user = auth()->user();
        $this->validate([
            'judul' => 'required|string',
            'berita' => 'required|string',
        ]);

        Artikel::updateOrCreate(['id' => $this->artikel_id], [
            'user_id' => $user->id,
            'judul' => $this->judul,
            'berita' => $this->berita,
        ]);

        session()->flash('message', $this->artikel_id ? $this->judul . ' Diperbaharui': $this->judul . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $this->artikel_id = $id;
        $this->judul = $artikel->judul;
        $this->berita = $artikel->berita;

        $this->openModal();
    }

    public function delete($id)
    {
        $artikel = Artikel::find($id); 
        $artikel->delete();
        session()->flash('message', $artikel->judul . ' Dihapus');
    }

}
