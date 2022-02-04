<div wire:poll.5000ms>
    <div class="row">
        <div class="col-xl-2 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex text-muted">
                        <div class="flex-grow-1 overflow-hidden">
                            <small><strong>Admissional:</strong></small> <a href="#" style="margin-left: 0.3cm" class="badge bg-primary">{{ $admissional }}</a><br>
                            <small><strong>Periódico:</strong></small> <a href="#" style="margin-left: 0.7cm" class="badge bg-primary">{{ $periodico }}</a><br>
                            <small><strong>Mud. de R. O:</strong></small> <a href="#" style="margin-left: 0.2cm" class="badge bg-primary">{{ $mudanca }}</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex text-muted">
                        <div class="flex-grow-1 overflow-hidden">
                            <small><strong>Ret. ao Trabalho:</strong></small> <a href="#" style="margin-left: 0.2cm" class="badge bg-primary">{{ $retorno }}</a><br>
                            <small><strong>Demissional:</strong></small> <a href="#" style="margin-left: 0.8cm" class="badge bg-primary">{{ $demissional }}</a><br>
                            <small><strong>Tr. de Ent/Adm:</strong></small> <a href="#" style="margin-left: 0.4cm" class="badge bg-primary">{{ $transferencia }}</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex text-muted">
                        <div class="flex-shrink-0  me-3 align-self-center">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="ri-survey-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="mb-1">Solicitados</p>
                            <h5 class="mb-3">{{ $solicitados }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex text-muted">
                        <div class="flex-shrink-0  me-3 align-self-center">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="ri-calendar-todo-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="mb-1">Agendados</p>
                            <h5 class="mb-3">{{ $agendados }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex text-muted">
                        <div class="flex-shrink-0  me-3 align-self-center">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="ri-inbox-archive-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="mb-1">Recebidos</p>
                            <h5 class="mb-3">{{ $recebidos }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex text-muted">
                        <div class="flex-shrink-0  me-3 align-self-center">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="ri-check-double-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="mb-1">Concluídos</p>
                            <h5 class="mb-3">{{ $concluidos }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
