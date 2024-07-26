<x-project.layout :title="$title" :projectPath="$projectPath" :project="$project">
    <div class="text-center fs-4 project-header-intro text-light">
        <h2>{{ $project['title'] }}</h2>
    </div>

    <div class="text-center mb-5">
        <img class="rounded border border-light-light" src="{{ asset($projectPath.'banner.jpg') }}" alt="">
    </div>

    <x-project.section>
        <p>Philippine Currency Identifier is a thesis-developed app that helps visually impaired people in the Philippines identify currency denominations using a convolutional neural network. It offers vocal denomination recognition and a user-friendly interface for easy accessibility, enabling independent financial transactions through a quick smartphone scan. This app represents a significant advancement in assistive technology and inclusivity.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Features</x-project.header>
        <ul>
            <li>Denomination Recognition: Instantly identifies and vocalizes the denomination of Philippine currency, aiding users in recognizing various banknotes and coins.</li>
            <li>Accessibility Optimized: Specifically designed to enhance usability for visually impaired individuals, ensuring that navigation and interaction are intuitive and straightforward.</li>
            <li>Real-Time Identification: Employs advanced convolutional neural network technology to deliver swift and precise currency identification, facilitating immediate feedback.</li>
            <li>Money Counter Tool: Includes an integrated money counter feature that assists users in calculating the total value of a batch of currency, simplifying financial transactions and money management.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Requirements</x-project.header>
        <ul>
            <li>Mobile Device: A compatible mobile device with a functional camera and audio output capabilities</li>
            <li>Storage Memory: A minimum of 100mb of available storage.</li>
            <li>Android Version: Supported by Android version 7 and up to avail all the application features.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Download the Application</x-project.header>
        <p>Easily download the "Philippine Currency Identifier" app by scanning a QR code. Simply point your device's camera at the QR code, and you'll be directed to the download page.</p>
        <div class="text-center my-3">
            <img src="{{ asset($projectPath.'app_qr_3.png') }}" width="40%" alt="QR Code">
        </div>
        <p>If you encounter any issues with the QR code, please click <a href="https://bit.ly/ph-identifier" target="_blank">here</a> or manually visit bit.ly/ph-identifier to download the app directly.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Technology Used</x-project.header>
        <p>This section provides an overview of the key technologies and frameworks utilized in the development of the Philippine Currency Identifier app:</p>
        <ul>
            <li>Programming Languages: Kotlin and Python.</li>
            <li>Integrated Development Environments: Android Studio and Visual Studio.</li>
            <li>Machine Learning Frameworks: TensorFlow and Google Colab.</li>
            <li>Annotation and Data Preparation Tools: LabelImg, Video to Image and Label Counter tools.</li>
            <li>Design and Prototyping Tool: Adobe XD and Photoshop.</li>
            <li>Application Programming Interfaces (APIs): Google Text-To-Speech API.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Support or Contact</x-project.header>
        <p>If you encounter any issues or have questions about the "Philippine Currency Identifier" app, please don't hesitate to reach out to me directly at <a href="mailto:wilhelmus.olejr@gmail.com">wilhelmus.olejr@gmail.com</a>. As the sole developer, I am dedicated to offering support and will do my best to respond to your queries and concerns promptly, aiming to provide solutions and enhance your app experience.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Acknowledgments</x-project.header>
        <ul>
            <li>Thanks to Sir Odon Maravillas for being an invaluable thesis adviser, offering steadfast support, guidance, and encouragement throughout the thesis development process.</li>
            <li>Thanks to Sir Salimar Tahil, Sir Marvic Lines, Sir Gadmar Belamide, and Sir Theo Sanson for their critical observations and passionate guidance that significantly enhanced the quality of my thesis.</li>
            <li>Thanks to Sir Jaydee Ballaho, Sir Ram, Sir Edwin Arip, and Ma’am Marjorie Rojas for their insightful feedback and expertise which were instrumental in refining the application and its functionality.</li>
            <li>Thanks to the panelists, Sir Ceed Lorenzo and Ma’am Mara Marie Liao, for their constructive feedback during the defense, which was crucial in improving the thesis's focus and quality.</li>
            <li>Thanks to my friends and colleagues for their constant support, motivation, and camaraderie, which were essential during challenging times throughout the thesis process.</li>
            <li>Thanks to God for providing unwavering guidance and strength, inspiring perseverance and resilience throughout the journey of this academic endeavor.</li>
        </ul>
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
        <x-project.header>Changelog</x-project.header>
        <ul>
            <li><strong class="text-light">V1.0.0</strong>
                <p>Initial release.</p>
                <p>Scanning errors on Android 10 and below.</p>
            </li>
            <li><strong class="text-light">V2.0.0</strong>
                <p>Reduced app file size by removing extra ML models.</p>
                <p>Addressed the high file size issue reported by users.</p>
            </li>
            <li><strong class="text-light">V3.0.0</strong>
                <p>Current stable release.</p>
                <p>Resolved Android 10 and below scanning issue.</p>
                <p>App working effectively across all supported versions.</p>
            </li>
        </ul>
    </x-project.section>
</x-project.layout>
