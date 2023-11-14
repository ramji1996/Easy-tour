<!DOCTYPE html>
<html lang="en">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
      integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q"
      crossorigin="anonymous"
    />
    
    <!-- Equipment Provider -->
    <link rel="stylesheet" href="{{ asset('css/equipmentProvider.css') }}">

<head>
    @include('includes.head')
    @include('includes.navbar')
    @include('includes.eqphomenavbar')
</head>
<body>
    
    @yield('content')
    @include('includes.footer') 

</body>
</html>