@extends('layouts.app')

@section('htmlheader_title')
    Foods
@endsection

@section('main-content')
    <section class="content">
        <div class="row">
            <div class="col-md-4 form-group">
                <label>餐厅</label>
                <select class="form-control">
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label>窗口</label>
                <select class="form-control">
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>菜色</label>
                <select name="" id="" class="form-control">
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                    <option>炸蘑菇</option>
                </select>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-4">
                <button class="btn bg-maroon btn-block" data-target="#addRes" data-toggle="modal">添加餐厅</button>
            </div>
            <div class="col-md-4">
                <button class="btn bg-navy btn-block" data-target="#addWin" data-toggle="modal">添加窗口</button>
            </div>
            <div class="col-md-4">
                <button class="btn bg-olive btn-block" data-target="#addFoo" data-toggle="modal">添加菜色</button>
            </div>
        </div>

        <div class="modal" id="addRes">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">添加餐厅</h4>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">餐厅</label>
                                    <input type="text" name="Rname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <div class="modal" id="addWin">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">添加窗口</h4>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">选择餐厅</label>
                                    <select name="Rname" id="" class="form-control">
                                        <option value="">一层</option>
                                        <option value="">一层</option>
                                        <option value="">一层</option>
                                        <option value="">一层</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">添加窗口</label>
                                    <input type="text" name="Wname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal" id="addFoo">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Default Modal</h4>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">选择餐厅</label>
                                    <select name="Rname" id="" class="form-control">
                                        <option value="">北区</option>
                                        <option value="">北区</option>
                                        <option value="">北区</option>
                                        <option value="">北区</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                <label for="">选择窗口</label>
                                <select name="Wname" id="" class="form-control">
                                    <option value="">一楼一号</option>
                                    <option value="">二楼一号</option>
                                    <option value="">三楼一号</option>
                                    <option value="">四楼一号</option>
                                </select>
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">类型</label><br>
                                    <select class="form-control" name="type" style="width: 100%;">
                                        <option value="1">素菜</option>
                                        <option value="2">肉菜</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">添加菜色</label>
                                    <input type="text" name="Cname" class="form-control">
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">口味</label><br>
                                    <select class="form-control select" name="taste" style="width: 100%;" multiple="multiple">

                                    </select>
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">餐具</label>
                                    <select  name="dishware" style="width: 100%" class="form-control select" multiple="multiple">
                                        <option value="1">筷子</option>
                                        <option value="2">勺子</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="">价格</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                <div class="bootstrap-timepicker  col-md-offset-1 col-md-10">
                                    <div class="form-group">
                                        <label>Time picker:</label>

                                        <div class="input-group">
                                            <input type="text" class="form-control timepicker">

                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="form-group col-md-offset-1 col-md-10">
                                    <label for="">选择图片</label>
                                    <div class="row margin-bottom-40">
                                        <div class="col-md-12">
                                            <div id="cropContainerEyecandy"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">级联表格</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Reason</th>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Alexander Pierce</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-danger">Denied</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            </div>
    </section>
@endsection