@extends('layouts.app')

@section('title', 'Miembros')

@section('content')
<h1 class="text-3xl font-bold text-slate-900 mb-6">Miembros</h1>

<table class="w-full bg-white shadow-sm rounded">
    <thead class="bg-slate-900 text-white">
        <tr>
            <th class="px-4 py-2 text-left">Nombre</th>
            <th class="px-4 py-2 text-left">Membresía</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <tr class="border-b border-slate-200">
            <td class="px-4 py-2">{{ $member->user->name }}</td>
            <td class="px-4 py-2">
                <x-membership-badge :type="$member->type" />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
