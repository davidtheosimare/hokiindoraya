<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Homepage extends Component
{



    public $title = "Homepage";
    public $description = "Ini adalah deskripsi untuk halaman utama.";
    public $keywords = "keyword";
    public $url = "url";
    public $image = "image";

    public function render()
    {
        return view('livewire.homepage');
    }
}
