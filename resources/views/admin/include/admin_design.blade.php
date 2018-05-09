<!DOCTYPE html>
<html lang="en">
<head>
<title>test</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/datepicker.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-wysihtml5.css') }}" />

<link rel="stylesheet" href="{{ asset('css/backend_css/select2.css') }}" />
<link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{asset('css/backend_css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('admin.include.admin_header')
@include('admin.include.admin_sidebar')

@yield('content')


@include('admin.include.admin_footer')

</script>

<script src="{{ asset('js/backend_js/jquery.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js')}}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js')}}"></script>
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js')}}"></script>
<script src="{{ asset('js/backend_js/matrix.tables.js')}}"></script> 

<script src="{{ asset('js/backend_js/bootstrap-colorpicker.js')}}"></script> 
<script src="{{ asset('js/backend_js/bootstrap-datepicker.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.toggle.buttons.js')}}"></script> 
<script src="{{ asset('js/backend_js/masked.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js')}}"></script> 

<script src="{{ asset('js/backend_js/matrix.form_common.js ')}}"></script> 
<script src="{{ asset('js/backend_js/wysihtml5-0.3.0.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.peity.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/bootstrap-wysihtml5.js')}}"></script> 
</body>
</html>
