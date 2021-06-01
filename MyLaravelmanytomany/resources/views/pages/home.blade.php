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
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>
        </div>
    @endsection
