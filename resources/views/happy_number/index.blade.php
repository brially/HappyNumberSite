@extends('layouts.app')

@section('content')

    <div class="panel-body">

            <div class="alert alert-danger alert-happy-number alert-happy-number-error collapse" role="alert"  >
                Error! The number must be a whole number and greater than 0
            </div>
            <div class="alert alert-warning alert-happy-number alert-happy-number-happy collapse" role="alert"  >
                <i class="fa fa-smile-o fa-5x" aria-hidden="true"></i> @{{ result_number }} is a happy number
            </div>
            <div class="alert alert-info alert-happy-number alert-happy-number-sad collapse" role="alert"  >
                <i class="fa fa-frown-o fa-5x" aria-hidden="true"></i> @{{ result_number }} is a sad number
            </div>
            <div class="card">
                <div class="card-header">
                    Happy Number Checker
                </div>
                <div class="card-body">
                    <form id="happy_number_form" class="form-horizontal" >
                        <div class="form-group">
                            <label for="happy_number" class="col-md-4 control-label">Number</label>
                            <div class="col-md-6">
                                <input id="happy_number" type="number" class="form-control" name="happy_number" v-model="happy_number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-outline-success btn-happy-number" v-on:click="checkHappyNumber">
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