@extends('layout.app')
@section('title','add')
@section('content')
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                   
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Add Course</h4>
                                            </div>
                                        </div>
                                        <div class="card card-bordered card-preview">
                                            <form action="/course" method="POST">
                                                @csrf
                                            
                                                <div class="card-inner">
                                                    <div class="preview-block">
                                                    
                                                        <div class="row gy-4">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-01">Title</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="default-01" placeholder="Enter Title" name="title">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-01">Event</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="default-01" placeholder="Enater Event" name="event">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="row gy-4">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-01">Date</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="default-01" placeholder="Enter Date" name="date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-md-6">
                                                                <button class="btn btn-primary">Add</button>
                                                            </div>
                                                            
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!-- .card-preview -->
                                        
                                    </div><!-- .nk-block -->
                                    
                                    
                                    
                                    
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->


@endsection
