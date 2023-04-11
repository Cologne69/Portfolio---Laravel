<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class TabsMobile extends Component
{
    public function render()
    {
        return view('livewire.tabs-mobile');
    }
    protected $listeners = ['reRenderParent'];
    public function reRenderParent()
    {
        $language = session()->get('locale');
        App::setLocale($language);
        $this->render();
    }
}
