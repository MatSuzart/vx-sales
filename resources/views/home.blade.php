@extends('layout.app')

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Vendas</h5>

@if(count($prod) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
    @foreach($prod as $p)
                <tr>
                    <td>{{$p->sales->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->sales->delivery}}</td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/sales" class="btn btn-sm btn-primary" role="button">New Sale</a>
    </div>
</div>

@endsection