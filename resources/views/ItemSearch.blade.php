<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test Elasticsearch</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-success">
				Test Elasticsearch
			</h3>
			</br>
			<div class="row">
				<div class="col-md-6">
					<h4>Tìm kiếm</h4>
					{!! Form::open(array('method'=>'get','class'=>'')) !!}
						<div class="form-group">
							 
							<label for="search">
								Text
							</label>
							<input name="search" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search for...">
						</div> 
						<button type="submit" class="btn btn-success">
							Submit
						</button>
					{!! Form::close() !!}
				</div>
				<div class="col-md-6">
					<h4>Thêm vật phẩm</h4>
					{!! Form::open(array('url' => 'ItemSearchCreate','autocomplete'=>'off')) !!}
						<div class="form-group">
							<label for="title">
								Tên
							</label>
							{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
						</div>

						<div class="form-group">
							<label for="description">
								Mô tả
							</label>
							{!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
						</div>
						<button type="submit" class="btn btn-success">
							Submit
						</button>
					{!! Form::close() !!}
				</div>
			</div>
			</br>
			@if(!empty($items))
                @foreach($items as $key => $value)
                    <h3 class="text-danger">{{ $value['title'] }}</h3>
                    <p>{{ $value['description'] }}</p>
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