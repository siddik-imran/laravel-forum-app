<div class="card-header">
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-center align-items-center">
            <div>
                <img src="{{ Gravatar::src($discussion->author->email) }}" width="40px" height="40px" style="border-radius: 50%">

            </div>
            <div class="ml-3">
                <strong >{{ $discussion->author->name }}</strong>
            </div>

        </div>
        <div>
            <a href="{{ route('discussions.show', $discussion->slug) }}" class="btn btn-sm btn-success">View</a>
        </div>
    </div>
  </div>
