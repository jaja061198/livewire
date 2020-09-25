<?php

namespace App\Http\Livewire;

use App\Client as ClientModel;
use Livewire\Component;
use Livewire\WithPagination;

class Client extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

	public $count = 0;
    //
    public $editId;

    public $searchKey;

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $clients = ClientModel::query();

        if ($this->searchKey != null) {

            $clients = $clients->where('fname','LIKE','%'.$this->searchKey.'%')
                       ->orWhere('mname','LIKE','%'.$this->searchKey.'%')
                       ->orWhere('lname','LIKE','%'.$this->searchKey.'%')
                       ->paginate(10); 
        }

        else
        {
            $clients = $clients->paginate(10);
        }
        

        return view('livewire.client')

        ->with('clients',$clients);
    }

    public function editClient($id)
    { 

        $this->editId = $id;

        $this->emit('getClientId', $this->editId);  

        $this->dispatchBrowserEvent('openEditModal');  

    }

    public function addClient()
    {
        $this->emit('showInsertForm');
    }

}
