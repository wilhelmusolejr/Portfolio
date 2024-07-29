<x-project.layout :title="$title" :projectPath="$projectPath" :project="$project">
    <div class="text-center fs-4 project-header-intro text-light">
        <h2>{{ $project['title'] }}</h2>
    </div>

    <div class="text-center mb-5">
        <img class="rounded" src="{{ asset($projectPath.'banner.jpg') }}" alt="{{ $project['title'] }} Banner">
    </div>

    <x-project.section>
        <p>Depression is a mood disorder that causes a persistent feeling of sadness and loss of interest. It is also called as major depressive disorder or clinical depression, it affects how you feel, think and behave, and can lead to a variety of emotional and physical problems.</p>
        <br>
        <p>Depression Anxiety Stress Scales Responses is a dataset that was collected online from the various countries during the year of 2017 to 2019 by Openpsychometrics.org on <a target="_blank" href="https://www.psy.unsw.edu.au/dass">Psychology Foundation of Australia | DASS</a> in effort to educate the public about psychology. This dataset contains some background information of the respondents such as their race, education, religion, gender, etc. Furthermore, this dataset includes their responses from the 42 related negative emotional questions which is answerable from the scale of 1 to 4, and the 10-item personality test which is answerable from the scale of 1 to 7. Lastly, this dataset also contains the technical information of the respondent such as, what device they used while taking the test, where they found the test, etc.</p>
        <br>
        <p>To check the dataset, <a href="https://www.kaggle.com/datasets/lucasgreenwell/depression-anxiety-stress-scales-responses">click me</a>.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Machine Learning Project Abouts</x-project.header>
        <p>This machine learning project will create a predictive model using an algorithm that has the highest possible decent accuracy from the various machine learning algorithms. The said model will predict the level of depression of a respondent based on their responses from the 14 depressive emotional questions, 10-item personality test, and their basic information. Lastly, this project will also extract insights and interpret it from the given dataset.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Features</x-project.header>
        <ul>
            <li>Predicts the level of depression based on responses to the questionnaire and basic information.</li>
            <li>Provides insights and interpretation from the dataset.</li>
            <li>Aids in tracking and understanding personal depression levels.</li>
        </ul>
    </x-project.section>

    <x-project.section>
        <x-project.header>Have a Visit</x-project.header>
        <p>Please click <a href="#" target="_blank">here</a> or manually visit UNAVAILABLE.</p>
    </x-project.section>

    <x-project.section>
        <x-project.header>Technology Used</x-project.header>
        <p>This section provides an overview of the key technologies and frameworks utilized in the development of the PennyWISE PH app:</p>
        <ul>
            <li>Programming Languages: Python.</li>
            <li>Libraries: Flask, Scikit-Learn, Pandas, NumPy, Seaborn, Matplotlib.</li>
            <li>Integrated Development Environments: Visual Studio, Jupyter Notebook.</li>
            <li>Design and Prototyping Tool: Adobe XD and Photoshop.</li>
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
                <img src="{{ asset($projectPath.'screenshot1.png') }}" alt="UNAVAILABLE">
            </div>
            <div class="text-center my-3">
                <img src="{{ asset($projectPath.'screenshot2.png') }}" alt="UNAVAILABLE">
            </div>
        </div>
    </x-project.section>

</x-project.layout>
