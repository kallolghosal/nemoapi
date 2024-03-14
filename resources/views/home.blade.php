@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Download Candidate Contact Info') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('downloaddata') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="mobile" value="mobile" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">Mobile numbers</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="email" value="email">
                                    <label class="form-check-label" for="inlineCheckbox2">Email IDs</label>
                                </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Rank</label>
                                    <br />
                                    <select name="rank[]" class="selectpicker" multiple data-live-search="true" required>
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
                                    <br />
                                    <select name="vessel[]" class="selectpicker" multiple data-live-search="true" required>
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
                                    <select name="country" class="selectpicker" required>
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
                                <li>Select Rank (click on ranks to select multiple ranks)</li>
                                <li>Select Vessel type (click on vessels to select multiple vessels)</li>
                                <li>Select country</li>
                                <li>Check email to download emails only</li>
                                <li>Check mobile to download mobile nos only</li>
                                <li>Check both to download both</li>
                                <li>Click Download</li>
                                <li>A csv file with cleaned list of selected data will be downloaded</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection