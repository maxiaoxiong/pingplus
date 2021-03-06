@extends('layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{ url('dishes/create') }}" class="btn btn-primary">添加菜色</a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>菜名</th>
                            <th>所属窗口</th>
                            <th>所属餐厅</th>
                            <th>价格</th>
                            <th>操作</th>
                        </tr>
                        @foreach($dishes as $dish)
                        <tr>
                            <td>{{ $dish->id }}</td>
                            <td>{{ $dish->dish_name }}</td>
                            <td>{{ $dish->window->window_name }}</td>
                            <td>{{ $dish->window->canteen->canteen_name }}</td>
                            <td>{{ $dish->dish_price }}</td>
                            <td><a style="float: left;margin-right: 5px;" href="dishes/{{ $dish->id }}/edit" class="btn btn-info btn-xs">编辑</a>
                                <form style="float: left;margin-top: -1px;" method="post" action="dishes/{{ $dish->id }}">
                                    <input name="_method" type="hidden" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger btn-xs">删除</button>
                                </form>
                                <a style="float: left;margin-left:5px;" href="#" data-toggle="modal" data-target="#changePrice" data-transid="{{ $dish->id }}" data-transname="{{ $dish->dish_name }}" data-transprice="{{ $dish->dish_price }}" class="btn btn-success btn-xs">加入特惠</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="box-footer text-center clearfix">
                    {!! $dishes->links() !!}
                </div>
                <div class="modal fade" id="changePrice" tabindex="-1" role="dialog" aria-labelledby="changePrice">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                            </div>
                            <form action="{{ url('dishes/1')}}" method="post">
                                <input name="_method" type="hidden" value="put">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">价格:</label>
                                        <input type="text" class="form-control dish_price" name="dish_price" id="recipient-name">
                                        <input type="hidden" class="form-control dish_id" name="dish_id" value="1">
                                        <input type="hidden" class="form-control id" name="id">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection