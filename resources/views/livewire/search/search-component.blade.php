<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group">
                            <div class="input-group-text"><i class="ri-search-line"></i></div>
                            <input type="search" wire:model='search' class="form-control"
                                placeholder="Localizar atendimento">
                        </div>
                    </div>
                </div>
                @if($search)
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            @forelse($results as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $item->nomColaborador }}</div>
                                        <span class="badge bg-success">{{ $item->presenter()->tagStatus($item->status) }}</span>
                                        {{ $item->presenter()->tagExam($item->retTipExa) }}
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
