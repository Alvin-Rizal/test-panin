@extends('template.admin')
@section('konten')
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Forms</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Form Control Styles</div>
										</div>
										<div class="card-body">
                                            <form action="{{route ('store') }}" method="post" enctype="multipart/form-data">
                                                @csrf
											<div class="form-group">
												<label for="squareInput">Nama Toko</label>
												<input type="text" class="form-control input-square" id="squareInput" placeholder="Inputkan nama toko" name="nama">
											</div>
											<div class="form-group">
												<label for="squareInput">Alamat Toko</label>
												<input type="text" class="form-control input-square" id="squareInput" placeholder="Inputkan alamat toko" name="alamat">
											</div>
                                            <div class="form-group">
												<label for="squareInput">Nomor Hp</label>
												<input type="text" class="form-control input-square" id="squareInput" placeholder="Inputkan nomor" name="nomor">
											</div>
										<div class="card-action">
											<button type="submit" class="btn btn-success">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
                                        </form>
									</div>
</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection