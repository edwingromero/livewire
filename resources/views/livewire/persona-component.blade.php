<div>

    <h2 class="text-center">Personas</h2>

    <div class="d-flex bd-highlight">
      <div class="p-2 flex-grow-1 bd-highlight">
        <input type="text" wire:model.debounce.500ms="searchNombres" class="form-control w-80 " placeholder="Busqueda por nombres">
      </div>
      <div class="p-2  bd-highlight">
        <select  wire:model="limit" class="form-control">
          <option value="5">5 por pag.</option>
          <option value="10">10 por pag.</option>
          <option value="15">15 por pag.</option>
          <option value="20">20 por pag.</option>
          <option value="30">30 por pag.</option>
          <option value="50">50 por pag.</option>
        </select>
      </div>
      <div class="p-2 bd-highlight">
        <button wire:click="limpiar" class="btn btn-primary btn-sm">X</button>
      </div>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th wire:click="ordenar('id')" style="cursor:pointer">Id</th>
          <th wire:click="ordenar('nombres')" style="cursor:pointer">Nombres</th>
          <th>Email</th>
          <th>Pais</th>
          <th>Ciudad</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($personas as $persona)
        <tr>
          <td>{{$persona->id}}</td>
          <td>{{$persona->nombres}}</td>
          <td>{{$persona->email}}</td>
          <td>{{$persona->pais}}</td>
          <td>{{$persona->ciudad}}</td>
          <td><button wire:click="eliminar({{$persona->id}})" type="button" class="btn btn-sm btn-danger">Eliminar</button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{$personas->links()}}
    </div>
</div>
