<x-layout>

    <header class="d-flex justify-content-center align-items-center bg-dark text-light">

        <div class="container mx-350 z-1">
            <p class="text-light-light">Hi, my name is</p>
            <h2 class="fs-1">Wilhelmus Ole Jr.</h2>
            <p class="mt-3 text-light-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit odio alias eius laboriosam maxime mollitia voluptate eum, perferendis sint aliquam aliquid omnis delectus animi quisquam consequatur, labore eligendi perspiciatis atque!</p>
            <a href="#" class="btn btn-primary mt-5">Resume</a>
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
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. laborum, ionem assumenda optio quod voluptatem.</p>
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, beatae.</p>
                            <p class="mt-3">Here are few technologies I've been working with recently:</p>
                        </div>
                        <div class="right">
                            <div class="about-me-image">
                                <img src="{{ asset('img/aboutme.jpg') }}" alt="About Me Image">
                            </div>
                        </div>
                    </div>
                </div>
            </x-about-card>

            <x-about-card id="work-section">
                <x-header>Work Experience</x-header>

                <div class="mx-350 pt-4">
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

                <div class="projects d-flex justify-content-center flex-wrap gap-5">
                    <div class="project">
                        <div class="project-image">
                            <img src="{{ asset('img/1.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-image">
                            <img src="{{ asset('img/1.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-image">
                            <img src="{{ asset('img/1.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-image">
                            <img src="{{ asset('img/1.webp') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="my-5 text-center">
                    <a href="#" class="btn btn-primary">See more</a>
                </div>

            </x-about-card>

        </div>
    </main>

</x-layout>
