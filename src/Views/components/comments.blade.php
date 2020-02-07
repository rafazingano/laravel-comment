<div class="cw-comments">
    {!! Form::open(['route' => [$route, $id], 'method' => 'post', 'class' => 'horizontal-form']) !!}
    <div class="form-group row">
        <div class="col-10">
            <textarea name="content" placeholder="Deixe aqui um comentário" class="form-control"
                      style="height: 80px;"></textarea>
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-brand" style="height: 80px;">{{ __('Enviar') }}</button>
        </div>
    </div>
    <hr>
    {!! Form::close() !!}
    <div class="">
        @isset($comments)
            @foreach($comments as $comment)
                <div class="comment">
                    <div>
                        <div class="user-img">
                            <img class="img" src="{{ $comment->user->avatar() }}" alt="{{ $comment->user->name }} ">
                        </div>
                        <div class="info">
                            <a href="#" class="username text-primary text-black-50">
                                {{ $comment->user->name }} ({{ $comment->user->roles->implode('display_name', ', ') }})
                            </a>
                            <br>
                            <span class="time">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                    <div class="comment-text">
                        <p class="text">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
                <hr>
            @endforeach
        @endisset
    </div>
</div>

@push('styles')
    <style>
        .cw-comments {

        }

        .cw-comments .comment{
            display: grid;
        }

        .cw-comments .user-img{
            float: left;
        }

        .cw-comments .user-img img{
            height: 60px;
        }

        .cw-comments .info{
            float: left;
            margin-left: 20px;
        }

        .cw-comments .comment-text{
            padding: 4px 2px 2px 80px;
        }
    </style>
@endpush
