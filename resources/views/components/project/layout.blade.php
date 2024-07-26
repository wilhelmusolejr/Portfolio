@php
    $title = $title;
    $projectPath = $projectPath;
@endphp

<x-layout :title="$title">
    <main class="container text-light">

        <a href="{{ $project['link']['github'] }}" target="_blank" class="position-fixed fs-1 github-link text-light bg-dark"><i class="fa-brands fa-github"></i></a>

        <div class="mx-350 text-light-light">
            {{ $slot }}
        </div>
    </main>
</x-layout>
