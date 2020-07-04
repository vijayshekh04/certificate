@extends('layout.app')
@section('title','Certificate')
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                   
                                    
                                    </div> <!-- nk-block -->
                                    <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                            <a href="certificate/create" class="btn btn-primary float-right">Add</a>
                                                <h4 class="nk-block-title">Certificate List</h4>
                                               
                                            </div>
                                    </div>
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col nk-tb-col-check">
                                                            </th>
                                                            <th class="nk-tb-col"><span class="sub-text">Design</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Params</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">edit</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">delete</span></th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($certificates as $certificate)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col nk-tb-col-check">
                                                                
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    
                                                                    <div class="user-info">
                                                                        <img src="{{asset('/'.$certificate->design)}}" alt="pic" width="100px" height="100px">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$certificate->params}}</span>
                                                            </td>
                                                           
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount"><a href="certificate/{{$certificate->id}}/edit" class="btn btn-warning">edit</a></span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                            <form action="certificate/{{$certificate->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                                <span class="tb-amount"><button href="" class="btn btn-danger">delete</button></span>
                                                            </form>
                                                                
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                    @endforeach 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
@endsection
