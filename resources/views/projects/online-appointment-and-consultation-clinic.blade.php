<x-project.layout :title="$title" :projectPath="$projectPath" :project="$project">
    <div class="text-center fs-4 project-header-intro text-light">
        <h2>{{ $project['title'] }}</h2>
    </div>

    <div class="text-center mb-5">
        <img class="rounded border border-light-light" src="{{ asset($projectPath.'banner.png') }}" alt="Consultation Clinic banner">
    </div>

    <x-project.section>
        <p>Online Appointment and Consultation Clinic is an innovative service provided by the Department of Nutrition and Dietetics at Western Mindanao State University. This platform is designed to offer convenient and accessible health nutrition consultations to individuals, particularly students of the university. It leverages advanced technology to deliver expert advice from experienced professors, ensuring high-quality and professional guidance.</p>
        <br>
        The clinic features a user-friendly online interface, a live chatting system for real-time communication, and an optional food monitoring system for comprehensive dietary management. This initiative aims to enhance the accessibility of nutritional support and promote healthy living among the university community and beyond.
    </x-project.section>

    <x-project.section>
        <x-project.header>Features</x-project.header>
        <ul>
            <li>Online Convenience: Provides a hassle-free platform for individuals seeking health nutrition consultations, enabling easy access from anywhere.</li>
            <li>Free Access for Students: Available at no cost for students of Western Mindanao State University, offering valuable support without financial burden.</li>
            <li>Expert Consultation: Consultations are conducted by professors from Western Mindanao State University, ensuring high-quality and knowledgeable guidance.</li>
            <li>Live Chatting System: Includes a real-time chat feature for instant communication between users and consultants, enhancing the consultation experience.</li>
            <li>Food Monitoring System: Optional food monitoring feature, if mandated by the RND, to assist in tracking and managing dietary habits.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Technology Used</x-project.header>
        <p>This section provides an overview of the key technologies and frameworks utilized in the development of the Philippine Currency Identifier app:</p>
        <ul>
            <li>Programming Languages: PHP.</li>
            <li>Integrated Development Environments: Android Studio and Visual Studio.</li>
            <li>Design and Prototyping Tool: Adobe XD and Photoshop.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Support or Contact</x-project.header>
        <p>If you encounter any issues or have questions about the "Philippine Currency Identifier" app, please don't hesitate to reach out to me directly at <a href="mailto:wilhelmus.olejr@gmail.com">wilhelmus.olejr@gmail.com</a>. As the sole developer, I am dedicated to offering support and will do my best to respond to your queries and concerns promptly, aiming to provide solutions and enhance your app experience.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Contributing</x-project.header>
        <p>We welcome contributions of all kinds from the community. If you're interested in helping improve the Philippine Currency Identifier, please:</p>
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
                <img src="{{ asset($projectPath.'screenshot1.png') }}" alt="Screenshot 1">
            </div>
            <div class="text-center my-3">
                <img src="{{ asset($projectPath.'screenshot2.png') }}" alt="Screenshot 2">
            </div>
        </div>
    </x-project.section>
</x-project.layout>



