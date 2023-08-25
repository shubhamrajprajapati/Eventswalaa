<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="{{ Route('main-sitemap.xls') }}"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ Route('frontend.faq') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
</urlset>
