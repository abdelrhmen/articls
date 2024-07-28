@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>الاقسام</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">

                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="{{ route('admin.Category.create') }}">
                                <h2>اضافة قسم</h2>
                            </a>

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title"># </th>
                                        <th class="column-title">Name </th>
                                        <th class="column-title">Imge </th>
                                        <th class="column-title">Description </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions (
                                                <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Categories as $index => $Category)
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $Category->name }}</td>
                                            <td>
                                                @foreach ($Category->media as $media)
                                                    <img src="{{ $media->original_url }}"> @endforeach
                                            </td>
                                            <td><i class="success fa fa-long-arrow-up"></i></td>
                                            <td>{{ $Category->description }}</td>

                                            <td>
                                                <div class="row">

                                                    <a href="{{ route('admin.Category.edit', $Category->id) }}"
                                                        class="btn btn-default"><i class="fa fa-edit">Edit</i></a>

                                                    <form action="{{ route('admin.Category.destroy', $Category->id) }}"
                                                        method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button type="submit" class="btn btn-default"><i
                                                                class="fa fa-trash"></i>delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
