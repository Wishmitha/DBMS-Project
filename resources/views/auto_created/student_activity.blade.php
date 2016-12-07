{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('stu_id', 'Stu_id:') !!}
			{!! Form::text('stu_id') !!}
		</li>
		<li>
			{!! Form::label('act_id', 'Act_id:') !!}
			{!! Form::text('act_id') !!}
		</li>
		<li>
			{!! Form::label('role', 'Role:') !!}
			{!! Form::text('role') !!}
		</li>
		<li>
			{!! Form::label('effort', 'Effort:') !!}
			{!! Form::text('effort') !!}
		</li>
		<li>
			{!! Form::label('joined', 'Joined:') !!}
			{!! Form::text('joined') !!}
		</li>
		<li>
			{!! Form::label('is_validated', 'Is_validated:') !!}
			{!! Form::text('is_validated') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}