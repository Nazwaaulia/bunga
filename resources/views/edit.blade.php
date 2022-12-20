@extends('layout')
@section('content')
<div class="container mt-5 mb-4 d-flex justify-content-center">
    <div class="card" style="width: 700px" style="width: 10 rem;">
    <div class="card text-center">
        <div class="card-header">
          edit plant
        </div>
        <div class="card-body">
          
          <table class="table">
            <thead>
              <tr>
              <div class="mt-5">

                <div class="d-flex justify-content-start mb-3 " style="margin-right: 1000px">
                  <div class="row align-items-center">
                    <label for="exampleFormControlInput1" class="form-label">code plant</label>
                    <div class="col">
                      <input class="tes" type="text" name="code plant">
                    </div>
                  </div>
                  <div class="row align-items-center ms-3">
                    <label for="exampleFormControlInput1" class="form-label">name plant</label>
                    <div class="col">
                      <input class="tes" type="text" name="code plant">
                    </div>
                  </div>
                </div>
                
                <div class="type">
                  <label>type</label>
                        <select name="type" class="w-100">
                          <option value="" hidden>-- select type -- </option>
                          <option value="drugs">drugs</option>
                          <option value="fruits">fruits</option>
                          <option value="vegetables" >vegetables</option>
                        </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Notes</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <div class="rayon">
                    <label>growth</label>
                          <select name="growth" class="w-100">
                            <option value="" hidden>-- select groeth -- </option>
                            <option value="tunas">tunas</option>
                            <option value="batang">batang</option>
                            <option value="daun" >daun</option>
                            <option value="bunga" >bunga</option>
                            <option value="buah" >buah</option>
                          </select>
                  </div>
              <div class="mt-5">
                <a href="no" class="btn btn-primary">Save</a><button type="button" class="btn btn-outline- cancel">Cancel</a>
              </div>
            </thead>
            <tbody>
              <tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer text-muted">
        </div>