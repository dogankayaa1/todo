<!-- Footer -->
<footer class="bg-surface-container border-t border-outline-variant py-xl">
<div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 md:grid-cols-4 gap-xl">
<div class="col-span-1 md:col-span-2">
<div class="font-display-lg text-display-lg font-bold text-primary mb-md">Yalın Odak</div>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs">
                    Dijital dünyada odağınızı korumanıza yardımcı olan minimal bir yaşam aracı.
                </p>
</div>
<div>
<h4 class="font-label-bold text-label-bold text-on-surface mb-md">Ürün</h4>
<ul class="space-y-sm text-body-sm text-on-surface-variant">
<li><a class="hover:text-primary transition-colors" href="#">Özellikler</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Masaüstü Uygulaması</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Mobil Sürüm</a></li>
</ul>
</div>
<div>
<h4 class="font-label-bold text-label-bold text-on-surface mb-md">Destek</h4>
<ul class="space-y-sm text-body-sm text-on-surface-variant">
<li><a class="hover:text-primary transition-colors" href="#">Yardım Merkezi</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Gizlilik Politikası</a></li>
<li><a class="hover:text-primary transition-colors" href="#">İletişim</a></li>
</ul>
</div>
</div>
<div class="max-w-container-max mx-auto px-gutter mt-xl pt-lg border-t border-outline-variant text-center md:text-left">
<p class="font-label-caps text-label-caps text-on-secondary-fixed-variant">© 2024 YALIN ODAK. TÜM HAKLARI SAKLIDIR.</p>
</div>
</footer>
<!-- Mobile Bottom NavBar (Shown only on small screens) -->
<div class="md:hidden fixed bottom-0 left-0 w-full bg-surface-container border-t border-outline-variant h-16 flex justify-around items-center z-50">
<button class="flex flex-col items-center text-primary">
<span class="material-symbols-outlined" data-icon="today">today</span>
<span class="text-[10px] font-semibold">Bugün</span>
</button>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
<span class="text-[10px]">Yakında</span>
</button>
<div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center -mt-8 shadow-lg text-on-primary">
<span class="material-symbols-outlined" data-icon="add">add</span>
</div>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="task_alt">task_alt</span>
<span class="text-[10px]">Tamamlanan</span>
</button>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="text-[10px]">Ayarlar</span>
</button>
</div>
<script>
        // Simple Micro-interaction for the progress bar and cards
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('section').forEach(section => {
                section.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
                observer.observe(section);
            });
        });
    </script>
</body></html>
