<html>
<head>
	<title>Daftar Peserta Seminar</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="https://www.malasngoding.com">Daftar Peserta Seminar</a></h3>
				<h5 class="text-center my-4">hmm</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Seminar</th>
							<th>Anggota</th>
							<th width="1%">Jumlah</th>
						</tr>
					</thead>
					<tbody>
						@foreach($seminar as $s)
						<tr>
							<td>{{ $s->title }}</td>
							<td>
								<ul>
									@foreach($s->user as $u)
									<li> {{ $u->name }} </li>
									@endforeach
								</ul>
							</td>
							<td class="text-center">{{ $s->user->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>
