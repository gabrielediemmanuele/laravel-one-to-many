@extends('layouts.app')


@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index')}}" class="btn btn-primary mt-3 mb-4"> 
            Back to projects
        </a>
        <h1 class="text-primary mb-3">Add new project</h1>
        {{--* Validator conditions to show at screen error message - go to controllers > ComicController > n°49  --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <h3>Correggi i seguenti errori: </h3>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{--! form con metodo post che si collega alla funzione store di comicsController --}}
        <form class="row g-3" action="{{ route('admin.projects.store') }}" method="POST" >
            @csrf 
            {{-- for visualize correct the form use @csrf protect from fake dates --}}
            
            <div class="col-4">
                <label for="author" class="form-label">Author</label>
                <input type="text" id="author" name="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('') }}">
                @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-4">
                <label for="date" class="form-label">Date</label>
                <input type="text" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('') }}">
                @error('date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-4">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('') }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-8">
                <label for="link" class="form-label">Link</label>
                <input type="text" id="link" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('') }}">
                @error('link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-12" class="form-label">
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('') }}" >{{ old('') }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-3">
                <button class="btn btn-primary">Add +</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
<script>
    const thumbPrev = document.getElementById('thumb-preview');
    const thumbInput = document.getElementById('thumb');

    thumbInput.addEventListener('change', function(){
        thumbPrev.src = this.value;
    })
</script>
@endsection