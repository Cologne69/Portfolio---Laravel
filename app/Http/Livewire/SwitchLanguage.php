<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class SwitchLanguage extends Component
{
    public function toggleLanguage()
    {
        $language = session()->get('locale') == 'en' ? 'id' : 'en';
        session()->put('locale', $language);
        App::setLocale($language);
        $this->emit('reRenderParent');
    }
    public function render()
    {
        return view('livewire.switch-language');
    }
}
