@extends('layout.app')
@section('title','student')
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
                                            <a href="student/create" class="btn btn-primary float-right">Add</a>
                                                <h4 class="nk-block-title">Student List</h4>
                                               
                                            </div>
                                    </div>
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col nk-tb-col-check">
                                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input" id="student_id_all">
                                                                    <label class="custom-control-label" for="uid"></label>
                                                                </div>
                                                            </th>
                                                            <th class="nk-tb-col"><span class="sub-text">name</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">mobile</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">email</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">course</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">edit</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">delete</span></th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($students as $student)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col nk-tb-col-check">
                                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input student_ids" name="student_ids[]">
                                                                    <label class="custom-control-label" for="uid1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$student->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$student->mobile}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">{{$student->email}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$student->course}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount"><a href="student/{{$student->id}}/edit" class="btn btn-warning">edit</a></span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                            <form action="student/{{$student->id}}" method="POST">
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
