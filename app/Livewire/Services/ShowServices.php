<?php

namespace App\Livewire\Services;

use App\Models\Services;
use Livewire\Component;
use Livewire\WithPagination;

class ShowServices extends Component
{
    use WithPagination;

    public $search = '';

    public $entries = 5;
    
    public function render()
    {
        $services = Services::latest();
        
        $services->when($this->search,function($services){
            return $services->where('title', 'like', '%'.$this->search.'%')
            ->where('description', 'like', '%'.$this->search.'%');
        });

        $services =  $services->paginate($this->entries);
        
        return view('livewire.services.show-services',[
            'services' => $services
        ]);
    }

    public function delete(Services $service){
        $service->delete();
        return redirect('/services')->with('status', 'Service has been deleted');
    }
}