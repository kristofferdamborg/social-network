@extends('layouts.app')

@section('content')

    <div class="row">
        @forelse($articles as $article)
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Kristoffer Damborg</span>

                        <span class="pull-right">
                            {{ $article->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <div class="panel-body">
                        {{ $article->shortContent }}

                        <a href="/articles/{{ $article->id }}">Read more</a>
                    </div>

                    <div style="background-color: white; display: flex; align-items: center; justify-content: flex-end;" class="panel-footer clearfix">
                        
                        <i class="fa fa-heart"></i>

                        @if($article->user_id == Auth::id())
                            <form action="/articles/{{ $article->id }}" method="POST" style="margin-left: 15px">
                            
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        @empty
            No articles.
        @endforelse
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{ $articles->links() }}
        </div>
    </div>

@endsection