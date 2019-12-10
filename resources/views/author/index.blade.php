@extends('base')

@section('content')
    <table class="table">
        @foreach($authors as $author)
            <tr>
                <td>{{$author->getId()}}</td>
                <td>{{$author->getName()}}</td>
            </tr>
        @endforeach
    </table>
@endsection
