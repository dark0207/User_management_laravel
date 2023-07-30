@if(isset ($errors) && count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        <button type="button" class="close text-dark" data-dismiss="alert" aria-hidden="true">×</button>
        <ul class="list-unstyled mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success" role="alert">
                <button type="button" class="close text-dark" data-dismiss="alert" aria-hidden="true">×</button>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success" role="alert">
            <button type="button" class="close text-dark" data-dismiss="alert" aria-hidden="true">×</button>
            {{ $data }}
        </div>
    @endif
@endif