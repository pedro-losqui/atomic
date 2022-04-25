@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Histórico</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gerenciamento</a></li>
                    <li class="breadcrumb-item active">Acompanhamento</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <livewire:historic.historic-component />
@endsection