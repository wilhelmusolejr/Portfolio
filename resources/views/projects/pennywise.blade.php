<x-project.layout :title="$title" :projectPath="$projectPath">
    <div class="text-center fs-4 project-header-intro text-light">
        <h2>{{ $project['title'] }}</h2>
    </div>

    <div class="text-center mb-5">
        <img class="rounded" src="{{ asset($projectPath.'banner.png') }}" alt="PennyWISE PH Banner">
    </div>

    <x-project.section>
        <p>PennyWISE is a user-friendly mobile money tracker designed to help individuals manage their finances effectively.</p>
        <br>
        <p>PennyWISE app is a comprehensive money tracker designed to help users manage their financial transactions effectively. It enables users to monitor their money inflow and outflow seamlessly, providing a clear computation of their financial activities. With PennyWISE, users can input detailed information for each transaction, including the transaction name, description, amount, and date. This application simplifies personal finance management by offering an intuitive interface for tracking and analyzing money transactions, empowering users to make informed financial decisions and maintain control over their finances.</p>
        <br>
        <p>PennyWISE features an integrated account system, allowing users to access their financial data securely over the internet from anywhere and at any time. This ensures that users can manage their finances conveniently, whether they are at home, at work, or on the go. With real-time updates and synchronization across devices, PennyWISE provides a reliable platform for users to stay organized and informed about their financial health.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Features</x-project.header>
        <ul>
            <li>Transaction Tracking: Easily track and manage your money transactions, recording both income and expenses for a complete financial overview.</li>
            <li>Detailed Entry Fields: Input detailed information for each transaction, such as the transaction name, description, amount, and date, ensuring accurate and organized records.</li>
            <li>Inflow and Outflow Management: Monitor your financial inflows and outflows with ease, helping you understand and manage your cash flow effectively.</li>
            <li>Real-Time Computation: Instantly calculate the total balance based on recorded transactions, providing a clear picture of your financial status at any given time.</li>
            <li>Cross-Device Access: Access your financial data securely over the internet from anywhere and at any time, ensuring seamless management of your finances across devices.</li>
            <li>User-Friendly Interface: Designed with simplicity in mind, the app ensures an intuitive and straightforward user experience, making financial management accessible to everyone.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Have a Visit</x-project.header>
        <p>Please click <a href="#" target="_blank">here</a> or manually visit bit.ly/ph-identifier.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Technology Used</x-project.header>
        <p>This section provides an overview of the key technologies and frameworks utilized in the development of the PennyWISE PH app:</p>
        <ul>
            <li>Programming Languages: PHP, JavaScript.</li>
            <li>Integrated Development Environments: Visual Studio.</li>
            <li>Design and Prototyping Tool: Adobe XD and Photoshop.</li>
            <li>Other Technologies: Bootstrap, Laravel, Font Awesome.</li>
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
                <img src="{{ asset($projectPath.'screenshot1.png') }}" alt="PennyWISE PH Screenshot 1">
            </div>
            <div class="text-center my-3">
                <img src="{{ asset($projectPath.'screenshot2.png') }}" alt="PennyWISE PH Screenshot 2">
            </div>
        </div>
    </x-project.section>

</x-project.layout>
