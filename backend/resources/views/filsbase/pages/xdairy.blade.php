<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>X Dairy - Automate Dairy Management System</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend-images/favicon.png') }}">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{ asset('frontend-css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('frontend-css/slicknav.min.css') }}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('frontend-css/swiper-bundle.min.css') }}">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('frontend-css/all.min.css') }}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('frontend-css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{ asset('frontend-css/magnific-popup.css') }}">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{ asset('frontend-css/mousecursor.css') }}">
	<!-- Main Custom Css -->
	<link href="{{ asset('frontend-css/custom.css') }}" rel="stylesheet" media="screen">
	<style>
		/* ===== X Dairy Global ===== */
		:root {
			--xd-primary: #1a3a6b;
			--xd-blue: #1565c0;
			--xd-light-blue: #42a5f5;
			--xd-green: #2e7d32;
			--xd-green-mid: #43a047;
			--xd-light: #e3f2fd;
		}

        /* Topbar & Header variant (rounded white nav) */
        .topbar {
            background: linear-gradient(90deg,#dfefff,#eef6ff);
            padding: 6px 0;
            font-size: 13px;
        }
        .topbar .social-list { display:flex; gap:12px; align-items:center; }
        .topbar .social-list li { list-style:none; }
        .topbar .top-info { display:flex; gap:18px; align-items:center; justify-content:flex-end; }
        .header-sticky { background: transparent; }
        .header-card {
            background:#fff; border-radius:12px; padding:14px 18px; box-shadow:0 8px 30px rgba(16,40,80,0.08);
            margin:8px 12px; display:flex; align-items:center; justify-content:space-between;
        }
        .header-card .navbar-brand img { height:40px; }
        .header-card .main-menu { flex:1; margin:0 30px; }
        .header-card .header-btn .btn-default { padding:10px 18px; border-radius:8px; }
        @media (max-width: 991px) {
            .header-card { margin:6px; padding:10px; }
            .topbar { display:none; }
        }

		/* ===== Hero ===== */
        .xd-hero {
            background: #d9e2ff;
            padding: 250px 0 90px;
			min-height: 90vh;
			display: flex;
			align-items: center;
			position: relative;
			overflow: hidden;
		}
		.xd-hero > .container-fluid { width: 100%; max-width: 1500px; margin: 0 auto; }
		.xd-badge {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			background: #1565c0;
			color: #fff;
			font-size: 11px;
			font-weight: 700;
			letter-spacing: 1px;
			padding: 8px 18px;
			border-radius: 6px;
			margin-bottom: 22px;
		}
		.xd-badge .badge-check {
			width: 18px; height: 18px;
			background: #e53935;
			border-radius: 4px;
			display: flex; align-items: center; justify-content: center;
			flex-shrink: 0;
			font-size: 10px;
			color: #fff;
		}
		.xd-hero h1 {
			font-size: 44px;
			font-weight: 800;
			color: #1a1a2e;
			line-height: 1.2;
			margin-bottom: 20px;
		}
		.xd-hero p.lead {
			color: #444;
			font-size: 14.5px;
			line-height: 1.85;
			margin-bottom: 32px;
			max-width: 640px;
		}
		.xd-hero-btns { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px; }
		.xd-btn {
			display: inline-block;
			padding: 12px 28px;
			border-radius: 4px;
			font-size: 12px;
			font-weight: 800;
			text-decoration: none;
			transition: all 0.3s;
			letter-spacing: 1px;
			text-transform: uppercase;
		}
		.xd-btn-blue { background: transparent; color: #1565c0; border: 2px solid #1565c0; }
		.xd-btn-blue:hover { background: #1565c0; color: #fff; }
		.xd-btn-orange { background: transparent; color: #e65100; border: 2px solid #e65100; }
		.xd-btn-orange:hover { background: #e65100; color: #fff; }
		.xd-btn-green { background: transparent; color: #2e7d32; border: 2px solid #2e7d32; }
		.xd-btn-green:hover { background: #2e7d32; color: #fff; }

		/* Hero Right */
		.xd-hero-visual {
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.xd-hero-main-img {
			width: 100%;
			max-width: 560px;
			height: auto;
			display: block;
		}

		/* ===== Steps ===== */
		.xd-steps {
			background: linear-gradient(to bottom, #d9e2ff 0%, #ffffff 55%);
			padding: 0 0 70px;
		}
		.xd-steps-cards-wrap {
			padding: 50px 0 60px;
		}
		.xd-step-card {
			background: #fff;
			border-radius: 14px;
			padding: 22px 20px;
			height: 100%;
			box-shadow: 0 4px 24px rgba(0,0,0,0.07);
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 14px;
			transition: transform 0.3s, box-shadow 0.3s;
		}
		.xd-step-card:hover {
			transform: translateY(-4px);
			box-shadow: 0 10px 32px rgba(0,0,0,0.11);
		}
		.xd-step-card-text {
			flex: 1;
		}
		.xd-step-card-text h5 {
			font-size: 13.5px;
			font-weight: 700;
			color: #1a1a2e;
			margin: 0;
			line-height: 1.45;
		}
		.xd-step-icon-wrap {
			width: 48px; height: 48px;
			border-radius: 12px;
			background: #e8f5e9;
			display: flex; align-items: center; justify-content: center;
			font-size: 20px;
			color: #2e7d32;
			flex-shrink: 0;
		}

		/* ===== Section Header ===== */
		.xd-section-header { text-align: center; margin-bottom: 50px; }
		.xd-label {
			display: inline-block;
			background: #e3f2fd;
			color: #1565c0;
			font-size: 11px;
			font-weight: 700;
			letter-spacing: 2px;
			text-transform: uppercase;
			padding: 6px 16px;
			border-radius: 30px;
			margin-bottom: 14px;
		}
		.xd-section-header h2 {
			font-size: 34px;
			font-weight: 800;
			color: #1a1a2e;
			margin-bottom: 14px;
		}
		.xd-section-header h2 span { color: #1565c0; }
		.xd-section-header p {
			color: #666;
			font-size: 14.5px;
			max-width: 620px;
			margin: 0 auto;
			line-height: 1.7;
		}

		/* ===== Modules ===== */
		.xd-modules { padding: 60px 0 80px; background: #fff; }
		.xd-module-card {
			padding: 18px 18px 20px;
			border: 1px solid #fce6e6;
			border-radius: 13px;
			background: #fff;
			height: 100%;
			box-shadow: 0 2px 8px rgba(0,0,0,0.05);
			transition: box-shadow 0.25s, border-color 0.25s;
		}
		.xd-module-card:hover {
			box-shadow: 0 6px 22px rgba(0,0,0,0.10);
			border-color: #f5b8b8;
		}
		.xd-module-head {
			display: flex;
			align-items: center;
			gap: 12px;
			margin-bottom: 12px;
		}
		.xd-module-icon {
			width: 56px; height: 56px;
			border-radius: 12px;
			background: #f4f5f7;
			display: flex; align-items: center; justify-content: center;
			flex-shrink: 0;
		}
		.xd-module-icon img {
			width: 38px; height: 38px;
			object-fit: contain;
		}
		.xd-module-card h4 {
			font-size: 14px;
			font-weight: 700;
			color: #222;
			margin: 0;
			line-height: 1.35;
		}
		.xd-module-card p {
			font-size: 12.5px;
			color: #666;
			margin: 0;
			line-height: 1.7;
		}

		/* ===== Feature Sections ===== */
		.xd-feature { padding: 80px 0; }
		.xd-feature.bg-gray { background: #f4f6f9; }
		.xd-feature.bg-white { background: #fff; }

		/* ===== Module Feature (new layout) ===== */
		.xd-mf { padding: 80px 0; background: #fff; }
		.xd-mf-title {
			font-size: 34px;
			font-weight: 800;
			color: #111;
			margin-bottom: 18px;
			line-height: 1.2;
		}
		.xd-mf-desc {
			font-size: 14.5px;
			color: #555;
			line-height: 1.9;
			margin: 0;
		}
		.xd-mf-img {
			width: 100%;
			border-radius: 12px;
			box-shadow: 0 8px 32px rgba(0,0,0,0.12);
			display: block;
		}
		.xd-feat-cards { margin-top: 48px; }
		.xd-feat-card {
			display: flex;
			gap: 14px;
			align-items: flex-start;
			padding: 18px 16px;
			border-radius: 12px;
			height: 100%;
		}
		.xd-feat-card-icon {
			width: 62px; height: 62px;
			background: rgba(255,255,255,0.75);
			border-radius: 12px;
			display: flex; align-items: center; justify-content: center;
			flex-shrink: 0;
			box-shadow: 0 1px 4px rgba(0,0,0,0.08);
		}
		.xd-feat-card-icon img { width: 42px; height: 42px; object-fit: contain; }
		.xd-feat-card-body strong {
			font-size: 14px;
			font-weight: 700;
			color: #222;
			display: block;
			margin-bottom: 6px;
		}
		.xd-feat-card-body p {
			font-size: 12.5px;
			color: #555;
			margin: 0;
			line-height: 1.65;
		}
		.xd-feature-label {
			display: inline-block;
			background: #e3f2fd;
			color: #1565c0;
			font-size: 11px;
			font-weight: 700;
			letter-spacing: 2px;
			text-transform: uppercase;
			padding: 6px 16px;
			border-radius: 30px;
			margin-bottom: 14px;
		}
		.xd-feature-title {
			font-size: 30px;
			font-weight: 800;
			color: #1a1a2e;
			margin-bottom: 14px;
			line-height: 1.3;
		}
		.xd-feature-title span { color: #1565c0; }
		.xd-feature-desc {
			font-size: 14px;
			color: #555;
			line-height: 1.85;
			margin-bottom: 28px;
		}

		/* Sub-feature grid */
		.xd-sub-grid {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 12px;
			margin-bottom: 28px;
		}
		.xd-sub-item {
			display: flex;
			align-items: flex-start;
			gap: 10px;
			padding: 12px;
			background: #f8fafd;
			border-radius: 10px;
			border: 1px solid #e8edf2;
			transition: all 0.2s;
		}
		.xd-sub-item:hover { border-color: #1565c0; background: rgba(227,242,253,0.3); }
		.xd-sub-icon {
			width: 34px; height: 34px;
			background: #e3f2fd;
			border-radius: 8px;
			display: flex; align-items: center; justify-content: center;
			font-size: 14px;
			color: #1565c0;
			flex-shrink: 0;
		}
		.xd-sub-item strong {
			display: block;
			font-size: 12.5px;
			font-weight: 700;
			color: #1a1a2e;
			margin-bottom: 2px;
		}
		.xd-sub-item p {
			font-size: 11.5px;
			color: #777;
			margin: 0;
			line-height: 1.5;
		}

		/* Mockup */
		.xd-mockup {
			background: #1a2744;
			border-radius: 16px;
			overflow: hidden;
			box-shadow: 0 20px 60px rgba(0,0,0,0.25);
		}
		.xd-mockup-bar {
			background: #111d38;
			padding: 10px 16px;
			display: flex;
			align-items: center;
			gap: 6px;
		}
		.xd-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
		.xd-dot.r { background: #ef5350; }
		.xd-dot.y { background: #fdd835; }
		.xd-dot.g { background: #66bb6a; }
		.xd-mockup-bar span { font-size: 11px; color: rgba(255,255,255,0.5); margin-left: 10px; }
		.xd-mockup-body { padding: 20px; }

		/* Stats row */
		.xd-stat-row {
			display: grid;
			gap: 10px;
			margin-bottom: 16px;
		}
		.xd-stat-row.cols-2 { grid-template-columns: 1fr 1fr; }
		.xd-stat-row.cols-3 { grid-template-columns: 1fr 1fr 1fr; }
		.xd-stat-box {
			border-radius: 10px;
			padding: 14px 12px;
			text-align: center;
		}
		.xd-stat-box .stat-icon { font-size: 18px; margin-bottom: 6px; display: block; }
		.xd-stat-box .stat-val { font-size: 20px; font-weight: 800; display: block; margin-bottom: 2px; }
		.xd-stat-box .stat-lbl { font-size: 10px; color: rgba(255,255,255,0.6); }
		.bg-green-dark { background: #1b5e20; }
		.bg-blue-dark { background: #0d47a1; }
		.bg-orange-dark { background: #e65100; }
		.bg-purple-dark { background: #4a148c; }

		/* Table mockup */
		.xd-tbl-row { display: flex; gap: 6px; margin-bottom: 6px; align-items: center; }
		.xd-tbl-cell {
			flex: 1; background: rgba(255,255,255,0.07);
			border-radius: 4px; padding: 7px 9px;
			font-size: 11px; color: rgba(255,255,255,0.75);
		}
		.xd-tbl-cell.h { background: rgba(255,255,255,0.15); color: rgba(255,255,255,0.95); font-weight: 700; }
		.xd-tbl-cell.ok { color: #66bb6a; font-weight: 600; }
		.xd-tbl-cell.warn { color: #ffa726; font-weight: 600; }
		.xd-tbl-cell.info { color: #42a5f5; font-weight: 600; }

		/* Bar chart */
		.xd-chart { display: flex; align-items: flex-end; gap: 5px; height: 70px; margin-top: 14px; padding-top: 10px; }
		.xd-bar { flex: 1; border-radius: 4px 4px 0 0; }
		.xd-bar.b1 { background: #1565c0; opacity: 0.7; }
		.xd-bar.b2 { background: #42a5f5; opacity: 0.9; }
		.xd-bar.b3 { background: #66bb6a; opacity: 0.8; }

		/* Progress bar */
		.xd-progress-row { margin-bottom: 10px; }
		.xd-progress-label { display: flex; justify-content: space-between; font-size: 11px; color: rgba(255,255,255,0.7); margin-bottom: 4px; }
		.xd-progress-bar { height: 6px; background: rgba(255,255,255,0.1); border-radius: 3px; overflow: hidden; }
		.xd-progress-fill { height: 100%; border-radius: 3px; }

		/* ===== Pricing ===== */
		.xd-pricing { padding: 80px 0; background: #fff; }
		.xd-price-card {
			background: #fff;
			border-radius: 12px;
			padding: 36px 32px 36px;
			border: 1.5px solid #e0e0e0;
			height: 100%;
			transition: box-shadow 0.3s;
			position: relative;
			overflow: hidden;
		}
		.xd-price-card:hover { box-shadow: 0 10px 40px rgba(0,0,0,0.09); }
		.xd-price-card.recommended {
			border: 2.5px solid #16a34a;
			padding-top: 0;
		}
		.xd-recommended-badge {
			display: block;
			background: #16a34a;
			color: #fff;
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 2.5px;
			text-transform: uppercase;
			text-align: center;
			padding: 11px 0;
			margin: 0 -32px 30px -32px;
		}
		.xd-price-name { font-size: 20px; font-weight: 800; color: #111; margin-bottom: 6px; }
		.xd-price-tagline { font-size: 13px; color: #16a34a; margin-bottom: 20px; font-style: italic; }
		.xd-price-amount { font-size: 58px; font-weight: 800; color: #111; line-height: 1; display: inline; }
		.xd-price-period { font-size: 15px; color: #888; display: inline; }
		.xd-price-note { font-size: 12px; color: #888; margin: 8px 0 24px; display: block; }
		.xd-price-divider { border: none; border-top: 1px solid #f0f0f0; margin: 22px 0 18px; }
		.xd-price-features { list-style: none; padding: 0; margin: 0; }
		.xd-price-features li {
			display: flex; align-items: center; gap: 12px;
			padding: 9px 0; font-size: 13.5px; color: #333;
			border-bottom: 1px solid #f5f5f5;
		}
		.xd-price-features li:last-child { border-bottom: none; }
		.xd-price-feat-icon {
			width: 28px; height: 28px; border-radius: 7px;
			display: flex; align-items: center; justify-content: center;
			font-size: 12px; flex-shrink: 0;
		}
		.xd-price-feat-q {
			color: #bbb; font-size: 12px; margin-left: 4px; flex-shrink: 0;
		}
		.xd-price-btn {
			display: block; text-align: center; padding: 15px; border-radius: 8px;
			font-weight: 700; font-size: 15px; text-decoration: none;
			transition: background 0.2s; background: #111; color: #fff;
		}
		.xd-price-btn:hover { background: #333; color: #fff; }
		.xd-price-btn-dark { background: #111; color: #fff; }
		.xd-price-btn-dark:hover { background: #333; color: #fff; }
		.xd-price-btn-outline-white { background: #111; color: #fff; }
		.xd-price-btn-outline-white:hover { background: #333; color: #fff; }

		/* ===== Vet Section ===== */
		.xd-vet { padding: 70px 0 80px; background: #d9e2ff; }
		.xd-vet-box {
			display: flex;
			align-items: flex-start;
			gap: 36px;
			flex-wrap: wrap;
			margin-bottom: 60px;
		}
		.xd-vet-icon-wrap {
			width: 130px; height: 130px;
			flex-shrink: 0;
			display: flex; align-items: center; justify-content: center;
		}
		.xd-vet-icon-wrap img { width: 130px; height: 130px; object-fit: contain; }
		.xd-vet-content { flex: 1; min-width: 260px; }
		.xd-vet-content h2 { font-size: 26px; font-weight: 800; color: #111; margin-bottom: 14px; }
		.xd-vet-content p { font-size: 14px; color: #333; line-height: 1.85; margin: 0; }

		/* Vet slider */
		.xd-vet-slider { position: relative; overflow: hidden; }
		.xd-vet-track {
			display: flex;
			gap: 24px;
			transition: transform 0.4s ease;
		}
		.xd-vet-slide {
			flex: 0 0 calc(33.333% - 16px);
			border-radius: 12px;
			overflow: hidden;
			box-shadow: 0 6px 28px rgba(0,0,0,0.15);
		}
		.xd-vet-slide img { width: 100%; height: auto; display: block; }
		.xd-vet-arrows {
			display: flex; justify-content: center; gap: 12px; margin-top: 24px;
		}
		.xd-vet-arrow {
			width: 40px; height: 40px; border-radius: 50%;
			background: #fff; border: none; cursor: pointer;
			display: flex; align-items: center; justify-content: center;
			font-size: 16px; color: #333;
			box-shadow: 0 2px 10px rgba(0,0,0,0.12);
			transition: background 0.2s;
		}
		.xd-vet-arrow:hover { background: #1565c0; color: #fff; }
		@media (max-width: 768px) {
			.xd-vet-slide { flex: 0 0 90%; }
		}

		/* ===== FAQ ===== */
		.xd-faq { padding: 80px 0; background: #fff; }
		.xd-faq-title {
			text-align: center; font-size: 30px; font-weight: 800;
			color: #111; margin-bottom: 48px;
		}
		.xd-faq .accordion-button {
			font-weight: 600; font-size: 14.5px; color: #333;
			background: #f0f6ff; padding: 18px 20px;
			box-shadow: none !important;
		}
		.xd-faq .accordion-button:not(.collapsed) {
			color: #1d4ed8; background: #e8f0fe; box-shadow: none;
		}
		.xd-faq .accordion-button::after {
			content: "+";
			background-image: none;
			font-size: 22px; font-weight: 300; color: #777;
			width: auto; height: auto;
			transform: none !important; transition: none;
			line-height: 1;
		}
		.xd-faq .accordion-button:not(.collapsed)::after {
			content: "−"; color: #1d4ed8;
		}
		.xd-faq .accordion-item {
			border: 1px solid #dde3ee;
			border-radius: 8px !important;
			margin-bottom: 10px;
			overflow: hidden;
			background: #f0f6ff;
		}
		.xd-faq .accordion-body {
			font-size: 13.5px; color: #555; line-height: 1.8;
			background: #f0f6ff; padding: 4px 20px 18px;
		}
		.xd-faq-support {
			text-align: center; margin-top: 44px;
		}
		.xd-faq-support p { margin: 0; font-size: 14px; color: #555; }
		.xd-faq-support a { color: #1565c0; font-weight: 700; text-decoration: none; }

		/* ===== Responsive ===== */
        @media (max-width: 991px) {
            .xd-hero { padding: 120px 0 70px; }
            .xd-hero-visual { padding: 30px 0 10px; }
            .xd-hero-main-img { max-width: 420px; }
        }
        @media (max-width: 768px) {
            .xd-hero { padding: 90px 0 60px; }
            .xd-hero h1 { font-size: 26px; }
            .xd-price-card.recommended { transform: scale(1); }
            .xd-vet-box { padding: 30px 20px; gap: 24px; }
            .xd-sub-grid { grid-template-columns: 1fr; }
        }
	</style>
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('frontend-images/loader.svg') }}" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="topbar">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="social-list d-flex mb-0 p-0">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                    <div class="top-info">
                        <a href="#" class="me-3"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
                        <a href="#" class="me-3"><i class="fa-regular fa-user"></i> Client Area</a>
                        <span><i class="fa-solid fa-phone"></i> +1 234 567 890</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="header-card container-fluid">
                <nav class="navbar navbar-expand-lg w-100">
                    <a class="navbar-brand" href="{{ route('frontend.index') }}">
                        <img src="logo.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.index') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="case-study.html">Case Study</a></li>
                                        <li class="nav-item"><a class="nav-link" href="case-study-single.html">Case Study Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team-single.html">Team Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Plan</a></li>
                                        <li class="nav-item"><a class="nav-link" href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-btn">
                        <a class="btn-default" href="{{ route('filsbase.contact') }}">Contact Us</a>
                    </div>
                    <div class="navbar-toggle"></div>
                </nav>
            </div>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- ===== Hero Section ===== -->
    <section class="xd-hero">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="wow fadeInLeft" data-wow-delay="0.1s">
                        <h1>X Dairy - Automate Dairy Management System.</h1>
                        <p class="lead">X-Dairy is an all-in-one dairy farm management system that simplifies daily operations. It lets farmers track animal records, milk production, breeding, calving, and finances from a single dashboard. By integrating key modules such as Milk Management, Cow Management, Health Management, Reproduction, Feed Management, Finance, Stock Management, Employee Management, and System Configuration, X-Dairy improves accuracy, reduces manual work, and supports better farm planning. The system provides real-time analytics for instant insights into production trends and herd health, while automated alerts ensure critical dates for vaccinations and heat detection are never missed. With comprehensive financial tracking, multi-user role-based access, and robust reporting for PDF or Excel export, X-Dairy empowers farms of all sizes to leverage historical data for precision planning, ultimately boosting efficiency and profitability through modern, data-driven management.</p>
                        <div class="xd-hero-btns">
                            <a href="#" class="xd-btn xd-btn-blue">Live Demo</a>
                            <a href="#pricing" class="xd-btn xd-btn-blue">Pricing</a>
                            <a href="#" class="xd-btn xd-btn-orange">Documentation</a>
                            <a href="#" class="xd-btn xd-btn-green">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="xd-hero-visual wow fadeInRight" data-wow-delay="0.2s">
                        <img src="{{ asset('frontend-images/xdairy.png') }}" alt="X Dairy Management System" class="xd-hero-main-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- ===== Steps Section ===== -->
    <section class="xd-steps">
        <div class="container">
            <div class="xd-steps-cards-wrap">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="xd-step-card wow fadeInUp" data-wow-delay="0.1s">
                            <div class="xd-step-card-text">
                                <h5>Choose and Purchase the X-Dairy Package That Fits Your Needs</h5>
                            </div>
                            <div class="xd-step-icon-wrap">
                                <i class="fa-solid fa-paw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xd-step-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="xd-step-card-text">
                                <h5>Install and Deploy the System on Your Server Environment</h5>
                            </div>
                            <div class="xd-step-icon-wrap">
                                <i class="fa-solid fa-server"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xd-step-card wow fadeInUp" data-wow-delay="0.3s">
                            <div class="xd-step-card-text">
                                <h5>Configure Your Dairy Farm Data and System Settings</h5>
                            </div>
                            <div class="xd-step-icon-wrap">
                                <i class="fa-solid fa-sliders"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="xd-step-card wow fadeInUp" data-wow-delay="0.4s">
                            <div class="xd-step-card-text">
                                <h5>Start Managing and Monitoring Your Dairy Farm Operations</h5>
                            </div>
                            <div class="xd-step-icon-wrap">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modules heading inside steps section for seamless bg transition -->
            <div class="xd-section-header">
                <h2 style="font-size:38px; font-weight:800; color:#1a1a2e; margin-bottom:16px;">10+ Dairy Modules To Manage Dairy Farm</h2>
                <p style="color:#888; font-size:15px; max-width:700px; margin:0 auto; line-height:1.7;">This system includes over ten modules to manage milk collection, cow and calf data, health, reproduction, feed, suppliers, stock, employees, finance, catalogs, and configuration for efficient farm operations.</p>
            </div>
        </div>
    </section>
    <!-- Steps End -->

    <!-- ===== Modules Section ===== -->
    <section class="xd-modules" id="modules">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/milk.png') }}" alt="Milk"></div>
                            <h4>Milk Parlor Management</h4>
                        </div>
                        <p>Manages all milk operations including collection sessions. Milk Analytics shows trends, Collect Milk records daily milk, Collection ID tracks entries, Discarded Milk logs spoiled milk, Calf Feed Milk allocates milk for calves, Sale Milk handles sales, and Sale Due Collection tracks pending payments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/cow.png') }}" alt="Cow"></div>
                            <h4>Cow Management</h4>
                        </div>
                        <p>Handles cow and calf data including performance and organization. Cow Analytics monitors trends, Manage Cow and Manage Cow Calf record animals, Manage Group organizes cows, Animal Profile stores details, and Cow Sale tracks cow transactions for farm management and reporting.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Health"></div>
                            <h4>Health Management</h4>
                        </div>
                        <p>Health Management monitors animal health and treatments. Health Analytics tracks trends, Case Entry logs cases, Lab Confirmations manages results, Treatments records procedures, Vaccine Monitor tracks vaccinations, Hoof Trimming logs care, and Death Records tracks deceased animals to maintain farm health standards.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/pregnent.png') }}" alt="Reproduction"></div>
                            <h4>Reproduction Management</h4>
                        </div>
                        <p>This module manages animal reproduction cycles. Reproduction Analytics tracks performance, Heat Detection identifies estrus, Artificial Insemination monitors AI procedures, Pregnancy Diagnosis confirms pregnancies, Calving Management handles births, and Dry-Off Management schedules and tracks dry-off periods efficiently for herd management.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/box.png') }}" alt="Supplier"></div>
                            <h4>Supplier Management</h4>
                        </div>
                        <p>Supplier Management organizes supplier information and activity. Supplier List maintains supplier contacts and records, while Supplier Statistics analyzes supply trends and performance. It ensures smooth procurement, timely delivery, and proper tracking of materials and feed to support farm operations effectively.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/crown.png') }}" alt="Feed"></div>
                            <h4>Feed Management</h4>
                        </div>
                        <p>Feed Management tracks feed allocation and consumption. Feed Analytics analyzes usage, TMR Formulas manages ration plans, Cow Feed allocates feed to animals, and Feeding Schedule organizes feeding times. It ensures proper nutrition, efficient resource usage, and healthy herd growth consistently.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/coin.png') }}" alt="Finance"></div>
                            <h4>Finance</h4>
                        </div>
                        <p>Finance manages farm finances, assets, and expenses. Financial Analysis provides reports, Total Assets tracks overall holdings, Current and Non-current Assets record resources, and Other Expenses logs costs. It ensures accurate accounting, resource management, and financial decision-making for farm profitability.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/dollar.png') }}" alt="Stock"></div>
                            <h4>Stock Management</h4>
                        </div>
                        <p>Stock Management oversees inventory and supplies. Stock Items and Stock Item Names record items, Stock Transactions logs movements, and Stock Categories and Types organize inventory. It ensures proper stock control, tracking, and availability of feed, medicine, and equipment for efficient farm operations.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/emp.png') }}" alt="Employee"></div>
                            <h4>Employee Management</h4>
                        </div>
                        <p>Employee Management handles staff data and performance. HR Analytics monitors efficiency, Add Staff and Staff List manage employees, User List handles accounts, Employee Salary tracks payments, Attendance records presence, and Designation and User Type assign roles to maintain organized workforce management.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/petinjection.png') }}" alt="Catalog"></div>
                            <h4>Catalog Management</h4>
                        </div>
                        <p>Catalog Management organizes reference data for farm operations. Branch manages locations, Colors and Animal Types categorize animals, Vaccines and Semen Types track medical needs, Drug Types, Units, and Frequencies manage medications, and Disease Categories, Signs, and Lab Tests maintain health records effectively.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/settings.png') }}" alt="Configuration"></div>
                            <h4>Configuration</h4>
                        </div>
                        <p>Configuration manages system settings, notifications, and logs. Settings and Edit Profile customize the system, Notification Templates and SMTP Settings handle communication, Addon Manager manages extensions, System Status monitors health, and Laravel Log records system activity to ensure smooth operations.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xd-module-card">
                        <div class="xd-module-head">
                            <div class="xd-module-icon"><img src="{{ asset('xdairy-images/calculator.png') }}" alt="Tools"></div>
                            <h4>Dairy Farm Tools &amp; Calculators</h4>
                        </div>
                        <p>X-Dairy provides practical tools and calculators designed to help farmers manage daily dairy operations more efficiently. From milk production and feed requirement calculators to pregnancy due date and medication dosage tools, these utilities simplify farm planning, improve accuracy, and support better decision-making.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modules End -->

    <!-- ===== Milk Parlor Feature ===== -->
    <section class="xd-mf">
        <div class="container">
            <!-- Top: text left, image right -->
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <h2 class="xd-mf-title">Milk Parlor Management</h2>
                    <p class="xd-mf-desc">Milk Parlor Management helps dairy farms efficiently manage daily milk collection and production records from a single system. Farmers can record milk collected from each cow, track milking sessions, and monitor cow-wise milk yield in an organized way. The module ensures accurate record-keeping by storing all milk collection data digitally, reducing manual errors and saving time. It also allows farmers to monitor production trends and evaluate herd performance over time. By maintaining clear and structured milk records, the system supports better decision-making, improves farm productivity, and helps dairy farms manage their milk operations more effectively and reliably.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('xdairy-images/Milk-Parlor-Management.png') }}" alt="Milk Parlor Management Dashboard" class="xd-mf-img">
                </div>
            </div>
            <!-- Sub-feature cards -->
            <div class="xd-feat-cards">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#fff2f4;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/Milk-Parlor-Management-Milk.png') }}" alt="Milk Analytics"></div>
                            <div class="xd-feat-card-body">
                                <strong>Milk Analytics</strong>
                                <p>View detailed analytics of milk production including daily, weekly, and monthly reports. Analyze cow performance, milk yield trends, and production efficiency to improve farm productivity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#f3edff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/Milk-Parlor-Management-Milk.png') }}" alt="Collect Milk"></div>
                            <div class="xd-feat-card-body">
                                <strong>Collect Milk</strong>
                                <p>Record milk collected from each cow during every milking session. Automatically track quantity, time, and cow ID to maintain accurate production records.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#e3faff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/Milk-Parlor-Management-Milk.png') }}" alt="Collection ID"></div>
                            <div class="xd-feat-card-body">
                                <strong>Collection ID</strong>
                                <p>Generate a unique collection ID for every milk collection entry. This helps track milk batches, manage records easily, and ensure transparency in dairy operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#fff2f4;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/Milk-Parlor-Management-Milk.png') }}" alt="Calf Feed Milk"></div>
                            <div class="xd-feat-card-body">
                                <strong>Calf Feed Milk</strong>
                                <p>Record milk allocated for feeding calves. This helps track calf nutrition and ensures accurate accounting of milk usage within the farm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#f3edff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/Milk-Parlor-Management-Milk.png') }}" alt="Sale Milk"></div>
                            <div class="xd-feat-card-body">
                                <strong>Sale Milk</strong>
                                <p>You can manage milk sales directly from the system. Record sold quantity, buyer details, pricing, invoice generation, and transaction history for smooth dairy sales management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#e3faff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/Milk-Parlor-Management-Milk.png') }}" alt="Discarded Milk"></div>
                            <div class="xd-feat-card-body">
                                <strong>Discarded Milk</strong>
                                <p>Track milk that is discarded due to health issues, contamination, or quality concerns. Maintain records for compliance, monitoring, and waste reduction.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#fff2f4;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/Milk-Parlor-Management-Milk.png') }}" alt="Sale Due Collection"></div>
                            <div class="xd-feat-card-body">
                                <strong>Sale Due Collection</strong>
                                <p>Track outstanding payments from milk buyers. Monitor due amounts, payment status, and ensure timely collection of milk sale revenue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Cow Management Feature ===== -->
    <section class="xd-mf" style="background:#f9fafb;">
        <div class="container">
            <!-- Top: image left, text right -->
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <img src="{{ asset('xdairy-images/Cow Management.png') }}" alt="Cow Management Dashboard" class="xd-mf-img">
                </div>
                <div class="col-lg-6">
                    <h2 class="xd-mf-title">Cow Management</h2>
                    <p class="xd-mf-desc">Cow Management helps dairy farms efficiently organize and track all cow-related records in one centralized system. Farmers can store important details such as cow ID, breed, age, health status, and production history, making herd management easier and more organized. Cow Analytics provides useful insights into herd performance by analyzing milk production trends and overall cow productivity. The Manage Cow feature allows farmers to add and update cow records, while Manage Cow Calf helps track newborn calves and monitor their growth. Manage Group organizes cows based on categories like breed, age, or production stage. Animal Profile shows complete information for each cow, while Cow Sale, Sale List, and Sale Due Collection help manage livestock sales, track transactions, and monitor pending payments from buyers.</p>
                </div>
            </div>
            <!-- Sub-feature cards -->
            <div class="xd-feat-cards">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#fff2f4;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/cow.png') }}" alt="Cow Analytics"></div>
                            <div class="xd-feat-card-body">
                                <strong>Cow Analytics</strong>
                                <p>Cow Analytics provides insights into herd performance by analyzing production trends, cow productivity, and herd statistics to help farmers make informed management decisions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#f3edff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/cow.png') }}" alt="Manage Cow"></div>
                            <div class="xd-feat-card-body">
                                <strong>Manage Cow</strong>
                                <p>Manage Cow allows farmers to add, edit, and update detailed cow records, ensuring all important animal information is properly stored and easily accessible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#e3faff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/cow.png') }}" alt="Manage Cow Calf"></div>
                            <div class="xd-feat-card-body">
                                <strong>Manage Cow Calf</strong>
                                <p>Manage Cow Calf helps track calves born on the farm and maintain their records, supporting proper monitoring of calf growth and herd expansion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#fff2f4;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/cow.png') }}" alt="Manage Group"></div>
                            <div class="xd-feat-card-body">
                                <strong>Manage Group</strong>
                                <p>Manage Group allows cows to be organized into groups based on breed, age, or production stage for easier herd management and monitoring.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#f3edff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/cow.png') }}" alt="Animal Profile"></div>
                            <div class="xd-feat-card-body">
                                <strong>Animal Profile</strong>
                                <p>Animal Profile provides a detailed overview of each cow, including health records, production history, and other important animal information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#e3faff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/cow.png') }}" alt="Cow Sale"></div>
                            <div class="xd-feat-card-body">
                                <strong>Cow Sale</strong>
                                <p>Manage and track cow sales in one place by recording sale details, viewing the complete sale history, and monitoring pending payments from buyers for better financial control.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Health Management Feature ===== -->
    <section class="xd-mf">
        <div class="container">
            <!-- Top: mockup left, text right -->
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <img src="{{ asset('xdairy-images/HealthManagement.png') }}" alt="Health Management Dashboard" class="xd-mf-img">
                </div>
                <div class="col-lg-6">
                    <h2 class="xd-mf-title">Health Management</h2>
                    <p class="xd-mf-desc"><strong>Health Management</strong> is a comprehensive module designed to help dairy farmers efficiently monitor and maintain the health of their herd. It allows for the systematic recording of each cow's health status, including routine check-ups, symptoms, illnesses, and recovery progress. Farmers can track treatments, vaccinations, and lab test results all in one place, ensuring timely and accurate interventions. By keeping detailed, centralized health records, the system reduces paperwork, prevents oversight, and supports data-driven decisions to improve herd welfare. It also enables better planning for preventive care, early disease detection, and overall productivity, promoting a healthier, more productive farm.</p>
                </div>
            </div>
            <!-- Sub-feature cards: left col 3 stacked, right col 2x2 grid -->
            <div class="xd-feat-cards">
                <div class="row g-3">
                    <!-- Left column: 3 tall stacked cards -->
                    <div class="col-lg-5">
                        <div class="d-flex flex-column gap-3 h-100">
                            <div class="xd-feat-card" style="background:#fff2f4;">
                                <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Health Analytics"></div>
                                <div class="xd-feat-card-body">
                                    <strong>Health Analytics</strong>
                                    <p>Provides visual reports and insights on herd health trends, disease outbreaks, production impact, and other key metrics to help make data-driven decisions.</p>
                                </div>
                            </div>
                            <div class="xd-feat-card" style="background:#f3edff;">
                                <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Case Entry"></div>
                                <div class="xd-feat-card-body">
                                    <strong>Case Entry</strong>
                                    <p>Record new health cases for individual cows, including symptoms, diagnosis, severity, and relevant notes for ongoing monitoring.</p>
                                </div>
                            </div>
                            <div class="xd-feat-card" style="background:#e3faff;">
                                <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Lab Confirmations"></div>
                                <div class="xd-feat-card-body">
                                    <strong>Lab Confirmations</strong>
                                    <p>Store and track laboratory test results for cows, linking them to specific cases for accurate diagnosis and treatment planning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right column: 2x2 grid -->
                    <div class="col-lg-7">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="xd-feat-card" style="background:#fff2f4;">
                                    <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Treatments"></div>
                                    <div class="xd-feat-card-body">
                                        <strong>Treatments</strong>
                                        <p>Document treatments administered to cows, including medications, dosages, schedules, and outcomes to ensure proper care.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="xd-feat-card" style="background:#e3faff;">
                                    <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Vaccine Monitor"></div>
                                    <div class="xd-feat-card-body">
                                        <strong>Vaccine Monitor</strong>
                                        <p>Manage vaccination schedules, track administered vaccines, and receive reminders for upcoming doses to maintain herd immunity.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="xd-feat-card" style="background:#f3edff;">
                                    <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Hoof Trimming"></div>
                                    <div class="xd-feat-card-body">
                                        <strong>Hoof Trimming</strong>
                                        <p>Record hoof care activities, including trimming dates, conditions observed, and follow-up schedules to prevent lameness and maintain mobility.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="xd-feat-card" style="background:#fff8f0;">
                                    <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/medicine.png') }}" alt="Death Records"></div>
                                    <div class="xd-feat-card-body">
                                        <strong>Death Records</strong>
                                        <p>Maintain detailed records of deceased cows, including cause of death, age, and herd impact for farm management and reporting purposes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Reproduction Management Feature ===== -->
    <section class="xd-mf" style="background:#f9fafb;">
        <div class="container">
            <!-- Top: text left, image right -->
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <h2 class="xd-mf-title">Reproduction Management</h2>
                    <p class="xd-mf-desc"><strong>Reproduction Management</strong> is a comprehensive module designed to help dairy farmers efficiently oversee all reproductive activities of their herd. It enables tracking of breeding cycles, mating records, artificial insemination schedules, and pregnancy statuses for every cow. By centralizing reproductive data, farmers can maintain accurate records, plan timely interventions, and improve overall herd fertility. The system supports better decision-making by providing insights into heat detection, breeding efficiency, and calving schedules. With organized reproductive information, farmers can reduce reproductive-related losses, optimize breeding programs, and enhance herd productivity, ensuring healthier cows and higher-quality offspring for sustained farm success.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('xdairy-images/Reproduction-Management.png') }}" alt="Reproduction Management Dashboard" class="xd-mf-img">
                </div>
            </div>
            <!-- Sub-feature cards: 3-col grid -->
            <div class="xd-feat-cards">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#fff2f4;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/pregnent.png') }}" alt="Reproduction Analytics"></div>
                            <div class="xd-feat-card-body">
                                <strong>Reproduction Analytics</strong>
                                <p>Analyze reproductive performance with reports on conception rates, calving intervals, and breeding efficiency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#f3edff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/pregnent.png') }}" alt="Heat Detection"></div>
                            <div class="xd-feat-card-body">
                                <strong>Heat Detection</strong>
                                <p>Identify and log cows in estrus to ensure timely breeding and maximize conception.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#e3faff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/pregnent.png') }}" alt="Artificial Insemination"></div>
                            <div class="xd-feat-card-body">
                                <strong>Artificial Insemination</strong>
                                <p>Schedule, record, and monitor AI procedures, semen use, and outcomes for better fertility control.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#f3edff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/pregnent.png') }}" alt="Pregnancy Diagnosis"></div>
                            <div class="xd-feat-card-body">
                                <strong>Pregnancy Diagnosis</strong>
                                <p>Record and track pregnancy status using diagnostic tests, supporting early intervention and planning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#e3faff;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/pregnent.png') }}" alt="Calving Management"></div>
                            <div class="xd-feat-card-body">
                                <strong>Calving Management</strong>
                                <p>Monitor calving events, cow condition, and calf health for smooth deliveries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xd-feat-card" style="background:#fff2f4;">
                            <div class="xd-feat-card-icon"><img src="{{ asset('xdairy-images/pregnent.png') }}" alt="Dry-Off Management"></div>
                            <div class="xd-feat-card-body">
                                <strong>Dry-Off Management</strong>
                                <p>Plan and track cow dry periods to ensure rest, prevent infections, and optimize future lactation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Pricing Section ===== -->
    <section class="xd-pricing" id="pricing">
        <div class="container">
            <div class="xd-section-header">
                <h2 style="font-size:32px;font-weight:800;color:#111;margin-bottom:10px;">X Dairy - Pricing</h2>
                <p style="color:#666;font-size:14px;">X Dairy Pricing – Affordable Dairy Farm Management Packages</p>
            </div>
            <div class="row g-4 justify-content-center align-items-stretch">
                <!-- Basic -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="xd-price-card w-100">
                        <div class="xd-price-name">X-Dairy Basic</div>
                        <div class="xd-price-tagline">Ideal for small farms starting digital dairy management.</div>
                        <div style="margin-bottom:8px;">
                            <span class="xd-price-amount">$299</span><span class="xd-price-period"> /one-time</span>
                        </div>
                        <span class="xd-price-note">Support Renewal After 6 Month – $50</span>
                        <a href="#" class="xd-price-btn">Buy</a>
                        <hr class="xd-price-divider">
                        <ul class="xd-price-features">
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-house"></i></span> 1 Dairy Farm</li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-code"></i></span> Full Laravel source code <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-circle-down"></i></span> Installation guide</li>
                            <li><span class="xd-price-feat-icon" style="background:#fee2e2;color:#dc2626;"><i class="fa-solid fa-server"></i></span> No Server Setup Included</li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-rotate"></i></span> Lifetime Free updates <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-brands fa-wordpress"></i></span> 6 Month support</li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-lock"></i></span> Only Online functionality <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                            <li><span class="xd-price-feat-icon" style="background:#fee2e2;color:#dc2626;"><i class="fa-solid fa-cloud"></i></span> No Daily backups</li>
                        </ul>
                    </div>
                </div>
                <!-- Professional (Recommended) -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="xd-price-card recommended w-100">
                        <span class="xd-recommended-badge">RECOMMENDED</span>
                        <div class="xd-price-name">X-Dairy Professional</div>
                        <div class="xd-price-tagline">Ideal for growing farms needing advanced management.</div>
                        <div style="margin-bottom:8px;">
                            <span class="xd-price-amount">$599</span><span class="xd-price-period"> /yr</span>
                        </div>
                        <span class="xd-price-note">You pay 599.88 today. Renews at $150.</span>
                        <a href="#" class="xd-price-btn">Buy</a>
                        <hr class="xd-price-divider">
                        <ul class="xd-price-features">
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-house"></i></span> 1 Dairy Farm</li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-code"></i></span> Full Laravel source code</li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-circle-down"></i></span> Complete Installation Included</li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-server"></i></span> Server Setup included</li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-rotate"></i></span> Lifetime Free updates</li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-wifi"></i></span> Offline + Online functionality <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-brands fa-wordpress"></i></span> 6 Month Support <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                            <li><span class="xd-price-feat-icon" style="background:#fee2e2;color:#dc2626;"><i class="fa-solid fa-lock"></i></span> No Daily backups <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                        </ul>
                    </div>
                </div>
                <!-- Enterprise -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="xd-price-card w-100">
                        <div class="xd-price-name">X-Dairy Enterprise</div>
                        <div class="xd-price-tagline">Ideal for large farms needing complete automation.</div>
                        <div style="margin-bottom:8px;">
                            <span class="xd-price-amount">$1000</span><span class="xd-price-period"> /starting</span>
                        </div>
                        <span class="xd-price-note">Starting from 1000$ and Depending on the Customization you need.</span>
                        <a href="{{ route('filsbase.contact') }}" class="xd-price-btn">Contact us</a>
                        <hr class="xd-price-divider">
                        <ul class="xd-price-features">
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-house"></i></span> 1 Dairy Farm</li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-code"></i></span> Full Laravel source code <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-circle-down"></i></span> Complete Installation Included</li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-server"></i></span> Server Setup included <i class="fa-solid fa-circle-question xd-price-feat-q"></i></li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-rotate"></i></span> Lifetime Free updates</li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-wifi"></i></span> Offline + Online functionality</li>
                            <li><span class="xd-price-feat-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-brands fa-wordpress"></i></span> 6 Month Support</li>
                            <li><span class="xd-price-feat-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-cloud"></i></span> Daily backups</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Vet & Dairy Farm Tested ===== -->
    <section class="xd-vet">
        <div class="container">
            <!-- Top: icon + text -->
            <div class="xd-vet-box">
                <div class="xd-vet-icon-wrap">
                    <img src="{{ asset('xdairy-images/injectionsetting.png') }}" alt="Vet Tested">
                </div>
                <div class="xd-vet-content">
                    <h2>Vet &amp; Dairy Farm Tested</h2>
                    <p>X-Dairy has been tested by veterinarians and real dairy farms to ensure it meets the practical needs of modern farm management. The system is designed with input from veterinary professionals and dairy farmers, making it reliable for tracking animal health, milk production, breeding cycles, and farm finances. By using real farm workflows, X-Dairy provides accurate records, efficient herd monitoring, and easy daily operation management.</p>
                </div>
            </div>
            <!-- Slider: 3 dashboard screenshots -->
            <div class="xd-vet-slider">
                <div class="xd-vet-track" id="xdVetTrack">
                    <div class="xd-vet-slide">
                        <img src="{{ asset('xdairy-images/Cow Management.png') }}" alt="Cow Management Dashboard">
                    </div>
                    <div class="xd-vet-slide">
                        <img src="{{ asset('xdairy-images/HealthManagement.png') }}" alt="Health Management Dashboard">
                    </div>
                    <div class="xd-vet-slide">
                        <img src="{{ asset('xdairy-images/Reproduction-Management.png') }}" alt="Reproduction Management Dashboard">
                    </div>
                </div>
                <div class="xd-vet-arrows">
                    <button class="xd-vet-arrow" onclick="xdVetSlide(-1)"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="xd-vet-arrow" onclick="xdVetSlide(1)"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <script>
    (function(){
        var track = document.getElementById('xdVetTrack');
        var idx = 0;
        var total = track.children.length;
        window.xdVetSlide = function(dir) {
            idx = (idx + dir + total) % total;
            var slideW = track.children[0].offsetWidth + 24;
            track.style.transform = 'translateX(-' + (idx * slideW) + 'px)';
        };
    })();
    </script>

    <!-- ===== FAQ Section ===== -->
    <section class="xd-faq" id="faq">
        <div class="container">
            <h2 class="xd-faq-title">Frequently Asked Questions -FAQ</h2>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="accordion" id="xdFaq1">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.05s">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#xdC1" aria-expanded="true">What Is X-Dairy?</button>
                            </h2>
                            <div id="xdC1" class="accordion-collapse collapse show" data-bs-parent="#xdFaq1">
                                <div class="accordion-body">X Dairy is an all-in-one dairy farm management system that helps farmers automate and digitize daily operations including milk production, cow health, reproduction tracking, finance, and more from a single platform.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC2">Who Can Use X-Dairy?</button>
                            </h2>
                            <div id="xdC2" class="accordion-collapse collapse" data-bs-parent="#xdFaq1">
                                <div class="accordion-body">X-Dairy is designed for dairy farmers, farm managers, veterinarians, and agribusiness owners who want to modernize and streamline their dairy farm operations using a digital management platform.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.15s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC3">What Modules Are Included In X-Dairy?</button>
                            </h2>
                            <div id="xdC3" class="accordion-collapse collapse" data-bs-parent="#xdFaq1">
                                <div class="accordion-body">X Dairy includes 10+ modules: Milk Parlor Management, Cow Management, Reproduction Management, Health Management, Feed Management, Finance, Stock Management, Employee Management, Supplier Management, Catalog Management, Configuration, and Dairy Tools &amp; Calculators.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC4">Does X-Dairy Support Real-Time Analytics?</button>
                            </h2>
                            <div id="xdC4" class="accordion-collapse collapse" data-bs-parent="#xdFaq1">
                                <div class="accordion-body">Yes. X Dairy provides real-time dashboards and analytics across all modules, including milk yield analytics, health trend tracking, reproduction rates, and financial summaries to support data-driven decisions.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC5">Can I Customize The System For My Farm?</button>
                            </h2>
                            <div id="xdC5" class="accordion-collapse collapse" data-bs-parent="#xdFaq1">
                                <div class="accordion-body">Yes. X Dairy's Configuration module lets you customize language, currency, user roles and permissions, notification settings, and dairy-specific data fields to match your farm's exact workflow.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC6">How Do I Get Started With X-Dairy?</button>
                            </h2>
                            <div id="xdC6" class="accordion-collapse collapse" data-bs-parent="#xdFaq1">
                                <div class="accordion-body">Getting started is simple: choose a pricing plan, purchase and download the system, follow the installation guide to deploy on your server, configure your farm settings, and start managing your dairy operations immediately.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.35s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC7">Is My Data Secure?</button>
                            </h2>
                            <div id="xdC7" class="accordion-collapse collapse" data-bs-parent="#xdFaq1">
                                <div class="accordion-body">Yes. X Dairy is self-hosted on your own server, meaning your data stays under your full control. The system uses role-based access control and secure authentication to protect your farm's sensitive information.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="xdFaq2">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.05s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC8">Can I Track Individual Cow Records?</button>
                            </h2>
                            <div id="xdC8" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">Yes. Each cow has a complete profile with ID, breed, age, weight, health history, milk production data, and reproductive records all stored in one place for easy access and management.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC9">Does The System Send Alerts Or Reminders?</button>
                            </h2>
                            <div id="xdC9" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">Yes. X Dairy includes automated alerts and reminders for vaccinations, dry-off schedules, expected calving dates, treatment follow-ups, and other critical farm events to keep you on track.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.15s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC10">Is X-Dairy Available In Offline Mode?</button>
                            </h2>
                            <div id="xdC10" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">X Dairy is a web-based system installed on your local server. It can work within a local network without internet access. Offline + Online functionality is available in Professional and Enterprise plans.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC11">Can I Manage Farm Finances With X-Dairy?</button>
                            </h2>
                            <div id="xdC11" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">Yes. The Finance module lets you record income and expenses, track profit and loss, manage supplier payments, and generate financial reports to give you full visibility into your farm's financial performance.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC12">Does X-Dairy Provide Reports And Exports?</button>
                            </h2>
                            <div id="xdC12" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">Yes. X Dairy generates detailed reports across all modules including milk production summaries, health records, reproduction performance, financial statements, and stock levels, with PDF and Excel export options.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC13">Is Technical Support Included?</button>
                            </h2>
                            <div id="xdC13" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">Yes. All plans include 6 months of technical support. Enterprise customers receive priority support. After the initial support period, renewal packages are available at affordable rates.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.35s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC15">Do You Provide Installation And Server Setup?</button>
                            </h2>
                            <div id="xdC15" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">Yes. We provide full installation and server setup support. Our team will assist you in deploying X Dairy on your local or cloud server, configuring the environment, and ensuring the system runs correctly from day one.</div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xdC14">Can Multiple Users Access The System?</button>
                            </h2>
                            <div id="xdC14" class="accordion-collapse collapse" data-bs-parent="#xdFaq2">
                                <div class="accordion-body">Yes. X Dairy supports multi-user access with role-based permissions. You can assign different access levels to farm managers, employees, veterinarians, and administrators to match your team structure.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xd-faq-support wow fadeInUp" data-wow-delay="0.2s">
                <p>Need help? Call our best support team at <a href="tel:+923063403387">(+92 306 3403387)</a> &nbsp;|&nbsp; <a href="{{ route('filsbase.contact') }}">Contact Us</a></p>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
	<footer class="main-footer">
        <div class="footer-scrolling-ticker-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-scrolling-ticker">
                            <div class="scrolling-ticker-box">
                                <div class="scrolling-content">
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                </div>
                                <div class="scrolling-content">
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                </div>
                            </div>
                            <div class="footer-contact-btn">
                                <a href="{{ route('filsbase.contact') }}" class="schedule-btn">Contact Us <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="about-footer">
                        <div class="footer-logo"><img src="{{ asset('logo footer.png') }}" alt=""></div>
                        <div class="about-footer-content">
                            <p>Building powerful digital solutions that help your business grow and thrive in the digital age.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-location footer-links">
                        <h3>Our Location</h3>
                        <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-contact footer-links">
                        <h3>Contact Information</h3>
                        <ul>
                            <li><a href="tel:123456789">+(123) 456-789</a></li>
                            <li><a href="mailto:info@domainname.com">info@domainname.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-newsletter-form footer-links">
                        <h3>Subscribe To Newsletter</h3>
                        <p>Stay updated with the latest development trends, tools and insights.</p>
                        <form id="newslettersForm" action="#" method="POST">
                            <div class="form-group">
                                <input type="email" name="mail" class="form-control" id="mail" placeholder="Email Address *" required>
                                <button type="submit" class="newsletter-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright-box">
                            <div class="footer-copyright-text"><p>Copyright &copy; 2025 All Rights Reserved.</p></div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog.html">Blogs</a></li>
                                    <li><a href="{{ route('filsbase.contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="{{ asset('frontend-js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend-js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend-js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend-js/validator.min.js') }}"></script>
    <script src="{{ asset('frontend-js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend-js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend-js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend-js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend-js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend-js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('frontend-js/parallaxie.js') }}"></script>
    <script src="{{ asset('frontend-js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend-js/magiccursor.js') }}"></script>
    <script src="{{ asset('frontend-js/SplitText.min.js') }}"></script>
    <script src="{{ asset('frontend-js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend-js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('frontend-js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend-js/function.js') }}"></script>
</body>
</html>
