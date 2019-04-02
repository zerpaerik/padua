@extends('layouts.app')

@section('content')
</br>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span><strong>Transferencia {{$code}}</strong></span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th>Producto</th>
							<th>Categoria</th>
							<th>Cantidad</th>
							<th>Proveedor</th>
						</tr>
					</thead>
					<tbody>
						@foreach($transferencias as $transferencia)					
							<tr>
								<td>{{$transferencia->producto->nombre}}</td>
								<td>{{$transferencia->producto->categoria}}</td>
								<td>{{$transferencia->cantidad}} {{$transferencia->producto->medida}}</td>
								<td>{{$transferencia->proveedor->codigo}} - {{$transferencia->proveedor->nombre}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@if(isset($created))
	<div class="alert alert-success" role="alert">
	  A simple success alert—check it out!
	</div>
@endif

@endsection