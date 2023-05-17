@extends('layouts.app')
@section('content')

<div style="margin-left: 250px" class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<h3 class="text-3xl font-mono dark:text-white ">Add new Exam:</h3>

{!! Form::open(['method' => 'POST', 'route' => ['exams.store']]) !!}

<div class="bg-white  rounded-md p-4">
    <div class="text-lg font-bold">
        Register
    </div>

    <div class="mt-4">
        <div class="mb-4">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select the subject</label>
            {!! Form::select('topic_id', $topics, old('topic_id'), ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
            <p class="text-red-500 mt-1">
                @error('topic_id')
                {{ $message }}
                @enderror
            </p>
        </div>



                <div class="col-xs-12 form-group">
                    {!! Form::label('typetitle', 'Exam Type: ', ['class' => 'mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::text('exam_type', old('exam_type'), ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'placeholder' => 'MidTerm, Final Exam, ....']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('exam_type'))
                        <p class="help-block">
                            {{ $errors->first('exam_type') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('datetitle', 'Exam Date: ', ['class' => 'mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::date('exam_date', old('exam_date'), ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'placeholder' => 'DD/MM/YYYY']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('exam_date'))
                        <p class="help-block">
                            {{ $errors->first('exam_date') }}
                        </p>
                    @endif
                </div>


            </div>



        </div>
    </div>
</div>

    {!! Form::submit("Add", ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

