<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboards extends Component
{
    public $artikels, $user_id, $judul, $berita, $artikel_id, $status;
    public $isModal = 0;


    public function render()
    {
        $this->artikels = DB::table('artikels')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('artikels.*','users.name as name_user')
            ->orderBy('created_at', 'DESC')->get();
        return view('livewire.dashboardtest');
    }
}
