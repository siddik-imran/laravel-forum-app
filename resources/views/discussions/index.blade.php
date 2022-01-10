@extends('layouts.app')

@section('content')
<div class="my-3">
    @foreach ($discussions as $discussion)
    <div class="card mb-5">
        @include('partials.discussion-header')
        <div class="card-body">
            <div class="text-center">
                <strong>{{ $discussion->title }}</strong>
            </div>
        </div>
    </div>
    @endforeach
    {{ $discussions->links() }}
</div>
@endsection
