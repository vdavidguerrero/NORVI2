@extends('layout')

@section('content')

    <div>

      <br><br>  <h1>Projects</h1><br>

        @foreach( $ciudades as $ciudad)

            <li>
                <a href="{{route('ciudad.show', $ciudad->id)}}">
                    {{$ciudad->ciudad}}
                </a>
            </li>


        @endforeach


    </div>

@endsection
