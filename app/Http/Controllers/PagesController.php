<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function clearRoute()
    {
        \Artisan::call('route:clear');

        return "OK";
    }

    public function index()
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'en';

        $about = DB::table('abouts')->get();

        if ($lang == 'uz') {

            $header = array(
                'h1' => 'BIZ HAQIMIZDA',
                'h2' => 'BIZNING FAOLIYATIMIZ',
                'h3' => "Ma'lumotlar",
                'h4' => 'Aloqa',
                'h5' => 'ILM HAL',
                'h6' => "QILADI",
                'h7' => 'BATAFSIL',
            );

            $wwd1 = array(
                'w1' => 'SMEs & Midcaps',
                'w2' => 'Raqamli transformatsiya',
                'w3' => 'Tashkiliy o`sish',
                'w4' => 'O`zgarishlarni boshqarish',
                
                'w6' => 'Eksport/import xizmatlari',
                
            );

            $wwd2 = array(
                'w1' => 'Jamg`armalar va korporatsiyalar',
                'w2' => 'M&A maslahati',
                'w3' => 'Innovatsiyalar strategiyasi',
                'w4' => 'Hukumat munosabatlari',
                'w5' => 'Katta ma’lumotlarni tahlil qilish',
                'w6' => 'Tarmoq tahlili',
                'w7' => 'Xavfni kamaytirish',
                'w8' => 'Machine learning mahsulotlari',
            );

            $wwd3 = array(
                'w1' => 'Xalqaro va jamoat tashkilotlari',
                'w2' => 'Siyosat dizayni',
                'w3' => 'Davlat moliyasi',
                'w4' => 'Inson kapitalini rivojlantirish',
                'w5' => 'Grant sxemasi dizayni',
                'w6' => 'Tarqatish tadbirlari',
            );

            $wwd4 = array(
                'w1' => 'Oilaviy va individual biznes uchun xizmatlar',
                'w2' => 'Oilaviy tomorqa va fermer xo’jaligi',
                'w3' => 'Expat ko`chirish xizmatlari',
                'w4' => 'Shaxsiy yer resurslarini boshqaris',
                'w5' => 'Avlod almashinuvini boshqarish',
                'w6' => 'Tashqi aloqalarni boshqarish',
                'w7' => 'Xayriya qilish',
            );

            $wwd5 = array(
                'w1' => 'Bilimlarni boshqarish',
                'w2' => 'Marketing va brending',
                'w3' => 'Agro-biznes rivoji',
                'w4' => 'Bozorga kirish strategiyasi',
                'w5' => 'Madaniyatlararo boshqaruv',
                'w6' => 'Tarjima va mahalliylashtirish',
                
            );

            $wwa = array (
                'w1' => 'Biz so`rov bo`yicha ma`lumotnomalarni mamnuniyat bilan taqdim etamiz. Quyida keltirilgan mutaxassislik sohalari bo`yicha mijozlarga xizmat ko`rsatilmoqda',
                
                'w3' => 'IT va telekommunikatsiyalar',
                'w4' => 'Ishlab chiqarish va loyihalash',
                'w5' => 'Transport va infratuzilmak',
                'w6' => 'Energiya va atrof-muhit',
                'w7' => 'Biotexnologiya',
                'w8' => 'Qishloq xoʻjaligi va oziq-ovqat sanoati',
                'w9' => 'Turizm va mehmondo`stlik',
                'w10' => 'Tarjima va mahalliylashtirish',
                'w11' => 'Xalqaro tashkilotlar va NNTlar',
                'w12' => 'Davlat va jamoat tashkilotlari',
                'w13' => 'Fikrlash markazlari, tadqiqot va ta`lim',
            );

            $foot = array (
                'f1' => 'Aloqa',
                'f2' => 'Toshkent, O`zbekiston',
                'f3' => 'Qamarniso ko`chasi 7-uy',
                'f4' => 'O`bekiston',
                'f5' => 'E-pochta',
                'f6' => 'Tel raqam',
                'f7' => 'Sayt',
                'f8' => 'Jamoa a`zolari',
                'f9' => 'Ariza yuboring',
            );

            $info = 'info_uz';
            $abouts = 'Biz haqimizda';

            $uzbek = 'active';
            $english = '';
        }

        else
        {

            $header = array(
                'h1' => 'Who we are',
                'h2' => 'What we do',
                'h3' => 'References',
                'h4' => 'Contact',
                'h5' => 'SCIENCE',
                'h6' => 'SOLVES',
                'h7' => 'More',
            );

            $wwd1 = array(
                'w1' => 'SMEs & Midcaps',
                'w2' => 'Digital Transformation',
                'w3' => 'Organizational Growth',
                'w4' => 'Change Management',
                
                'w6' => 'Export/Import Services',
                
            );

            $wwd2 = array(
                'w1' => 'Funds & Corporations',
                'w2' => 'M&A Advisory',
                'w3' => 'Innovation Strategy',
                'w4' => 'Government Relationship Liaison',
                'w5' => 'Machine Learning Promotion',
                'w6' => 'Network Analysis',
                'w7' => 'Risk Mitigation',
                
            );

            $wwd3 = array(
                'w1' => 'International Organisations & Public Bodies',
                'w2' => 'Policy Design',
                'w3' => 'Public Financing',
                'w4' => 'Human Capital Development',
                'w5' => 'Grant Scheme Design',
                'w6' => 'Awareness Campaigns',
            );

            $wwd4 = array(
                'w1' => 'Family Offices & Individuals',
                'w2' => 'Family farm',
                'w3' => 'Expat Relocation Services',
                'w4' => 'Private Land Management',
                'w5' => 'Handling Generational Shift',
                'w6' => 'Managing External Relationships',
                'w7' => 'Charitable Giving',
            );

            $wwd5 = array(
                'w1' => 'Knowledge Management',
                'w2' => 'Marketing & Branding',
                'w3' => 'Agri-Business Development',
                'w4' => 'Market Entry Strategy',
                'w5' => 'Cross-Cultural Management',
                'w6' => 'Translation & Localisation',
                
            );

            $wwa = array (
                'w1' => 'We gladly provide references upon request. Clients have already been served in
                the below areas of expertise',
                'w2' => 'Accounting, Banking & Finance',
                'w3' => 'IT & Telecommunication',
                'w4' => 'Manufacturing & Construction',
                'w5' => 'Transport & Infrastructure',
                'w6' => 'Energy & Environment',
                'w7' => 'Biotechnology',
                'w8' => 'Agriculture & Food Industry',
                'w9' => 'Tourism & Hospitality',
                'w10' => 'Translation & Localisation',
                'w11' => 'International Organisations & NGOs',
                'w12' => 'Government & Public Institutions',
                'w13' => 'Think Tanks, Research & Education',
            );

            $foot = array (
                'f1' => 'Contact',
                'f2' => 'Tashkent Uzbekistan',
                'f3' => 'Qamarniso-7  street',
                'f4' => 'Uzbekistan',
                'f5' => 'E-mail',
                'f6' => 'Phone',
                'f7' => 'Web site',
                'f8' => 'Project members',
                'f9' => 'Submit an application',
            );

            $info = 'info_en';
            $abouts = 'About us';

            $uzbek = '';
            $english = 'active';
        }

        return view('welcome', compact('about', 'info', 'header', 'wwd1', 'wwd2', 'wwd3', 'wwd4', 'wwd5', 'wwa', 'foot', 'abouts', 'uzbek', 'english'));
    }

    public function about()
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'en';

        $team = DB::table('teams')->get();

        if ($lang == 'uz') {

            $name = 'name_uz';
            $position = 'position_uz';
            $info = 'info_uz';
            $about = 'Biz haqimizda';

            $header = array(
                'h1' => 'BIZ HAQIMIZDA',
                'h2' => 'BIZNING FAOLIYATIMIZ',
                'h3' => 'Ma`lumotlar',
                'h4' => 'Aloqa',
            );

        }

        else
        {
            $name = 'name_en';
            $position = 'position_en';
            $info = 'info_en';
            $about = 'About us';

            $header = array(
                'h1' => 'Who we are',
                'h2' => 'What we do',
                'h3' => 'References',
                'h4' => 'Contact',
            );

        }
        return view('front.about', compact('team', 'name', 'position', 'info', 'about', 'header'));
    }
}
