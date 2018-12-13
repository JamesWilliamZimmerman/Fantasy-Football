@extends('layouts.app')
@include('header')

@section('content')

<h2>League Standings</h2>
@foreach($league as $leagues)
<h1>{{$leagues->LeagueName}}</h1>

<table id="leaguetable" style="width:100%">
  <tr>
    <th>Name</th>
    <th>Wins</th> 
    <th>Losses</th>
  </tr>
  <tr>
  <td>{{$leagues->TID1}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
  <tr>
    <td>{{$leagues->TID2}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
  <tr>
    <td>{{$leagues->TID3}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
  <tr>
    <td>{{$leagues->TID4}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
  <tr>
    <td>{{$leagues->TID5}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
  <tr>
    <td>{{$leagues->TID6}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
  <tr>
    <td>{{$leagues->TID7}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
  <tr>
    <td>{{$leagues->TID8}}</td>
    <td><p>10</p></td>
    <td><p>4</p></td>
  <tr>
@endforeach
@endsection

 