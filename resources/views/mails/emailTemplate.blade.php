@component('mail::message')
Hello **{{$title}}**,  {{-- line break --}}
**{{$body}}**{{-- line break --}}

@component('mail::button', ['url' => $link])
Join Owino on Github
@endcomponent
Sincerely,  

@endcomponent