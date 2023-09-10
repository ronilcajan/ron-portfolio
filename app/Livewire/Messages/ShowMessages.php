<?php

namespace App\Livewire\Messages;

use App\Models\Messages;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMessages extends Component
{
    use WithPagination;

    public $search = '';

    public $entries = 5;
    
    public function render()
    {

        $messages = Messages::latest();
        
        $messages->when($this->search,function($messages){
            return $messages->where('name', 'like', '%'.$this->search.'%')
            ->where('email', 'like', '%'.$this->search.'%')
            ->where('subject', 'like', '%'.$this->search.'%');
        });

        $messages =  $messages->paginate($this->entries);
        
        return view('livewire.messages.show-messages', [
            'messages' => $messages
        ]);
    }

    public function delete(Messages $message){
        $message->delete();

        return redirect('/messages')->with('status', 'Message has been deleted');
    }
}