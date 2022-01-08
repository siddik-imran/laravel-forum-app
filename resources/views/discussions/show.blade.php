@extends('layouts.app')

@section('content')
<div class="my-3">

    <div class="">
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
            </div>
        </div>
    </div>
</div>
@endsection