<div>
    <div class="mb-3">
        <label class="form-label">Motivo</label>
        <div>
            <textarea wire:model='note' class="form-control" rows="2" placeholder="Descreva o motivo pelo qual o resgistro ficará em espera."></textarea>
            @error('note')
                <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div>
        <button type="button" wire:click='save' class="btn btn-primary waves-effect waves-light me-1">
            Ativar
        </button>
    </div>
</div>
