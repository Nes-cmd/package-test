@component('mail::message')
# Hi there
Name : {{ $message['name'] }}<br>
Phone: {{ $message['phone'] }}<br>
Email: {{ $message['email'] }}<br>
Message: 
{{ $message['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
