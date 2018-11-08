@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @if($happy_number_results)
            @if($happy_number_results['error'])
                <div class="alert alert-danger" role="alert">
                    Error! {{ $happy_number_results['error_message'] }}
                </div>
            @else
                @if($happy_number_results['is_happy'])
                    <div class="alert alert-warning" role="alert">
                        <i class="fa fa-smile-o fa-5x" aria-hidden="true"></i> {{ $happy_number_results['number'] }} is a happy number
                    </div>
                @else
                    <div class="alert alert-info" role="alert">
                        <i class="fa fa-frown-o fa-5x" aria-hidden="true"></i> {{ $happy_number_results['number'] }} is a sad number
                    </div>
                @endif
            @endif
        @endif
            <div class="card">
                <div class="card-header">
                    Happy Number Checker
                </div>
                <div class="card-body">
                    <form id="user-form" class="form-horizontal" method="POST" action="{{ action('HappyNumberController@store') }}">
                        @method('POST')
                        @csrf

                        <div class="form-group{{ $errors->has('happy_number') ? ' has-error' : '' }}">
                            <label for="happy_number" class="col-md-4 control-label">Number</label>

                            <div class="col-md-6">
                                <input id="happy_number" type="number" class="form-control" name="happy_number" value="{{ old('happy_number') ? old('happy_number') : ( $happy_number_results['number'] ? $happy_number_results['number'] : 1) }}" required>

                                @if ($errors->has('happy_number'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('happy_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-outline-success ">
                                    <i class="fa fa-question-circle-o " aria-hidden="true"></i>
                                    <span class="">Check</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection