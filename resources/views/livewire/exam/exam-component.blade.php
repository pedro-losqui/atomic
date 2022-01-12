<div>
    <div class="table-responsive">
        <table class="table table-centered table-nowrap mb-0">
            <thead>
                <tr>
                    <th scope="col">Exame</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($exams as $item)
                    <tr>
                        <td>
                            <p class="mb-1 font-size-12">Descrição</p>
                            <h5 class="font-size-12 mb-0">{{ $item->description }}</h5>
                        </td>
                        <td>
                            <button type="button" wire:click='delete({{ $item->id }})'
                                class="btn btn-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="row gy-2 align-items-center">
        <div class="col-auto">
            <div class="mt-3 me-sm-2">
                <label class="sr-only" for="">Descrição do exame</label>
                <input type="text" wire:model='description' class="form-control mb-2" placeholder="Ex.: Audiometria">
                @error('description')
                    <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" wire:click='save' class="btn btn-primary mt-2">Adicionar</button>
        </div>
    </div>
</div>
