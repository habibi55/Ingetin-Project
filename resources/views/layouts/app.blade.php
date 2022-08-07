<!DOCTYPE html>
<html lang="en">
<head>

  @include('heading.meta')

  @stack('before-style')

    @include('heading.style')
    @livewireStyles

  @stack('after-style')
  

</head>
<body class="font-poppins">

  @include('heading.header')

  @yield('content')

  @stack('before-script')

    @include('heading.script')
    @livewireScripts

  @stack('after-script')

 

</body>
</html>