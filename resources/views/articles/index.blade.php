@extends('layouts.app')

@section('content')

<div class="row">
    @forelse($articles as $article)
     <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading default">
            <span>Thao Giang Thao</span>
            <span class="pull-right">{{ $article->created_at->diffForHumans() }}</span>
            </div>
            <div class="panel-body">

            {{$article['content']}}
            </div>
            <div class="panel-footer clearfix">
                <i class="fa fa-heart pull-right"></i>
            </div>
        </div>

    </div>
    @empty
        No articles.
    @endforelse

   
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{$articles->links()}}
    </div>
</div>
@endsection