@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(array('url' => 'link', 'method' => 'post')) !!}
                        {!! Form::label('length','Длинна, мм:', ['class'=>'data_on']) !!}
                        {!! Form::input('number', 'length', '0', ['class'=>'form-control', 'id'=>'length', 'step'=>'1']); !!}
                        {!! Form::label('width','Ширина, мм:', ['class'=>'data_on']) !!}
                        {!! Form::input('number', 'width', '0', ['class'=>'form-control', 'id'=>'width', 'step'=>'1']); !!}
                        {!! Form::label('perimeter','Периметр, мм:', ['class'=>'data_on']) !!}
                        {!! Form::input('number', 'perimeter', '0', ['class'=>'form-control', 'id'=>'perimeter', 'step'=>'1', 'readonly']); !!}
                        {!! Form::input('hidden', 'user_name', Auth::user()->name, ['class'=>'form-control', 'id'=>'name']); !!}
                        <br>
                        {!! Form::submit('Запись', ['class'=>'btn btn-primary form-control']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

