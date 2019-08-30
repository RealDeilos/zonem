@if ($errors->any())
                <ul class="bg-danger">
    	@foreach ($errors->all() as $error)
                <li class="is-danger" role="alert">
                    <strong>{{$error}}</strong>
                </li>
        @endforeach
                    </ul>

@endif
