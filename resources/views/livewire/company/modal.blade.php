    <div wire:ignore.self id="companyModal" class="modal fade" tabindex="-1"
        aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="tab-content p-3">

                        <div class="tab-pane active" id="profile-1" role="tabpanel">
                            <h4 class="card-title">Histórico de acompanhamento:</h4>
                            <hr>
                            <livewire:historic.historic-component />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
