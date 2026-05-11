<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Appends hardened security headers to every response.
 *
 * CSP is intentionally permissive for CDNs used by the public site
 * (Tailwind, GSAP, Three.js, Google Fonts) — tighten it once assets
 * are served from a Vite/local pipeline.
 */
class SecurityHeadersFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // no-op
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Clickjacking protection
        $response->setHeader('X-Frame-Options', 'SAMEORIGIN');

        // MIME-sniffing protection
        $response->setHeader('X-Content-Type-Options', 'nosniff');

        // Legacy XSS filter for old browsers (modern browsers ignore it but harmless)
        $response->setHeader('X-XSS-Protection', '1; mode=block');

        // Referrer policy — leak as little as possible
        $response->setHeader('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Feature / Permissions policy — disable powerful APIs we don't use
        $response->setHeader(
            'Permissions-Policy',
            'geolocation=(), microphone=(), camera=(), payment=(), usb=()'
        );

        // HSTS only when over HTTPS, and only in production
        if (ENVIRONMENT === 'production' && $request->getUri()->getScheme() === 'https') {
            $response->setHeader(
                'Strict-Transport-Security',
                'max-age=31536000; includeSubDomains; preload'
            );
        }

        // Content Security Policy — permissive for known CDNs used by the app.
        // Tighten `script-src` once bundling is introduced.
        if (!$response->hasHeader('Content-Security-Policy')) {
            $csp = implode('; ', [
                "default-src 'self'",
                "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://cdnjs.cloudflare.com https://unpkg.com https://cdn.jsdelivr.net",
                "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net",
                "img-src 'self' data: blob: https:",
                "font-src 'self' data: https://fonts.gstatic.com https://cdnjs.cloudflare.com",
                "connect-src 'self'",
                "frame-ancestors 'self'",
                "base-uri 'self'",
                "form-action 'self'",
                "object-src 'none'",
            ]);
            $response->setHeader('Content-Security-Policy', $csp);
        }
    }
}
