@extends('layouts.app')

@section('title', $category->name)

@section('content')
<a href="{{ route('categories.index') }}"
   class="text-sm text-slate-600 hover:text-slate-900 mb-4 inline-block">
   ← Volver a categorías
</a>

<h1 class="text-3xl font-bold text-slate-900 mb-6">{{ $category->name }}</h1>

@if ($category->books->isEmpty())
    <p class="text-slate-500 italic">No hay libros en esta categoría.</p>
@else
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($category->books as $book)
        <x-book-card :book="$book" />
    @endforeach
</div>
@endif
@endsection
