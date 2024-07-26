@php
    $title = $title;
    $projectPath = $projectPath;
@endphp

<x-layout :title="$title">
    <main class="text-light">
        <div class="mx-350 text-light-light">
            {{ $slot }}
        </div>
    </main>
</x-layout>
