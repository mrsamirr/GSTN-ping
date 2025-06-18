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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
        }
        
        .bg-gradient-custom {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #2563eb 100%);
        }
        
        .btn-primary {
            background-color: #06b6d4;
            transition: all 0.2s ease-in-out;
        }
        
        .btn-primary:hover {
            background-color: #0891b2;
            transform: translateY(-1px);
        }
        
        .btn-secondary {
            background-color: #3b82f6;
            transition: all 0.2s ease-in-out;
        }
        
        .btn-secondary:hover {
            background-color: #2563eb;
        }
        
        .feature-item {
            transition: all 0.3s ease-in-out;
        }
        
        .feature-item:hover {
            transform: translateX(4px);
            background-color: rgba(255, 255, 255, 0.15);
        }
    </style>

</head>
<body class="min-h-screen flex flex-col">
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

