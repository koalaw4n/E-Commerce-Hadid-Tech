@extends('layout.v_template')

@section('title','Produk')
@section('halaman','Produk')

@section('content')
	<form action="/produk/insert" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="content">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>ID Produk</label>
						<input type="text" name="id_produk" class="form-control" value="{{old('id_produk')}}">
						<div class="text-danger">
						    @error('id_produk') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" class="form-control" value="{{old('nama_produk')}}">
						<div class="text-danger">
						    @error('nama_produk') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Gambar Produk</label>
						<input type="file" name="gambar_produk" class="form-control" value="{{old('gambar_produk')}}">
						<div class="text-danger">
						    @error('gambar_produk') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Harga Beli Produk</label>
						<input type="text" name="hargabeli_produk" class="form-control" value="{{old('hargabeli_produk')}}">
						<div class="text-danger">
						    @error('hargabeli_produk') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Harga Jual Produk</label>
						<input type="text" name="hargajual_produk" class="form-control" value="{{old('hargajual_produk')}}">
						<div class="text-danger">
						    @error('hargajual_produk') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Stok Produk</label>
						<input type="text" name="stok_produk" class="form-control" value="{{old('stok_produk')}}">
						<div class="text-danger">
						    @error('stok_produk') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<label>Keterangan Produk</label>
						<input type="text" name="keterangan_produk" class="form-control" value="{{old('keterangan_produk')}}">
						<div class="text-danger">
						    @error('keterangan_produk') 
						    	{{$message}}
						    @enderror
						</div>
					</div>

					<div class="form-group">
						<button class="btn btn-primary btn-sm">Simpan</button>
					</div>

				</div>
			</div>
		</div>
	</form>
@endsection