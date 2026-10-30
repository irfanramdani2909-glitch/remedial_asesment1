
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgroClima Garut')</title>

    <style>
        
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f0f8f7;
        color: #243746;
        line-height: 1.6;
    }

    /* Header */
    header {
        background: linear-gradient(135deg, #087f5b, #087eae);
        color: white;
        padding: 28px 7%;
        box-shadow: 0 4px 12px rgba(0, 70, 90, 0.15);
    }

    header h1 {
        margin: 0;
        font-size: 30px;
        font-weight: 700;
    }

    header p {
        margin: 5px 0 0;
        color: #e0f7fa;
    }

    /* Navigasi */
    nav {
        background: #ffffff;
        padding: 15px 7%;
        display: flex;
        gap: 28px;
        flex-wrap: wrap;
        border-bottom: 1px solid #d8e9e9;
    }

    nav a {
        color: #087f5b;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s;
    }

    nav a:hover {
        color: #087eae;
    }

    /* Konten */
    main {
        max-width: 1100px;
        margin: 35px auto;
        padding: 0 20px;
        min-height: 60vh;
    }

    .card {
        background: #ffffff;
        padding: 30px;
        border-radius: 16px;
        margin-bottom: 24px;
        border: 1px solid #dcebea;
        box-shadow: 0 6px 20px rgba(20, 90, 100, 0.08);
    }

    .card h2 {
        color: #087f5b;
        margin-top: 0;
    }

    .card h3 {
        color: #087eae;
    }

    /* Form */
    label {
        display: block;
        font-weight: 600;
        color: #34515e;
        margin-top: 12px;
    }

    input, select {
        width: 100%;
        padding: 12px 14px;
        margin-top: 6px;
        margin-bottom: 16px;
        border: 1px solid #cbdcde;
        border-radius: 9px;
        font-size: 15px;
        background: #fbfefe;
        color: #243746;
        outline: none;
    }

    input:focus, select:focus {
        border-color: #087eae;
        box-shadow: 0 0 0 3px rgba(8, 126, 174, 0.12);
    }

    /* Tombol */
    button, .btn {
        background: linear-gradient(135deg, #087f5b, #087eae);
        color: white;
        border: none;
        cursor: pointer;
        display: inline-block;
        padding: 12px 20px;
        border-radius: 9px;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.2s;
    }

    button:hover, .btn:hover {
        background: linear-gradient(135deg, #066747, #05658d);
        box-shadow: 0 4px 12px rgba(8, 126, 174, 0.2);
    }

    button:disabled {
        opacity: 0.7;
        cursor: wait;
    }

    /* Tabel */
    .table-wrap {
        overflow-x: auto;
        border-radius: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
    }

    th, td {
        padding: 13px;
        border: 1px solid #deebeb;
        text-align: left;
    }

    th {
        background: #087eae;
        color: white;
    }

    tbody tr:nth-child(even) {
        background: #f0f8f7;
    }

    tbody tr:hover {
        background: #e1f3ef;
    }

    /* Status mikroklimat */
    .status {
        display: inline-block;
        padding: 5px 11px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
    }

    .kering {
        background: #fff0d9;
        color: #995700;
    }

    .optimal {
        background: #d8f5e5;
        color: #087443;
    }

    .lembap {
        background: #dceeff;
        color: #075b91;
    }

    .error {
        color: #c62828;
        font-size: 14px;
    }

    /* Footer */
    footer {
        background: linear-gradient(135deg, #075e46, #075b82);
        color: white;
        text-align: center;
        padding: 22px;
        margin-top: 40px;
    }

    /* Tampilan HP */
    @media (max-width: 600px) {
        header, nav {
            padding-left: 20px;
            padding-right: 20px;
        }

        header h1 {
            font-size: 24px;
        }

        nav {
            gap: 15px;
        }

        .card {
            padding: 20px;
        }

        button, .btn {
            max-width: 100%;
        }
    }
</style>

    </style>
</head>
<body>

    <header>
        <h1>AgroClima Kabupaten Garut</h1>
        <p>Sistem Prediksi Mikroklimat Tanaman Berbasis LSTM</p>
    </header>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        © 2026 AgroClima Kelompok Tani Makmur Kabupaten Garut
    </footer>

    <script>
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function() {
                const button = form.querySelector('button[type="submit"]');
                if (button) {
                    button.textContent = 'Memproses...';
                    button.disabled = true;
                }
            });
        });
    </script>

</body>
</html>
