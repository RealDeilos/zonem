@component('mail::message')
    El sujeto:
    {!!$data['name']!!}

    Con mail:
    {!!$data['mail']!!}

    Dice:
    {!!$data['description']!!}



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

{{ config('app.name') }}
@endcomponent
