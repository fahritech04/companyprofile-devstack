# Website Builder Features

## Overview
DevStack Website Builder adalah fitur SaaS yang memungkinkan pengguna (klien) membuat, mengelola, dan mempublikasikan website mereka sendiri langsung dari dashboard client portal.

## Fitur Utama

### 1. Template System
- **6 Template bawaan**: Default, Business, Portfolio, E-Commerce, SaaS, Landing Page
- Setiap template memiliki konfigurasi warna, tipografi, dan layout default
- Template dapat dikustomisasi melalui config JSON

### 2. Page Management
- Halaman default: Home, About, Contact
- Template-specific pages:
  - E-Commerce: Products, Cart
  - Portfolio: Works
  - SaaS: Features, Pricing
- Setiap halaman memiliki slug, order, dan visibility toggle

### 3. Theme Customization
- **Colors**: Primary, Secondary, Accent, Text, Background
- **Typography**: Heading font, Body font
- **Layout**: Max width, Padding
- Semua konfigurasi disimpan dalam JSON di kolom `config`

### 4. SEO Management
- Meta title per website
- Meta description
- Custom domain support
- Slug-based URL structure

### 5. Status Workflow
- **Draft**: Website baru, belum dipublikasikan
- **Building**: Sedang dalam pengembangan
- **Live**: Sudah dipublikasikan dan dapat diakses
- **Suspended**: Ditangguhkan
- **Archived**: Diarsipkan (soft delete)

## Database Schema

### Tabel `websites`
| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id | INT | Primary key |
| user_id | INT | Foreign key ke users |
| order_id | INT | Foreign key ke orders (opsional) |
| site_name | VARCHAR(100) | Nama website |
| slug | VARCHAR(120) | URL-friendly slug (unique) |
| template | VARCHAR(50) | Nama template |
| status | ENUM | draft/building/live/suspended/archived |
| config | JSON | Konfigurasi tema |
| pages | JSON | Daftar halaman |
| assets | JSON | Daftar asset |
| domain | VARCHAR(255) | Domain default |
| custom_domain | VARCHAR(255) | Custom domain |
| meta_title | VARCHAR(255) | Meta title |
| meta_description | TEXT | Meta description |
| published_at | DATETIME | Waktu publish |
| created_at | DATETIME | Waktu pembuatan |
| updated_at | DATETIME | Waktu update |

## API Endpoints

### Authentication
Semua endpoint API memerlukan session login (`user_id` dalam session).

### Endpoints

#### GET `/api/website-builder`
Mengambil semua website milik user yang sedang login.

**Response:**
```json
{
  "success": true,
  "data": [ /* array of websites */ ]
}
```

#### POST `/api/website-builder/create`
Membuat website baru.

**Body:**
```json
{
  "site_name": "My Website",
  "template": "business"
}
```

**Response:**
```json
{
  "success": true,
  "message": "Website created successfully",
  "data": { /* website object */ }
}
```

#### GET `/api/website-builder/show/{id}`
Mengambil detail satu website.

#### POST `/api/website-builder/update/{id}`
Update data website.

**Body (partial):**
```json
{
  "site_name": "New Name",
  "meta_title": "SEO Title",
  "meta_description": "Description"
}
```

#### POST `/api/website-builder/update-pages/{id}`
Update pages JSON.

#### POST `/api/website-builder/publish/{id}`
Publish website (status → live).

#### POST `/api/website-builder/delete/{id}`
Arsipkan website (status → archived).

## Web Routes (Dashboard)

| Route | Method | Deskripsi |
|-------|--------|-----------|
| `/dashboard` | GET | Website builder dashboard |
| `/dashboard/websites` | GET | List semua website |
| `/dashboard/websites/create` | GET | Form create website |
| `/dashboard/websites/store` | POST | Proses create website |
| `/dashboard/websites/edit/{id}` | GET | Form edit website |

## Template Configurations

### Default
```json
{
  "colors": {
    "primary": "#3b82f6",
    "secondary": "#1e40af",
    "accent": "#60a5fa",
    "text": "#e2e8f0",
    "bg": "#040b18"
  }
}
```

### Business
```json
{
  "colors": {
    "primary": "#0f172a",
    "secondary": "#334155",
    "accent": "#3b82f6",
    "text": "#f8fafc",
    "bg": "#020617"
  }
}
```

### Portfolio
```json
{
  "colors": {
    "primary": "#18181b",
    "secondary": "#27272a",
    "accent": "#a855f7",
    "text": "#fafafa",
    "bg": "#09090b"
  }
}
```

### E-Commerce
```json
{
  "colors": {
    "primary": "#059669",
    "secondary": "#047857",
    "accent": "#10b981",
    "text": "#f0fdf4",
    "bg": "#022c22"
  }
}
```

### SaaS
```json
{
  "colors": {
    "primary": "#6366f1",
    "secondary": "#4f46e5",
    "accent": "#818cf8",
    "text": "#eef2ff",
    "bg": "#1e1b4b"
  }
}
```

### Landing Page
```json
{
  "colors": {
    "primary": "#f59e0b",
    "secondary": "#d97706",
    "accent": "#fbbf24",
    "text": "#fffbeb",
    "bg": "#451a03"
  }
}
```

## UI/UX Design System
Website builder menggunakan tema **Dark Glassmorphism** yang konsisten dengan seluruh DevStack platform:
- Background: `#040b18`, `#060e1f`, `#0a1628`
- Accent: `#3b82f6`
- Glass cards: `backdrop-filter: blur(20px)`, `bg-white/5`, `border-white/10`
- Glow effects: `shadow-blue-500/25`
- Animations: `animate-fade-in`, `shine-card`, `stat-glow`

## Future Enhancements
1. **Drag & Drop Editor**: Visual page builder dengan komponen yang dapat di-drag
2. **Component Library**: Koleksi komponen reusable (hero, features, pricing, footer, dll)
3. **Real-time Preview**: Preview website secara real-time saat editing
4. **Custom CSS**: Input custom CSS untuk advanced users
5. **Form Builder**: Builder form untuk lead capture dan contact
6. **Analytics Dashboard**: Statistik pengunjung website
7. **Multi-language**: Support multiple languages per website
8. **E-commerce Engine**: Product catalog, cart, checkout
