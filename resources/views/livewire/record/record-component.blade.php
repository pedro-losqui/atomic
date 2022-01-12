<div>
    <livewire:search.search-component />

    <livewire:header.header-count-component />

    @include('livewire.record.modal')
    @include('livewire.record.update')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="row row-cols-lg-auto g-5 align-items-center">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-text"><i class="mdi mdi-account-search-outline"></i></div>
                                <input type="search" wire:model='search' class="form-control" placeholder="Busca">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input type="date" wire:model='from' class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input type="date" wire:model='to' class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <select wire:model='status' class="form-select">
                                <option value="0">Status...</option>
                                <option value="1" selected>Solicitado</option>
                                <option value="2">Agendado</option>
                                <option value="3">Recebido</option>
                                <option value="4">Conclído</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <select wire:model='attendance' class="form-select">
                                <option value="0">Atendimento...</option>
                                <option value="1">Admissional</option>
                                <option value="2">Periódico</option>
                                <option value="3">Mudança de função</option>
                                <option value="4">Retorno ao Trabalho</option>
                                <option value="5">Demissional</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="button" wire:click='resetPage' class="btn btn-primary">
                                <i class="mdi mdi-update"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="15%">Nome &amp; CPF</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Atendimento</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Ação<output></output></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($records as $item)
                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-0">{{ $item->nomColaborador }}</h5>
                                            <p class="mb-1 font-size-12">{{ $item->cpfColaborador }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">Status</p>
                                            {{ $item->presenter()->tagStatus($item->status) }}
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">Atendimento</p>
                                            {{ $item->presenter()->tagExam($item->retTipExa) }}
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">Data Solicitação</p>
                                            {{ $item->created_at->format('d/m/Y')}}
                                        </td>
                                        <td>
                                            <label class="btn btn-primary">
                                                <input type="button" wire:click='find({{ $item->id }})' class="btn-check">
                                                <i class="mdi mdi-account-box-multiple md-24"></i>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="button" wire:click='findStatus({{ $item->id }})' class="btn-check">
                                                <i class="mdi mdi-refresh md-20"></i>
                                            </label>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                        <strong>Ops!</strong> Nenhum registro foi localizado.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body mt-3">
                    {{ $records->links('modules.paginate') }}
                </div>
            </div>
        </div>
    </div>
</div>
