<div wire:ignore.self id="userEdit" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Editar usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="needs-validation">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Nome completo</label>
                                    <input type="text" wire:model='name' class="form-control" placeholder="Nome">
                                    @error('name')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Login</label>
                                    <input type="text" wire:model='login' class="form-control" placeholder="Login">
                                    @error('login')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label class="form-label" for="">Senha</label>
                                    <input type="password" wire:model='password' class="form-control"
                                        placeholder="******">
                                    @error('password')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label class="form-label" for="">Confirmação de senha</label>
                                    <input type="password" wire:model='password_confirm' class="form-control"
                                        placeholder="******">
                                    @error('password_confirm')
                                        <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-3">Avatar</h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model='avatar' id="inlineRadios1"
                                        value="assets/images/users/avatar-1.jpg" checked="">
                                    <img class="rounded-circle avatar-sm" alt="200x200"
                                        src="assets/images/users/avatar-1.jpg" data-holder-rendered="true">
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model='avatar' id="inlineRadios2"
                                        value="assets/images/users/avatar-2.jpg">
                                    <img class="rounded-circle avatar-sm" alt="200x200"
                                        src="assets/images/users/avatar-2.jpg" data-holder-rendered="true">
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model='avatar' id="inlineRadios3"
                                        value="assets/images/users/avatar-3.jpg">
                                    <img class="rounded-circle avatar-sm" alt="200x200"
                                        src="assets/images/users/avatar-3.jpg" data-holder-rendered="true">
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model='avatar' id="inlineRadios4"
                                        value="assets/images/users/avatar-4.jpg">
                                    <img class="rounded-circle avatar-sm" alt="200x200"
                                        src="assets/images/users/avatar-4.jpg" data-holder-rendered="true">
                                </div>
                                <br>
                                @error('avatar')
                                    <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label class="form-label" for="">Perfil de acesso</label>
                                        <select id="inputState" wire:model='acess' class="form-select">
                                            <option>Selecione</option>
                                            @foreach($this->profile as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click='update' class="btn btn-primary">Atualizar</button>
            </div>
        </div>
    </div>
</div>
