
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('layout.includes.head')
</head>
 <body>  	 
<x-top-component />	

@include('layout.includes.partials._sidebar')

<!--end sidebar -->
@yield('content')
<x-footer-component />
@include('layout.includes.foot')
</body>
</html>