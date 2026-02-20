<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            height: 100vh;
            background: #0f172a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, sans-serif;
            overflow: hidden;
        }

        .splash-container {
            text-align: center;
            color: white;
            opacity: 0;
            animation: fadeIn 1.5s ease forwards;
        }

        .logo {
            font-size: 3rem;
            font-weight: bold;
            letter-spacing: 2px;
            animation: float 3s ease-in-out infinite;
        }

        .tagline {
            margin-top: 1rem;
            font-size: 1.2rem;
            opacity: 0.8;
        }

        .fade-out {
            animation: fadeOut 1.5s ease forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body>

    <div id="splash" class="splash-container">
        <div class="logo">MyApp</div>
        <div class="tagline">Welcome to something awesome</div>
    </div>

    <script>
        const SPLASH_DURATION = 3500; // animation time
        const FADE_DURATION = 1500;

        setTimeout(() => {
            document.getElementById('splash').classList.add('fade-out');
        }, SPLASH_DURATION);

        setTimeout(() => {
            fetch("{{ route('splash.complete') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(() => {
                window.location.href = "{{ route('home') }}";
            });
        }, SPLASH_DURATION + FADE_DURATION);
    </script>

</body>

</html>
