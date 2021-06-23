@extends('main')

@section('content')

  <form method="POST" action="/disciplinas/{{$disciplina->id}}">
    @csrf
    @method('patch')
    @include('disciplinas.partials.formedit')
   
  </form> 
@endsections