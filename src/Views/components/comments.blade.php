<div class="portlet">
    <div class="portlet__head" id="comments">
        <div class="portlet__head-label">
            <h3 class="portlet__head-title">{{ $title }}</h3>
        </div>
    </div>
    <div class="portlet__body">
        {!! Form::open(['route' => [$route, $id], 'method' => 'post', 'class' => 'horizontal-form']) !!}
        <div class="form-group row">
            <div class="col-10">
                <textarea name="content" placeholder="Deixe aqui um comentário" class="form-control" style="height: 80px;"></textarea>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-brand" style="height: 80px;">{{ __('send') }}</button>
            </div>
        </div>
        <hr>
        {!! Form::close() !!}
        <div class="widget3">
            @isset($comments)
            @foreach($comments as $comment)
                <div class="widget3__item">
                    <div class="widget3__header">
                        <div class="widget3__user-img">
                            <img class="widget3__img" src="{{ $comment->user->avatar() }}" alt="{{ $comment->user->name }} ">
                        </div>
                        <div class="widget3__info">
                            <a href="#" class="widget3__username">
                                {{ $comment->user->name }} ({{ $comment->user->roles->implode('display_name', ', ') }})
                            </a>
                            <br>
                            <span class="widget3__time">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <span class="widget3__status font-warning">
                        </span>
                    </div>
                    <div class="widget3__body">
                        <p class="widget3__text">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
            @endforeach
            @endisset
        </div>
    </div>
</div>
