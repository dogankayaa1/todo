<!DOCTYPE html>

<html class="light" lang="tr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Yalın Odak - Admin Paneli</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary-fixed": "#dae2ff",
                    "on-primary-fixed-variant": "#0040a2",
                    "primary": "#003d9b",
                    "on-secondary-fixed": "#151c25",
                    "on-primary-fixed": "#001848",
                    "surface-tint": "#0c56d0",
                    "surface-dim": "#d9dadc",
                    "secondary": "#585f6a",
                    "on-tertiary": "#ffffff",
                    "on-secondary-fixed-variant": "#404751",
                    "on-error-container": "#93000a",
                    "on-background": "#191c1e",
                    "surface-variant": "#e1e2e4",
                    "tertiary": "#7b2600",
                    "surface-container-low": "#f3f4f6",
                    "outline": "#737685",
                    "tertiary-container": "#a33500",
                    "inverse-primary": "#b2c5ff",
                    "inverse-on-surface": "#f0f1f3",
                    "on-primary-container": "#c4d2ff",
                    "on-tertiary-fixed-variant": "#812800",
                    "on-secondary-container": "#5e6570",
                    "tertiary-fixed-dim": "#ffb59b",
                    "on-tertiary-fixed": "#380d00",
                    "error-container": "#ffdad6",
                    "primary-fixed-dim": "#b2c5ff",
                    "on-tertiary-container": "#ffc6b2",
                    "surface-container-lowest": "#ffffff",
                    "error": "#ba1a1a",
                    "surface": "#f8f9fb",
                    "on-primary": "#ffffff",
                    "tertiary-fixed": "#ffdbcf",
                    "primary-container": "#0052cc",
                    "background": "#f8f9fb",
                    "surface-container-high": "#e7e8ea",
                    "surface-bright": "#f8f9fb",
                    "on-error": "#ffffff",
                    "outline-variant": "#c3c6d6",
                    "inverse-surface": "#2e3132",
                    "secondary-fixed-dim": "#c0c7d3",
                    "on-surface": "#191c1e",
                    "surface-container-highest": "#e1e2e4",
                    "secondary-fixed": "#dce3f0",
                    "secondary-container": "#dce3f0",
                    "on-surface-variant": "#434654",
                    "on-secondary": "#ffffff",
                    "surface-container": "#edeef0"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "container-max": "800px",
                    "base-unit": "4px",
                    "xs": "4px",
                    "gutter": "20px",
                    "lg": "24px",
                    "sm": "8px",
                    "md": "16px",
                    "xl": "40px"
            },
            "fontFamily": {
                    "body-base": ["Inter"],
                    "label-caps": ["Inter"],
                    "label-bold": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "body-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg": ["Inter"]
            },
            "fontSize": {
                    "body-base": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "label-caps": ["11px", {"lineHeight": "16px", "letterSpacing": "0.1em", "fontWeight": "700"}],
                    "label-bold": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "display-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        body { background-color: #f8f9fb; -webkit-font-smoothing: antialiased; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .active-tab { font-variation-settings: 'FILL' 1; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(8px); border: 1px solid #E1E4E8; }
        .shadow-soft { box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); }
    </style>
</head>
<body class="text-on-surface font-body-base overflow-x-hidden">
<!-- SideNavBar -->
<aside class="h-full w-64 fixed left-0 top-0 bg-surface-container-low dark:bg-surface-container flex flex-col p-md space-y-sm z-50 hidden md:flex border-r border-outline-variant">
<div class="mb-xl px-xs">
<h1 class="font-headline-md text-headline-md font-semibold text-primary">Yalın Odak</h1>
<p class="text-secondary font-label-bold text-label-bold">Dijital Zen</p>
</div>
<nav class="flex-1 space-y-xs">
<a class="flex items-center space-x-md px-md py-sm text-primary dark:text-primary-fixed-variant bg-primary-container/10 rounded-full font-label-bold text-label-bold transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined active-tab">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center space-x-md px-md py-sm text-secondary dark:text-secondary-fixed-dim hover:bg-surface-variant/50 dark:hover:bg-surface-variant/20 rounded-full font-label-bold text-label-bold transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">group</span>
<span>Kullanıcı Yönetimi</span>
</a>
<a class="flex items-center space-x-md px-md py-sm text-secondary dark:text-secondary-fixed-dim hover:bg-surface-variant/50 dark:hover:bg-surface-variant/20 rounded-full font-label-bold text-label-bold transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">assessment</span>
<span>Raporlar</span>
</a>
<a class="flex items-center space-x-md px-md py-sm text-secondary dark:text-secondary-fixed-dim hover:bg-surface-variant/50 dark:hover:bg-surface-variant/20 rounded-full font-label-bold text-label-bold transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">security</span>
<span>Sistem Sağlığı</span>
</a>
</nav>
<div class="pt-xl border-t border-outline-variant space-y-xs">
<a class="flex items-center space-x-md px-md py-sm text-secondary hover:bg-surface-variant/50 rounded-full font-label-bold text-label-bold transition-all" href="#">
<span class="material-symbols-outlined">archive</span>
<span>Arşiv</span>
</a>
<a class="flex items-center space-x-md px-md py-sm text-secondary hover:bg-surface-variant/50 rounded-full font-label-bold text-label-bold transition-all" href="#">
<span class="material-symbols-outlined">delete</span>
<span>Çöp Kutusu</span>
</a>
</div>
</aside>
<!-- Main Content Area -->
<main class="md:ml-64 min-h-screen">
<!-- TopNavBar -->
<header class="w-full sticky top-0 bg-surface dark:bg-surface-dim border-b border-outline-variant dark:border-outline z-40">
<div class="flex justify-between items-center h-16 px-gutter max-w-7xl mx-auto">
<div class="flex items-center space-x-md">
<span class="font-display-lg text-display-lg font-bold text-primary dark:text-primary-fixed md:hidden">YO</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-semibold hidden md:block">Yönetici Paneli</h2>
</div>
<div class="flex items-center space-x-lg">
<div class="relative hidden sm:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="bg-surface-container-low border border-outline-variant rounded-full pl-10 pr-4 py-2 text-body-sm focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none w-64" placeholder="Sistemde ara..." type="text"/>
</div>
<div class="flex items-center space-x-md">
<button class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors active:scale-95">notifications</button>
<button class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors active:scale-95">settings</button>
<div class="w-8 h-8 rounded-full bg-primary-container overflow-hidden border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="A professional studio headshot of a modern tech executive with a friendly expression. The person has short hair, wearing a navy blue blazer over a crisp white shirt. The background is a minimalist, softly blurred corporate office with cool blue lighting and clean lines. High-resolution photography emphasizing trust and professional clarity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCu1uZp0cuAtgWWlQz1eLGNqQ5uIMSc8hAF66AQ1tszIwWPmnLp7qj3vsLn3Qr1shq6eLaVN-FqTWMAwC7Ssahr0SO2YVEOZszb2VvmJm6B4QQKB3OsFNcEeyssWnOB2AlEWFkh0LJEQAEb2FZbjVXQ8u_tedTHJbAXLyXpDJwtEIkdhFgMU0-hFtmNSNuTFpB1b6vy4Ks31BDMoIW8IUnrpWuPKpExB6kUFsfv7x7vy3adtkdUGtNujw"/>
</div>
</div>
</div>
</div>
</header>
<!-- Dashboard Canvas -->
<div class="max-w-7xl mx-auto p-gutter space-y-lg">
<!-- Summary Metrics Bento Grid -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-md">
<!-- Total Users -->
<div class="bg-white p-md border border-outline-variant rounded-xl flex flex-col justify-between hover:shadow-soft transition-all duration-300">
<div class="flex justify-between items-start">
<div class="p-sm bg-primary-fixed text-on-primary-fixed rounded-lg">
<span class="material-symbols-outlined">group</span>
</div>
<span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded">+12%</span>
</div>
<div class="mt-md">
<p class="text-on-surface-variant font-label-bold text-label-bold">Toplam Kullanıcı</p>
<h3 class="text-display-lg font-display-lg text-primary">12.482</h3>
</div>
</div>
<!-- Active Tasks -->
<div class="bg-white p-md border border-outline-variant rounded-xl flex flex-col justify-between hover:shadow-soft transition-all duration-300">
<div class="flex justify-between items-start">
<div class="p-sm bg-tertiary-fixed text-on-tertiary-fixed rounded-lg">
<span class="material-symbols-outlined">task_alt</span>
</div>
<span class="text-xs font-bold text-on-surface-variant bg-surface-container px-2 py-1 rounded">Sabit</span>
</div>
<div class="mt-md">
<p class="text-on-surface-variant font-label-bold text-label-bold">Aktif Görevler</p>
<h3 class="text-display-lg font-display-lg text-primary">45.291</h3>
</div>
</div>
<!-- Storage Usage -->
<div class="bg-white p-md border border-outline-variant rounded-xl flex flex-col justify-between hover:shadow-soft transition-all duration-300">
<div class="flex justify-between items-start">
<div class="p-sm bg-secondary-fixed text-on-secondary-fixed rounded-lg">
<span class="material-symbols-outlined">cloud_queue</span>
</div>
<span class="text-xs font-bold text-error bg-error-container px-2 py-1 rounded">%88 Dolu</span>
</div>
<div class="mt-md">
<p class="text-on-surface-variant font-label-bold text-label-bold">Bulut Depolama</p>
<h3 class="text-display-lg font-display-lg text-primary">1.2 TB</h3>
</div>
</div>
<!-- Revenue -->
<div class="bg-white p-md border border-outline-variant rounded-xl flex flex-col justify-between hover:shadow-soft transition-all duration-300">
<div class="flex justify-between items-start">
<div class="p-sm bg-primary-container text-on-primary-container rounded-lg">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">monetization_on</span>
</div>
<span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded">+8.4%</span>
</div>
<div class="mt-md">
<p class="text-on-surface-variant font-label-bold text-label-bold">Aylık Gelir</p>
<h3 class="text-display-lg font-display-lg text-primary">₺245k</h3>
</div>
</div>
</section>
<!-- Secondary Layout: Main Visualization & Quick Links -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
<!-- Activity Graph Placeholder -->
<div class="lg:col-span-2 bg-white border border-outline-variant rounded-xl p-lg relative overflow-hidden flex flex-col justify-center min-h-[400px]">
<div class="flex justify-between items-center mb-xl">
<div>
<h4 class="font-headline-md text-headline-md text-on-surface">Kullanım Trendleri</h4>
<p class="text-body-sm text-on-surface-variant">Son 30 günlük kullanıcı etkileşimi verileri.</p>
</div>
<select class="bg-surface-container border-none text-label-bold rounded-lg px-sm py-1 outline-none cursor-pointer">
<option>Aylık</option>
<option>Haftalık</option>
</select>
</div>
<div class="flex-1 relative w-full h-full min-h-[200px] bg-surface-container-lowest rounded-lg flex items-center justify-center border border-dashed border-outline-variant">

<div class="z-10 text-center">
<span class="material-symbols-outlined text-display-lg text-outline-variant mb-md">analytics</span>
<p class="text-on-surface-variant font-label-bold">Veri Görselleştirme Hazırlanıyor</p>
</div>
</div>
</div>
<!-- Quick Admin Tools -->
<div class="bg-white border border-outline-variant rounded-xl p-lg space-y-md">
<h4 class="font-headline-md text-headline-md text-on-surface">Hızlı İşlemler</h4>
<div class="grid grid-cols-1 gap-sm">
<button class="flex items-center justify-between p-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all group">
<div class="flex items-center space-x-md">
<span class="material-symbols-outlined text-primary">person_add</span>
<span class="text-body-base font-medium">Yeni Editör Ekle</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
</button>
<button class="flex items-center justify-between p-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all group">
<div class="flex items-center space-x-md">
<span class="material-symbols-outlined text-primary">backup</span>
<span class="text-body-base font-medium">Veritabanı Yedekle</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
</button>
<button class="flex items-center justify-between p-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all group">
<div class="flex items-center space-x-md">
<span class="material-symbols-outlined text-primary">mail_lock</span>
<span class="text-body-base font-medium">Güvenlik Duyurusu</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
</button>
<button class="flex items-center justify-between p-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all group">
<div class="flex items-center space-x-md">
<span class="material-symbols-outlined text-error">priority_high</span>
<span class="text-body-base font-medium text-error">Sistemi Bakıma Al</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Recent Activity List -->
<section class="bg-white border border-outline-variant rounded-xl overflow-hidden shadow-soft">
<div class="p-lg border-b border-outline-variant flex justify-between items-center">
<h4 class="font-headline-md text-headline-md text-on-surface">Son Aktiviteler</h4>
<button class="text-primary font-label-bold hover:underline">Tümünü Gör</button>
</div>
<div class="divide-y divide-outline-variant">
<!-- Activity Item 1 -->
<div class="p-md hover:bg-surface-container-lowest transition-colors flex items-center justify-between group">
<div class="flex items-center space-x-md">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
<span class="material-symbols-outlined">person</span>
</div>
<div>
<p class="text-body-base font-semibold">Ahmet Yılmaz <span class="font-normal text-on-surface-variant">yeni bir hesap oluşturdu.</span></p>
<p class="text-xs text-on-surface-variant">2 dakika önce • İstanbul, TR</p>
</div>
</div>
<div class="hidden group-hover:flex space-x-sm">
<button class="p-sm hover:bg-surface-container-low rounded-lg text-on-surface-variant"><span class="material-symbols-outlined text-sm">visibility</span></button>
<button class="p-sm hover:bg-surface-container-low rounded-lg text-on-surface-variant"><span class="material-symbols-outlined text-sm">more_vert</span></button>
</div>
</div>
<!-- Activity Item 2 -->
<div class="p-md hover:bg-surface-container-lowest transition-colors flex items-center justify-between group">
<div class="flex items-center space-x-md">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center">
<span class="material-symbols-outlined">payments</span>
</div>
<div>
<p class="text-body-base font-semibold">Premium Abonelik <span class="font-normal text-on-surface-variant">yenilendi (Kullanıcı: id_8829).</span></p>
<p class="text-xs text-on-surface-variant">15 dakika önce • Ankara, TR</p>
</div>
</div>
<div class="hidden group-hover:flex space-x-sm">
<button class="p-sm hover:bg-surface-container-low rounded-lg text-on-surface-variant"><span class="material-symbols-outlined text-sm">receipt_long</span></button>
</div>
</div>
<!-- Activity Item 3 -->
<div class="p-md hover:bg-surface-container-lowest transition-colors flex items-center justify-between group">
<div class="flex items-center space-x-md">
<div class="w-10 h-10 rounded-full bg-error-container text-error flex items-center justify-center">
<span class="material-symbols-outlined">warning</span>
</div>
<div>
<p class="text-body-base font-semibold">Başarısız Giriş Denemesi <span class="font-normal text-on-surface-variant">tespit edildi. IP: 192.168.1.1</span></p>
<p class="text-xs text-on-surface-variant">1 saat önce • Berlin, DE</p>
</div>
</div>
<div class="hidden group-hover:flex space-x-sm">
<button class="p-sm hover:bg-surface-container-low rounded-lg text-error"><span class="material-symbols-outlined text-sm">block</span></button>
</div>
</div>
<!-- Activity Item 4 -->
<div class="p-md hover:bg-surface-container-lowest transition-colors flex items-center justify-between group">
<div class="flex items-center space-x-md">
<div class="w-10 h-10 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined">update</span>
</div>
<div>
<p class="text-body-base font-semibold">Sistem Güncellemesi <span class="font-normal text-on-surface-variant">v2.4.0 başarıyla tamamlandı.</span></p>
<p class="text-xs text-on-surface-variant">3 saat önce • Otomatik Sistem</p>
</div>
</div>
</div>
</div>
<div class="p-md bg-surface-container-low text-center">
<button class="text-on-surface-variant font-label-bold text-label-bold">Daha fazla yükle</button>
</div>
</section>
</div>
<!-- Footer -->
<footer class="max-w-7xl mx-auto px-gutter py-xl mt-xl border-t border-outline-variant flex flex-col md:flex-row justify-between items-center text-on-surface-variant">
<p class="text-body-sm mb-md md:mb-0">© 2024 Yalın Odak. Tüm hakları saklıdır.</p>
<div class="flex space-x-lg text-body-sm">
<a class="hover:text-primary transition-colors" href="#">Destek</a>
<a class="hover:text-primary transition-colors" href="#">Dokümantasyon</a>
<a class="hover:text-primary transition-colors" href="#">API</a>
<a class="hover:text-primary transition-colors" href="#">Gizlilik</a>
</div>
</footer>
</main>
<!-- FAB for quick action (Mobile Only) -->
<button class="fixed bottom-gutter right-gutter w-14 h-14 bg-primary-container text-white rounded-full shadow-lg flex items-center justify-center md:hidden active:scale-90 transition-transform z-50">
<span class="material-symbols-outlined">add</span>
</button>
<script>
        // Simple interactivity for mobile search toggle
        document.addEventListener('DOMContentLoaded', () => {
            // Mock data or interaction logic could go here
            console.log('Admin Dashboard Initialized');
        });
    </script>
</body></html>
