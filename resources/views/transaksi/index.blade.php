@extends('main')
@section('content')

<div class="panel-body">
	<div class="row">
    <?php 
      $user = Auth::user();
      if ($user->hak_akses != 'admin') {
    ?>
    <form action="{{url(action('TransaksiController@postTransaksi'))}}" method="post">
      {{csrf_field()}}
      @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block" id="pesan">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Nama Barang</label>
          <input type="text" name="jenis_barang" class="form-control" required autocomplete="off">
          {{-- <input type="text" name="konsumen_id" value="3"> --}}
        </div>
        <div class="form-group">
          <label for="">Berat Barang</label>
          <input type="text" name="berat_baju" class="form-control" required autocomplete="off">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for=""> Harga (Rp.5000 per Kg)</label>
          <input type="text" name="total_harga" class="form-control" value="5000" required readonly disabled autocomplete="off">
        </div>
        <div class="form-group">
          <label for=""> Tanggal Transaksi</label>
          <input type="text" name="tanggal" class="form-control" value="{{date('F-d-Y')}}" required readonly disabled autocomplete="off">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </div>
    </form>
  <?php } ?>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<table id="datatable" class="table table-striped table-bordered" style="font-size:11px;">
				<thead >
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Jenis Barang</th>
						<th>Berat</th>
						<th>Kontak</th>
						<th>Alamat</th>
						<th>Tanggal</th>
						<th>Tanggal Kembali</th>
						<th>Total Harga</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
          @foreach($transaksis as $t)
					<tr>
            <td>{{$no++}}</td>
            <td>{{$t->username}}</td>
            <td>{{$t->jenis_barang}}</td>
						<td>{{$t->berat_baju}}</td>
						<td>{{$t->alamat}}</td>
						<td>{{$t->kontak}}</td>
						<td>{{date('F-d-Y')}}</td>
						<td>{{date('F-d-Y',strtotime("+1days"))}}</td>
            <td>{{'Rp.'.number_format($t->berat_baju * 5000)}}</td>
            <td>
              <?php 
                $user = Auth::user();
                if ($user->hak_akses != 'admin') {
                if($t->status == 'proses'):
              ?>
                <button class="btn btn-danger" style="color:white!important;font-weight:bold;">{{$t->status}}</button>
                <?php endif; }elseif($t->status == 'proses'){ ?>
                  <form action="{{url(action('TransaksiController@ubahStatus'))}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$t->id}}">
                    <button class="btn btn-danger" value="ubah" style="color:white!important;font-weight:bold;">{{$t->status}}</button>
                  </form>
                <?php }else{?>
                  <button class="btn btn-success" value="ubah" style="color:white!important;font-weight:bold;">{{$t->status}}</button>
                <?php } ?>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tr>
            <td colspan="8">Total Harga</td>
            <td colspan="1">{{'Rp.'.number_format($total[0]->total)}}</td>
          </tr>
			</table>
		</div>
	</div>
</div>
@endsection