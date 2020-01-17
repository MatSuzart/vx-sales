@extends('layout.app')

@section('body')
<div class="card border">
    <div class="card-body">
    @foreach($sales as $s)
                <tr>
                    <td>{{$sales->id}}</td>
                    <td>{{$s->product->name}}</td>
                </tr>
    @endforeach                
            </tbody>
    </div>
</div>
@endsection