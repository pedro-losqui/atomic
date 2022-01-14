<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ri-notification-3-line"></i>
        @if($messages)
            <span class="noti-dot"></span>
        @endif
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
        aria-labelledby="page-header-notifications-dropdown">
        <div class="p-3">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0"> Notificações </h6>
                </div>
                <div class="col-auto">
                    <a href="{{ route('message') }}" class="small"> Chat</a>
                </div>
            </div>
        </div>
        <div data-simplebar style="max-height: 230px;">
            @forelse($messages as $item)
                <a href="" class="text-reset notification-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-xs">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class="ri-message-2-line"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">{{ $item->request_name }}</h6>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1">{{ mb_strimwidth($item->message, 0, 45, "...") }}</p>
                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> {{ $item->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="card-body">
                    <p><strong>Não há mensagens no momento.</strong></p>
                </div>
            @endforelse
        </div>
    </div>
</div>
