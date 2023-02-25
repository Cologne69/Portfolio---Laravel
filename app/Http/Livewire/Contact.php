<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Contact extends Component
{
    public function render()
    {
        $language = session()->get('locale');
        App::setLocale($language);
        return view('livewire.contact');
    }
    protected $listeners = ['reRenderParent'];
    public function reRenderParent()
    {
        $language = session()->get('locale');
        App::setLocale($language);
        $this->render();
    }
}
