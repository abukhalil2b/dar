@extends('layouts.app')

@section('content')
<style>
  h4{
    padding-top: 15px;
    margin-bottom: 0;
  }
</style>

  <div class="container"> 

    @if(false)
    <div class="row">
    <div class="col-lg-3">
    <div class="card card-active">
      <div class="card-body card-body-img-container">
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
    </div>
    @endif

    <div class="row">
    <div class="col-lg-3">
    <div class="card card-active">
    <div class="card-body card-body-img-container">
    <p>
    مشاهدة سجلات الحضور والغيب 
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
    <div class="col-lg-3">
      <div class="card card-active">
      <div class="card-body card-body-img-container">
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
    </div>

      @if($lastRecord && $lastRecord->program_tag=='sundayhero')
      <h4>ابطال الأحد</h4>
      <div class="row">
      <div class="col-lg-3">
      <div class="card card-active-teacher">
        <div class="card-body card-body-img-container">
            <p>
           قم بتسجيل الطلاب الحاضرون في برنامج ابطال الأحد
            </p>
        </div>
        <a href="{{route('teacher.studentlist')}}">
            <div class="card-footer card-footer-active-teacher">
                <p>
               سجل الطلاب الحاضرون
                </p>
            </div>  
        </a>
      </div>
      </div>
      <div class="col-lg-3">
      <div class="card card-active">
          <div class="card-body card-body-img-container">
              <p>
                مشاهدة الطلاب الحاضرون في برنامج ابطال الأحد
              </p>
          </div>
          <a href="{{route('admin.student.present.today',['program'=>'sundayhero'])}}">
              <div class="card-footer card-footer-active">
                  <p>
                 الطلاب الحاضرون
                  </p>
              </div>  
          </a>
      </div>
      </div>
      <div class="col-lg-3">
      <div class="card card-active">
        <div class="card-body card-body-img-container">
            <p>
            مشاهدة الطلاب المشتركون في برنامج ابطال الأحد
            </p>
        </div>
        <a href="{{route('program.studentlist',['program_tag'=>'sundayhero'])}}">
            <div class="card-footer card-footer-active">
                <p>
                الطلاب المشتركون
                </p>
            </div>    
        </a>
      </div>
      </div>
      </div>  
      @endif

      @if($lastRecord && $lastRecord->program_tag=='fiqh')
      <h4>البرنامج الفقهي</h4>
      <div class="row">
      <div class="col-lg-3">
      <div class="card card-active-teacher">
        <div class="card-body card-body-img-container">
            <p>
           قم بتسجيل الطلاب الحاضرون في البرنامج الفقهي
            </p>
        </div>
        <a href="{{route('teacher.studentlist')}}">
            <div class="card-footer card-footer-active-teacher">
                <p>
               سجل الطلاب الحاضرون
                </p>
            </div>  
        </a>
      </div>
      </div>

      <div class="col-lg-3">
      <div class="card card-active">
          <div class="card-body card-body-img-container">
              <p>
                مشاهدة الطلاب الحاضرون في البرنامج الفقهي
              </p>
          </div>
          <a href="{{route('admin.student.present.today',['program'=>'fiqh'])}}">
              <div class="card-footer card-footer-active">
                  <p>
                 الطلاب الحاضرون
                  </p>
              </div>  
          </a>
      </div>
      </div>

      <div class="col-lg-3">
      <div class="card card-active">
        <div class="card-body card-body-img-container">
           <p>
           مشاهدة الطلاب المشتركون في البرنامج الفقهي
           </p>
        </div>
        <a href="{{route('program.studentlist',['program_tag'=>'fiqh'])}}">
            <div class="card-footer card-footer-active">
                <p>
                الطلاب المشتركون
                </p>
            </div>    
        </a>
      </div>
      </div>
      </div> 
      @endif

      @if($lastRecord && $lastRecord->program_tag=='anwar')
      <h4>برنامج أنوار القرآن</h4>
      <div class="row">
      <div class="col-lg-3">
      <div class="card card-active-teacher">
        <div class="card-body card-body-img-container">
            <p>
           قم بتسجيل الطلاب الحاضرون في برنامج انوار القرآن
            </p>
        </div>
        <a href="{{route('teacher.studentlist')}}">
            <div class="card-footer card-footer-active-teacher">
                <p>
               سجل الطلاب الحاضرون
                </p>
            </div>  
        </a>
      </div>
      </div>
      <div class="col-lg-3">
        <div class="card card-active">
            <div class="card-body card-body-img-container">
                <p>
                  مشاهدة الطلاب الحاضرون في برنامج انوار القرآن
                </p>
            </div>
            <a href="{{route('admin.student.present.today',['program'=>'anwar'])}}">
                <div class="card-footer card-footer-active">
                    <p>
                   الطلاب الحاضرون
                    </p>
                </div>  
            </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card card-active">
          <div class="card-body card-body-img-container">
             <p>
             مشاهدة الطلاب المشتركون في برنامج انوار القرآن
             ومتابعة تقدمهم في الحفظ
             </p>
          </div>
          <a href="{{route('program.studentlist',['program_tag'=>'anwar'])}}">
            <div class="card-footer card-footer-active">
                <p>
                الطلاب المشتركون
                </p>
            </div>    
          </a>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card card-active">
          <div class="card-body card-body-img-container">
             <p>
             مشاهدة الطلاب الذين حضروا ولمن لم يسمعوا عند المدرس
             </p>
          </div>
          <a href="{{route('admin.student.report.day')}}">
            <div class="card-footer card-footer-active">
                <p>
                طلاب انجزوا وطلاب لم ينجزوا
                </p>
            </div>    
          </a>
        </div>
      </div>

      </div> 
      @endif

      <div class="row">
        <div class="col-lg-3">
        <div class="card card-active">
          <div class="card-body card-body-img-container">
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
              النقاط التي تعطى الطالب نتيجة مشاركتة وتفاعله ونقاط تخصم نتيجة عدم انضباطة
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
      </div>  
    </div>
</div>

<div class="container">
  <div class="row pt-5"> 
    <div class="col-lg-3 pb-5">
      <a href="{{route('level.index')}}" class="btn btn-light-green" >المستويات</a>
    </div>
  </div>
</div>

@endsection
