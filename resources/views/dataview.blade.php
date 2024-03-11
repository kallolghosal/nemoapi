@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <from action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Rank</label>
                                    <select name="" class="form-select"></select>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Vessel</label>
                                    <select name="" class="form-select"></select>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Country</label>
                                    <select name="" class="form-select"></select>
                                </div>
                            </div>
                            <br />
                            <input type="submit" name="submit" value="Download" class="btn btn-primary" />
                        </form>
                        </div>
                        <div class="col">
                            <h2>Instructions</h2>
                            <ul>
                                <ol>Select Rank</ol>
                                <ol>Select Vessel type</ol>
                                <ol>Select country</ol>
                                <ol>Click Download</ol>
                                <ol>A csv file with cleaned mobile nos will be downloaded</ol>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection