@extends('layouts.app')

@section('content')
    @php
        $navItems = [
            'about' => 'About',
            'skills' => 'Skills',
            'experience' => 'Experience',
            'education' => 'Education',
            'projects' => 'Projects',
            'certificates' => 'Certificates',
            'contact' => 'Contact',
        ];
    @endphp

    <div class="relative overflow-hidden">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-[32rem] bg-[radial-gradient(circle_at_top,_rgba(20,184,166,0.18),_transparent_55%),radial-gradient(circle_at_right,_rgba(245,158,11,0.14),_transparent_32%)] dark:bg-[radial-gradient(circle_at_top,_rgba(45,212,191,0.12),_transparent_55%),radial-gradient(circle_at_right,_rgba(251,191,36,0.10),_transparent_32%)]"></div>

        <header class="sticky top-0 z-50 border-b border-stone-200/80 bg-white/85 backdrop-blur-xl dark:border-stone-800 dark:bg-stone-950/80">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4 lg:px-8">
                <a href="#home" class="text-sm font-semibold tracking-[0.28em] text-stone-500 uppercase dark:text-stone-400">Andika</a>
                <nav class="hidden items-center gap-6 md:flex">
                    @foreach ($navItems as $id => $label)
                        <a href="#{{ $id }}" class="nav-link">{{ $label }}</a>
                    @endforeach
                </nav>
                <div class="flex items-center gap-3">
                    <button type="button" id="theme-toggle" class="icon-button" aria-label="Toggle dark mode">
                        <span class="theme-icon theme-icon-light">☀</span>
                        <span class="theme-icon theme-icon-dark">☾</span>
                    </button>
                    <button type="button" id="menu-toggle" class="icon-button md:hidden" aria-label="Open menu">
                        <span class="block h-0.5 w-5 bg-current"></span>
                        <span class="mt-1 block h-0.5 w-5 bg-current"></span>
                        <span class="mt-1 block h-0.5 w-5 bg-current"></span>
                    </button>
                </div>
            </div>
            <nav id="mobile-menu" class="hidden border-t border-stone-200 px-5 py-4 md:hidden dark:border-stone-800">
                <div class="flex flex-col gap-3">
                    @foreach ($navItems as $id => $label)
                        <a href="#{{ $id }}" class="nav-link mobile-nav-link">{{ $label }}</a>
                    @endforeach
                </div>
            </nav>
        </header>

        <main>
            <section id="home" class="mx-auto grid max-w-6xl gap-14 px-5 py-20 lg:grid-cols-[1.2fr_0.8fr] lg:px-8 lg:py-28">
                <div class="space-y-8 reveal">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/andi.jpeg') }}" alt="Andika" class="h-16 w-16 rounded-full object-cover shadow-sm ring-2 ring-teal-500/20">
                        <span class="inline-flex items-center rounded-full border border-teal-500/20 bg-teal-500/10 px-4 py-1 text-sm font-medium text-teal-700 dark:text-teal-300">
                            {{ $portfolio['headline'] }}
                        </span>
                    </div>
                    <div class="space-y-5">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-stone-500 dark:text-stone-400">Personal Portfolio</p>
                        <h1 class="max-w-3xl text-4xl font-semibold tracking-tight text-balance sm:text-5xl lg:text-6xl">
                            {{ $portfolio['name'] }}
                        </h1>
                        <p class="max-w-2xl text-lg leading-8 text-stone-600 dark:text-stone-300">
                            {{ $portfolio['summary'] }}
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row">
                        <a href="{{ route('portfolio.cv.download') }}" class="primary-button">Download CV</a>
                        <a href="#contact" class="secondary-button">Contact Me</a>
                    </div>
                    <div class="flex flex-wrap items-center gap-4 text-sm text-stone-600 dark:text-stone-400">
                        <a href="mailto:{{ $portfolio['contact']['email'] }}" class="interactive-link">{{ $portfolio['contact']['email'] }}</a>
                        <a href="https://wa.me/6285868921525" target="_blank" rel="noreferrer" class="interactive-link">{{ $portfolio['contact']['phone'] }}</a>
                    </div>
                </div>

                <div class="reveal lg:justify-self-end">
                    <div class="relative mx-auto max-w-md rounded-[2rem] border border-white/50 bg-white/70 p-6 shadow-[0_30px_80px_-35px_rgba(15,23,42,0.35)] backdrop-blur dark:border-stone-800 dark:bg-stone-900/75">
                        <div class="absolute -right-5 -top-5 rounded-2xl border border-amber-400/30 bg-amber-300/80 px-4 py-2 text-sm font-medium text-amber-950 shadow-lg shadow-amber-500/20">
                            Available for work
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex items-center gap-5">
                                <img src="{{ asset('images/jaz.png') }}" alt="Andika" class="h-24 w-24 rounded-3xl object-cover shadow-lg shadow-stone-500/20 dark:shadow-stone-900/50">
                                <div>
                                    <p class="text-2xl font-semibold">{{ $portfolio['name'] }}</p>
                                    <p class="mt-1 text-stone-600 dark:text-stone-300">{{ $portfolio['headline'] }}</p>
                                </div>
                            </div>
                            <dl class="grid gap-4 sm:grid-cols-2">
                                <div class="info-card">
                                    <dt>Fokus</dt>
                                    <dd>Maintenance & Troubleshooting</dd>
                                </div>
                                <div class="info-card">
                                    <dt>Spesialisasi</dt>
                                    <dd>HD785-7</dd>
                                </div>
                                <div class="info-card sm:col-span-2">
                                    <dt>Lokasi Pengalaman</dt>
                                    <dd>Jakarta, Tangerang, Kalimantan</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about" class="section-shell">
                <div class="section-heading reveal">
                    <p class="eyebrow">About</p>
                    <h2>Tampilan profesional yang tetap personal.</h2>
                    <p>Ringkasan profil diambil langsung dari CV dan disusun agar mudah dibaca untuk kebutuhan personal branding.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr]">
                    <div class="reveal rounded-[2rem] border border-stone-200 bg-white p-8 shadow-sm dark:border-stone-800 dark:bg-stone-900">
                        <div class="h-full min-h-72 overflow-hidden rounded-[1.5rem] border border-stone-200 shadow-sm dark:border-stone-800">
                            <img src="{{ asset('images/jaz.png') }}" alt="Andika Aji Pratama Putra" class="h-full w-full object-cover object-top">
                        </div>
                    </div>
                    <div class="grid gap-5">
                        @foreach ($portfolio['about'] as $paragraph)
                            <article class="reveal rounded-[2rem] border border-stone-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                                <p class="leading-8 text-stone-600 dark:text-stone-300">{{ $paragraph }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="skills" class="section-shell">
                <div class="section-heading reveal">
                    <p class="eyebrow">Skills</p>
                    <h2>Kemampuan inti yang relevan di lapangan.</h2>
                    <p>Skill dibagi per kategori untuk menonjolkan kompetensi teknis, operasional, dan interpersonal.</p>
                </div>
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                    @foreach ($portfolio['skills'] as $category => $items)
                        <article class="reveal rounded-[2rem] border border-stone-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                            <h3 class="text-lg font-semibold">{{ $category }}</h3>
                            <div class="mt-5 flex flex-wrap gap-3">
                                @foreach ($items as $item)
                                    <span class="skill-badge">{{ $item }}</span>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="experience" class="section-shell">
                <div class="section-heading reveal">
                    <p class="eyebrow">Experience</p>
                    <h2>Perjalanan kerja dari manufaktur ke pertambangan.</h2>
                    <p>Timeline dibuat ringkas namun tetap menampilkan tanggung jawab utama dari setiap pengalaman.</p>
                </div>
                <div class="relative space-y-6 before:absolute before:left-5 before:top-4 before:h-[calc(100%-2rem)] before:w-px before:bg-stone-300 dark:before:bg-stone-700">
                    @foreach ($portfolio['experiences'] as $experience)
                        <article class="reveal relative ml-0 rounded-[2rem] border border-stone-200 bg-white p-6 pl-14 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                            <span class="absolute left-[1.05rem] top-8 h-3 w-3 rounded-full bg-teal-500 ring-8 ring-stone-50 dark:ring-stone-950"></span>
                            <div class="flex flex-col gap-3 lg:flex-row lg:items-start lg:justify-between">
                                <div>
                                    <p class="text-sm font-medium text-teal-700 dark:text-teal-300">{{ $experience['role'] }}</p>
                                    <h3 class="mt-1 text-xl font-semibold">{{ $experience['company'] }}</h3>
                                    <p class="mt-1 text-sm text-stone-500 dark:text-stone-400">{{ $experience['location'] }}</p>
                                </div>
                                <span class="rounded-full bg-stone-100 px-4 py-2 text-sm text-stone-600 dark:bg-stone-800 dark:text-stone-300">{{ $experience['period'] }}</span>
                            </div>
                            <p class="mt-4 leading-8 text-stone-600 dark:text-stone-300">{{ $experience['description'] }}</p>
                            <ul class="mt-5 grid gap-3 text-sm leading-7 text-stone-600 dark:text-stone-300">
                                @foreach ($experience['highlights'] as $highlight)
                                    <li class="flex gap-3">
                                        <span class="mt-2 h-2 w-2 rounded-full bg-amber-500"></span>
                                        <span>{{ $highlight }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="education" class="section-shell">
                <div class="section-heading reveal">
                    <p class="eyebrow">Education</p>
                    <h2>Fondasi pendidikan dan pengalaman organisasi.</h2>
                    <p>Bagian ini menggabungkan riwayat sekolah dan aktivitas organisasi yang tercantum di CV.</p>
                </div>
                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="grid gap-6">
                        @foreach ($portfolio['education'] as $education)
                            <article class="reveal rounded-[2rem] border border-stone-200 bg-white p-6 shadow-sm dark:border-stone-800 dark:bg-stone-900">
                                <p class="text-sm font-medium text-teal-700 dark:text-teal-300">{{ $education['period'] }}</p>
                                <h3 class="mt-2 text-xl font-semibold">{{ $education['school'] }}</h3>
                                @if ($education['major'])
                                    <p class="mt-2 text-stone-600 dark:text-stone-300">{{ $education['major'] }}</p>
                                @endif
                                @if ($education['location'])
                                    <p class="mt-1 text-sm text-stone-500 dark:text-stone-400">{{ $education['location'] }}</p>
                                @endif
                            </article>
                        @endforeach
                    </div>
                    <div class="grid gap-6">
                        @foreach ($portfolio['organizations'] as $organization)
                            <article class="reveal rounded-[2rem] border border-stone-200 bg-white p-6 shadow-sm dark:border-stone-800 dark:bg-stone-900">
                                <p class="text-sm font-medium text-amber-700 dark:text-amber-300">{{ $organization['period'] }}</p>
                                <h3 class="mt-2 text-xl font-semibold">{{ $organization['name'] }}</h3>
                                <p class="mt-2 text-stone-600 dark:text-stone-300">{{ $organization['role'] }}</p>
                                <p class="mt-1 text-sm text-stone-500 dark:text-stone-400">{{ $organization['location'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="projects" class="section-shell">
                <div class="section-heading reveal">
                    <p class="eyebrow">Projects</p>
                    <h2>Ruang khusus untuk portofolio project.</h2>
                    <p>CV belum mencantumkan project terpisah, jadi saya siapkan card placeholder yang bisa diganti dengan sangat cepat.</p>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    @foreach ($portfolio['projects'] as $project)
                        <article class="reveal rounded-[2rem] border border-stone-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <h3 class="text-xl font-semibold">{{ $project['title'] }}</h3>
                                    <p class="mt-3 leading-8 text-stone-600 dark:text-stone-300">{{ $project['description'] }}</p>
                                </div>
                                <span class="rounded-full border border-dashed border-stone-300 px-3 py-1 text-xs uppercase tracking-[0.2em] text-stone-500 dark:border-stone-700 dark:text-stone-400">Editable</span>
                            </div>
                            <div class="mt-5 flex flex-wrap gap-3">
                                @foreach ($project['stack'] as $stack)
                                    <span class="skill-badge">{{ $stack }}</span>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="certificates" class="section-shell">
                <div class="section-heading reveal">
                    <p class="eyebrow">Certificates</p>
                    <h2>Pelatihan yang mendukung spesialisasi teknis.</h2>
                    <p>Seluruh item di bawah diambil dari bagian pelatihan pada CV.</p>
                </div>
                <div class="grid gap-6 lg:grid-cols-3">
                    @foreach ($portfolio['certificates'] as $certificate)
                        <article class="reveal rounded-[2rem] border border-stone-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                            <p class="text-sm font-medium text-teal-700 dark:text-teal-300">{{ $certificate['period'] }}</p>
                            <h3 class="mt-3 text-xl font-semibold">{{ $certificate['title'] }}</h3>
                            <p class="mt-2 text-sm text-stone-500 dark:text-stone-400">{{ $certificate['issuer'] }}</p>
                            <p class="mt-4 leading-8 text-stone-600 dark:text-stone-300">{{ $certificate['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="contact" class="section-shell pb-24">
                <div class="section-heading reveal">
                    <p class="eyebrow">Contact</p>
                    <h2>Saluran komunikasi yang langsung dan jelas.</h2>
                    <p>Tombol WhatsApp, kontak utama, dan form sederhana tersedia dalam satu section.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr]">
                    <div class="reveal rounded-[2rem] border border-stone-200 bg-white p-7 shadow-sm dark:border-stone-800 dark:bg-stone-900">
                        <div class="space-y-5">
                            <div>
                                <p class="text-sm font-medium text-stone-500 dark:text-stone-400">Email</p>
                                <a href="mailto:{{ $portfolio['contact']['email'] }}" class="mt-2 block text-lg font-medium interactive-link">{{ $portfolio['contact']['email'] }}</a>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-stone-500 dark:text-stone-400">WhatsApp</p>
                                <a href="https://wa.me/6285868921525" target="_blank" rel="noreferrer" class="mt-2 block text-lg font-medium interactive-link">{{ $portfolio['contact']['phone'] }}</a>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-stone-500 dark:text-stone-400">Instagram</p>
                                <a href="{{ $portfolio['contact']['instagram'] }}" target="_blank" rel="noreferrer" class="mt-2 block text-lg font-medium interactive-link">andikaajipratamaputra</a>
                            </div>
                            <div class="flex gap-3 pt-2">
                                <a href="mailto:{{ $portfolio['contact']['email'] }}" class="social-button" aria-label="Email">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 6h16v12H4z"/><path d="m4 7 8 6 8-6"/></svg>
                                </a>
                                <a href="https://wa.me/6285868921525" target="_blank" rel="noreferrer" class="social-button" aria-label="WhatsApp">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 11.5A8.5 8.5 0 0 1 7.4 18.9L4 20l1.2-3.2A8.5 8.5 0 1 1 20 11.5Z"/><path d="M8.8 9.4c.2-.5.5-.5.8-.5h.6c.2 0 .5 0 .7.5.2.4.8 1.9.8 2.1.1.2.1.4 0 .6-.1.2-.2.4-.4.5l-.5.6c-.2.2-.3.4-.1.7.2.4 1 1.7 2.4 2.3.3.1.5.1.7-.1l.7-.8c.2-.2.4-.2.7-.1.3.1 2 .9 2.3 1.1.3.1.5.2.6.4.1.2.1 1.1-.3 1.7-.4.5-1.4.8-2 .8-.5 0-1.2.1-3.8-1-3.2-1.4-5.2-4.7-5.4-5-.2-.2-1.3-1.7-1.3-3.2 0-1.6.8-2.4 1.1-2.8"/></svg>
                                </a>
                                <a href="{{ $portfolio['contact']['instagram'] }}" target="_blank" rel="noreferrer" class="social-button" aria-label="Instagram">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="reveal rounded-[2rem] border border-stone-200 bg-white p-7 shadow-sm dark:border-stone-800 dark:bg-stone-900">
                        @if (session('success'))
                            <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700 dark:border-emerald-900/80 dark:bg-emerald-950/60 dark:text-emerald-300">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('portfolio.contact') }}" method="POST" class="space-y-5">
                            @csrf
                            <div>
                                <label for="name" class="form-label">Nama</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-input" placeholder="Nama Anda">
                                @error('name')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-input" placeholder="email@domain.com">
                                @error('email')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="message" class="form-label">Pesan</label>
                                <textarea id="message" name="message" rows="5" class="form-input" placeholder="Tulis pesan singkat Anda...">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="primary-button w-full justify-center">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-stone-200 bg-white/70 px-5 py-8 backdrop-blur dark:border-stone-800 dark:bg-stone-950/80">
            <div class="mx-auto flex max-w-6xl flex-col gap-3 text-sm text-stone-500 md:flex-row md:items-center md:justify-between dark:text-stone-400">
                <p>&copy; {{ now()->year }} {{ $portfolio['name'] }}. Personal portfolio built with Laravel.</p>
                <div class="flex items-center gap-4">
                    <a href="#home" class="interactive-link">Back to top</a>
                    <a href="{{ route('portfolio.cv.download') }}" class="interactive-link">Download CV</a>
                </div>
            </div>
        </footer>

        <a href="https://wa.me/6285868921525" target="_blank" rel="noreferrer" class="floating-wa" aria-label="Chat via WhatsApp">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 11.5A8.5 8.5 0 0 1 7.4 18.9L4 20l1.2-3.2A8.5 8.5 0 1 1 20 11.5Z"/><path d="M8.8 9.4c.2-.5.5-.5.8-.5h.6c.2 0 .5 0 .7.5.2.4.8 1.9.8 2.1.1.2.1.4 0 .6-.1.2-.2.4-.4.5l-.5.6c-.2.2-.3.4-.1.7.2.4 1 1.7 2.4 2.3.3.1.5.1.7-.1l.7-.8c.2-.2.4-.2.7-.1.3.1 2 .9 2.3 1.1.3.1.5.2.6.4.1.2.1 1.1-.3 1.7-.4.5-1.4.8-2 .8-.5 0-1.2.1-3.8-1-3.2-1.4-5.2-4.7-5.4-5-.2-.2-1.3-1.7-1.3-3.2 0-1.6.8-2.4 1.1-2.8"/></svg>
        </a>
    </div>
@endsection
