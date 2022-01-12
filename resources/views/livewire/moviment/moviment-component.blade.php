<div>
    <div class="card-body">
        <h4 class="card-title mb-2">Movimentações</h4>
        @forelse($moviments as $item)
            <ul class="verti-timeline list-unstyled">
                <li class="event-list">
                    <div>
                        <p class="text-primary">
                            {{ $item->created_at->format('d/m/Y H:i') }}</p>
                        <h6>Movimentado por: {{ $item->user['name'] }}</h6>
                        <p class="text-muted">{{ $item->note }}</p>
                    </div>
                </li>
            </ul>
        @empty
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                <strong>Ops!</strong> Não há movimentações até o momento.
            </div>
        @endforelse
    </div>
    <div class="row">
        <div class="col">
            <div class="mt-2 bg-light p-3 rounded">
                <form class="needs-validation">
                    <div class="row">
                        <div class="col mb-2 mb-sm-0">
                            <input type="text" wire:model='moviment.note' class="form-control border-0"
                                placeholder="Digite seu texto">
                            @error('moviment.note')
                                <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-auto">
                            <div class="btn-group">
                                <button type="button" wire:click='save' class="btn btn-success chat-send w-200"><i
                                        class="ri-send-plane-fill"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
