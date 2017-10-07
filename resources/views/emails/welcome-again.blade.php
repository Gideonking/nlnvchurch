@component('mail::message')
# Welcome!

Thanks so much for registering!

@component('mail::button', ['url' => ''])
Start Sharing
@endcomponent

@component('mail::panel', ['url' => ''])
Some bibilical quote to go here. :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
