<?php

namespace App\Http\Livewire\Admin\Profile;

use Livewire\Component;
use App\Models\Email as EmailDB;
use Livewire\WithPagination;

class Email extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $customer_id;
    public $email_address;
    public $email_username;
    public $email_password;
    public $email_incoming;
    public $email_smtp;
    public $email_smtp_auth;
    public $email_smtp_port;

    public function mount()
    {

    }

    public function render()
    {
        $data = EmailDB::where('customer_id', session()->get('id'))->orderBy('email_username', 'asc')->paginate(12);
        return view('livewire.admin.profile.email', compact('data'));
    }
}
