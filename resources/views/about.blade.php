@php
    $projectPath = "project/"
@endphp

<x-layout :title="$title">

    @push('scripts')
        <script defer src="{{ asset('js/about.js') }}"></script>
    @endpush

    <header class="d-flex justify-content-center align-items-center text-light">

        <div class="container mx-350 z-1">
            <p class="text-light-light">Hi, my name is</p>
            <h2 class="fs-1">Wilhelmus Ole Jr.</h2>
            <p class="mt-3 text-light-light">
                I’m a Junior Full-Stack Web Developer dedicated to creating exceptional digital experiences. My skills also include web automation and quality assurance, as well as occasional web design.
            </p>
            <a href="#about-section" class="btn btn-primary mt-5">More about me <i class="fa-solid fa-arrow-down ms-2"></i></a>
        </div>

        <p class="animation-bg text-uppercase">Programming Programming Programming Programming Programming Programming Programming Programming Programming Programming Programming Programming Programming Programming </p>

    </header>

    <main class="bg-dark text-light">
        <div class="container">

            <x-about-card id="about-section">
                <x-header>About</x-header>

                <div class="text-light-light">
                    <div class="about-me d-flex flex-column flex-md-row align-items-center gap-5">
                        <div class="left flex-grow-1 me-md-3 mx-350">
                            <p>Halo! My name is Wilhelmus Ole Jr. I am a Junior Full-Stack Web Developer and Computer Science Student specializing in creating visually appealing, responsive, and user-friendly websites.</p>

                            <p class="mt-3">While I enjoy designing and developing both simple to complex websites, I also delved into web automation and bot development. This experience allowed me to create various bots tailored to my needs (SORRY!).</p>

                            <p class="mt-3">Currently, my main focus is to return to my roots in web development and continue building innovative and impactful digital experiences.</p>

                            <p class="mt-3">Here are a few technologies I’ve been working with recently:</p>

                            <ul class="flex-list d-flex flex-wrap pt-2">
                                <li>JavaScript (ES6+)</li>
                                <li>Python</li>
                                <li>Kotlin</li>
                                <li>Node.js</li>
                                <li>React</li>
                                <li>Laravel</li>
                                <li>Django</li>
                                <li>Databases</li>
                                <li>TypeScript</li>
                            </ul>

                        </div>
                        <div class="right">
                            <div class="about-me-image">
                                <img src="{{ asset('img/About-me/aboutme.jpg') }}" alt="About Me Image">
                                {{-- <img src="{{ asset('img/About-me/4.jpg') }}" alt="About Me Image"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </x-about-card>

            <x-about-card id="work-section">
                <x-header>Work Experience</x-header>

                <div class="mx-350 pt-5">
                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Tab 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">Tab 2</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-light-light p-2" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="my-3">
                                <h3 class="text-light">Lead Programmer</h3>
                                <p class="fs-6">May 2018 - Present</p>
                            </div>

                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere est expedita alias, fugiat asperiores molestiae repudiandae nesciunt ut quam deserunt.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade text-light-light p-2" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="my-3">
                                <h3 class="text-light">Lead Tite</h3>
                                <p class="fs-6">May 2018 - Present</p>
                            </div>

                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere est expedita alias, fugiat asperiores molestiae repudiandae nesciunt ut quam deserunt.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </x-about-card>

            <x-about-card id="project-section">
                <x-header>Projects</x-header>

                <div class="project-filter d-flex justify-content-end gap-3 my-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="develop" id="develop" checked>
                        <label class="form-check-label" for="develop" style="color: #bde4fe;">
                             Develop
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="design" id="design" checked>
                        <label class="form-check-label" for="design" style="color: #ffb9b1;">
                             Design
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="automate" id="automate" checked>
                        <label class="form-check-label" for="automate" style="color: #a9ffcd;">
                             Automation
                        </label>
                    </div>
                </div>

                <div class="projects d-flex justify-content-center flex-wrap gap-5">

                    @foreach ($projects as $project)
                    <div class="project {{ implode(' ', $project['type']) }}">
                        <div class="project-image">
                            <a href="{{ $projectPath.$project['link']['project'] }}" target="_blank"><img src="{{ asset('img/Projects/Portfolio/'. $project['file']['portfolio']) }}" alt=""></a>
                            <div class="project-info d-flex justify-content-end gap-2">
                                @foreach ($project['type'] as $type)
                                    @switch($type)
                                        @case('develop')
                                            <i class="fa-solid fa-code" style="color: #bde4fe;"></i>
                                            @break

                                        @case('design')
                                            <i class="fa-solid fa-pen-nib" style="color: #ffb9b1;"></i>
                                            @break

                                        @case('automate')
                                            <i class="fa-solid fa-robot" style="color: #a9ffcd;"></i>
                                            @break
                                    @endswitch
                                @endforeach
                            </div>
                        </div>
                        <p class="text-center text-capitalize my-3">{{ $project['title'] }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="my-5 text-center d-none">
                    <a href="#" class="btn btn-primary">See more</a>
                </div>

            </x-about-card>

        </div>
    </main>

</x-layout>
