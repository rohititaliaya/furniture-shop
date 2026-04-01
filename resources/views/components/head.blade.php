<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $seo_title ?? 'Furniture Shop | Premium Home Decor & Furniture' }}</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="{{ $seo_description ?? 'Shop premium furniture for your home. We offer the best deals on sofas, beds, dining tables, and more.' }}">
    <meta name="keywords" content="{{ $seo_keywords ?? 'furniture, home decor, modern furniture, premium furniture, sofa, bed, dining table' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seo_title ?? 'Furniture Shop | Premium Home Decor & Furniture' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Furniture Shop" />
    <meta property="og:image" content="{{ $seo_image ?? asset('images/logo/logo.png') }}" />
    <meta property="og:description" content="{{ $seo_description ?? 'Shop premium furniture for your home. We offer the best deals on sofas, beds, dining tables, and more.' }}" />
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo_title ?? 'Furniture Shop | Premium Home Decor & Furniture' }}">
    <meta name="twitter:description" content="{{ $seo_description ?? 'Shop premium furniture for your home. We offer the best deals on sofas, beds, dining tables, and more.' }}">
    <meta name="twitter:image" content="{{ $seo_image ?? asset('images/logo/logo.png') }}">

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/easyzoom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/slinky.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <style>
        .badge-kesri {
            background-color: #FF9933 !important;
            color: #fff !important;
            border-radius: 5px !important;
            padding: 2px 8px !important;
        }

        .old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 0.9em;
            margin-right: 5px;
        }

        .new-price {
            color: #FF9933 !important;
            font-weight: bold;
        }

        .discount-tag {
            background: #FF9933;
            color: #fff;
            padding: 2px 8px;
            border-radius: 5px;
            font-size: 0.8em;
            margin-left: 5px;
        }
    </style>
    {{-- Toastify --}}
    <link rel="stylesheet" href="{{ asset('css/vendor/toastify.min.css') }}" />

    {{-- Fontaw --}}
    <script src="{{ asset('js/vendor/fontawesome.js') }}" crossorigin="anonymous"></script>

    @stack('styles')
</head>
