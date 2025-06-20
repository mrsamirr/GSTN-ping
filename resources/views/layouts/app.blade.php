<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GST Reminder Service')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
         lucide.createIcons();
    </script> 
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: { primary: '#2563eb' },
            fontFamily: { sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
            animation: {
                blob: 'blob 8s infinite',
                scroll: 'scroll 40s linear infinite',
            },
            keyframes: {
                blob: {
                '0%,100%': { transform: 'translate(0,0) scale(1)' },
                '33%':     { transform: 'translate(30px,-20px) scale(1.1)' },
                '66%':     { transform: 'translate(-20px,20px) scale(0.9)' }
                },
                scroll: {
                from: { transform: 'translateX(0)' },
                to:   { transform: 'translateX(-100%)' }
                }
            }
            }
        }
        };
    </script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col font-sans antialiased bg-gray-50 text-gray-800">
   @include('urgency')
   @include('header')
    
  {{-- <main>
        @yield('content') 
    </main> --}}
    <main>
        @yield('body') 
    </main>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        @include('footer')
     </div>
</body>
</html>

