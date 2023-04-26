@extends('layouts.app')

@section('content')
    <h1>Modifica : {{$portfolio->name}}</h1>
    <div class="container">
        <form action="{{route('portfolios.update', $portfolio)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome progetto</label>
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" value="{{ old('name', $portfolio->name)}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Customer</label>
                <input type="text" name="customer" class="form-control @error('customer') is-invalid @enderror" id="customer" value="{{ old('customer', $portfolio->customer)}}">
                @error('customer')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description', $portfolio->description)}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="url" value="{{ old('url', $portfolio->url)}}">
                @error('url')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva modifica</button>
        </form>
    </div>

@endsection