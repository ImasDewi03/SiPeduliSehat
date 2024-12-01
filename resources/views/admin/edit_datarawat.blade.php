@extends('layout.layout')

@section('title', 'Edit Data Rawat')

@section('content')
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Edit Data Rawat</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					    
					    @if($errors->any())
					        <div class="alert alert-danger my-3">
					            <ul>
					                @foreach($errors->all() as $e)
					                <li>{{$e}}</li>
					                @endforeach
					            </ul>
					        </div>
					    @endif
					    
					    @if(session('pasien'))
					    <div class="alert alert-danger my-4">
					        {{session('pasien')}}
					    </div>
					    @endif
					    
                        <form method="post" action="/update_datarawat">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="mb-3">
                                <label for="pasien">Pasien</label>
                                <input type="text" name="pasien" id="pasien" required class="form-control" value="{{ $pasien->nama }}">
                            </div>
                        <div class="mb-3">
                            <label for="tipe">Tipe</label>
                            <select name="tipe" class="form-control" id="tipe">
                                <option value="Rawat Inap" <?php if($data->tipe == 'Pemeriksaan Lansia'){echo 'selected';} ?>>Pemeriksaan Lansia</option>
                            <option value="Rawat Jalan" <?php if($data->tipe == 'Pemeriksaan Anak-anak'){echo 'selected';} ?>>Pemeriksaan Anak-anak</option>
							<option value="Pemeriksaan Luka" <?php if($data->tipe == 'Pemeriksaan Luka'){echo 'selected';} ?>>Pemeriksaan Luka</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tglmasuk">Tanggal Masuk</label>
                            <input type="date" name="tglmasuk" required class="form-control" id="tglmasuk" value="{{ $data->tanggal_masuk }}">
                        </div>
                      
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection