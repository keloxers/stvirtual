@extends('layouts.default')

@section('content')




<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white piICheck piStylishSelect">
	<div class="pi-section pi-padding-bottom-80">

		<div class="pi-text-center pi-margin-bottom-60">
			<h1 class="pi-uppercase pi-weight-700 pi-has-border pi-has-tall-border pi-has-short-border pi-margin-bottom-70">
				Agregar Banner
			</h1>
		</div>


		<!-- Row -->
		<div class="pi-row">

			<!-- Col 6 -->
			<div class="pi-col-xs-12">

				<h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
					Datos de la nueva pagina
				</h4>

				<hr class="pi-divider-gap-10">

				<!-- Forms -->
				{{ Form::open(array('route' => 'banners.store', 'class' => 'panel-body wrapper-lg')) }}

					<!-- First name form -->
					<div class="form-group">
						<label for="empresa">Empresa</label>

						<div class="pi-input-with-icon">
							<div class="pi-input-icon"><i class="icon-pencil"></i></div>
							{{ Form::text('empresa', '', array('class' => 'form-control', 'id' => 'empresa', 'placeholder' => 'Ingrese nombre de la empresa')) }}
							<?php if ($errors->first('empresa')) { ?>
									<div class="pi-alert-danger fade in">
										<button type="button" class="pi-close" data-dismiss="alert">
											<i class="icon-cancel"></i>
										</button>
										<p>
											<strong>Oh !</strong> {{ $errors->first('empresa') }}.
										</p>
									</div>
							<?php } ?>

						</div>
					</div>
					<!-- End first name form -->

					<!-- First name form -->
					<div class="form-group">
						<label for="titular">File</label>

						<div class="pi-input-with-icon">
							<div class="pi-input-icon"><i class="icon-pencil"></i></div>
							{{ Form::text('file', '', array('class' => 'form-control', 'id' => 'file', 'placeholder' => 'Ingrese nombre del archivo')) }}
							<?php if ($errors->first('file')) { ?>
									<div class="pi-alert-danger fade in">
										<button type="button" class="pi-close" data-dismiss="alert">
											<i class="icon-cancel"></i>
										</button>
										<p>
											<strong>Oh !</strong> {{ $errors->first('file') }}.
										</p>
									</div>
							<?php } ?>

						</div>
					</div>
					<!-- End first name form -->

					<!-- First name form -->
					<div class="form-group">
						<label for="link">Link</label>

						<div class="pi-input-with-icon">
							<div class="pi-input-icon"><i class="icon-pencil"></i></div>
							{{ Form::text('link', '', array('class' => 'form-control', 'id' => 'file', 'placeholder' => 'Ingrese el link')) }}
							<?php if ($errors->first('link')) { ?>
									<div class="pi-alert-danger fade in">
										<button type="button" class="pi-close" data-dismiss="alert">
											<i class="icon-cancel"></i>
										</button>
										<p>
											<strong>Oh !</strong> {{ $errors->first('link') }}.
										</p>
									</div>
							<?php } ?>

						</div>
					</div>
					<!-- End first name form -->


					<!-- Message -->
					<div class="form-group">
						<label for="exampleInputMessage-3">Posicion</label>

							{{ Form::select('posicion', array(
							'homebig' => 'Home Big',
							'homesmall' => 'Home Small',
							'homelateral' => 'Home Lateral',
							'articulobig' => 'Articulo big',
							'articulosmall' => 'Articulo Small',
							'articuloslateral' => 'Articulo Lateral',
							'homeinterlinea' => 'Home inter linea'
							), 'homebig', array('class' => 'form-control input-lg', 'id' =>'posicion')) }}

					</div>
					<!-- End message form -->

					<!-- Message -->
					<div class="form-group">
						<label for="exampleInputMessage-3">Activo</label>

							{{ Form::select('activo', array(
							'si' => 'Si',
							'no' => 'No'
							), 'si', array('class' => 'form-control input-lg', 'id' =>'activo')) }}

					</div>
					<!-- End message form -->


					<hr class="pi-divider-gap-10">

					<!-- Submit button -->
					<p>
						<button type="submit" class="btn pi-btn-base pi-btn-big pi-uppercase pi-weight-700 pi-letter-spacing">
							<i class="icon-check pi-icon-left"></i>Guardar
						</button>
					</p>
					<!-- End submit button -->

				</form>
				<!-- End forms -->

			</div>
			<!-- End col 6 -->


	</div>
</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->





@stop
