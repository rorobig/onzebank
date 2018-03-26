@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
  <h1> Welcome,{{ Auth::user()->name.' '.Auth::user()->lastname  }}</h1> 
  <p>Last login: {{ date("d-m-Y")." ".date("h:i:sa")}}</p> 
</div>
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                         <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Account</th>
                              <th scope="col">beschikbare saldo</th>
                              <th scope="col">Huidige saldo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>NL99 ABNA 0123456789
                                 {!!"<br>"!!}
                                 Studenten account
                              </td>
                              <td>€ {{$user->saldo}}</td>
                              <td>€ {{$user->saldo}}</td>
                            </tr>
                          </tbody>
                        </table>                                       
                            
                </div>
            </div>
        </div>
         <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Wisselkoersen</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                         <table class="table">

                          <thead>
                            <tr>
                              <th scope="col">Valuta</th>
                              <th scope="col">Verkoop tarief</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>AWG</td>
                              <td>1.0120</td>
                            </tr>

                            <tr>
                              <td>CAD</td>
                              <td>1.4200</td>
                            </tr>

                            <tr>
                              <td>CHF</td>
                              <td>1.9113</td>
                            </tr>

                            <tr>
                              <td>EUR</td>
                              <td>2.2432</td>
                            </tr>

                            <tr>
                              <td>GBP</td>
                              <td>2.5900</td>
                            </tr>

                           
                          </tbody>
                        </table>                                       
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
