<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Filtros de relatório</h4>
                    <form class="needs-validation" novalidate="" wire:loading.remove wire:target="generate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="">Data inicial</label>
                                    <input type="date" wire:model='from' class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="validationTooltip02">Data final</label>
                                    <input type="date" wire:model='to' class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="">Grupo de empresas</label>
                                    <select wire:model='group' class="form-select">
                                        <option value="">Grupo de empresas</option>
                                        <option value="0">Outras</option>
                                        <option value="1">Grupo Elis</option>
                                    </select>
                                    @error('group')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" wire:click='generate' type="button">Gerar relatório</button>
                    </form>

                    <div class="row" wire:loading wire:target="generate">
                        <div class="col-md-12">
                            <div class="button-list mb-1 mb-sm-0">
                                <button color="primary" type="button" class="btn btn-primary"><span role="status"
                                        class="spinner-border text-white spinner-border-sm me-2"></span>Gerando
                                    relatório...
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
