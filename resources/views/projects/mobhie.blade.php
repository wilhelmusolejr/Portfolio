<x-project.layout :title="$title" :projectPath="$projectPath" :project="$project">
    <div class="text-center fs-4 project-header-intro text-light">
        <h2>{{ $project['title'] }}</h2>
    </div>

    <div class="text-center mb-5">
        <img class="rounded border border-light-light" src="{{ asset($projectPath.'banner.png') }}" alt="MOBHIE Banner">
    </div>

    <x-project.section>
        <p>MOBHIE is a comprehensive movie box application that allows users to explore hundreds of movies across various categories, including Popular movies, trending movies, and more.</p>
        <br>
        <p>MOBHIE app provides a rich and engaging platform for movie enthusiasts to discover, search, and enjoy a wide array of films. Users can access detailed information about each movie, including ratings, descriptions, budgets, and more. With features such as search functionality and a randomizer for movie recommendations, MOBHIE ensures an enjoyable and seamless movie-browsing experience. The application is designed to be user-friendly and responsive across all devices, providing a consistent and smooth experience whether on a desktop, tablet, or mobile device.</p>
        <br>
        <p>Powered by the "The Movie Database" or <a href="https://www.themoviedb.org">TMDB</a> API, MOBHIE delivers accurate and up-to-date movie data, offering users an extensive database of films to explore. The integration of this API ensures that users have access to a vast collection of movies with comprehensive details and the latest information.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Features</x-project.header>
        <ul>
            <li>Movie Browsing: Explore hundreds of movies across various categories, including Popular and trending movies, ensuring there's always something interesting to watch.</li>
            <li>Detailed Movie Information: Access in-depth details about each movie, including ratings, descriptions, budgets, and more, to make informed viewing choices.</li>
            <li>Search Functionality: Quickly find specific movies using the search feature, making it easy to locate your favorite films or discover new ones.</li>
            <li>Randomizer Feature: Get personalized movie recommendations with the randomizer feature, perfect for when you can't decide what to watch.</li>
            <li>User-Friendly Interface: Designed with simplicity in mind, the app ensures an intuitive and straightforward user experience, making movie discovery enjoyable and accessible.</li>
            <li>Responsive Design: Enjoy a seamless and consistent experience across all devices, from desktops to tablets and mobile phones.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Have a Visit</x-project.header>
        <p>Please click <a href="#" target="_blank">here</a> or manually visit mobhie.com.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Technology Used</x-project.header>
        <p>This section provides an overview of the key technologies and frameworks utilized in the development of this app:</p>
        <ul>
            <li>Programming Languages: PHP, JavaScript.</li>
            <li>Integrated Development Environments: Visual Studio.</li>
            <li>Design and Prototyping Tool: Adobe XD and Photoshop.</li>
            <li>Other Technologies: Bootstrap, Laravel, Font Awesome, TMDB API.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Support or Contact</x-project.header>
        <p>If you encounter any issues or have questions about this app, please don't hesitate to reach out to me directly at <a href="mailto:wilhelmus.olejr@gmail.com">wilhelmus.olejr@gmail.com</a>. As the sole developer, I am dedicated to offering support and will do my best to respond to your queries and concerns promptly, aiming to provide solutions and enhance your app experience.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Contributing</x-project.header>
        <p>I welcome contributions of all kinds from the community. If you're interested in helping improve this app, please:</p>
        <ul>
            <li>Fork the repository and create your branch from <code>main</code>.</li>
            <li>Write clear code and add appropriate tests.</li>
            <li>Submit a pull request with comprehensive descriptions of changes.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Screenshots</x-project.header>
        <div class="d-flex flex-column gap-3 text-light">
            <div class="text-center my-3">
                <img src="{{ asset($projectPath.'screenshot1.PNG') }}" alt="Randomizer Feature">
                <p class="py-2">Randomizer Feature</p>
            </div>
            <div class="text-center my-3">
                <img src="{{ asset($projectPath.'screenshot2.PNG') }}" alt="List of Trending Movies">
                <p class="py-2">List of Trending Movies</p>
            </div>
            <div class="text-center my-3">
                <img src="{{ asset($projectPath.'screenshot3.PNG') }}" alt="Movie Preview">
                <p class="py-2">Movie Preview</p>
            </div>
        </div>
    </x-project.section>
</x-project.layout>
