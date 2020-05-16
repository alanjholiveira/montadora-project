@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="h3 mb-2 text-gray-800">Funcionarios</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('employees.create') }}" class="btn btn-primary" data-remote="true">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Adicionar</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{$dataTable->table()}}
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush
