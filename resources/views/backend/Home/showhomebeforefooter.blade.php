@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('Before Footer')}}</h1>
        </div>
        
        <div class="col text-right">
            <a href="{{ url('admin/addhomebeforefooter') }}" class="btn btn-circle btn-info">
                <span>{{translate('Add Before Footer')}}</span>
            </a>
        </div>
    </div>
</div>
<br>

<div class="card">
    
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th >{{translate('Before Footer Title')}}</th>
                        <th >{{translate('Before Footer Text')}}</th>
                        <th >{{translate('Operation')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                   <tr>
                       
                        <td> {{$data->beforefootertitle}} </td>
                        <td> {{$data->beforefootertext}} </td>                        
                        <td>
                            <a href="{{url('admin/edithomebeforefooter',$data->id)}}"><i class='far fa-edit' style='font-size:28px;color:blue'></i>
                            </a>
                            <a href="{{url('admin/deletehomebeforefooter',$data->id)}}"><i class='fas fa-trash-alt' style='font-size:28px;color:red'></i>
                            </a>
                        </td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
</div>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection


