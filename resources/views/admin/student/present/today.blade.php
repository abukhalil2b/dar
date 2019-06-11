@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
            <p>
                الحضور والغياب لهذا اليوم بتاريخ
                {{date('d',time())}}/ {{date('m',time())}} /{{date('Y',time())}}
            </p>          
        <div class="row pt-3">
          
            <div class="col-lg-6">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>الحضور</th>
                        </tr>
                    </thead>
                    @foreach($students as $student)
                    <tr>
                        <td>
                            {{$student->id}} - {{$student->first_name}} {{$student->last_name}}
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
                <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>الغياب</th>
                        </tr>
                    </thead>
                    
                    @foreach($absents as $absent)
                    <tr>
                        <td>
                            {{$absent->first_name}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div><!--/container-->

@endsection

