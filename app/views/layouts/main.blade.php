<html>
<head>
<meta charset="utf-8">
{{ HTML::style('/css/simple.css'); }}
<link rel="stylesheet" href="/tagit-hailwood/css/tagit-simple-blue.css">

<!--jquery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/jquery-ui.1.8.20.min.js"></script>
<script src="/js/simple.js"></script>
<!--  tagit -->
<script src="/tagit-hailwood/js/tagit.js"></script>
<script src="/js/tagit-script.js"></script>
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div class="container-fluid">
        @include('layouts.header')
        	@yield('content')
        @include('layouts.footer')
    </div>
</body>
</html>