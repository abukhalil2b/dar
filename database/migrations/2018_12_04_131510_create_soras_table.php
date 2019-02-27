<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ayat');

            $table->integer('juz_id')->unsigned()->nullable();
            $table->foreign('juz_id')->references('id')->on('juzs');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soras');
    }
}



/*

INSERT INTO `soras` (`id`, `name`, `ayat`, `created_at`, `updated_at`) VALUES
(NULL,  '  سورة الفاتحة '  ,  '  7 '  , NULL, NULL),
(NULL,  '  سورة البقرة '  ,  '  286 '  , NULL, NULL),
(NULL,  '  سورة آل عمران '  ,  '  200 '  , NULL, NULL),
(NULL,  '  سورة النساء '  ,  '  176 '  , NULL, NULL),
(NULL,  '  سورة المائدة ' , '120 '  , NULL, NULL),
(NULL, '  سورة الأنعام' , '165'  , NULL, NULL),
(NULL, '  سورة الأعراف' , '206'  , NULL, NULL),
(NULL, '  سورة الأنفال',  '75'  , NULL, NULL),
(NULL, '  سورة التوبة' , '129'  , NULL, NULL),
(NULL, '  سورة يونس' , '109'  , NULL, NULL),
(NULL, '  سورة هود' , '123'  , NULL, NULL),
(NULL, '  سورة يوسف' , '111'  , NULL, NULL),
(NULL, '  سورة الرعد' , '43'  , NULL, NULL),
(NULL, '  سورة إبراهيم' , '52'  , NULL, NULL),
(NULL, '  سورة الحجر' , '99'  , NULL, NULL),
(NULL, '  سورة النحل' , '128 '  , NULL, NULL),
(NULL, '  سورة الإسراء' , '111 '  , NULL, NULL),
(NULL, '  سورة الكهف' , '110 '  , NULL, NULL),
(NULL, '  سورة مريم' , '98 '  , NULL, NULL),
(NULL, '  سورة طه' , '135 '  , NULL, NULL),
(NULL, '  سورة الأنبياء' , '112 '  , NULL, NULL),
(NULL, '  سورة الحج' , '78 '  , NULL, NULL),
(NULL, '  سورة المؤمنون' , '118 '  , NULL, NULL),
(NULL, '  سورة النور' , '64 '  , NULL, NULL),
(NULL, '  سورة الفرقان' , '77 '  , NULL, NULL),
(NULL, '  سورة الشعراء' , '227 '  , NULL, NULL),
(NULL, '  سورة النمل' , '93 '  , NULL, NULL),
(NULL, '  سورة القصص' , '88 '  , NULL, NULL),
(NULL, '  سورة العنكبوت' , '69 '  , NULL, NULL),
(NULL, '  سورة الروم' , '60 '  , NULL, NULL),
(NULL, '  سورة لقمان' , '34 '  , NULL, NULL),
(NULL, '  سورة السجدة' , '30 '  , NULL, NULL),
(NULL, '  سورة الأحزاب' , '73 '  , NULL, NULL),
(NULL, '  سورة سبأ' , '54 '  , NULL, NULL),
(NULL, '  سورة فاطر' , '45 '  , NULL, NULL),
(NULL, '  سورة يس' , '83 '  , NULL, NULL),
(NULL, '  سورة الصافات' , '182 '  , NULL, NULL),
(NULL, '  سورة ص' , '88 '  , NULL, NULL),
(NULL, '  سورة الزمر' , '75 '  , NULL, NULL),
(NULL, '  سورة غافر' , '85 '  , NULL, NULL),
(NULL, '  سورة فصلت' , '54 '  , NULL, NULL),
(NULL, '  سورة الشورى' , '53 '  , NULL, NULL),
(NULL, '  سورة الزخرف' , '89 '  , NULL, NULL),
(NULL, '  سورة الدخان' , '59 '  , NULL, NULL),
(NULL, '  سورة الجاثية' , '37 '  , NULL, NULL),
(NULL, '  سورة الأحقاف' , '35 '  , NULL, NULL),
(NULL, '  سورة محمد' , '38 '  , NULL, NULL),
(NULL, '  سورة الفتح' , '29 '  , NULL, NULL),
(NULL, '  سورة الحجرات' , '18 '  , NULL, NULL),
(NULL, '  سورة ق' , '45 '  , NULL, NULL),
(NULL, '  سورة الذاريات' , '60 '  , NULL, NULL),
(NULL, '  سورة الطور' , '49 '  , NULL, NULL),
(NULL, '  سورة النجم' , '62 '  , NULL, NULL),
(NULL, '  سورة القمر' , '55 '  , NULL, NULL),
(NULL, '  سورة الرحمان' , '78 '  , NULL, NULL),
(NULL, '  سورة الواقعة' , '96 '  , NULL, NULL),
(NULL, '  سورة الحديد' , '29 '  , NULL, NULL),
(NULL, '  سورة المجادلة' , '22 '  , NULL, NULL),
(NULL, '  سورة الحشر' , '24 '  , NULL, NULL),
(NULL, '  سورة الممتحنة' , '13 '  , NULL, NULL),
(NULL, '  سورة الصف' , '14 '  , NULL, NULL),
(NULL, '  سورة الجمعة' , '11 '  , NULL, NULL),
(NULL, '  سورة المنافقون' , '11 '  , NULL, NULL),
(NULL, '  سورة التغابن' , '18 '  , NULL, NULL),
(NULL, '  سورة الطلاق' , '12 '  , NULL, NULL),
(NULL, '  سورة التحريم' , '12 '  , NULL, NULL),
(NULL, '  سورة الملك' , '30 '  , NULL, NULL),
(NULL, '  سورة القلم' , '52 '  , NULL, NULL),
(NULL, '  سورة الحاقة' , '52 '  , NULL, NULL),
(NULL, '  سورة المعارج' , '44 '  , NULL, NULL),
(NULL, '  سورة نوح' , '28 '  , NULL, NULL),
(NULL, '  سورة الجن' , '28 '  , NULL, NULL),
(NULL, '  سورة المزمل' , '20 '  , NULL, NULL),
(NULL, '  سورة المدثر' , '56 '  , NULL, NULL),
(NULL, '  سورة القيامة' , '40 '  , NULL, NULL),
(NULL, '  سورة الإنسان' , '31 '  , NULL, NULL),
(NULL, '  سورة المرسلات' , '50 '  , NULL, NULL),
(NULL, '  سورة النبأ' , '40 '  , NULL, NULL),
(NULL, '  سورة النازعات' , '46 '  , NULL, NULL),
(NULL, '  سورة عبس' , '42 '  , NULL, NULL),
(NULL, '  سورة التكوير' , '29 '  , NULL, NULL),
(NULL, '  سورة الإنفطار' , '19 '  , NULL, NULL),
(NULL, '  سورة المطففين' , '36 '  , NULL, NULL),
(NULL, '  سورة الإنشقاق' , '25 '  , NULL, NULL),
(NULL, '  سورة البروج' , '22 '  , NULL, NULL),
(NULL, '  سورة الطارق' , '17 '  , NULL, NULL),
(NULL, '  سورة الأعلى' , '19 '  , NULL, NULL),
(NULL, '  سورة الغاشية' , '26 '  , NULL, NULL),
(NULL, '  سورة الفجر' , '30 '  , NULL, NULL),
(NULL, '  سورة البلد' , '20 '  , NULL, NULL),
(NULL, '  سورة الشمس' , '15 '  , NULL, NULL),
(NULL, '  سورة الليل' , '21 '  , NULL, NULL),
(NULL, '  سورة الضحى' , '11 '  , NULL, NULL),
(NULL, '  سورة الشرح' , '8 '  , NULL, NULL),
(NULL, '  سورة التين' , '8 '  , NULL, NULL),
(NULL, '  سورة العلق' , '19 '  , NULL, NULL),
(NULL, '  سورة القدر' , '5 '  , NULL, NULL),
(NULL, '  سورة البينة' , '8 '  , NULL, NULL),
(NULL, '  سورة الزلزلة' , '8 '  , NULL, NULL),
(NULL, '  سورة العاديات' , '11 '  , NULL, NULL),
(NULL, '  سورة القارعة' , '11 '  , NULL, NULL),
(NULL, '  سورة التكاثر' , '8 '  , NULL, NULL),
(NULL, '  سورة العصر' , '3 '  , NULL, NULL),
(NULL, '  سورة الهمزة' , '9 '  , NULL, NULL),
(NULL, '  سورة الفيل' , '5 '  , NULL, NULL),
(NULL, '  سورة قريش' , '4 '  , NULL, NULL),
(NULL, '  سورة الماعون' , '7 '  , NULL, NULL),
(NULL, '  سورة الكوثر' , '3 '  , NULL, NULL),
(NULL, '  سورة الكافرون' , '6 '  , NULL, NULL),
(NULL, '  سورة النصر' , '3 '  , NULL, NULL),
(NULL, '  سورة المسد' , '5 '  , NULL, NULL),
(NULL, '  سورة الأخلاص' , '4 '  , NULL, NULL),
(NULL, '  سورة الفلق' , '5 '  , NULL, NULL),
(NULL, '  سورة الناس' , '6 '  , NULL, NULL)
;


*/