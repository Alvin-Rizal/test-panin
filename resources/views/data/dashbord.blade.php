@extends('template.admin')
@section('konten')
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Tables</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Penjualan</div>
                                        <div >
                <a href="{{route ('create')}}">
                    <button class="btn btn-md btn-round float-right" style="margin-top: -2.2rem; background-color: grey; color: white">
                    <i class="fas fa-plus-circle"></i> Tambah
                    </button>
                </a>
            </div>
									</div>
									<div class="card-body">
										<div class="card-sub">									
											This is the basic table view of the ready dashboard :
										</div>
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">First</th>
													<th scope="col">Last</th>
													<th scope="col">Handle</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
												</tr>
												<tr>
													<td>3</td>
													<td colspan="2">Larry the Bird</td>
													<td>@twitter</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
								@endsection