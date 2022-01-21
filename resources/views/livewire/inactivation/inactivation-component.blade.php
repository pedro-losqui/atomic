<div>
    <div class="text-center">
        <div class="mb-1">
            <i class="mdi mdi-alert-outline display-4 text-danger"></i>
        </div>
        <h4 class="alert-heading font-18">Cuidado!</h4>
        <p class="mb-0">Deseja inativar este registro?</p>
        <strong></strong>
    </div>
    <hr>
    <div class="mb-3">
        <label class="form-label">Motivo</label>
        <div>
            <textarea wire:model='note' class="form-control" rows="2" placeholder="Descreva o motivo pelo qual o resgistro será inativado."></textarea>
            @error('note')
                <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div>
        <button type="button" wire:click='save' class="btn btn-danger waves-effect waves-light me-1">
            Inativar
        </button>
    </div>
</div>
