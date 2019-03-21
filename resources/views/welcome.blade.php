@extends('layouts.app')

@section('content')

<section class="body">
    <div class="container">    
      <div class="row pt-3">
        
    @if($user = Auth::user())
      @if($user->user_type=='admin')
        <div class="col-lg-3">
            <div class="card card-active">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/teacher.png') }}" width=40>
                 <p>
                 عرض كل المدرسين
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
                    <img class="card-body-img" src="{{ asset('img/calendar.png') }}" width=40>
                    <p>
                    كل اسبوع يقوم المشرف باضافة برنامج جديد
                    </p>
                </div>
                <a href="{{route('program.index')}}">
                    <div class="card-footer card-footer-active">
                        <p>
                        البرنامج الإسبوعي
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

      @endif
    @endif

      @if($program_tag=='anwar')
  
        <div class="col-lg-3">
          <div class="card card-active-teacher">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/time.png') }}" width=40>
                  <p>
                  سجل الغياب ومتابعة الحفظ وتدوين الملاحظات
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

        @endif


 @if($program_tag!='anwar')

        <div class="col-lg-3">
          <div class="card card-active-teacher">
              <div class="card-body card-body-img-container">
                  <img class="card-body-img" src="{{ asset('img/time.png') }}" width=40>
                  <p>
                  سجل الحضور
                  </p>
              </div>
              <a href="{{route('teacher.studentlist.other')}}">
                  <div class="card-footer card-footer-active-teacher">
                      <p>
                      
                      @if(App\Program::orderBy('id','desc')->first()!=null)
                      [{{App\Program::orderBy('id','desc')->first()->name}}]
                      @endif
                      </p>
                  </div>  
              </a>
          </div>
        </div>
@endif



    </div>




    </div>
</section><!--/body-->

@endsection
