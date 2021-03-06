<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel & vue.js</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
    <div id="main" class="container">
		<div class="row">
			<div class="col-sm-4">
				<h1>VUEjs - AJAX axios</h1>
				<ul class="list-group">
					<li v-for="item in lists" class="list-group-item">						
						{{ item.name }}
					</li>
				</ul>
			</div>
			<div class="col-sm-8">
				<h1>JSON</h1>
				<pre>
					{{ $data | json }}
				</pre>
			</div>
		</div>
	</div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>