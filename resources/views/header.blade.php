<!doctype html>
<html lang="en">
  <head>
    <!-- Primary Meta Tags -->
    <title>Coding Terms | {{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Coding Terms | {{$title}}">
    <meta name="description" content="{{($title == 'ALL TERMS')?'Explanation of programming and tech terms. Coding terms dictionary Coding terms dictionary': 'What is '.strtolower($title)}} in programming">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://codingterms.com/">
    <meta property="og:title" content="Coding Terms | {{$title}}">
    <meta property="og:description" content="{{($title == 'ALL TERMS')?'Explanation of programming and tech terms. Coding terms dictionary': 'What is '.strtolower($title)}} in programming">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://codingterms.com/">
    <meta property="twitter:title" content="Coding Terms | {{$title}}">
    <meta property="twitter:description" content="{{($title == 'ALL TERMS')?'Explanation of programming and tech terms. Coding terms dictionary': 'What is '.strtolower($title)}} in programming">
    <meta property="twitter:image" content="">
    <meta charset="utf-8">
    <meta name="author" content="Eddymens">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicons/site.webmanifest">

   <meta name="google-site-verification" content="6vzv3E5M2knCHb09ihdXyAo3NUZWGAQQjGjY0RQ740M" />
@if( app('request')->input('dev'))
<link href="/assets/main.css" rel="prefetch">
<link href="/assets/main.css" rel="stylesheet">
@else
<link href="/assets/main.min.css" rel="prefetch" >
<link href="/assets/main.min.css" rel="stylesheet">
@endif
    <!-- Custom styles -->
    <link href="/assets/style.css" rel="prefetch">
    <link href="/assets/style.css" rel="stylesheet">
    <link href="/" rel="prefetch" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K7K2MR150P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K7K2MR150P');
</script>
  </head>