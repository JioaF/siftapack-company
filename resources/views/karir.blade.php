<x-layouts.app>
    <section class="section hero">
        <header class="hero-title">
            <h1>Program: Management Trainee</h1>
            <p>Wujudkan mimpimu!</p>
        </header>
        <img class="hero-image"  src="{{ asset('images/hero.png') }}" alt="" >
    </section>
    <section class="section about">
        <img class="about-image" src="{{ asset('images/about.png') }}" alt="">
        <div class="about-content">
            <header class="hero-title">
                <h2>Tentang Program</h2>
                <p>Tak-tahu maka tak kenal</p>
            </header>
            <div class="tab-wrapper">
                <div class="tab-button">
                    <button class="tab-active">Mahasiswa</button>
                    <button>Profesional</button>
                </div>
                <p class="tab-content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. At ullam numquam aut nulla! Voluptatem, deleniti? Assumenda, sunt labore ipsa nobis voluptate praesentium illo dolor, enim sit excepturi voluptatum expedita maiores?
                    Quidem distinctio atque ex nostrum illum eius. Ducimus consectetur obcaecati, pariatur possimus eligendi voluptatem vitae eum error odio sequi aut velit debitis voluptas hic fuga ullam nobis a explicabo tenetur.
                    Similique cumque recusandae eos maiores molestiae placeat tenetur magni, officia libero assumenda perspiciatis quos nisi quas, soluta ducimus officiis saepe reprehenderit repellat. Nostrum autem distinctio nihil laborum deserunt necessitatibus ut.
                </p>
            </div>
        </div>
    </section>
    <section class="section process">
        <header class="hero-title">
            <h3>Proses Rekrutmen</h3>
            <p>Tahapan yang dilalui</p>
        </header>
        <section class="process-list">
            <div class="process-item">
                <div class="process-icon">
                    <span>1</span>
                    <img src="{{ asset('images/process1.svg') }}" alt="">
                </div>
                <p>Pendaftaran online</p>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <span>2</span>
                    <img src="{{ asset('images/process2.svg') }}" alt="">
                </div>
                <p>Review dokumen</p>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <span>3</span>
                    <img src="{{ asset('images/process3.svg') }}" alt="">
                </div>
                <p>Wawancara</p>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <span>4</span>
                    <img src="{{ asset('images/process4.svg') }}" alt="">
                </div>
                <p>Pemeriksaan medis</p>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <span>5</span>
                    <img src="{{ asset('images/process5.svg') }}" alt="">
                </div>
                <p>Penawaran kontrak</p>
            </div>
        </section>
    </section>
    <section class="section interest">
        <div class="overlay">
            <header class="hero-title">
                <h4>Tertarik?</h4>
                <p>Ayo bergabung!</p>
            </header>
            <div class="interest-button">
                <a href="#">Bergabung</a>
            </div>
        </div>
    </section>
</x-layouts.app>

