@extends('adminlte::page')

@section('content')
<div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title ">Realizar Saque</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
            @include('includes.alerts')
            <form method="POST" action="{{ route('saque.store') }}">
                {!! csrf_field() !!}
                <div class="col-md-12 form-group">
                    <input type="text" name="value" placeholder="Valor do Saque" class="form-control">
                </div>
                <div class="form-group text-right">
                    <a href="{{ route('saldo') }}"">
                        <button type="button" class="btn btn-secondary">Voltar</button>
                    </a>
                    <button type="submit"  class="btn btn-md btn-danger">Sacar</button>
                </div>
            </form>
    </div>
</div>
@endsection
