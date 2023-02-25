<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Index extends Component
{
    public function render()
    {
        $language = session()->get('locale');
        App::setLocale($language);
        return view('livewire.index');
    }
    protected $listeners = ['reRenderParent'];
    public function reRenderParent()
    {
        $language = session()->get('locale');
        App::setLocale($language);
        // $this->render();
    }
}
