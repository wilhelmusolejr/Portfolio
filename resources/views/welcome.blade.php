<x-layout :title="$title">

    <main class="bg-dark text-light">
        <div class="container">
            <div class="text-center fs-4 header-intro">
                <p class="mx-350">A passionate enthusiast of automation, design, and web development. With a natural curiosity for technology and a flair for innovation</p>
            </div>

            <div class="work-items d-flex justify-content-between flex-wrap">

                @foreach ($projects as $index => $project)
                    @if ($index < 5) {{-- Limit to 5 iterations --}}
                    <div class="work-item card bg-dark text-light">
                        <div class="work-item-image">
                            <a href="{{ $project['link'] }}" target="_blank"><img class="" src="{{ asset('img/Projects/Intro/' . $project['file']['intro']) }}" alt="{{ $project['title'] }} image"></a>
                        </div>
                        <div class="card-body text-capitalize text-center">
                            <h2 class="fs-4 pt-3">{{ $project['title'] }}</h2>
                            <p class="text-light-light text-capitalize fs-6">{{ $project['description'] }}</p>
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>

            <div class="quick-about-me mx-350 fs-5 text-light-light">
                <p class="mb-3">I’m Wilhelmus Ole Jr., a Junior Full-Stack Web Developer and Computer Science student. I specialize in creating visually appealing, responsive, and user-friendly websites. While I have experience in web automation and bot development, I’m currently focused on building innovative and impactful digital experiences in web development.</p>
                <a href="{{ route('about') }}" class="text-light text-decoration-none mx-350 border-light">More about me</a>
            </div>

        </div>
    </main>

</x-layout>
