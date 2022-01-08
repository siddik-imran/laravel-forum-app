{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    @extends('layouts.app')

    @section('content')
    <div class="my-3 ">
        <div class="card ">
            <div class="card-header">
                Add Discussion
            </div>
            <div class="card-body">
                <form action="{{ route('discussions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input id="x" type="hidden" name="content">
                        <trix-editor input="x"></trix-editor>
                    </div>
                    <div class="form-group">
                        <label for="channel">Channel</label>
                       <select name="channel" id="channel" class="form-control">
                           @foreach ($channels as $channel)
                                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                           @endforeach
                       </select>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" >Create Discussion</button>
                </form>
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

    {{-- </x-app-layout> --}}
