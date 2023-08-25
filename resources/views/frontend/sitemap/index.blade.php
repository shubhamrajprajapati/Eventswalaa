<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="{{ Route('main-sitemap.xls') }}"?>
<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ Route('sitemap.frontend.home') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.search-pages') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.about-us-pages') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.contact-pages') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.business-pages') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.legal-pages') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.faq-pages') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.event-pages') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.event-types') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.venues') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.blog-categories') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ Route('sitemap.frontend.blog-posts') }}</loc>
        <lastmod>{{ config('app_settings.frontend.seo.sitemap.updated_at') }}</lastmod>
    </sitemap>
</sitemapindex>
