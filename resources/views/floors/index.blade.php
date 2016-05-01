@extends('layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{ url('floors/create') }}" class="btn btn-primary">添加楼层</a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Handle</th>
                        </tr>
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-success">Approved</span></td>
                            <td><a href="{{ url('floors/1/edit') }}" class="btn btn-info btn-xs">编辑</a>&nbsp;&nbsp;<a href="#" class="btn btn-danger btn-xs">删除</a></td>
                        </tr>
                        <tr>
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td><a href="#" class="btn btn-info btn-xs">编辑</a>&nbsp;&nbsp;<a href="#" class="btn btn-danger btn-xs">删除</a></td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-primary">Approved</span></td>
                            <td><a href="#" class="btn btn-info btn-xs">编辑</a>&nbsp;&nbsp;<a href="#" class="btn btn-danger btn-xs">删除</a></td>
                        </tr>
                        <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-danger">Denied</span></td>
                            <td><a href="#" class="btn btn-info btn-xs">编辑</a>&nbsp;&nbsp;<a href="#" class="btn btn-danger btn-xs">删除</a></td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection