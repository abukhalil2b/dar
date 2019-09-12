@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        
        
        <div class="row pt-3">
            <div class="col-lg-12">
                <form action="">
                <table class="table">
                    <tr>
                        <td>
                           <select name="" id="programid" class="form-control">
                                <option value="">اختر برنامج معين...</option>}
                                @foreach($programs as $program)
                                    @if($program->program_tag == 'anwar')
                                        <option value="{{$program->id}}">انوار القرآن</option>
                                    @endif
                                    @if($program->program_tag == 'fiqh')
                                        <option value="{{$program->id}}">المدرسة الفقهية</option>
                                    @endif
                                    @if($program->program_tag == 'sundayhero')
                                        <option value="{{$program->id}}">ابطال الأحد</option>
                                    @endif
                                @endforeach
                            </select>             
                        </td>
                        <td>
                            <button class="btn" type="submit"> بحث </button>
                        </td>
                    </tr>
                </table>
                </form>
                
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


