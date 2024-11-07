<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EduFun</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('category') }}">Category</a></li>
        <li><a href="{{ route('writers') }}">Writers</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; 2023 EduFun. All rights reserved.</p>
  </footer>
</body>

</html>
