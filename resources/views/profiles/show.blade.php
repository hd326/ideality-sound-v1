@extends('layouts.frontLayout.front_design')

@section('content')
<div id="title">
    <h1>Profile</h1>
</div>
<section id="main">
    <div id="main-content-holder">
        <main id="main-content">
            <form autocomplete="off" method="POST" action="/edit-profile/{{ $user->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <p>Avatar</p>
                <p>
                    @if ($user->avatar() == '')
                    <a class="avatar">
                        <p class="avatar" style="background-color: {{ $user->color }}">{{ substr($user->name, 0, 1) }}
                        </p>
                    </a>
                    @else
                    <a class="avatar">
                        <p class="personal-avatar"><img style="width: 75px; height: 75px; border-radius: 50px;"
                                src="/storage/{{ $user->avatar() }}" alt="User avatar"></p>
                    </a>
                    @endif
                    <input type="file" name="avatar">
                </p>
                <button type="submit" class="add-avatar">Submit</button>
            </form>
        </main>
        <aside id="side-content">
            @include('layouts.frontLayout.front_sidebar')
        </aside>
    </div>
</section>
@endsection
