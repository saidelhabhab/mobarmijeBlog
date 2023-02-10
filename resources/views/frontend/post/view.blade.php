@extends('layouts.app')

@section('title',"$post->meta_title")
@section('meta_description',"$post->meta_description")
@section('meta_keyword',"$post->meta_keyword")

@section('content')
<div class="py-5">
    <div class="container">


        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h4 class="mb-0">{!! $post->name !!} </h4>
                </div>
              {{--   <div class="mt-3">
                    {{ $post->category->name.'/'. $post->name }}
                </div> --}}

                <div class="card card-shadow mt-4">
                    <div class="card-body post-description">
                        {!! $post->description!!}
                    </div>
                </div>

                @if (session('message'))
                <div class="alert alert-warning mb-3 mt-4">
                    {{ session('message') }}
                </div>
                @endif

                <div class="comment-area mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Leave Comment</h6>

                            <form action="{{route('comment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="post_slug"   value="{{$post->slug}}">
                                <textarea class="form-control" name="comment_body" required rows="3" ></textarea>
                                <button type="submit" class="btn btn-primary mt-3"> Comment</button>
                            </form>
                        </div>
                    </div>

                    @forelse ($post->comment as  $comment)


                    <div class=" comment-container card card-body shadow-sm mt-3">
                        <div class="detail-area">
                            <h5 class="user-name mb-1">
                                @if ($comment->user)
                                    {{$comment->user->name}}
                                @endif

                                <small class="ms-3 text-primary">Comment on :  {{$comment->created_at->format('d-m-Y')}}</small>
                            </h5>
                            <p class="user-comment mb-1">
                                {!!$comment->comment_body!!}
                            </p>
                        </div>
                        @if (Auth::check() && Auth::id() == $comment->user_id)
                        <div>
                            <a href="" class="btn btn-primary btn-sm me-2"> Edit</a>
                            <button type="button" value="{{$comment->id}}" class="deleteComment btn btn-danger btn-sm me-2"> Delete</button>
                        </div>
                        @endif

                    </div>

                    @empty
                    <div class="card card-body shadow-sm mt-3">
                        <h6> no comments yet</h6>
                    </div>
                    @endforelse


                </div>

            </div>

            <div class="col-md-3">
                    <div class="border p-2 my-2">
                        <h4> Advertising area</h4>
                    </div>

                    <div class="border p-2 my-2">
                        <h4> Advertising area</h4>
                    </div>

                    <div class="border p-2 my-2">
                        <h4> Advertising area</h4>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4> Latest Post </h4>
                    </div>
                    <div class="card-body">
                        @foreach ($latest_post as $latest_post_item )

                        <a href="{{url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug)}}" class="text-decoration-none">
                            <h6> > {{ $latest_post_item->name}}</h6>
                        </a>


                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

        <script>
            $(document).ready(function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });  // jabnah mn Laravel


                $(document).on('click','.deleteComment', function (e) {

                    if(confirm(' Are you sure you want to delete this comment ?'))
                    {
                        var thisClicked = $(this);
                        var comment_id =  thisClicked.val();

                        $.ajax({
                            type: "POST",
                            url: "/delete_comment",
                            data: {
                                'comment_id': comment_id
                            },
                            success: function (res) {
                                if(res.status== 200){
                                    thisClicked.closest('.comment-container').remove();
                                    alert(res.message);
                                }else{
                                    alert(res.message);
                                }

                            }
                        });
                    }

                });
            });
        </script>

@endsection
