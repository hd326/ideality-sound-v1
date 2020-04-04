@component('mail::message')

<h1>We've got a new post!</h1>

<h2>Here are some of the details!</h2>

<h3>Title</h3>
<p>{{ $post->title }}</p>

Preview:
{!! $post->body !!}


<a href="{{ url('/' . $post->slug) }}">Click here to view more!</a><br>
Thanks,<br>
{{ config('app.name') }}

@component('mail::button', ['url' => url('/unsubscribe?token=' . $subscription_token)])
Click here to unsubscribe
@endcomponent

@endcomponent
