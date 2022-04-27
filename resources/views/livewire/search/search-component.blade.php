<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group">
                            <input type="text" wire:model='search' wire:keydown.enter="searchRecord"
                                class="form-control" placeholder="Localizar atendimento">
                            @if($results)
                                <button class="btn btn-primary" wire:click='clear' type="button"><i
                                        class="mdi mdi-close"></i></button>
                            @else
                                <button class="btn btn-primary" wire:loading.remove wire:target="searchRecord"
                                    wire:click='searchRecord' type="button">Pesquisar
                                </button>
                                <button class="btn btn-primary" wire:loading wire:target="searchRecord" type="button">
                                    <div class="spinner-grow spinner-grow-sm" role="status">
                                        <span class="visually-hidden"></span>
                                    </div>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
                @if($results)
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            @forelse($results as $item)
                                <li style="{{ $item->visualization == '1' ? 'opacity: 0.6;' : '' }}"
                                    class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $item->nomColaborador }}</div>
                                        @if($item->visualization == '1')
                                            <span class="badge bg-danger">Registro inativado</span>
                                        @else
                                            <span
                                                class="badge bg-success">{{ $item->presenter()->tagStatus($item->status, $item->standby) }}</span>
                                            {{ $item->presenter()->tagExam($item->retTipExa) }}
                                        @endif
                                    </div>
                                    <a href="javascript:void(0)" wire:click='view({{ $item->id }})'>
                                        <span class="badge badge-soft-primary">Vizualizar</span>
                                    </a>
                                </li>
                            @empty
                                <div class="alert alert-danger mb-0" role="alert">
                                    Nenhum registro foi localizado.
                                </div>
                            @endforelse
                        </ol>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
