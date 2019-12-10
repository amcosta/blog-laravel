@extends('base')

@section('content')
    <form action="{{route('author-store')}}" method="post">
        @csrf

        <div class="row">
            <div class="col-12 form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" required class="form-control" />
                @error('name')
                    <span class="danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
@endsection
