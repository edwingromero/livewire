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

  public $orderDir = 'desc';
  public $orderBy = 'id';

  public function render()
  {
    $personas = Persona::where('nombres','LIKE',"%{$this->searchNombres}%")
    ->orderBy($this->orderBy,$this->orderDir)
    ->paginate($this->limit);
    return view('livewire.persona-component',compact('personas'));
  }

  public function ordenar($campo)
  {
    if($this->orderDir=='desc'){
      $this->orderDir='asc';
    }else{
      $this->orderDir='desc';
    }
    $this->orderBy = $campo;
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
