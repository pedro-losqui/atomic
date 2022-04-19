<div>
    @include('livewire.company.modal')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="basicpill-firstname-input">Código</label>
                                    <input type="text" wire:model='code' class="form-control">
                                    @error('code')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <label class="form-label" for="basicpill-firstname-input">Razão
                                        social</label>
                                    <input type="text" wire:model='company_name' class="form-control">
                                    @error('company_name')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <select class="form-select" wire:model='import' id="inlineFormSelectPref">
                                    <option selected="">Importação...</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                                @error('import')
                                    <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <select class="form-select" wire:model='pendency' id="inlineFormSelectPref">
                                    <option selected="">Pendência...</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                                @error('pendency')
                                    <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <select class="form-select" wire:model='esocial' id="inlineFormSelectPref">
                                    <option selected="">eSocial...</option>
                                    <option value="0" selected>Não</option>
                                    <option value="1">Sim</option>
                                </select>
                                @error('esocial')
                                    <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-2">
                            <div class="col-lg-4">
                                @if ($edit)
                                    <button class="btn btn-warning" wire:click='update' type="button">Atualizar</button>
                                @else
                                    <button class="btn btn-primary" wire:click='save' type="button">Salvar</button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Filtros</h4>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-text"><i class="ri-building-4-fill"></i></div>
                                <input type="search" wire:model="search" class="form-control"
                                    placeholder="Localizar empresa">
                            </div>
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
                    <h4 class="card-title mb-4">Listagem de empresas</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Código &amp; Empresa</th>
                                    <th scope="col">Importação</th>
                                    <th scope="col">Pendência</th>
                                    <th scope="col">eSocial</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            @forelse($companies as $item)
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="mb-1 font-size-12">{{ $item->code }}</p>
                                            <h5 class="font-size-14 mb-0">{{ substr($item->company_name, 0, 60) }}</h5>
                                        </td>
                                        <td>{{ $item->presenter()->import($item->import) }}</td>
                                        <td>{{ $item->presenter()->pendency($item->pendency) }}</td>
                                        <td>{{ $item->presenter()->esocial($item->esocial) }}</td>
                                        <td>
                                            <div class="mt-2">
                                                <div class="btn-group btn-group-toggle" data-bs-toggle="buttons">
                                                    <button type="button" wire:click='edit({{ $item->id }})' class="btn btn-primary waves-effect waves-light">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>
                                                    <button type="button" wire:click='historic({{ $item->id }})' class="btn btn-primary waves-effect waves-light">
                                                        <i class="ri-git-repository-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @empty
                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <strong>Ops!</strong> Nenhum registro foi localizado.
                                </div>
                            @endforelse
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
                    {{ $companies->links('modules.paginate') }}
                </div>
            </div>
        </div>
    </div>
</div>
