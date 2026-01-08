<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nutrition Orbit - Admin')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --secondary: #3b82f6;
            --dark-bg: #0f172a;
            --card-bg: #1e293b;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --border: #334155;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--dark-bg);
            color: var(--text-main);
            min-height: 100vh;
            padding: 2rem;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(16, 185, 129, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(59, 130, 246, 0.1) 0%, transparent 40%);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        header {
            margin-bottom: 3rem;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        p.subtitle {
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .table-container {
            background-color: var(--card-bg);
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid var(--border);
            overflow: hidden;
            animation: fadeIn 0.5s ease-out;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        thead {
            background-color: rgba(16, 185, 129, 0.1);
        }

        th {
            padding: 1rem;
            font-weight: 600;
            color: var(--primary);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.05em;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid var(--border);
            color: var(--text-muted);
            transition: color 0.2s;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            color: var(--text-main);
            background-color: rgba(255, 255, 255, 0.02);
        }

        .contact-link {
            color: var(--secondary);
            text-decoration: none;
            transition: color 0.2s;
        }

        .contact-link:hover {
            color: var(--primary);
            text-decoration: underline;
        }

        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 500;
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--primary);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .table-container {
                overflow-x: auto;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            body {
                padding: 1rem;
            }
        }

        .back-link {
            position: absolute;
            top: 2rem;
            left: 2rem;
            color: var(--text-muted);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: var(--primary);
        }
    </style>
    @yield('extra_css')
</head>
<body>
    <a href="/admin" class="back-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        Back to Dashboard
    </a>
    <div class="container">
        <header>
            <img src="{{ asset('images/logo.png') }}" alt="Nutrition Orbit" style="height: 120px; width: auto; margin-bottom: 1.5rem; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));">
            <h1>@yield('header_title')</h1>
            <p class="subtitle">@yield('header_subtitle')</p>
        </header>

        <div class="table-container">
            @yield('content')
        </div>
    </div>
    @yield('extra_js')
</body>
</html>
