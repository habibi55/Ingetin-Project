<!DOCTYPE html>
<html lang="en">
<head>

  @include('heading.meta')

  @stack('before-style')

  @include('heading.style')

  @stack('after-style')

</head>
<body class="font-poppins">

  @yield('content')
  
</body>
</html>