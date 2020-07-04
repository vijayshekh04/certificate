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
                                                <h4 class="title nk-block-title">Add Certificate</h4>
                                            </div>
                                        </div>
                                        <div class="card card-bordered card-preview">
                                            <form action="/certificate" method="POST" enctype="multipart/form-data">
                                                @csrf
                                            
                                                <div class="card-inner">
                                                    <div class="preview-block">
                                                    
                                                        <div class="row gy-4">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-01">Design</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="file" class="form-control" id="default-01" name="picture">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-01">Params</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="default-01" placeholder="Enater Params" name="params">
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
