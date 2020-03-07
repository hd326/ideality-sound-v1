@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => url('/unsubscribe?token=' . $subscription)])
Click here to unsubscribe
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
