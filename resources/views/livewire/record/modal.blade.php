@if($record)
    <div wire:ignore.self id="recordModal" class="modal fade" tabindex="-1"
        aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFullscreenLabel">Atendimento:
                        {{ $record->presenter()->tagExam($record->retTipExa) }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab"
                                aria-selected="true">
                                <i class=" dripicons-paperclip me-1 align-middle"></i> <span
                                    class="d-none d-md-inline-block">Solitação</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab" aria-selected="false">
                                <i class="dripicons-archive me-1 align-middle"></i> <span
                                    class="d-none d-md-inline-block">Movimentações</span>
                            </a>
                        </li>
                        @if($record->retTipExa == 1 || $record->retTipExa == 3)
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab"
                                    aria-selected="false">
                                    <i class="dripicons-clipboard me-1 align-middle"></i> <span
                                        class="d-none d-md-inline-block">ASO</span>
                                </a>
                            </li>
                        @endif
                    </ul>

                    <hr>

                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="home-1" role="tabpanel">
                            <div class="card-body">
                                <livewire:situation.situation-component />
                                <hr>
                                <div class="row row-cols-lg-auto g-5 align-items-center">
                                    <div class="col-sm-4">
                                        <h6>Empresa & Posto de Serviço</h6>
                                        <address>
                                            <strong>Razão Social:</strong> {{ $record->nomEmpresa }}<br>
                                            <strong>CNPJ:</strong> {{ $record->cnpjFilial }}<br>
                                            <strong>Nome do Posto:</strong> {{ $record->nomRateio }}<br>
                                            <strong>CNPJ:</strong> {{ $record->cnpjPosto }}<br>
                                        </address>
                                    </div>
                                    <hr>
                                </div>
                                <hr>
                                <div class="row row-cols-lg-auto g-5 align-items-center">
                                    <div class="col-sm-4">
                                        <h6>Funcionário</h6>
                                        <address>
                                            <strong>Nome Completo:</strong> {{ $record->nomColaborador }}<br>
                                            <strong>CPF:</strong> {{ $record->cpfColaborador }}<br>
                                            <strong>Data de Admissão:</strong> {{ $record->dataAdm }}<br>
                                            <strong>Sexo:</strong> {{ $record->sexColaborador }}<br>
                                            <strong>Data de Nascimento:</strong> {{ $record->nasColaborador }}<br>
                                        </address>
                                    </div>
                                    <hr>
                                </div>
                                <hr>
                                <div class="row row-cols-lg-auto g-5 align-items-center">
                                    <div class="col-sm-4">
                                        <h6>Setor e Função Atual</h6>
                                        <address>
                                            <strong>Setor:</strong> {{ $record->nomPosto }}<br>
                                            <strong>Função:</strong> {{ $record->nomCargo }}<br>
                                        </address>
                                    </div>
                                    <hr>
                                </div>
                                <hr>
                                @if($record->estAtual && $record->estNova)
                                    <div class="row row-cols-lg-auto g-5 align-items-center">
                                        <div class="col-sm-4">
                                            <h6>Setor e Função Atual</h6>
                                            <ul class="mb-1 pl-3 pb-2">
                                                <li><i class="fas fa-angle-right rotate"></i>
                                                    <span><i class="far fa-envelope-open ic-w mx-1"></i>Mail</span>
                                                    <ul class="nested">
                                                        <li><i class="far fa-bell ic-w mr-1"></i> Offers</li>
                                                        <li><i class="far fa-address-book ic-w mr-1"></i>Contacts</li>
                                                        <li><i class="fas fa-angle-right rotate"></i>
                                                            <span><i
                                                                    class="far fa-calendar-alt ic-w mx-1"></i>Calendar</span>
                                                            <ul class="nested">
                                                                <li><i class="far fa-clock ic-w mr-1"></i>Deadlines</li>
                                                                <li><i class="fas fa-users ic-w mr-1"></i>Meetings</li>
                                                                <li><i
                                                                        class="fas fa-basketball-ball ic-w mr-1"></i>Workouts
                                                                </li>
                                                                <li><i class="fas fa-mug-hot ic-w mr-1"></i>Events</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="col-sm-4">
                                            <h6>Setor e Função Proposto</h6>
                                            <ul class="mb-1 pl-3 pb-2">
                                                <li><i class="fas fa-angle-right rotate"></i>
                                                    <span><i class="far fa-envelope-open ic-w mx-1"></i>Mail</span>
                                                    <ul class="nested">
                                                        <li><i class="far fa-bell ic-w mr-1"></i> Offers</li>
                                                        <li><i class="far fa-address-book ic-w mr-1"></i> Contacts</li>
                                                        <li><i class="fas fa-angle-right rotate"></i>
                                                            <span><i class="far fa-calendar-alt ic-w mx-1"></i>
                                                                Calendar</span>
                                                            <ul class="nested">
                                                                <li><i class="far fa-clock ic-w mr-1"></i> Deadlines
                                                                </li>
                                                                <li><i class="fas fa-users ic-w mr-1"></i> Meetings</li>
                                                                <li><i class="fas fa-basketball-ball ic-w mr-1"></i>
                                                                    Workouts
                                                                </li>
                                                                <li><i class="fas fa-mug-hot ic-w mr-1"></i> Events</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                                <div class="row row-cols-lg-auto g-5 align-items-center">
                                    <div class="col-sm-4">
                                        <h6>Clínica e Observações</h6>
                                        <address>
                                            <strong>Clínica:</strong> {{ $record->nomLaboratorio }}<br>
                                            <strong>Observações:</strong> {{ $record->obsSolicitacao }}<br>
                                        </address>
                                    </div>
                                    <hr>
                                </div>
                                <hr>
                                <div class="row row-cols-lg-auto g-5 align-items-center">
                                    <div class="col-sm-4">
                                        <h6>Dados do Solicitante</h6>
                                        <address>
                                            <strong>Solicitante:</strong> {{ $record->nomSolicitante }}<br>
                                            <strong>Telefone:</strong> {{ $record->fonSolicitante }}<br>
                                            <strong>E-mail:</strong> {{ $record->emaSolicitante }}<br>
                                        </address>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="profile-1" role="tabpanel">
                            <h4 class="card-title">Status atual:</h4>
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="ri-error-warning-line align-middle me-2"></i>
                                {{ $record->presenter()->tagStatus($record->status) }}
                            </button>
                            <hr>
                            <livewire:moviment.moviment-component />
                        </div>

                        <div class="tab-pane" id="messages-1" role="tabpanel">
                            <livewire:work.work-component />
                            <hr>
                            <livewire:risk.risk-component />
                            <hr>
                            <livewire:exam.exam-component />
                            <hr>
                            <div>
                                <div>
                                    @if($record->print == 0)
                                        <button type="button" wire:click='updatePrint'
                                            class="btn btn-primary waves-effect waves-light">
                                            <i class="ri-check-line align-middle me-1"></i> Gerar Kit
                                        </button>
                                    @else
                                        <a href="{{ route('print', $record->id ? $record->id : 0) }}"
                                            target="_blank">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-printer-line align-middle me-1"></i> Imprimir Kit
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" disabled>
                                            <i class="ri-mail-send-line align-middle me-1"></i> Enviar Kit
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endif
