@extends('layouts.app')

@section('content')

<section class="body">
    <div class="container">    
      <div class="row pt-3">
   
      <div class="col-lg-3">
        <div class="card card-active">
            <div class="card-body card-body-img-container">
                <img class="card-body-img" src="{{ asset('img/calendar.png') }}" width=40>
                <p>
                سجل الحضور والغيب 
                </p>
            </div>
            <a href="{{route('admin.record.index')}}">
                <div class="card-footer card-footer-active">
                    <p>
                    السجل
                    </p>
                </div>    
            </a>
        </div>
    </div>
@if(false)
    <div class="col-lg-3">
      <div class="card card-active">
          <div class="card-body card-body-img-container">
              <img class="card-body-img" src="{{ asset('img/calendar.png') }}" width=40>
              <p>
              مشاهدة البرامج
              </p>
          </div>
          <a href="{{route('program.index')}}">
              <div class="card-footer card-footer-active">
                  <p>
                  البرامج
                  </p>
              </div>    
          </a>
      </div>
    </div>
@endif
    <div class="col-lg-3">
        <div class="card card-active">
            <div class="card-body card-body-img-container">
                <img class="card-body-img" src="{{ asset('img/flag.png') }}" width=40>
                <p>
                برنامج ابطال الأحد
                </p>
            </div>
            <a href="{{route('program.studentlist',['program_tag'=>'sundayhero'])}}">
                <div class="card-footer card-footer-active">
                    <p>
                    برنامج ابطال الأحد
                    </p>
                </div>    
            </a>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card card-active">
          <div class="card-body card-body-img-container">
              <img class="card-body-img" src="{{ asset('img/flag.png') }}" width=40>
             <p>
             برنامج أنوار القرآن
             </p>
          </div>
          <a href="{{route('program.studentlist',['program_tag'=>'anwar'])}}">
              <div class="card-footer card-footer-active">
                  <p>
                  برنامج أنوار القرآن
                  </p>
              </div>    
          </a>
        </div>
      </div>

      <div class="col-lg-3">
            <div class="card card-active">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/flag.png') }}" width=40>
                 <p>
                 البرنامج الفقهي
                 </p>
              </div>
              <a href="{{route('program.studentlist',['program_tag'=>'fiqh'])}}">
                  <div class="card-footer card-footer-active">
                      <p>
                      البرنامج الفقهي
                      </p>
                  </div>    
              </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-active">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/teacher.png') }}" width=40>
                 <p>
                 عرض كل المدرسون
                 </p>
              </div>
              <a href="{{route('admin.teacher.index')}}">
                  <div class="card-footer card-footer-active">
                      <p>
                      المدرسون
                      </p>
                  </div>    
              </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-active">
                <div class="card-body card-body-img-container">
                    <img class="card-body-img" src="{{ asset('img/student.png') }}" width=40>
                    <p>
                    عرض كل الطلاب 
                    </p>
                </div>
                <a href="{{route('admin.student.index')}}">
                    <div class="card-footer card-footer-active">
                        <p>
                        الطلاب 
                        </p>
                    </div>  
                </a>
            </div>
        </div>

        <div class="col-lg-3">
          <div class="card card-active">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/mon.png') }}" width=40>
                  <p>
                  الملحوظات الصادرة  من المدرسين في حق الطلبة
                  </p>
              </div>
              <a href="{{route('admin.warning.student.index',['program_id'=>App\Program::orderBy('id','desc')->value('id')])}}">
                  <div class="card-footer card-footer-active">
                      <p>
                     ملحوظات الطلبة
                      </p>
                  </div>  
              </a>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card card-active">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/time.png') }}" width=40>
                  <p>
                    مشاهدة الطلاب الحاضرون في برنامج انوار القرآن
                  </p>
              </div>
              <a href="{{route('admin.student.present.today',['program'=>'anwar'])}}">
                  <div class="card-footer card-footer-active">
                      <p>
                     الطلاب
                      </p>
                  </div>  
              </a>
          </div>
        </div>




        
        <div class="col-lg-3">
          <div class="card card-active">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/flag.png') }}" width=40>
                  <p>
النقاط التي تعطى الطالب نتيجة مشاركتة وتفاعله ونقاط تخصم نتيجة عدم انضباطة
                  </p>
              </div>
              <a href="{{route('admin.student.mark.index')}}">
                  <div class="card-footer card-footer-active">
                      <p>
                      النقاط
                      </p>
                  </div>  
              </a>
          </div>
        </div>
        

        <div class="col-lg-3">
          <div class="card card-active-teacher">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/time.png') }}" width=40>
                  <p>
                  سجل الحضور
                  </p>
              </div>
              <a href="{{route('teacher.studentlist')}}">
                  <div class="card-footer card-footer-active-teacher">
                      <p>
                      أنوار القرآن 
                      </p>
                  </div>  
              </a>
          </div>
        </div>

    </div>




    </div>
</section><!--/body-->

@endsection
