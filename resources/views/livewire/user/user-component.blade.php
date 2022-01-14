<div>
    @include('livewire.user.create')
    <div class="row">

        @if(session()->has('message'))
            <div class="col-12" id="alert">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close align-center" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                    <strong>otimo!</strong> {{ session('message') }}
                </div>
            </div>
        @endif

        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group">
                            <div class="input-group-text"><i class="ri-user-search-line"></i></div>
                            <input type="search" wire:model='search' class="form-control"
                                placeholder="Localizar usuário">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="button-items ms-2">
                            <button type="button" wire:click='create' class="btn btn-primary waves-effect waves-light">
                                Adicionar <i class="ri-user-add-line align-middle ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Nome &amp; Login</th>
                                    <th scope="col">Status</th>
                                    <th style="width: 2cm" scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $item)
                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-0">{{ $item->name }}</h5>
                                            <p class="mb-1 font-size-12">{{ $item->login }}</p>
                                        </td>
                                        <td>
                                            <small>Status</small><br>
                                            {{ $item->presenter()->tagStatus($item->status) }}
                                        </td>
                                        <td>
                                            <label class="btn btn-primary">
                                                <input type="button" wire:click='edit({{ $item->id }})' class="btn-check" disabled>
                                                Editar
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
</div>
