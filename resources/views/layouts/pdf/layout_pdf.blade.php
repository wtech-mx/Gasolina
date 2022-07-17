<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('template_title') - SASISOPA PDF</title>
    <link rel="stylesheet" href="{{ public_path('assets/bootstrap/css/bootstrapv3.3.6.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ public_path('css/pdfs.css') }}" type="text/css">
  </head>

  <body style="background-color:#ffffff!important">

        @include('layouts.pdf.pdf_header_control')
        @include('layouts.pdf.pdf_firmas')
        @include('layouts.pdf.pdf_header')
        @yield('content_pdf')

  </body>
</html>
