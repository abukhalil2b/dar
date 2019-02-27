@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        
        
        <div class="row pt-3">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <td>اسم الطالب</td>
                        <td>الملحوظة</td>
                        <td>التعليقات الإدارية</td>
                    </tr>

                    @foreach($warnings as $warning)
                    <tr>
                        <td>
                            {{$warning->student->first_name}}
                        </td>
                        <td>
                            {{$warning->note}}
                            
                        </td>
                        <td>
                            {{$warning->comment}}
                            <a class="edit-link"  
                             href="{{route('admin.warning.edit',['warning_id'=>$warning->id])}}"> 
                             <span class="edit-link">تعديل </span> 
                            </a>
                        </td>
                        
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div><!--/container-->

@endsection

