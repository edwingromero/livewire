<?php

namespace App\Http\Livewire;

use App\Models\Persona;
use Livewire\Component;
use Livewire\WithPagination;

class PersonaComponent extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  protected $queryString = ['searchNombres' => ['except'=>'']];

  public $searchNombres = '';
  public $limit = 5;

  public function render()
  {
    $personas = Persona::where('nombres','LIKE',"%{$this->searchNombres}%")
    ->paginate($this->limit);
    return view('livewire.persona-component',compact('personas'));
  }

  public function eliminar($id)
  {
    Persona::destroy($id);
  }

  public function limpiar()
  {
    $this->searchNombres = '';
  }

  public function updatingSearchNombres()
    {
        $this->resetPage();
    }

}
