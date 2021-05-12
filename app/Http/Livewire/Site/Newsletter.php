<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Models\Newsletter as NS;

class Newsletter extends Component
{
    public $newsletter;

    public function saveNewsletter()
    {
        $this->validate([
            'newsletter' => 'required|email'
        ]);
        try{
            NS::create(['email'=>$this->newsletter]);
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Newsletter Subscribed']);
        }catch (\Throwable $e)  {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Email alreay exists']);
        }
        $this->newsletter='';
        // $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Category added']);
    }
    public function render()
    {
        return view('livewire.site.newsletter');
    }
}
