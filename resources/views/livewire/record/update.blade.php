<div wire:ignore.self id='recordUpdate' class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Atualização de status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="button-list mb-1 mb-sm-0" wire:loading wire:target="completion">
                    <button class="btn btn-primary" type="button" disabled="">
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                        Processando...
                    </button>
                </div>

                <div class="card" wire:target='completion' wire:loading.remove>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Barra de progresso: <strong>{{ $record->nomColaborador }}</strong></h4>
                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav-justified nav nav-pills">
                                        <li class="nav-item">
                                            <a href="#progress-seller-details" class="nav-link {{ $record->status == 1 ? 'active' : '' }}" data-toggle="tab">
                                                <span class="step-number">01</span>
                                                <span class="step-title">Solicitado</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-company-document" class="nav-link {{ $record->status == 2 ? 'active' : '' }}" data-toggle="tab">
                                                <span class="step-number">02</span>
                                                <span class="step-title">Kit Enviado</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#progress-bank-detail" class="nav-link {{ $record->status == 3 ? 'active' : '' }}" data-toggle="tab">
                                                <span class="step-number">03</span>
                                                <span class="step-title">Recebido</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-confirm-detail" class="nav-link {{ $record->status == 4 ? 'active' : '' }}" data-toggle="tab">
                                                <span class="step-number">04</span>
                                                <span class="step-title">Concluido</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div id="bar" class="progress mt-4">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: {{ $record->presenter()->percentStatus($record->status) }}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($record->status == 3)
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                        <strong>Atenção!</strong> Por favor, verificar se o colaborador <strong>{{ $record->nomColaborador }}</strong> realizou o exame toxicológico.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="default-input">Data do ASO</label>
                                    <input class="form-control" type="date" wire:model='date'>
                                    @error('date')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                @if($record->status == 3 || $record->status == 4)
                    <button type="button" wire:click='completion' class="btn btn-primary">Finalizar</button>
                @else
                    <button type="button" wire:click='updateStatus' class="btn btn-primary">Atualizar</button>
                @endif
            </div>
        </div>
    </div>
</div>
