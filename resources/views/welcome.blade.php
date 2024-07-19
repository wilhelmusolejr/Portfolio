<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script defer src="https://kit.fontawesome.com/6b2bcc8033.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark text-light py-md-5 py-4 sticky-top">
        <div class="container">
            <a href="#" class="logo text-light text-decoration-none text-capitalize fs-4">Wilhelmus Ole</a>
            <ul class="d-none">
                <li><a href="#">About</a></li>
                <li><a href="#">Experience</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <div class="">
                <a href="#" class="text-light text-decoration-none fs-4">About</a>
            </div>
            <div class="d-flex align-items-center gap-3 d-none">
                <a href="" class="btn btn-primary">Resume</a>
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>

    <main class="bg-dark text-light">
        <div class="container">
            {{-- <h1 class="text-center pb-5">A passionate enthusiast of automation, design, and web development. With a natural curiosity for technology and a flair for innovation</h1> --}}
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

            <div class="quick-about-me mx-350 fs-5">
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium unde saepe dicta ad? Tempora expedita ipsa, dolorum repellendus repudiandae fugit! Quas eaque sunt, blanditiis iste laboriosam consequuntur natus cupiditate a enim, accusantium officia minus quaerat aperiam odit reprehenderit? Cupiditate, consectetur?</p>
                <a href="#" class="text-light mx-350">More about me</a>
            </div>

        </div>
    </main>

    <footer class="bg-light-dark py-5 text-center text-light fs-6">
        <p>Designed and Built by Wilhelmus Ole Jr.</p>
        <p>Inspired to dejan.works</p>
    </footer>
</body>
</html>
