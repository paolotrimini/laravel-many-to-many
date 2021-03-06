    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Employees:</h1>
                        <ul>
                            @foreach($employees as $employee)
                                <li>
                                   {{ $employee -> firstname }}
                                   {{ $employee -> lastname }}
                                   -->
                                   {{ $employee -> location -> state }}
                                   ({{ $employee -> location -> street }})

                                    <p>
                                        Task
                                        ({{ $employee -> tasks -> count() }}):</p>
                                    <ul>
                                        @foreach($employee -> tasks as $task)
                                            <li>
                                                {{ $task -> name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>
        </div>
    @endsection
