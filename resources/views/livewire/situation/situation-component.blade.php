<div>
    <div class="row row-cols-lg-auto g-5 align-items-center">
        <div class="col-sm-4">
            <h6>Situação</h6>
            @if($view)
                {{ $this->status->sitAtual }} - {{ $this->status->datIniSit }}
            @endif
            @if(!$view)
                <button type="button" wire:click='query' class="btn btn-sm btn-primary" data-bs-toggle="button"
                    aria-pressed="false">
                    Consultar
                </button>
            @endif
        </div>
        <hr>
    </div>
</div>
