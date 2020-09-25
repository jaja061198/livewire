<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Client as ClientModel;

class ClientEdit extends Component
{

	public $post;

    public $getId;

    public $fname, $mname, $lname, $gender, $age, $address, $contact_no, $email; //Edit Fields

    public $type;

    protected $listeners = [
        'getClientId','showInsertForm'
    ];

    public function render()
    {
        return view('livewire.client-edit');
    }

    public function getClientId($getId)
    {
        $client = ClientModel::where('id',$getId)->first();

        $this->getId = $getId;

        $this->fname = $client->fname;

        $this->mname = $client->mname;

        $this->lname = $client->lname;

        $this->gender = $client->gender;

        $this->age = $client->age;

        $this->address = $client->address;

        $this->contact_no = $client->contact_no;

        $this->email = $client->email;
    }

    public function clearData()
    {
        $this->fname = '';

        $this->mname = '';

        $this->lname = '';

        $this->gender = '';

        $this->age = '';

        $this->address = '';

        $this->contact_no = '';

        $this->email = '';
    }

    public function closeModal($type)
    {
        if ($type == 'add') {
           $this->dispatchBrowserEvent('closeAddModal');
           $this->clearData();
        }

        if ($type == 'edit') {
           $this->dispatchBrowserEvent('closeEditModal');
           $this->clearData();
        }
    }

    public function showInsertForm()
    {
        $this->dispatchBrowserEvent('openAddModal');
    }

    public function insert()
    {

        $this->validateInput();
        
        $data = [
            'fname' => $this->fname,
            'mname' => $this->mname,
            'lname' => $this->lname,
            'gender' => $this->gender,
            'age' => $this->age,
            'address' => $this->address,
            'contact_no' => $this->contact_no,
            'email' => $this->email,
        ];

        ClientModel::insert($data);

        $this->emit('refreshParent');

        $this->closeModal('add');

        $this->dispatchBrowserEvent('successToastInsert');
    }


    public function update()
    {
        $this->validateInput();

        $data = [
            'fname' => $this->fname,
            'mname' => $this->mname,
            'lname' => $this->lname,
            'gender' => $this->gender,
            'age' => $this->age,
            'address' => $this->address,
            'contact_no' => $this->contact_no,
            'email' => $this->email,
        ];

        ClientModel::where('id',$this->getId)->update($data);

        $this->emit('refreshParent');
        
        $this->closeModal('edit');

        $this->dispatchBrowserEvent('successToastUpdate');
    }

    public function validateInput()
    {
        $validator = [
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'email' => 'required|email',
        ];

        $this->validate($validator);
    }

}
