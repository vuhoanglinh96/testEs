<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test ElasticSearch</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

  	</br></br>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-success">
				Test Elasticsearch with sample data
			</h3>
			</br>

			{!! Form::open(array('method'=>'get','class'=>'')) !!}
				<div class="form-group">
					 
					<label for="search">
						Nhập tìm kiếm
					</label>
					<input name="search" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search for...">
				</div>
				<button type="submit" class="btn btn-success">
					Submit
				</button>
			{!! Form::close() !!}

			</br>
			<h4 class="text-success">Tìm thấy: {{ $total }} kết quả</h4>
			@if(!empty($results))
				{{-- {{ $total }} --}}
				@foreach($results as $key => $value)
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li>
								<p> line_id: {{ $value['line_id'] }} </p>
								<p> play_name: {{ $value['play_name'] }} </p>
								<p> speech_number: {{ $value['speech_number'] }} </p>
								<p> line_number: {{ $value['line_number'] }} </p>
								<p> speaker: {{ $value['speaker'] }} </p>
								<p> text_entry: {{ $value['text_entry'] }} </p>
							</li>
						</ul>
					</div>
				</div>
				</br>
				@endforeach
			@endif
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>