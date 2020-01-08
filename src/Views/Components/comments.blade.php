<div class="kt-portlet">
    <div class="kt-portlet__head" id="comments">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">{{ $title }}</h3>
        </div>
    </div>
    <div class="kt-portlet__body">
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
        <div class="kt-widget3">
            @foreach($comments as $comment)
                <div class="kt-widget3__item">
                    <div class="kt-widget3__header">
                        <div class="kt-widget3__user-img">
                            <img class="kt-widget3__img" src="{{ $comment->user->avatar() }}"
                                 alt="{{ $comment->user->name }} ">
                        </div>
                        <div class="kt-widget3__info">
                            <a href="#" class="kt-widget3__username">
                                {{ $comment->user->name }} ({{ $comment->user->roles->implode('display_name', ', ') }})
                            </a>
                            <br>
                            <span class="kt-widget3__time">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <span class="kt-widget3__status kt-font-warning">
                        </span>
                    </div>
                    <div class="kt-widget3__body">
                        <p class="kt-widget3__text">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
