@props(['projectPath'])

@php
    $project_path = $projectPath;
@endphp

<x-layout>
    <main class="text-light">
        <div class="mx-350 text-light-light">
            {{ $slot }}
        </div>
    </main>
</x-layout>
