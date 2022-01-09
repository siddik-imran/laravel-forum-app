@extends('layouts.app')

@section('content')
<div class="my-3">

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="card mb-5">

                @include('partials.discussion-header')

                <div class="card-body">
                    <div class="text-center">
                        <strong>{{ $discussion->title }}</strong>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <p> {!! $discussion->content !!}</p>
                </div>
            </div>

            @foreach ($discussion->replies()->paginate(3) as $reply)
                <div class="card my-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <img src="{{ Gravatar::src($reply->owner->email) }}" alt="" style="width: 40px; height:40px; border-radius:50%">
                                </div>
                                <div class="ml-3">
                                    <strong >{{ $reply->owner->name }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! $reply->content !!}
                    </div>
                </div>
            @endforeach
            {{ $discussion->replies()->paginate(3)->links() }}

            <div class="card my-5">
                <div class="card-header">
                    <strong>Add a Reply</strong>
                </div>
                <div class="card-body">
                   @auth
                    <form action="{{ route('replies.store', $discussion->slug) }}" method="POST">
                    @csrf
                    <input id="x" type="hidden" name="content">
                    <trix-editor input="x"></trix-editor>
                    <button type="submit" class="btn btn-success btn-sm">Add Reply</button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-info btn-info">Sign in to add a reply</a>
                   @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
@endsection
