@component('mail::message')
# Welcome, {{ $member->name }}

Thanks for registering.

@component('mail::button', ['url' => url('/')])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
