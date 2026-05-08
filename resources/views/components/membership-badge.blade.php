@props(['type'])

@switch($type)
    @case('standard')
        <span class="px-2 py-1 rounded bg-slate-200 text-slate-800 text-sm">
            Estándar
        </span>
        @break

    @case('premium')
        <span class="px-2 py-1 rounded bg-amber-200 text-amber-900 text-sm flex items-center gap-1">
            ★ Premium
        </span>
        @break

    @case('student')
        <span class="px-2 py-1 rounded bg-blue-100 text-blue-800 text-sm">
            Estudiante
        </span>
        @break
@endswitch
