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
                            <form action="{{ route('downloaddata') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Rank</label>
                                    <select name="rank[]" class="form-select" multiple>
                                        @foreach ($rank as $rk)
                                        <option value="{{$rk->rank}}">{{$rk->rank}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Vessel</label>
                                    <select name="vessel[]" class="form-select" multiple>
                                        @foreach ($vessel as $vs)
                                        <option value="{{$vs->vessel}}">{{$vs->vessel}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Country</label>
                                    <select name="country" class="form-select">
                                        <option value="">Select Country</option>
                                        @foreach ($country as $cn)
                                        <option value="{{$cn->code}}">{{$cn->country}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br />
                            <input type="submit" name="submit" value="Download" class="btn btn-primary" />
                        </form>
                        <br />
                        @if (session('status'))
                            <h4>{{ session('status') }}</h4>
                        @endif
                        </div>
                        <div class="col">
                            <h2>Instructions</h2>
                            <ul>
                                <li>Select Rank</li>
                                <li>Select Vessel type</li>
                                <li>Select country</li>
                                <li>Click Download</li>
                                <li>A csv file with cleaned list of mobile nos will be downloaded</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection