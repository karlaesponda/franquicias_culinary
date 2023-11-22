@section('styles')
<link rel="stylesheet" href="{{asset('css/manage_post/comments/css/comments.css')}}">
@endsection
<div class="comments-content">
    @foreach($comments as $comment)
    <div class="comments-body">
            <span class="comment-head"> {{$comment->user->name}} &nbsp; &nbsp; 
                {{$comment->value}}⭐</span>
            <p class="comment-description line">{{$comment->descripcion}}</p>
            <span class="comment-date"><b>Realizado:</b>{{$comment->created_at}}</span>
    </div>
    <hr>
    @endforeach
    <div class="links-paginate">
            {{$comments->links()}}
    </div>
</div>