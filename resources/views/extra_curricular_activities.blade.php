{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('sp_id', 'Sp_id:') !!}
			{!! Form::text('sp_id') !!}
		</li>
		<li>
			{!! Form::label('comp_id', 'Comp_id:') !!}
			{!! Form::text('comp_id') !!}
		</li>
		<li>
			{!! Form::label('clb_id', 'Clb_id:') !!}
			{!! Form::text('clb_id') !!}
		</li>
		<li>
			{!! Form::label('defined_effort', 'Defined_effort:') !!}
			{!! Form::text('defined_effort') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}