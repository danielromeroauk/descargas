<!doctype html>
<html>
<head>
	<title>GaleonSoft Panel: Editing {{ $user->username }}</title>
<link href="http://tarruda.github.io/bootstrap-datetimepicker/assets/css/bootstrap.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.io/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	
	<script src="http://code.jquery.com/jquery-2.0.2.js"></script>
	{{ HTML::script('js/bootstrap-datetimepicker.min.js') }}
</head>
<body>
	<div class="downloads">
    {{ HTML::link('/', 'Regresar') }}
		<h3>Downloads for {{ $user->username }}</h3>
		{{ Form::open() }}
			{{ Form::select('download', $downloads) }}
  <div id="datetimepicker1" class="input-append date">
    <input data-format="yyyy-MM-dd hh:mm:ss" type="text" name="fromdate">
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
   <div id="datetimepicker2" class="input-append date">
    <input data-format="yyyy-MM-dd hh:mm:ss" type="text" name="todate">
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
			{{ Form::hidden('user_id',$user->id) }}
			{{ Form::submit('Add Download') }}
		{{ Form::close() }}
	</div>
</body>

</html>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'en'
    });
    $('#datetimepicker2').datetimepicker({
      language: 'en'
    });
  });
</script>