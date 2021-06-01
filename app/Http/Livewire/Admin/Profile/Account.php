<?php

namespace App\Http\Livewire\Admin\Profile;

use Livewire\Component;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Livewire\WithPagination;

class Account extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    /** Modal */
    public $action;
    public $modal_title;
    public $modal_btn_title;
    public $modal_btn;
    /** Model */
    public $row_id;
    public $reference;
    public $customer_id;
    public $action_date;
    public $due_date;
    public $amount;
    public $is_paid;

    public $rules = [
        'reference' => 'required',
        'action_date' =>'required|date',
        'due_date' =>'required|date',
        'amount'=>'required|numeric',
        'is_paid' =>'required|boolean'
    ];

    public function mount()
    {
        $this->row_id=0;
        $this->modal_title = 'Add new record';
        $this->modal_btn_title = 'Create Record';
        $this->modal_btn = 'btn-primary';
        $this->action='add';
    }

    public function loadModal($val, $id)
    {
        $this->loadForm($id);
        switch($val)
        {
            case 'add':
                $this->modal_btn_title = 'Add new record';
                $this->modal_title = 'Create Record';
                $this->action='add';
                $this->modal_btn = 'btn-primary';
                break;
            case 'edit':
                $this->action='edit';
                // Modal
                $this->modal_btn_title = 'Update';
                $this->modal_title = 'Update Record';
                $this->modal_btn = 'btn-primary';
                break;
            case 'delete':
                $this->action='delete';
                // Modal
                $this->modal_btn_title = 'Delete';
                $this->modal_title = 'Delete Record';
                $this->modal_btn = 'btn-danger';
                break;
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'formModal', 'action'=>'show']);
    }

    public function recordAction()
    {
        if($this->action=='delete')
        {
            Invoice::destroy($this->row_id);
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Record Deleted']);
        }else{
            $this->validate();
            $record = Invoice::where('id', $this->row_id)->first();
            $fields = [
                'customer_id'=>session()->get('id'),
                'reference'=>$this->reference,
                'action_date'=>$this->action_date,
                'due_date'=>$this->due_date,
                'is_paid'=>$this->is_paid,
                'amount'=>$this->amount
            ];
            if($record !== null){
                // Update
                $record->update($fields);
                $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Record Updated']);
            }else{
                // Insert
                Invoice::create($fields);
                $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Record Created']);
            }
        }

        $this->dispatchBrowserEvent('modal', ['modal'=>'formModal', 'action'=>'hide']);
    }
    public function loadForm($id)
    {
        $rec = Invoice::find($id);
        $this->row_id=$id;
        $this->reference=$rec->reference;
        $this->action_date=$rec->action_date;
        $this->due_date=$rec->due_date;
        $this->is_paid=$rec->is_paid;
        $this->amount=$rec->amount;
    }

    public function render()
    {
        $data = Invoice::where('customer_id', session()->get('id'))->orderBy('due_date')->paginate(12);
        return view('livewire.admin.profile.account', ['data'=>$data]);
    }
}
