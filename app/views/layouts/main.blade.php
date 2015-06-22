<html>
<head>
<meta charset="utf-8">
{{ HTML::style('/css/simple.css'); }}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/tagit/js/tag-it.js" type="text/javascript" charset="utf-8"></script>
<link href="css/tagit-stylish-yellow.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/scripts.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
<script src="/js/simple.js"></script>
</head>
<body>
    <div class="container-fluid">
        @include('layouts.header')
        	@yield('content')
        @include('layouts.footer')
    </div>
</body>
</html>