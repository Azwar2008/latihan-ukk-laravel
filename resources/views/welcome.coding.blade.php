<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLearn - Belajar Coding</title>

    <style>
        :root{
            --bg:#08111f;
            --panel:#0f1b2d;
            --panel-2:#132238;
            --text:#f8fafc;
            --muted:#94a3b8;
            --primary:#22d3ee;
            --primary-2:#38bdf8;
            --border:#20324a;
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html{scroll-behavior:smooth}

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:
                radial-gradient(circle at 80% 20%, rgba(34,211,238,.10), transparent 28%),
                radial-gradient(circle at 20% 80%, rgba(56,189,248,.08), transparent 24%),
                var(--bg);
            color:var(--text);
            line-height:1.6;
        }

        a{
            text-decoration:none;
            color:inherit;
        }

        .container{
            width:min(1120px, 92%);
            margin:auto;
        }

        /* NAVBAR */
        .navbar{
            position:sticky;
            top:0;
            z-index:1000;
            background:rgba(8,17,31,.88);
            backdrop-filter:blur(12px);
            border-bottom:1px solid rgba(255,255,255,.07);
        }

        .nav-inner{
            min-height:74px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:20px;
        }

        .brand{
            font-size:23px;
            font-weight:800;
            letter-spacing:.2px;
        }

        .brand span{color:var(--primary)}

        .nav-links{
            display:flex;
            align-items:center;
            gap:24px;
            list-style:none;
        }

        .nav-links a{
            color:#cbd5e1;
            font-size:14px;
            font-weight:600;
            transition:.2s ease;
        }

        .nav-links a:hover{color:var(--primary)}

        .nav-cta{
            padding:10px 17px;
            border-radius:10px;
            background:var(--primary);
            color:#06202a !important;
            font-weight:800 !important;
        }

        /* HERO */
        .hero{
            min-height:82vh;
            display:flex;
            align-items:center;
            padding:70px 0;
        }

        .hero-grid{
            display:grid;
            grid-template-columns:1.05fr .95fr;
            gap:60px;
            align-items:center;
        }

        .badge{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding:8px 13px;
            border-radius:999px;
            border:1px solid rgba(34,211,238,.28);
            background:rgba(34,211,238,.08);
            color:#67e8f9;
            font-size:13px;
            font-weight:700;
            margin-bottom:18px;
        }

        .hero h1{
            font-size:clamp(42px,6vw,70px);
            line-height:1.05;
            letter-spacing:-2px;
            margin-bottom:20px;
        }

        .hero h1 span{
            color:var(--primary);
        }

        .hero p{
            max-width:640px;
            color:var(--muted);
            font-size:18px;
            margin-bottom:30px;
        }

        .hero-actions{
            display:flex;
            gap:14px;
            flex-wrap:wrap;
        }

        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            padding:13px 22px;
            border-radius:10px;
            font-weight:800;
            transition:.2s ease;
        }

        .btn-primary{
            background:var(--primary);
            color:#06202a;
        }

        .btn-primary:hover{
            transform:translateY(-2px);
            background:#67e8f9;
        }

        .btn-outline{
            border:1px solid var(--border);
            background:rgba(15,27,45,.55);
            color:#e2e8f0;
        }

        .btn-outline:hover{
            border-color:var(--primary);
            color:var(--primary);
        }

        /* TERMINAL */
        .terminal{
            border:1px solid var(--border);
            border-radius:18px;
            overflow:hidden;
            background:#020617;
            box-shadow:0 30px 80px rgba(0,0,0,.35);
        }

        .terminal-head{
            padding:14px 16px;
            background:#0f172a;
            border-bottom:1px solid #1e293b;
            display:flex;
            align-items:center;
            gap:8px;
        }

        .dot{
            width:11px;
            height:11px;
            border-radius:50%;
            background:#475569;
        }

        .terminal-title{
            margin-left:8px;
            color:#64748b;
            font-size:12px;
        }

        .terminal-body{
            padding:26px;
            overflow-x:auto;
        }

        pre{
            font-family:Consolas, Monaco, monospace;
            font-size:14px;
            line-height:1.9;
            color:#cbd5e1;
        }

        .purple{color:#c084fc}
        .cyan{color:#22d3ee}
        .green{color:#4ade80}
        .yellow{color:#facc15}

        /* SECTION */
        .section{
            padding:90px 0;
        }

        .section-head{
            max-width:720px;
            margin:0 auto 42px;
            text-align:center;
        }

        .section-head small{
            color:var(--primary);
            font-weight:800;
            text-transform:uppercase;
            letter-spacing:1.5px;
        }

        .section-head h2{
            margin-top:8px;
            font-size:36px;
        }

        .section-head p{
            margin-top:10px;
            color:var(--muted);
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
        }

        .card{
            padding:28px;
            border:1px solid var(--border);
            border-radius:16px;
            background:linear-gradient(180deg, rgba(19,34,56,.92), rgba(15,27,45,.92));
            transition:.25s ease;
        }

        .card:hover{
            transform:translateY(-6px);
            border-color:rgba(34,211,238,.55);
        }

        .icon{
            width:48px;
            height:48px;
            display:grid;
            place-items:center;
            border-radius:12px;
            background:rgba(34,211,238,.09);
            margin-bottom:18px;
            font-size:25px;
        }

        .card h3{
            font-size:19px;
            margin-bottom:9px;
        }

        .card p{
            color:var(--muted);
            font-size:14px;
        }

        /* ABOUT */
        .about-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:30px;
            align-items:stretch;
        }

        .about-box{
            padding:32px;
            border:1px solid var(--border);
            border-radius:18px;
            background:rgba(15,27,45,.7);
        }

        .about-box h3{
            margin-bottom:12px;
            font-size:24px;
        }

        .about-box p{
            color:var(--muted);
        }

        .list{
            margin-top:20px;
            display:grid;
            gap:12px;
        }

        .list div{
            display:flex;
            gap:10px;
            color:#cbd5e1;
        }

        .check{color:var(--primary)}

        /* CTA */
        .cta{
            padding:30px 0 90px;
        }

        .cta-box{
            padding:42px;
            border:1px solid var(--border);
            border-radius:20px;
            background:linear-gradient(135deg, #0f172a, #132238);
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:30px;
        }

        .cta-box h2{
            font-size:31px;
            margin-bottom:8px;
        }

        .cta-box p{color:var(--muted)}

        footer{
            border-top:1px solid rgba(255,255,255,.07);
            padding:28px 0;
            text-align:center;
            color:#64748b;
            font-size:14px;
        }

        @media(max-width:900px){
            .hero-grid,
            .about-grid{
                grid-template-columns:1fr;
            }

            .cards{
                grid-template-columns:repeat(2,1fr);
            }

            .cta-box{
                flex-direction:column;
                align-items:flex-start;
            }
        }

        @media(max-width:650px){
            .nav-links{display:none}
            .hero{padding:55px 0}
            .cards{grid-template-columns:1fr}
            .section{padding:70px 0}
            .cta-box{padding:28px}
        }
    </style>
</head>
<body>

<header class="navbar">
    <div class="container nav-inner">
        <a href="{{ url('/') }}" class="brand">
            &lt;<span>CodeLearn</span>/&gt;
        </a>

        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#materi">Materi</a></li>
            <li><a href="#tentang">Tentang</a></li>

            @if (Route::has('login'))
                @auth
                    <li><a class="nav-cta" href="{{ url('/home') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))
                        <li><a class="nav-cta" href="{{ route('register') }}">Daftar</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>
</header>

<main>

    <section class="hero" id="home">
        <div class="container hero-grid">

            <div>
                <div class="badge">💻 Platform Belajar Coding</div>

                <h1>
                    Belajar Coding
                    <span>Lebih Mudah</span>
                    dan Terarah
                </h1>

                <p>
                    Mulai perjalanan menjadi programmer dengan materi HTML, CSS,
                    JavaScript, PHP, dan Laravel yang disusun sederhana untuk pemula.
                </p>

                <div class="hero-actions">
                    <a href="#materi" class="btn btn-primary">Mulai Belajar</a>
                    <a href="#tentang" class="btn btn-outline">Pelajari Lebih Lanjut</a>
                </div>
            </div>

            <div class="terminal">
                <div class="terminal-head">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="terminal-title">web.php</span>
                </div>

                <div class="terminal-body">
<pre><span class="purple">use</span> Illuminate\Support\Facades\<span class="cyan">Route</span>;

<span class="cyan">Route</span>::get(<span class="green">'/'</span>, function () {
    <span class="purple">return</span> view(<span class="green">'welcome'</span>);
});

<span class="cyan">Route</span>::get(<span class="green">'/perusahaan'</span>, function () {
    <span class="purple">return</span> view(<span class="green">'perusahaan.index'</span>);
});

<span class="yellow">// Laravel siap digunakan 🚀</span></pre>
                </div>
            </div>

        </div>
    </section>

    <section class="section" id="materi">
        <div class="container">

            <div class="section-head">
                <small>Materi Pilihan</small>
                <h2>Belajar dari Dasar Sampai Laravel</h2>
                <p>
                    Materi disusun bertahap agar lebih mudah dipahami oleh pemula.
                </p>
            </div>

            <div class="cards">

                <div class="card">
                    <div class="icon">🌐</div>
                    <h3>HTML</h3>
                    <p>
                        Pelajari struktur halaman website menggunakan elemen dan tag HTML.
                    </p>
                </div>

                <div class="card">
                    <div class="icon">🎨</div>
                    <h3>CSS</h3>
                    <p>
                        Buat tampilan website yang modern, responsive, dan menarik.
                    </p>
                </div>

                <div class="card">
                    <div class="icon">⚡</div>
                    <h3>JavaScript</h3>
                    <p>
                        Tambahkan interaksi dan fitur dinamis pada aplikasi web.
                    </p>
                </div>

                <div class="card">
                    <div class="icon">🚀</div>
                    <h3>Laravel</h3>
                    <p>
                        Pelajari routing, controller, Blade, database, migration, dan CRUD.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="section" id="tentang">
        <div class="container">

            <div class="section-head">
                <small>Tentang Platform</small>
                <h2>Belajar Coding dengan Praktik Langsung</h2>
            </div>

            <div class="about-grid">

                <div class="about-box">
                    <h3>Kenapa Belajar di CodeLearn?</h3>
                    <p>
                        Fokus pada pemahaman konsep dasar dan praktik membuat project sederhana
                        menggunakan teknologi web modern.
                    </p>

                    <div class="list">
                        <div><span class="check">✓</span> Materi mudah dipahami pemula</div>
                        <div><span class="check">✓</span> Contoh coding langsung</div>
                        <div><span class="check">✓</span> Project berbasis Laravel</div>
                        <div><span class="check">✓</span> Tampilan responsive</div>
                    </div>
                </div>

                <div class="about-box">
                    <h3>Target Pembelajaran</h3>
                    <p>
                        Setelah memahami materi dasar, Anda dapat melanjutkan membuat aplikasi
                        web CRUD menggunakan Laravel, database MySQL, Blade, dan Controller.
                    </p>

                    <div class="list">
                        <div><span class="check">✓</span> Membuat routing Laravel</div>
                        <div><span class="check">✓</span> Menggunakan Controller</div>
                        <div><span class="check">✓</span> Membuat Blade Template</div>
                        <div><span class="check">✓</span> Membuat CRUD database</div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-box">

                <div>
                    <h2>Siap membuat project Laravel?</h2>
                    <p>
                        Mulai dengan halaman perusahaan dan lanjutkan menjadi CRUD lengkap.
                    </p>
                </div>

                <a href="{{ url('/perusahaan') }}" class="btn btn-primary">
                    Buka Perusahaan
                </a>

            </div>
        </div>
    </section>

</main>

<footer>
    <div class="container">
        &copy; {{ date('Y') }} CodeLearn — Belajar Coding dengan Laravel
    </div>
</footer>

</body>
</html>
