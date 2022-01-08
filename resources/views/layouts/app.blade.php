<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('css')


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
           @auth
                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 my-3">
                                <a href="{{ route('discussions.create') }}" class="btn btn-info my-2" style="color:white; width:100%">Add Discussion</a>
                                <div class="card">
                                    <div class="card-header">
                                        Channels
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            @foreach ($channels as $channel)
                                                <li class="list-group-item">
                                                    {{ $channel->name }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                @yield('content')
                            </div>
                        </div>
                    </div>

                </main>
           @else
                <main>
                    @yield('content')
                </main>
           @endauth
        </div>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        @yield('js')
    </body>
</html>
