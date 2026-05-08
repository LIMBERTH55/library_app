@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
<h1 class="text-3xl font-bold text-slate-900 mb-6">Categorías</h1>

@if ($categories->isEmpty())
    <p class="text-slate-500 italic">Aún no hay categorías registradas.</p>
@else
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($categories as $category)
        <div class="rounded shadow-md p-6 text-center"
             style="background-color: {{ $category->color ?? '#e2e8f0' }}">
            <h2 class="text-xl font-bold text-white">{{ $category->name }}</h2>
            <p class="text-white mt-2">{{ $category->books_count }} libros</p>
            <a href="{{ route('categories.show', $category) }}"
               class="mt-4 inline-block bg-slate-900 text-white px-3 py-1 rounded">
               Ver libros
            </a>
        </div>
    @endforeach
</div>
<div class="mt-8">
    {{ $categories->links() }}
</div>
@endif
@endsection
