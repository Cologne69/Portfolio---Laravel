<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Error extends Component
{
    protected $listeners = ['reRenderParent'];
    public function reRenderParent()
    {
        $language = session()->get('locale');
        App::setLocale($language);
        $this->render();
    }
    public function render()
    {
        return view('livewire.errors.error');
    }
}
