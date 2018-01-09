@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Criar post</div>
                <div class="panel-body">
                    <form class="" action="/post/add" method="POST">
                        <input type="text" class="form-control" name="title" value="" placeholder="Titulo do post">
                        {{ ($errors->has('title')) ? $errors->first('title') : '' }}<br>
                        <textarea name="description" class="form-control" rows="8" cols="40" placeholder="Descricao"></textarea>
                        {{ ($errors->has('description')) ? $errors->first('description') : '' }}<br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        <input type="submit" name="name" value="Salvar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection