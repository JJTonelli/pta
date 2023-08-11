<div>
    <div class="px-4 py-4">
        <div class="row">
            <div class="col-sm-2">
                <label for="">Nombre</label>
                <input type="text" class="form-control" wire:model.defer="pokemon">
            </div>
            <div class="col-sm-2">
                <label for="">Tipo 1</label>
                <select type="text" class="form-select" wire:model.defer="tipo1">
                    <option value="">Selecciona Tipo</option>
                    @foreach($tipos as $t)
                        <option value="{{$t->TipoID}}">{{$t->Nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <label for="">Tipo 2</label>
                <select type="text" class="form-select" wire:model.defer="tipo2">
                    <option value="">Selecciona Tipo</option>
                    @foreach($tipos as $t)
                        <option value="{{$t->TipoID}}">{{$t->Nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <label for="">Habitat</label>
                <select type="text" class="form-select" wire:model.defer="habitat">
                    <option value="">Selecciona Habitat</option>
                    @foreach($habitats as $h)
                        <option value="{{$h->HabitatID}}">{{$h->Nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <label for="" class="invisible">Buscar Pokemon</label>
                <button class="btn btn-primary" wire:click="render">Buscar</button>
            </div>
        </div>
        <div class="row text-center">
            @foreach($pokemones as $p)
                <div class="col-sm-3">
                    <div class="col-sm-12 border rounded my-4 card-pokemon" style="cursor: pointer">
                        <a href="/pokemon/{{$p->Numero}}" class="text-decoration-none d-flex flex-column">
                            <img class="mx-auto" src="{{$p->Sprite}}" alt="" width="100px" height="100px">
                            <span class=" text-decoration-none fst-italic text-reset">#{{ $p->Numero }}</span>
                            <a class="text-primary  fw-semibold">{{ $p->Nombre }}</a>
                            <div class="row">
                                <div class="col-sm-12">
                                    <span style="color: {{$p->tipo->Color}}">{{$p->tipo->Nombre}}</span>
                                    @if($p->tipo2)
                                        /
                                        <span style="color: {{$p->tipo2->Color}}">{{$p->tipo2->Nombre}}</span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-3">
                {{$pokemones->links()}}
            </div>
        </div>
    </div>
</div>
