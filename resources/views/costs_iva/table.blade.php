@extends('layouts.app')

@section('content')

<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            <p class="text-success">IVA:</p>
            <h2 class="text-success">
            <?php 
            $iva_deuda = 0;
            $iva_saldo = 0;
			foreach($data as $file){
				if($file['id'] == 0){
					$iva_deuda = $file['monto']*0.19;
				}
				else {
					$iva_saldo += ($file['monto']*0.19);
				}					
			}
			echo '$';
			echo $iva_saldo-$iva_deuda; 
			?>
            </h2>

            <!-- <a href="/home" class="btn btn-primary">Volver</a> -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Descripcion</th>
							<th>Monto</th>
							<th>Fecha</th>
							<th>Tipo</th>
							<th>Saldo a favor</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $file)
						<tr>
							@if($file['id'] != 0)
							<td>{{	$file['desc']	}}</td>
							<td>{{	$file['monto']	}}</td>
							<td>{{	$file['fecha']	}}</td>
							<td>{{	$file['tipo']	}}</td>
							<td>{{	($file['monto']*0.19)	}}</td>
							@endif
						</tr>
						@endforeach
					</tbody>
				</table>
        </div>
    </div>
</div>

@endsection