<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="DMC" />
    <link rel="manifest" href="/site.webmanifest" />
    <title>DMC — @yield('title', 'Центр Интернет-Рекламы')</title>
    {{-- Шрифты --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />
    {{-- Стили и скрипты --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Inline-стили для анимаций и эффектов --}}
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
        /* --- Анимации --- */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        @keyframes pulse-glow {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
        @keyframes slide-up {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes count-up {
            from { opacity: 0; transform: scale(0.5); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-delayed { animation: float-delayed 5s ease-in-out 1s infinite; }
        .animate-pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }
        .animate-slide-up { animation: slide-up 0.8s ease-out both; }
        .animate-fade-in { animation: fade-in 1s ease-out both; }
        .animate-count-up { animation: count-up 0.6s ease-out both; }
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient-shift 4s ease infinite;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        /* --- Эффект стекла --- */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        /* --- Градиентный текст --- */
        .text-gradient {
            background: linear-gradient(135deg, #2563eb, #7c3aed, #2563eb);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient-shift 4s ease infinite;
        }
        /* --- Mesh-фон --- */
        .bg-mesh {
            background-color: #f8fafc;
            background-image:
                radial-gradient(at 40% 20%, rgba(59, 130, 246, 0.08) 0px, transparent 50%),
                radial-gradient(at 80% 0%, rgba(139, 92, 246, 0.06) 0px, transparent 50%),
                radial-gradient(at 0% 50%, rgba(59, 130, 246, 0.05) 0px, transparent 50%),
                radial-gradient(at 80% 50%, rgba(139, 92, 246, 0.04) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(59, 130, 246, 0.06) 0px, transparent 50%);
        }
        /* --- Hover-эффект карточки --- */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
        /* --- Скроллбар --- */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #94a3b8; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #64748b; }
    </style>
</head>
<body class="antialiased bg-gray-50 text-gray-800 flex flex-col min-h-screen">
{{-- ===== ВЕРХНЯЯ ПАНЕЛЬ ===== --}}
@include('components.topbar')
{{-- ===== НАВИГАЦИЯ ===== --}}
@include('components.header')
{{-- ===== ОСНОВНОЙ КОНТЕНТ ===== --}}
<main class="flex-grow">
    @yield('content')
</main>
{{-- ===== ПОДВАЛ ===== --}}
@include('components.footer')
{{-- Скрипт для прокрутки и активного меню --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Плавная прокрутка по якорям
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
        // Подсветка активного раздела в меню при скролле
        const sections = ['hero', 'services', 'prices', 'clients', 'contact'];
        const navLinks = document.querySelectorAll('[data-nav-link]');
        function updateActive() {
            let currentSection = 'hero';
            for (let i = sections.length - 1; i >= 0; i--) {
                const el = document.getElementById(sections[i]);
                if (el && el.getBoundingClientRect().top <= 150) {
                    currentSection = sections[i];
                    break;
                }
            }
            navLinks.forEach(link => {
                const section = link.getAttribute('data-section');
                if (section === currentSection) {
                    link.classList.add('text-blue-600');
                    link.classList.remove('text-gray-600');
                } else {
                    link.classList.remove('text-blue-600');
                    link.classList.add('text-gray-600');
                }
            });
        }
        window.addEventListener('scroll', updateActive);
        updateActive();
        // Скрыть хедер-тень при скролле
        const nav = document.getElementById('main-nav');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                nav.classList.add('shadow-lg', 'shadow-slate-900/5', 'border-b', 'border-white/50');
                nav.classList.remove('bg-white/95');
                nav.classList.add('glass');
            } else {
                nav.classList.remove('shadow-lg', 'shadow-slate-900/5', 'border-b', 'border-white/50', 'glass');
                nav.classList.add('bg-white/95');
            }
        });
    });
</script>
</body>
</html>
