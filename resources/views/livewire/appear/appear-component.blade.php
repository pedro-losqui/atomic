<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th scope="col">Apto</th>
                    <th scope="col">Inapto</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appears as $item)
                    <tr>
                        <td>
                            <p class="mb-1 font-size-12"></p>
                            <h5 class="font-size-12 mb-0">[&nbsp;&nbsp;] &nbsp; Apto {{ $item->description }}</h5>
                        </td>
                        <td>
                            <p class="mb-1 font-size-12"></p>
                            <h5 class="font-size-12 mb-0">[&nbsp;&nbsp;] &nbsp; Inapto {{ $item->description }}</h5>
                        </td>
                        <td style="width: 2cm">
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
                <label class="sr-only" for="">Parecer</label>
                <input type="text" wire:model='description' class="form-control mb-2" placeholder="Ex.: Trabalho em altura">
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
