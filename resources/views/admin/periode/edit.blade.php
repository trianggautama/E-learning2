@extends('layouts.admin')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Pertemuan</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="#">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Edit Data Pertemuan</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Pertemuan
                    </div>
                    <div class="form-group ">
                        <label class="">Periode Tahun</label>
                        <input type="date" class="form-control" name="tahun" id="tahun">
                    </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{Route('kelasIndex')}}" type="button" class="btn btn-default" >Batal</a>
                        <button type="submit" class="btn btn-primary">ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection