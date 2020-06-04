@extends('layouts.siswa')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Tes (Mapel)</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Tes (Nama Mapel)  periode (Periode)</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-1">
                            <h3><b>1.</b></h3>
                       </div>
                       <div class="col-md-11">
                           <img src="{{asset('admin/img/previews/preview-big-icons.jpg')}}" alt="" width="200px">
                           <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nesciunt consequuntur iusto atque, tempora corporis ab! Magnam, expedita? Accusamus voluptate libero voluptas, tenetur ullam quam? Reiciendis minus quo blanditiis ut ?</p>
                           <div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
										Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
								</label>
                            </div>
                            <div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
										Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
								</label>
							</div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-1">
                            <h3><b>2.</b></h3>
                       </div>
                       <div class="col-md-11">
                           <img src="{{asset('admin/img/previews/preview-big-icons.jpg')}}" alt="" width="200px">
                           <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nesciunt consequuntur iusto atque, tempora corporis ab! Magnam, expedita? Accusamus voluptate libero voluptas, tenetur ullam quam? Reiciendis minus quo blanditiis ut ?</p>
                           <div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
										Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
								</label>
                            </div>
                            <div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
										Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
								</label>
							</div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-1">
                            <h3><b>3.</b></h3>
                       </div>
                       <div class="col-md-11">
                           <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nesciunt consequuntur iusto atque, tempora corporis ab! Magnam, expedita? Accusamus voluptate libero voluptas, tenetur ullam quam? Reiciendis minus quo blanditiis ut ?</p>
                           <div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
										Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
								</label>
                            </div>
                            <div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
										Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
								</label>
							</div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary"> Simpan Jawaban</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script>

</script>
@endsection