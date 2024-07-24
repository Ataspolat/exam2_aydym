<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müzik Projesi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-mWbZtrY6ZR/3s3/6sQOk3cU6GHG/BwkaDzP8U9zZ1mBLka4HgNl/r3xX0rfHw8EnunIz5MN4X4jxWnqT5G/A1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Your custom styles here */
    </style>
    <script>
        // Örnek JavaScript kodu
        document.addEventListener('DOMContentLoaded', function() {
            const audioPlayers = document.querySelectorAll('audio');

            audioPlayers.forEach(player => {
                player.addEventListener('play', function() {
                    audioPlayers.forEach(otherPlayer => {
                        if (otherPlayer !== player && !otherPlayer.paused) {
                            otherPlayer.pause();
                        }
                    });
                });
            });
        });
    </script>
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Müzik Projesi</h1>

    <!-- Search form -->
    <form action="{{ route('music.search') }}" method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Müzik ara..." class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Ara</button>
    </form>

    <!-- Müzik listesi -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Örnek müzik kartları -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Müzik Adı 1</h2>
            <audio controls class="mt-2">
                <source src="muzik1.mp3" type="audio/mpeg">
                Tarayıcınız audio etiketini desteklemiyor.
            </audio>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Müzik Adı 2</h2>
            <audio controls class="mt-2">
                <source src="muzik2.mp3" type="audio/mpeg">
                Tarayıcınız audio etiketini desteklemiyor.
            </audio>
        </div>
        <!-- Diğer müzik kartları -->
    </div>
</div>
</body>
</html>
