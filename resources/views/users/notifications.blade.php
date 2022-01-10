
@extends('layouts.app')

@section('content')
<div class="my-3">
    <div class="card">
        <div class="card-header">
            Notifications
        </div>
        <div class="card-body">
            @foreach ($notifications as $notification)
                <ul class="list-group">
                    <li class="list-group-item">
                       {{-- {{ $notification->type }} --}}
                       @if($notification->type == 'App\Notifications\NewReplyAdded')
                       A new reply added to your discussion
                       <strong>
                        {{ $notification->data['discussion']['title'] }}
                       </strong>
                       <a href="{{ route('discussions.show', $notification->data['discussion']['slug']) }}" class="btn btn-sm btn-success float-right">View</a>
                       @endif

                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection


