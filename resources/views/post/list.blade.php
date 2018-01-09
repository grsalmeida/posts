@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="text-center"><a href="/post/add/">Criar post</a></h3></div>
                    <div class="panel-body">
                        @if(isset($post))
                            @foreach($post as $posts)
                                @if(Auth::user()->id == $posts->id_user)
                                <h2><a href="/post/{{ $posts->id }}/edit">{{ $posts->title}}</a></h2>
                                <p>{{ $posts->description }}</p>
                                <p>{{ Auth::user()->name }}</p>
                                <form action="/post/{{ $posts->id }}/delete" method="POST">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" name="name" value="Apagar">
                                </form>
                                <hr>
                                @else
                                <h2>{{ $posts->title}}</h2>
                                <p>{{ $posts->description }}</p>
                                <hr>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
