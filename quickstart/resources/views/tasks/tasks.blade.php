@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
        
        {!! Form::open(['method' => 'POST', 'url' => 'task', 'class' => 'form-horizontal']) !!}
        
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">{{ trans('messages.task') }}</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> {{ trans('messages.add')}}
                    </button>
                </div>
            </div>
        
        {!! Form::close() !!}

    </div>
    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ trans('messages.current') }}
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    {!! Form::open(['method' => 'POST', 'url' => 'task/'.$task->id]) !!}
                                        {{ method_field('DELETE') }}
                                    
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> {{ trans('messages.delete') }}
                                        </button>
                                    
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    <!-- TODO: Current Tasks -->
@endsection