@extends('main')
@section('content')
<div class="panel-body">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>nama</th>
						<th>username</th>
						<th>alamat</th>
						<th>kontak</th>
					</tr>
				</thead>
				<tbody>
          @foreach($konsumens as $k)
					<tr>
            <td>{{$no++}}</td>
            <td>{{$k->name}}</td>
						<td>{{$k->username}}</td>
						<td>{{$k->alamat}}</td>
						<td>{{$k->kontak}}</td>
          </tr>
          @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection