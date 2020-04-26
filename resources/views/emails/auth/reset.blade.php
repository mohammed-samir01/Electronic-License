@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'http://ipda3.com'])

Reset Password

@endcomponent

<p>tou reset code is : {{$code}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
