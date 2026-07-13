---
name: Yalın Odak
colors:
  surface: '#f8f9fb'
  surface-dim: '#d9dadc'
  surface-bright: '#f8f9fb'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f4f6'
  surface-container: '#edeef0'
  surface-container-high: '#e7e8ea'
  surface-container-highest: '#e1e2e4'
  on-surface: '#191c1e'
  on-surface-variant: '#434654'
  inverse-surface: '#2e3132'
  inverse-on-surface: '#f0f1f3'
  outline: '#737685'
  outline-variant: '#c3c6d6'
  surface-tint: '#0c56d0'
  primary: '#003d9b'
  on-primary: '#ffffff'
  primary-container: '#0052cc'
  on-primary-container: '#c4d2ff'
  inverse-primary: '#b2c5ff'
  secondary: '#585f6a'
  on-secondary: '#ffffff'
  secondary-container: '#dce3f0'
  on-secondary-container: '#5e6570'
  tertiary: '#7b2600'
  on-tertiary: '#ffffff'
  tertiary-container: '#a33500'
  on-tertiary-container: '#ffc6b2'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#dae2ff'
  primary-fixed-dim: '#b2c5ff'
  on-primary-fixed: '#001848'
  on-primary-fixed-variant: '#0040a2'
  secondary-fixed: '#dce3f0'
  secondary-fixed-dim: '#c0c7d3'
  on-secondary-fixed: '#151c25'
  on-secondary-fixed-variant: '#404751'
  tertiary-fixed: '#ffdbcf'
  tertiary-fixed-dim: '#ffb59b'
  on-tertiary-fixed: '#380d00'
  on-tertiary-fixed-variant: '#812800'
  background: '#f8f9fb'
  on-background: '#191c1e'
  surface-variant: '#e1e2e4'
typography:
  display-lg:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '700'
    lineHeight: 32px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  body-base:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-bold:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.05em
  label-caps:
    fontFamily: Inter
    fontSize: 11px
    fontWeight: '700'
    lineHeight: 16px
    letterSpacing: 0.1em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base-unit: 4px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 40px
  container-max: 800px
  gutter: 20px
---

## Brand & Style
The design system is centered on the concept of "Digital Zen"—a productivity environment that eliminates cognitive load through extreme clarity and intentional whitespace. The target audience includes professionals and students who require a distraction-free space to organize their daily tasks. 

The visual style is a blend of **Minimalism** and **Modern Corporate**. It prioritizes function over form, utilizing a restricted color palette and generous breathing room to evoke a sense of calm and order. Every interaction should feel light, instantaneous, and purposeful, moving the user toward completion without visual friction.

## Colors
This design system uses a professional blue as the core driver for primary actions and brand presence. The palette is structured to maintain high legibility and a sense of cleanliness.

- **Primary (#0052CC):** Used for main action buttons (Giriş Yap, Ekle) and active states.
- **Secondary (#EBF2FF):** A soft blue tint for backgrounds of active list items or subtle highlights.
- **Neutral (#F4F5F7):** The foundation for the application background, ensuring the white cards pop.
- **Success/Warning/Danger:** Reserved strictly for task priority levels (Düşük, Orta, Yüksek) and status indicators.
- **White (#FFFFFF):** Used for the primary "Canvas"—the surface where all tasks reside.

## Typography
Inter is selected for its exceptional readability and neutral, systematic tone. The hierarchy is designed to guide the eye from the category headers to individual tasks.

- **Display levels:** Use for main screen titles like "Bugün" (Today) or "Projeler" (Projects).
- **Body-base:** The primary font for task names.
- **Body-sm:** Used for task descriptions or sub-tasks.
- **Label-caps:** Reserved for metadata headers or small UI labels like "ÖNCELİK" (Priority).

Turkish character support (ğ, ü, ş, i, ö, ç) must be verified to ensure consistent vertical alignment and kerning.

## Layout & Spacing
The layout follows a **Fixed Grid** approach for desktop, centering the content in an 800px wide container to maintain focus and prevent eye fatigue. On mobile, it transitions to a fluid system with 20px side margins.

- **Spacing Rhythm:** Uses a 4px base scale. Most common gaps are 16px (between list items) and 24px (between sections).
- **Whitespace:** Emphasize generous top and bottom padding on task cards to ensure the interface feels "breathable" and organized.
- **Alignment:** All text elements are left-aligned to accommodate Turkish reading patterns. Action icons (edit, delete) are right-aligned.

## Elevation & Depth
This design system utilizes **Tonal Layers** and **Low-Contrast Outlines** rather than heavy shadows to maintain a minimalist aesthetic.

- **Level 0 (Background):** Neutral (#F4F5F7).
- **Level 1 (Cards):** White (#FFFFFF) with a 1px solid border (#E1E4E8). No shadow.
- **Level 2 (Interaction):** When a task is hovered or dragged, apply a very soft, diffused shadow: `0 4px 12px rgba(0, 0, 0, 0.05)`.
- **Level 3 (Modals):** Pure white with a 10% opacity black backdrop blur to keep the background context visible but secondary.

## Shapes
The shape language is "Soft" (0.25rem / 4px). This subtle rounding provides a professional yet approachable feel without the playfulness of fully rounded corners.

- **Standard Elements:** Checkboxes, input fields, and task cards use a 4px radius.
- **Priority Badges:** Use `rounded-lg` (8px) to distinguish them as distinct interactive or informative pills.
- **Main Action Buttons:** Use 4px radius to maintain the architectural, clean-lined aesthetic.

## Components

- **Input Fields (Görev Ekle):** High-contrast white background with a subtle placeholder text in `text-muted`. On focus, the border changes to Primary Blue (#0052CC) with a subtle 2px outer glow.
- **Checkboxes:** Square with a 4px radius. When checked, the box fills with Primary Blue and the task text receives a `text-muted` color and a subtle line-through.
- **Priority Badges (Etiketler):**
    - *Yüksek (High):* Red background tint with dark red text.
    - *Orta (Medium):* Amber background tint with dark amber text.
    - *Düşük (Low):* Green background tint with dark green text.
- **List Items:** Each task is a white row. Hovering over a row reveals "Hızlı İşlemler" (Quick Actions: Düzenle, Sil) at the far right.
- **Progress Indicator:** A thin, 4px height bar at the top of the list showing "Tamamlanan" (Completed) percentage using the Primary Blue.
- **Empty State:** A centered illustration in soft grays with a clear "İlk görevinizi ekleyin" (Add your first task) call-to-action.