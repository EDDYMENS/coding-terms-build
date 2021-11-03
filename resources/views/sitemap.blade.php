@php
$header = '<?xml version="1.0" encoding="UTF-8"?>';
@endphp
{!! $header !!}
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
  <loc>https://codingterms.com</loc>
  <lastmod>{{date('Y-m-d')}}</lastmod>
  <priority>1.00</priority>
</url>

@foreach(getSiteMapData() as $term => $lastModified)
<url>
  <loc>https://codingterms.com/term/{{$term}}</loc>
  <lastmod>{{$lastModified}}</lastmod>
  <priority>0.5</priority>
</url>
@endforeach

</urlset>