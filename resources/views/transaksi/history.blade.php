@extends('main')
@section('content')
<div class="panel-body">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Jenis Barang</th>
						<th>Berat per Kg</th>
						<th>Status</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
          @foreach($transaksis as $t)
					<tr>
            <td>{{$no++}}</td>
            <td>{{$t->jenis_barang}}</td>
						<td>{{$t->berat_baju}}</td>
						<td>{{$t->status}}</td>
						<td>{{'Rp.'.number_format($t->total_harga)}}</td>
          </tr>
         
          @endforeach
        </tbody>
          <tr>
              <td colspan="4">Total Harga</td>
              <td colspan="1">{{'Rp.'.number_format($total[0]->total)}}</td>
            </tr>
			</table>
		</div>
	</div>
</div>
@endsection