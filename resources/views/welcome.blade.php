<x-layout>

    <main class="bg-dark text-light">
        <div class="container">
            <div class="text-center fs-4 header-intro">
                <p class="mx-350">A passionate enthusiast of automation, design, and web development. With a natural curiosity for technology and a flair for innovation</p>
            </div>

            <div class="work-items d-flex justify-content-between flex-wrap">

                @for ($i = 1; $i <= 5; $i++)
                <div class="work-item card bg-dark text-light">
                    <div class="work-item-image">
                        <img class="" src="{{ asset('img/'.$i.'.webp') }}" alt="Card image cap">
                    </div>
                    <div class="card-body text-capitalize text-center">
                        <h2 class="fs-4 pt-3">Pennywise PH</h2>
                        <p class="text-light-light fs-6">Money App wTracker</p>
                    </div>
                </div>
                @endfor

                {{-- <a href="#" class="btn btn-primary mb-5">See more</a> --}}
            </div>

            <div class="quick-about-me mx-350 fs-5 text-light-light">
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium unde saepe dicta ad? Tempora expedita ipsa, dolorum repellendus repudiandae fugit! Quas eaque sunt, blanditiis iste laboriosam consequuntur natus cupiditate a enim, accusantium officia minus quaerat aperiam odit reprehenderit? Cupiditate, consectetur?</p>
                <a href="{{ route('about') }}" class="text-light text-decoration-none mx-350 border-bottom border-light">More about me</a>
            </div>

        </div>
    </main>

</x-layout>
