@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Relatório</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gerenciamento</a></li>
                    <li class="breadcrumb-item active">Inconsistência eSocial</li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')
    <livewire:report.report-esocial-component />
@endsection
