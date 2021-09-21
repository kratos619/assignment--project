@extends('main-app')
@section('content')


   <div class="container">
      <div class="col-md-10 mx-auto">
         <div class="card">
            <div class="card-header">
               <p class="text-center" ><span>Packager</span></p>
            </div>
            <div class="card-body" >
                @if($errors->any())
                <ul class="alert alert-danger">
                    <li> {{$errors->first('name')}} </li>
                    <li> {{$errors->first('field_of_text')}} </li>
                    <li> {{$errors->first('number_of_word')}} </li>
                    <li> {{$errors->first('type_duration')}} </li>
                    <li> {{$errors->first('discount')}} </li>
                    <li> {{$errors->first('complementry')}} </li>
                    <li> {{$errors->first('email')}} </li>
                </ul>
                @endif
                @if (Session::has('message'))
                    <ul class="alert alert-success">
                        <p>Data added</p>
                    </ul>
                @endif
                <form action="/products" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Package Type</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                            name="package_type"
                                            value="translate" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Translate
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            name="package_type" value="Proofreading"
                                            class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Proofreading
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            name="package_type"
                                            value="tep"
                                            class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                TEP
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            name="package_type"
                                            value="other"
                                            class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Field of text</label>
                                        <div class="form-check">
                                            <input
                                            name="field_of_text"
                                            value="general domain"
                                            class="form-check-input" type="radio">
                                            <label class="form-check-label">
                                                General Domain
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            name="field_of_text"
                                            value="Technical Domain"
                                            class="form-check-input" type="radio">
                                            <label class="form-check-label">
                                                Techical Domain
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            name="field_of_text"
                                            value="Medical Domain"
                                            class="form-check-input" type="radio" >
                                            <label class="form-check-label">
                                                Medical Domain
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                            name="field_of_text"
                                            value="other"
                                            class="form-check-input" type="radio">
                                            <label class="form-check-label">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="form-group">
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="number_of_word"
                                    id="numberOfWords"
                                    placeholder="Number of Words">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input
                                    type="text"
                                    class="form-control"
                                    name="type_duration"
                                    placeholder="Type Duration">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input
                                    type="number"
                                    class="form-control"
                                    name="discount"
                                    id="discount"
                                    placeholder="discount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select" name="select_something" aria-label="Default select example">
                                <option selected>Open this select Language</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <br>
                            <div class="form-group">
                                <label for="">is is complementry</label>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="complementry" value="yes">
                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="complementry" value="no">
                                <label class="form-check-label" >No</label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Type Name" >
                            </div>
                            <br>
                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="Type email"  >
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center" >
                               <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
         </div>
      </div>
   </div>
@endsection
