@extends('layout/layout')
@section('title', 'City')
@section('content')


        <form>
        @csrf
            <div class-form-group>
                <label>Estado</label>


                <select name="country" class="form-control">

                    @foreach($countries as $country => $value)
                    <option value="{{$country}}">{{$value}}</option>
                    @endforeach


                </select>

            </div>
            <div class-form-group>
                    <label>Cidade</label>

                        <select name="state"  class="form-control">
                            <option>---Cidade-</option>





                        </select>

            </div>


        </form>




    @endsection