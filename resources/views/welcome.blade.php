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
                <img class="card-body-img" src="{{ asset('img/calendar.png') }}" width=40>
                <p>
                الفصول
                </p>
            </div>
            <a href="{{route('admin.program.semester.index')}}">
                <div class="card-footer card-footer-active">
                    <p>
                    ادارة الفصول
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
                الفصول
                </p>
            </div>
            <a href="{{route('admin.student.semester.index')}}">
                <div class="card-footer card-footer-active">
                    <p>
                    الطلاب المشتركين في الفصول
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
                برنامج ابطال الأحد
                </p>
            </div>
            <a href="{{route('program.index',['program_tag'=>'sundayhero'])}}">
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
          <a href="{{route('program.index',['program_tag'=>'anwar'])}}">
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
              <a href="{{route('program.index',['program_tag'=>'fiqh'])}}">
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
                    متابعة الحضور لهذا اليوم
                  </p>
              </div>
              <a href="{{route('admin.student.present.today')}}">
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
                  <img class="card-body-img" src="{{ asset('img/time.png') }}" width=40>
                  <p>
                    متابعة الحضور لهذا الشهر
                  </p>
              </div>
              <a href="{{route('admin.student.present.month')}}">
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
                  <img class="card-body-img" src="{{ asset('img/time.png') }}" width=40>
                  <p>
                    متابعة الحضور لهذا السنة
                  </p>
              </div>
              <a href="{{route('admin.student.present.year')}}">
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
        

      @endif
    @endif

    @if($program_tag=='anwar' &&auth()->user()->id !=1)
  
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


    @if($program_tag!='anwar' &&auth()->user()->id !=1)

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
