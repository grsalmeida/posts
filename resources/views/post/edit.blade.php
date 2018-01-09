
@extends('layouts.app')

@section('content')
    @foreach($find as $finds)
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Editar post</div>
                        <div class="panel-body">
                            <form action="/post/{{ $finds->id }}/edit" method="POST">
                                <input type="text" class="form-control" name="title" value="{{ $finds->title }}" placeholder="Titulo">
                                {{ ($errors->has('title')) ? $errors->first('title') : '' }}<br>
                                <textarea class="form-control" name="description" rows="8" cols="40" placeholder="Descricao">{{ $finds->description }}</textarea>
                                {{ ($errors->has('descricao')) ? $errors->first('descricao') : '' }}<br>
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $finds->id }}">
                                <input type="submit" name="name" value="Salvar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection