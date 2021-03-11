@extends('layouts.app')

@section('content')

<div class="container space">
                    <form action="{{ url('students') }}" method="post">
                        @csrf
                        <div class="col-lg-6">
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">Ime:</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}" >
                            <label for="last_name">Prezime:</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group {{ ($errors->has('direction') || $errors->has('year')) ? 'has-error' : '' }}">
                                    <label for="Expiration">Broj indeksa:                                                                                     &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Godina :</label>
                                    <div class="row">
                                        <div class="col-md-8" style=" padding-right: 5px; "><input type="text" class="form-control" name="direction" id="direction" value="{{ old('direction') }}"></div>
                                        <div class="col-md-4" style=" padding-left: 15px; ">
                                            <select  class="form-control" name="year" id="year" value="{{ old('year') }}">
                                                <option value="1"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group {{ ($errors->has('presence') ) ? 'has-error' : '' }}">
                                    <label for="Expiration">Prisustvo:</label>
                                    <div class="row">
                                        <div class="col-md-12" style=" padding-right: 5px; "><input type="text" class="form-control" name="presence" id="presence" value="{{ old('presence') }}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('colloquium1') ? 'has-error' : '' }}">
                                    <label for="colloquium1">Kolokvijum 1:</label>
                                    <input type="text" class="form-control" name="colloquium1" id="colloquium1" value="{{ old('colloquium1') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('colloquium2') ? 'has-error' : '' }}">
                                    <label for="colloquium1">Kolokvijum 2:</label>
                                    <input type="text" class="form-control" name="colloquium2" id="colloquium2" value="{{ old('colloquium2') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('exam') ? 'has-error' : '' }}">
                                    <label for="colloquium1">Ispit:</label>
                                    <input type="text" class="form-control" name="exam" id="exam" value="{{ old('exam') }}">
                                </div>
                            </div>
                            </div>

                        <div class="col-lg-6">
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary">Snimi</button>
                            </div>
                       </div>
                    </form>

</div>
<div class="container">
<div class="alert alert-primary text-center" role="alert">
    <h4>SPISAK STUDENATA</h4>
</div>
</div>
<div class="container">
    <div class="col-md-12">

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Broj indeksa</th>
                <th>Godina</th>
                <th>Prisustvo</th>
                <th>K 1</th>
                <th>K 2</th>
                <th>Ispit</th>
                <th>UKUPNO</th>
                <th>OCENA</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Students as $key=>$value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->last_name }}</td>
                    <td>{{ $value->direction }}</td>
                    <td>{{ $value->year }}</td>
                    <td>{{ $value->presence}}</td>
                    <td>{{ $value->colloquium1 }}</td>
                    <td>{{ $value->colloquium2 }}</td>
                    <td>{{ $value->exam }}</td>
                    <td>{{ $value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam }}</td>
                    @if(($value->presence +$value->colloquium1 + $value->colloquium1 + $value->exam)  < 51)
                        <td style="background-color: #bac8f3;color:red;font-weight: bold;text-align: center">5</td>
                    @endif
                    @if(($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam)  >= 51 && ($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam) < 61)
                        <td style="background-color: #bac8f3;color:green;font-weight: bold;text-align: center">6</td>
                    @endif
                    @if(($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam)  >= 61 && ($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam) < 71)
                        <td style="background-color: #bac8f3;color:green;font-weight: bold;text-align: center">7</td>
                    @endif
                    @if(($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam)  >= 71 && ($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam) < 81)
                        <td style="background-color: #bac8f3;color:green;font-weight: bold;text-align: center">8</td>
                    @endif
                    @if(($value->presence +$value->colloquium1 + $value->colloquium1 + $value->exam)  >= 81 && ($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam) < 91)
                        <td style="background-color: #bac8f3;color:green;font-weight: bold;text-align: center">9</td>
                    @endif
                    @if(($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam)  >= 91 && ($value->presence + $value->colloquium1 + $value->colloquium1 + $value->exam) <= 100)
                        <td style="background-color: #bac8f3;color:green;font-weight: bold;text-align: center">10</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <input type="button" value="Nazad" onclick="window.location.href='{{ url()->previous() }}'" />
</div>

@endsection
