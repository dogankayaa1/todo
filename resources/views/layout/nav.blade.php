<!DOCTYPE html>

<html class="light" lang="tr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Yalın Odak - Zihnini Özgür Bırak</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-low": "#f3f4f6",
                    "secondary-container": "#dce3f0",
                    "surface": "#f8f9fb",
                    "primary-fixed": "#dae2ff",
                    "surface-bright": "#f8f9fb",
                    "on-tertiary-fixed": "#380d00",
                    "on-surface-variant": "#434654",
                    "primary-fixed-dim": "#b2c5ff",
                    "on-error-container": "#93000a",
                    "background": "#f8f9fb",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed-variant": "#404751",
                    "on-primary-container": "#c4d2ff",
                    "surface-container-highest": "#e1e2e4",
                    "inverse-on-surface": "#f0f1f3",
                    "surface-variant": "#e1e2e4",
                    "secondary-fixed": "#dce3f0",
                    "outline-variant": "#c3c6d6",
                    "primary": "#003d9b",
                    "on-secondary-fixed": "#151c25",
                    "on-tertiary": "#ffffff",
                    "on-background": "#191c1e",
                    "inverse-surface": "#2e3132",
                    "on-tertiary-fixed-variant": "#812800",
                    "error": "#ba1a1a",
                    "tertiary-fixed-dim": "#ffb59b",
                    "surface-dim": "#d9dadc",
                    "on-secondary": "#ffffff",
                    "primary-container": "#0052cc",
                    "surface-container": "#edeef0",
                    "on-primary": "#ffffff",
                    "surface-container-high": "#e7e8ea",
                    "outline": "#737685",
                    "surface-tint": "#0c56d0",
                    "on-error": "#ffffff",
                    "tertiary-fixed": "#ffdbcf",
                    "on-secondary-container": "#5e6570",
                    "error-container": "#ffdad6",
                    "tertiary-fixed-dim": "#ffb59b",
                    "secondary-fixed-dim": "#c0c7d3",
                    "inverse-primary": "#b2c5ff",
                    "on-surface": "#191c1e",
                    "tertiary": "#7b2600",
                    "secondary": "#585f6a",
                    "on-primary-fixed": "#001848",
                    "on-primary-fixed-variant": "#0040a2",
                    "on-tertiary-container": "#ffc6b2"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "md": "16px",
                    "xl": "40px",
                    "base-unit": "4px",
                    "sm": "8px",
                    "gutter": "20px",
                    "lg": "24px",
                    "container-max": "800px",
                    "xs": "4px"
            },
            "fontFamily": {
                    "label-caps": ["Inter"],
                    "body-base": ["Inter"],
                    "label-bold": ["Inter"],
                    "display-lg": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "body-sm": ["Inter"]
            },
            "fontSize": {
                    "label-caps": ["11px", {"lineHeight": "16px", "letterSpacing": "0.1em", "fontWeight": "700"}],
                    "body-base": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "label-bold": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "display-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(225, 228, 232, 0.5);
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- Top Navigation Bar -->
<header class="bg-surface sticky top-0 z-50 border-b border-outline-variant">
<nav class="flex justify-between items-center h-16 px-gutter max-w-container-max mx-auto">
<div class="font-display-lg text-display-lg font-bold text-primary">Yalın Odak</div>
<div class="hidden md:flex items-center space-x-lg">
<a class="text-primary font-bold border-b-2 border-primary font-body-base text-body-base h-full flex items-center" href="#">Ana Sayfa</a>
<a class="text-on-surface-variant font-body-base text-body-base hover:bg-surface-container-low transition-colors px-md py-xs rounded" href="#">Özellikler</a>
<a class="text-on-surface-variant font-body-base text-body-base hover:bg-surface-container-low transition-colors px-md py-xs rounded" href="#">Fiyatlandırma</a>
</div>
<div class="flex items-center gap-md">
<button class="active:scale-95 transition-transform duration-150 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="bg-primary text-on-primary px-lg py-sm rounded-full font-label-bold text-label-bold transition-all hover:bg-primary-container active:scale-95">
                    Hemen Başla
                </button>
</div>
</nav>
</header>
<main class="max-w-container-max mx-auto px-gutter md:px-0">
