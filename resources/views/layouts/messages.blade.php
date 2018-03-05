@if($errors->count())
    <div class="ui error visible message my-5">
        <i class="close icon"></i>
        <div class="header">
            Uh-oh, something went wrong. There was a problem with your request.
        </div>
        <ul class="list">
            @foreach ($errors->all() as $key => $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('status'))
    <div class="ui success visible message my-5">
        <i class="close icon"></i>
        <div class="header">
            All good!
        </div>
        <p>{{ session('status') }}</p>
    </div>
@endif
