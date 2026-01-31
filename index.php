<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>වයඹ පළාත් භාණ්ඩාගාර දෙපාර්තමේන්තුව</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@400;700&family=Noto+Sans+Tamil:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', 'Noto Sans Sinhala', 'Noto Sans Tamil', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); }
        .hover-lift:hover { transform: translateY(-5px); transition: transform 0.3s ease-in-out; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?php
        // Multi-language content array
        $content = [
            'si' => [
                'lang_switcher_si' => 'සිංහල',
                'lang_switcher_ta' => 'தமிழ்',
                'lang_switcher_en' => 'English',
                'top_bar_text' => 'වයඹ පළාත් සභාව | North Western Provincial Council',
                'nav_title_main' => 'පළාත් භාණ්ඩාගාර දෙපාර්තමේන්තුව',
                'nav_title_sub' => 'Provincial Treasury - NWP',
                'nav_home' => 'මුල් පිටුව',
                'nav_about' => 'අප ගැන',
                'nav_sections' => 'අංශයන්',
                'nav_staff' => 'කාර්ය මණ්ඩලය',
                'nav_downloads' => 'බාගත කිරීම්',
                'hero_title' => 'වයඹ පළාත් භාණ්ඩාගාර දෙපාර්තමේන්තුව',
                'hero_vision' => '"සෞභාග්‍යමත් වයඹ ජනතාවක්"',
                'hero_func_1' => 'අයවැය සැකසීම',
                'hero_func_2' => 'පළාත් භාණ්ඩගාර කළමනාකරණය',
                'hero_func_3' => 'මූල්‍ය කළමනාකරණය',
                'mission_heading' => 'අපගේ මෙහෙවර',
                'mission_text' => 'වයඹ පළාතේ ජනතාවගේ තිරසර සංවර්ධනය උදෙසා පවතින මූල්‍ය හා භෞතික සම්පත් ඵලදායීව හා කාර්යක්ෂමව යෙදවීම පිණිස මූල්‍ය ප්‍රතිපත්ති සම්පාදනය, මූල්‍ය කටයුතු උපදේශනය, මෙහෙයවීම, පළාතේ ගිණුම් පවත්වාගෙන යාම, අයවැයකරණය යනාදිය ඇතුලත් භාණ්ඩාගාර කටයුතු මැනවින් පවත්වාගෙනය යාම.',
                'sections_heading' => 'අපගේ අංශයන්',
                'section_1_title' => '1. අයවැය අංශය',
                'section_1_desc_1' => 'අතුරු සම්පත ගිණුම් ඉදිරිපත් කිරීම, වාර්ෂික මුදල් ප්‍රකාශය පිළියෙල කිරීම, විසර්ජන ප්‍රඥප්තිය පිළියෙල කිරීම හා වොරන්ට් බලපත්‍ර නිකුත් කිරීම',
                'section_1_desc_2' => 'පරිපූරක ඇස්තමේන්තු හා ප්‍රතිපාදන මාරු කිරීම් පිළිබඳ කටයුතු',
                'section_1_desc_3' => 'පුනරාවර්තන හා ප්‍රාග්ධන වියදම් තීරණය කිරීම හා ප්‍රතිපාදන සැලසීම',
                'section_1_desc_4' => 'අයවැය කළමනාකරණය හා පාලනය, අයවැය දත්ත රැස් කිරීම හා විශ්ලේෂණය',
                'section_1_desc_5' => 'ඇස්තමේන්තු ලබා ගැනීම හා පරීක්ෂාව, අයවැය සාකච්ඡා හා අයවැය කමිටු',
                'section_1_desc_6' => 'ජාතික ප්‍රතිපත්ති ප්‍රමුඛතා හා සැළසුම් තොරතුරු තබා ගැනීම',
                'section_1_desc_7' => 'අත්තිකාරම් ගිණුම්වල සීමා සංශෝධනය',
                'section_1_desc_8' => 'සේවක සංඛ්‍යා තොරතුරු ලබා ගැනීම හා පාලනය',
                'section_2_title' => '2. ආදායම් හා මුදල් අංශය',
                'section_2_desc_1' => 'ආදායම් ඇස්තමේන්තු හා ආදායම් වාර්තා පිළියෙල කිරීම, ආදායම් ඇස්තමේන්තු ප්‍රතිශෝධනය, විශ්ලේෂණය කිරීම, ආදායම් එකතු කිරීම, ආදායම් ගිණුම, හිග ආදායම් ගිණුම හා ආදායම් ප්‍රගති කටයුතු',
                'section_2_desc_2' => 'මූල්‍ය රීති පැනවීම, සංශෝධනය, අධීක්ෂණ මණ්ඩල රාජකාරී කටයුතු, අලාභ, අත්හැරීම්, කපා හැරීම් හා වන්දි ගෙවීම',
                'section_2_desc_3' => 'පළාත් ගිණුම්කාරක සභා කටයුතු හා වාර්තා පිළිබඳ කටයුතු',
                'section_2_desc_4' => 'විගණකාධිපතිගේ විගණන වාර්තා, කෙටයුම්පත් වාර්තා හා විගණන විමසුම් පිළිබඳ කටයුතු',
                'section_2_desc_5' => 'මෝටර් වාහන බලපත්‍ර, මුද්දර හා රේන්ද බසු ආදායම් රාශිකරණය',
                'section_2_desc_6' => 'විමධ්‍යගත කොට ඇති කාර්යයන් ඉටු කරගැනීම',
                'section_2_desc_7' => 'ප්‍රාදේශීය සංවර්ධන වැඩ සම්බන්ධීකරණය',
                'section_2_desc_8' => 'ප්‍රාදේශීය ලේකම් කාර්යාලවලට අනුයුක්ත කර ඇති පළාත් සභා නිලධාරීන්ගේ සාමාන්‍ය අධීක්ෂණ කටයුතු',
                'section_3_title' => '3. ගිණුම් හා ගෙවීම් අංශය',
                'section_3_desc_1' => 'පළාත් සභා අරමුදලේ ගිණුම් තැබීම හා පරිපාලනයට අදාළ සියළු කටයුතු',
                'section_3_desc_2' => 'අග්‍රිම නිකුත් කිරීම හා පාලනය හා අග්‍රිම සීමා නියම කිරීම',
                'section_3_desc_3' => 'පළාත් සභාවේ සියළුම බැංකු ගිණුම් පාලනය හා අධීක්ෂණය',
                'section_3_desc_4' => 'මාසික භාණ්ඩගාර ගිණුම් වාර්තා ගණන් දීමේ නිලධාරීන් වෙත නිකුත් කිරීම හා ගිණුම් ප්‍රසිද්ධ කිරීම.',
                'section_3_desc_5' => 'පොදු තැම්පත් ගිණුම් හා රජයේ නිලධාරීන්ගේ අත්තිකාරම් ගිණුම් කටයුතුවලට අදාළ රාජකාරී කටයුතු',
                'section_3_desc_6' => 'ප්‍රදාන ලබා ගැනීම',
                'section_3_desc_7' => 'ආදයමින් අපසු ගෙවීම',
                'section_3_desc_8' => 'ප්‍රසම්පාදන කටයුතු',
                'staff_heading' => 'අපගේ ප්‍රධාන කාර්ය මණ්ඩලය',
                'staff_title_1' => 'නියෝජ්‍ය ප්‍රධාන ලේකම් (මූල්‍ය කළමනාකරණ)',
                'staff_title_2' => 'අධ්‍යක්ෂ (ගිණුම් හා ගෙවීම්)',
                'staff_title_3' => 'අධ්‍යක්ෂ (මුදල් හා ආදායම්)',
                'staff_title_4' => 'අධ්‍යක්ෂ (අයවැය)',
                'staff_position' => 'Department Head',
                'downloads_heading' => 'බාගත කිරීම්',
                'downloads_description' => 'ප්‍රකාශන, චක්‍රලේඛ සහ වාර්ෂික වාර්තා PDF ලබා ගැනීමට මෙම කොටස භාවිතා කරන්න.',
                'download_item_1' => 'අයවැය වාර්තාව - 2024',
                'download_item_2' => 'මූල්‍ය චක්‍රලේඛ',
                'contact_heading' => 'සම්බන්ධ වන්න',
                'contact_address' => 'වයඹ පළාත් භාණ්ඩාගාර දෙපාර්තමේන්තුව,<br>පළාත් සභා සංකීර්ණය, කුරුණෑගල.',
                'quick_links_heading' => 'ක්ෂණික සබැඳි',
                'link_nwp' => 'වයඹ පළාත් සභාව',
                'link_pub_admin' => 'රාජ්‍ය පරිපාලන අමාත්‍යාංශය',
                'link_treasury' => 'භාණ්ඩාගාරය',
                'footer_copyright' => 'වයඹ පළාත් භාණ්ඩාගාරය. සියළු හිමිකම් ඇවිරිණි.',
                'footer_year' => '2026'
            ],
            'ta' => [
                'lang_switcher_si' => 'සිංහල',
                'lang_switcher_ta' => 'தமிழ்',
                'lang_switcher_en' => 'English',
                'top_bar_text' => 'வடமேல் மாகாண சபை | North Western Provincial Council',
                'nav_title_main' => 'மாகாண திறைசேரி திணைக்களம்',
                'nav_title_sub' => 'Provincial Treasury - NWP',
                'nav_home' => 'முதற் பக்கம்',
                'nav_about' => 'எங்களை பற்றி',
                'nav_sections' => 'பிரிவுகள்',
                'nav_staff' => 'அலுவலகர்கள்',
                'nav_downloads' => 'பதிவிறக்கங்கள்',
                'hero_title' => 'வடமேல் மாகாண திறைசேரி திணைக்களம்',
                'hero_vision' => '"செழிப்பான வடமேல் மாகாண மக்கள்"',
                'hero_func_1' => 'அயவுயெ தயாரிப்பு',
                'hero_func_2' => 'மாகாண திறைசேரி மேலாண்மை',
                'hero_func_3' => 'நிதி மேலாண்மை',
                'mission_heading' => 'எமது பணி',
                'mission_text' => 'வடமேல் மாகாண மக்களின் நிலையான அபிவிருத்திக்காக கிடைக்கக்கூடிய நிதி மற்றும் பௌதீக வளங்களை வினைத்திறனாகவும் பயனுள்ளதாகவும் பயன்படுத்துவதற்காக நிதி கொள்கைகளை உருவாக்குதல், நிதி விடயங்களில் ஆலோசனை வழங்குதல், வழிகாட்டுதல், மாகாண கணக்குகளைப் பேணுதல், வரவு செலவுத் திட்டமிடல் போன்ற திறைசேரி நடவடிக்கைகளை முறையாகப் பேணுதல்.',
                'sections_heading' => 'எமது பிரிவுகள்',
                'section_1_title' => '1. வரவு செலவுத் திட்டப் பிரிவு',
                'section_1_desc_1' => 'துணை ஒதுக்கீட்டுக் கணக்குகளைச் சமர்ப்பித்தல், ஆண்டு நிதி அறிக்கைகளைத் தயாரித்தல், ஒதுக்கீட்டுச் சட்டத்தைத் தயாரித்தல் மற்றும் அனுமதிப்பத்திரங்களை வழங்குதல்',
                'section_1_desc_2' => 'மேலதிக மதிப்பீடுகள் மற்றும் ஒதுக்கீட்டு இடமாற்றங்கள் தொடர்பான விடயங்கள்',
                'section_1_desc_3' => 'மீண்டும் மீண்டும் வரும் மற்றும் மூலதனச் செலவுகளைத் தீர்மானித்தல் மற்றும் ஒதுக்கீடுகளை வழங்குதல்',
                'section_1_desc_4' => 'வரவு செலவுத் திட்ட மேலாண்மை மற்றும் கட்டுப்பாடு, வரவு செலவுத் திட்டத் தரவு சேகரிப்பு மற்றும் பகுப்பாய்வு',
                'section_1_desc_5' => 'மதிப்பீடுகளைப் பெறுதல் மற்றும் சரிபார்த்தல், வரவு செலவுத் திட்ட விவாதங்கள் மற்றும் வரவு செலவுத் திட்டக் குழுக்கள்',
                'section_1_desc_6' => 'தேசிய கொள்கை முன்னுரிமைகள் மற்றும் திட்டமிடல் தகவல்களைப் பராமரித்தல்',
                'section_1_desc_7' => 'முற்பணக் கணக்குகளின் வரம்புகளை திருத்துதல்',
                'section_1_desc_8' => 'ஊழியர் எண்ணிக்கை தகவல்களைப் பெறுதல் மற்றும் கட்டுப்படுத்துதல்',
                'section_2_title' => '2. வருவாய் மற்றும் பணப் பிரிவு',
                'section_2_desc_1' => 'வருவாய் மதிப்பீடுகள் மற்றும் வருவாய் அறிக்கைகளைத் தயாரித்தல், வருவாய் மதிப்பீடுகளை மறுபரிசீலனை செய்தல், பகுப்பாய்வு செய்தல், வருவாய் சேகரிப்பு, வருவாய் கணக்கு, நிலுவை வருவாய் கணக்கு மற்றும் வருவாய் முன்னேற்ற நடவடிக்கைகள்',
                'section_2_desc_2' => 'நிதி விதிகளை உருவாக்குதல், திருத்துதல், மேற்பார்வைக் குழு கடமைகள், இழப்புகள், தள்ளுபடிகள், தள்ளுபடிகள் மற்றும் இழப்பீடுகள்',
                'section_2_desc_3' => 'மாகாண கணக்குக் குழு தொடர்பான விடயங்கள் மற்றும் அறிக்கைகள்',
                'section_2_desc_4' => 'கணக்காய்வாளர் நாயகத்தின் கணக்காய்வு அறிக்கைகள், வரைவு அறிக்கைகள் மற்றும் கணக்காய்வு விசாரணைகள் தொடர்பான விடயங்கள்',
                'section_2_desc_5' => 'மோட்டார் வாகன அனுமதிப்பத்திரங்கள், முத்திரைகள் மற்றும் கூலி வரி வருவாய் திரட்டுதல்',
                'section_2_desc_6' => 'விகேந்திரீகரிக்கப்பட்ட பணிகளை நிறைவேற்றுதல்',
                'section_2_desc_7' => 'பிராந்திய அபிவிருத்திப் பணிகளை ஒருங்கிணைத்தல்',
                'section_2_desc_8' => 'பிரதேச செயலகங்களில் நியமிக்கப்பட்டுள்ள மாகாண சபை அதிகாரிகளின் பொது மேற்பார்வைப் பணிகள்',
                'section_3_title' => '3. கணக்குகள் மற்றும் கொடுப்பனவுப் பிரிவு',
                'section_3_desc_1' => 'மாகாண சபை நிதியின் கணக்குப்பதிவு மற்றும் நிர்வாகம் தொடர்பான அனைத்து விடயங்கள்',
                'section_3_desc_2' => 'முற்பணங்களை வழங்குதல் மற்றும் கட்டுப்படுத்துதல் மற்றும் முற்பண வரம்புகளை நிர்ணயித்தல்',
                'section_3_desc_3' => 'மாகாண சபையின் அனைத்து வங்கிக் கணக்குகளையும் கட்டுப்படுத்துதல் மற்றும் மேற்பார்வையிடல்',
                'section_3_desc_4' => 'மாதாந்திர திறைசேரி கணக்கு அறிக்கைகளை கணக்களிப்பு அதிகாரிகளுக்கு வழங்குதல் மற்றும் கணக்குகளை வெளியிடுதல்.',
                'section_3_desc_5' => 'பொது வைப்பு கணக்குகள் மற்றும் அரசு அதிகாரிகளின் முற்பணக் கணக்குகள் தொடர்பான கடமைகள்',
                'section_3_desc_6' => 'மானியங்களைப் பெறுதல்',
                'section_3_desc_7' => 'வருமானத் திருப்பியளித்தல்',
                'section_3_desc_8' => ' கொள்முதல் நடவடிக்கைகள்',
                'staff_heading' => 'எமது பிரதான அலுவலகர்கள்',
                'staff_title_1' => 'பிரதிப் பிரதம செயலாளர் (நிதி முகாமைத்துவம்)',
                'staff_title_2' => 'பணிப்பாளர் (கணக்குகள் மற்றும் கொடுப்பனவுகள்)',
                'staff_title_3' => 'பணிப்பாளர் (நிதி மற்றும் வருவாய்)',
                'staff_title_4' => 'பணிப்பாளர் (அயவுயெ)',
                'staff_position' => 'Department Head',
                'downloads_heading' => 'பதிவிறக்கங்கள்',
                'downloads_description' => 'வெளியீடுகள், சுற்றறிக்கைகள் மற்றும் ஆண்டு அறிக்கைகள் PDF களைப் பெற இந்தப் பகுதியைப் பயன்படுத்தவும்.',
                'download_item_1' => 'வரவு செலவு அறிக்கை - 2024',
                'download_item_2' => 'நிதி சுற்றறிக்கைகள்',
                'contact_heading' => 'தொடர்புகொள்ளவும்',
                'contact_address' => 'வடமேல் மாகாண திறைசேரி திணைக்களம்,<br>மாகாண சபை வளாகம், குருநாகல்.',
                'quick_links_heading' => 'விரைவு இணைப்புகள்',
                'link_nwp' => 'வடமேல் மாகாண சபை',
                'link_pub_admin' => 'பொது நிர்வாக அமைச்சு',
                'link_treasury' => 'திறைசேரி',
                'footer_copyright' => 'வடமேல் மாகாண திறைசேரி. அனைத்து உரிமைகளும் பாதுகாக்கப்பட்டவை.',
                'footer_year' => '2026'
            ],
            'en' => [
                'lang_switcher_si' => 'සිංහල',
                'lang_switcher_ta' => 'தமிழ்',
                'lang_switcher_en' => 'English',
                'top_bar_text' => 'North Western Provincial Council',
                'nav_title_main' => 'Provincial Treasury Department',
                'nav_title_sub' => 'North Western Province',
                'nav_home' => 'Home',
                'nav_about' => 'About Us',
                'nav_sections' => 'Our Sections',
                'nav_staff' => 'Our Staff',
                'nav_downloads' => 'Downloads',
                'hero_title' => 'Provincial Treasury Department - North Western Province',
                'hero_vision' => '"A Prosperous People in North Western"',
                'hero_func_1' => 'Budget Preparation',
                'hero_func_2' => 'Provincial Treasury Management',
                'hero_func_3' => 'Financial Management',
                'mission_heading' => 'Our Mission',
                'mission_text' => 'To effectively and efficiently utilize the available financial and physical resources for the sustainable development of the people of the North Western Province, by formulating financial policies, providing financial advice, guidance, maintaining provincial accounts, budgeting, and properly managing all other treasury functions.',
                'sections_heading' => 'Our Sections',
                'section_1_title' => '1. Budget Section',
                'section_1_desc_1' => 'Submission of Interim Accounts, preparation of Annual Financial Statements, preparation of Appropriation Act, and issuance of Warrant Licenses.',
                'section_1_desc_2' => 'Matters related to supplementary estimates and reallocation of funds.',
                'section_1_desc_3' => 'Determination of recurrent and capital expenditure and provision of allocations.',
                'section_1_desc_4' => 'Budget management and control, budget data collection and analysis.',
                'section_1_desc_5' => 'Obtaining and scrutinizing estimates, budget discussions, and budget committees.',
                'section_1_desc_6' => 'Maintaining information on national policy priorities and plans.',
                'section_1_desc_7' => 'Revision of limits for advance accounts.',
                'section_1_desc_8' => 'Obtaining and controlling staff cadre information.',
                'section_2_title' => '2. Revenue and Cash Section',
                'section_2_desc_1' => 'Preparation of revenue estimates and reports, revision and analysis of revenue estimates, revenue collection, revenue account, arrears revenue account, and revenue progress matters.',
                'section_2_desc_2' => 'Enactment, amendment of financial rules, duties of oversight boards, losses, waivers, write-offs, and compensations.',
                'section_2_desc_3' => 'Matters related to Provincial Public Accounts Committee and reports.',
                'section_2_desc_4' => 'Matters related to Auditor General\'s audit reports, draft reports, and audit queries.',
                'section_2_desc_5' => 'Collection of motor vehicle license, stamp, and rent tax revenue.',
                'section_2_desc_6' => 'Fulfillment of decentralized functions.',
                'section_2_desc_7' => 'Coordination of regional development work.',
                'section_2_desc_8' => 'General supervisory duties of Provincial Council officials assigned to Divisional Secretariats.',
                'section_3_title' => '3. Accounts and Payments Section',
                'section_3_desc_1' => 'All matters related to the accounting and administration of the Provincial Council Fund.',
                'section_3_desc_2' => 'Issuance and control of advances and setting advance limits.',
                'section_3_desc_3' => 'Control and supervision of all bank accounts of the Provincial Council.',
                'section_3_desc_4' => 'Issuance of monthly treasury account reports to accounting officers and publicizing accounts.',
                'section_3_desc_5' => 'Duties related to public deposit accounts and advance accounts of government officials.',
                'section_3_desc_6' => 'Obtaining grants.',
                'section_3_desc_7' => 'Refund of revenue.',
                'section_3_desc_8' => 'Procurement activities.',
                'staff_heading' => 'Our Key Staff',
                'staff_title_1' => 'Deputy Chief Secretary (Financial Management)',
                'staff_title_2' => 'Director (Accounts & Payments)',
                'staff_title_3' => 'Director (Cash & Revenue)',
                'staff_title_4' => 'Director (Budget)',
                'staff_position' => 'Department Head',
                'downloads_heading' => 'Downloads',
                'downloads_description' => 'Use this section to access publications, circulars, and annual reports in PDF format.',
                'download_item_1' => 'Budget Report - 2024',
                'download_item_2' => 'Financial Circulars',
                'contact_heading' => 'Contact Us',
                'contact_address' => 'Provincial Treasury Department,<br>Provincial Council Complex, Kurunegala.',
                'quick_links_heading' => 'Quick Links',
                'link_nwp' => 'North Western Provincial Council',
                'link_pub_admin' => 'Ministry of Public Administration',
                'link_treasury' => 'General Treasury',
                'footer_copyright' => 'Provincial Treasury - NWP. All Rights Reserved.',
                'footer_year' => '2026'
            ]
        ];

        // Default language
        $current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'si';
        if (!array_key_exists($current_lang, $content)) {
            $current_lang = 'si'; // Fallback to Sinhala if language is invalid
        }
        $data = $content[$current_lang];
    ?>

    <div class="bg-blue-900 text-white py-2 px-6 flex justify-between items-center text-sm">
        <div><i class="fas fa-landmark mr-2"></i> <?php echo $data['top_bar_text']; ?></div>
        <div class="flex gap-4">
            <a href="?lang=si" class="lang-switcher-btn <?php echo ($current_lang == 'si' ? 'font-bold underline' : ''); ?>"><?php echo $data['lang_switcher_si']; ?></a>
            <a href="?lang=ta" class="lang-switcher-btn <?php echo ($current_lang == 'ta' ? 'font-bold underline' : ''); ?>"><?php echo $data['lang_switcher_ta']; ?></a>
            <a href="?lang=en" class="lang-switcher-btn <?php echo ($current_lang == 'en' ? 'font-bold underline' : ''); ?>"><?php echo $data['lang_switcher_en']; ?></a>
        </div>
    </div>

    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="https://via.placeholder.com/48x48?text=NWP" alt="NWP Logo" class="w-12 h-12 rounded-full">
                <div>
                    <h1 class="text-xl font-bold text-blue-900 leading-tight"><?php echo $data['nav_title_main']; ?></h1>
                    <p class="text-xs text-gray-500 uppercase tracking-widest font-semibold"><?php echo $data['nav_title_sub']; ?></p>
                </div>
            </div>
            <div class="hidden md:flex space-x-8 font-medium text-gray-700">
                <a href="#home" class="text-blue-600 border-b-2 border-blue-600"><?php echo $data['nav_home']; ?></a>
                <a href="#about" class="hover:text-blue-600 transition"><?php echo $data['nav_about']; ?></a>
                <a href="#sections" class="hover:text-blue-600 transition"><?php echo $data['nav_sections']; ?></a>
                <a href="#staff" class="hover:text-blue-600 transition"><?php echo $data['nav_staff']; ?></a>
                <a href="#downloads" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"><i class="fas fa-download mr-2"></i><?php echo $data['nav_downloads']; ?></a>
            </div>
            </div>
    </nav>

    <header id="home" class="gradient-bg text-white py-24 px-6 text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-yellow-400"><?php echo $data['hero_title']; ?></h2>
            <p class="text-lg md:text-xl italic mb-8 opacity-90"><?php echo $data['hero_vision']; ?></p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-white/10 px-6 py-3 rounded-full border border-white/20"><i class="fas fa-chart-line mr-2"></i> <?php echo $data['hero_func_1']; ?></span>
                <span class="bg-white/10 px-6 py-3 rounded-full border border-white/20"><i class="fas fa-coins mr-2"></i> <?php echo $data['hero_func_2']; ?></span>
                <span class="bg-white/10 px-6 py-3 rounded-full border border-white/20"><i class="fas fa-wallet mr-2"></i> <?php echo $data['hero_func_3']; ?></span>
            </div>
             <div class="mt-12">
                
             </div>
        </div>
    </header>

    <section id="about" class="py-16 container mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row">
            <div class="md:w-1/3 bg-blue-800 text-white p-12 flex flex-col justify-center items-center text-center">
                <i class="fas fa-bullseye text-6xl mb-4 text-yellow-400"></i>
                <h3 class="text-2xl font-bold mb-4"><?php echo $data['mission_heading']; ?></h3>
            </div>
            <div class="md:w-2/3 p-12">
                <p class="text-gray-700 leading-loose text-lg">
                    <?php echo $data['mission_text']; ?>
                </p>
            </div>
        </div>
    </section>

    <section id="sections" class="py-16 bg-gray-100 px-6">
        <div class="container mx-auto">
            <h3 class="text-3xl font-bold text-center text-blue-900 mb-12"><?php echo $data['sections_heading']; ?></h3>
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-blue-500 hover-lift">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-chart-pie text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4"><?php echo $data['section_1_title']; ?></h4>
                    <ul class="text-sm text-gray-600 space-y-2 list-disc pl-5">
                        <li><?php echo $data['section_1_desc_1']; ?></li>
                        <li><?php echo $data['section_1_desc_2']; ?></li>
                        <li><?php echo $data['section_1_desc_3']; ?></li>
                        <li><?php echo $data['section_1_desc_4']; ?></li>
                        <li><?php echo $data['section_1_desc_5']; ?></li>
                        <li><?php echo $data['section_1_desc_6']; ?></li>
                        <li><?php echo $data['section_1_desc_7']; ?></li>
                        <li><?php echo $data['section_1_desc_8']; ?></li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-emerald-500 hover-lift">
                    <div class="w-14 h-14 bg-emerald-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-money-bill-wave text-emerald-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4"><?php echo $data['section_2_title']; ?></h4>
                    <ul class="text-sm text-gray-600 space-y-2 list-disc pl-5">
                        <li><?php echo $data['section_2_desc_1']; ?></li>
                        <li><?php echo $data['section_2_desc_2']; ?></li>
                        <li><?php echo $data['section_2_desc_3']; ?></li>
                        <li><?php echo $data['section_2_desc_4']; ?></li>
                        <li><?php echo $data['section_2_desc_5']; ?></li>
                        <li><?php echo $data['section_2_desc_6']; ?></li>
                        <li><?php echo $data['section_2_desc_7']; ?></li>
                        <li><?php echo $data['section_2_desc_8']; ?></li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-purple-500 hover-lift">
                    <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-calculator text-purple-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4"><?php echo $data['section_3_title']; ?></h4>
                    <ul class="text-sm text-gray-600 space-y-2 list-disc pl-5">
                        <li><?php echo $data['section_3_desc_1']; ?></li>
                        <li><?php echo $data['section_3_desc_2']; ?></li>
                        <li><?php echo $data['section_3_desc_3']; ?></li>
                        <li><?php echo $data['section_3_desc_4']; ?></li>
                        <li><?php echo $data['section_3_desc_5']; ?></li>
                        <li><?php echo $data['section_3_desc_6']; ?></li>
                        <li><?php echo $data['section_3_desc_7']; ?></li>
                        <li><?php echo $data['section_3_desc_8']; ?></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section id="staff" class="py-16 container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold text-blue-900 mb-12"><?php echo $data['staff_heading']; ?></h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php 
                $staff_list = [
                    $data['staff_title_1'], 
                    $data['staff_title_2'], 
                    $data['staff_title_3'], 
                    $data['staff_title_4']
                ];
                foreach($staff_list as $member): 
            ?>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-20 h-20 bg-blue-50 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fas fa-user-tie text-3xl text-blue-600"></i>
                </div>
                <h5 class="font-bold text-gray-800 text-sm"><?php echo $member; ?></h5>
                <p class="text-xs text-blue-600 mt-2 font-semibold uppercase"><?php echo $data['staff_position']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="downloads" class="py-16 bg-blue-50 px-6">
        <div class="container mx-auto max-w-4xl text-center">
            <div class="mb-10 text-blue-600">
                <i class="fas fa-cloud-download-alt text-6xl"></i>
            </div>
            <h3 class="text-3xl font-bold text-blue-900 mb-4"><?php echo $data['downloads_heading']; ?></h3>
            <p class="text-gray-600 mb-8"><?php echo $data['downloads_description']; ?></p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                <div class="flex items-center justify-between p-5 bg-white rounded-xl shadow-sm border border-gray-200 hover:border-blue-400 transition-colors">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-file-pdf text-red-500 text-2xl"></i>
                        <span class="font-medium text-gray-700"><?php echo $data['download_item_1']; ?></span>
                    </div>
                    <a href="#" class="bg-gray-100 hover:bg-blue-600 hover:text-white p-2 rounded-lg transition-all">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
                <div class="flex items-center justify-between p-5 bg-white rounded-xl shadow-sm border border-gray-200 hover:border-blue-400 transition-colors">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-file-pdf text-red-500 text-2xl"></i>
                        <span class="font-medium text-gray-700"><?php echo $data['download_item_2']; ?></span>
                    </div>
                    <a href="#" class="bg-gray-100 hover:bg-blue-600 hover:text-white p-2 rounded-lg transition-all">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-white pt-16 pb-8 px-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 border-b border-slate-800 pb-12">
            <div>
                <h4 class="text-xl font-bold mb-6 text-yellow-500"><?php echo $data['contact_heading']; ?></h4>
                <p class="text-slate-400 leading-relaxed italic">
                    <?php echo $data['contact_address']; ?>
                </p>
                <div class="mt-4 flex gap-4 text-xl">
                    <a href="#" class="hover:text-yellow-500"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-yellow-500"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-6 text-yellow-500"><?php echo $data['quick_links_heading']; ?></h4>
                <ul class="text-slate-400 space-y-3">
                    <li><a href="#" class="hover:text-white transition-colors"><i class="fas fa-chevron-right text-xs mr-2"></i> <?php echo $data['link_nwp']; ?></a></li>
                    <li><a href="#" class="hover:text-white transition-colors"><i class="fas fa-chevron-right text-xs mr-2"></i> <?php echo $data['link_pub_admin']; ?></a></li>
                    <li><a href="#" class="hover:text-white transition-colors"><i class="fas fa-chevron-right text-xs mr-2"></i> <?php echo $data['link_treasury']; ?></a></li>
                </ul>
            </div>
            <div class="bg-slate-800/50 p-6 rounded-2xl">
                <h4 class="font-bold mb-4 text-white">Location Map</h4>
                <div class="w-full h-32 bg-slate-700 rounded-lg flex items-center justify-center">
                    <span class="text-xs text-slate-500 italic">[ Map Placeholder ]</span>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-8 flex flex-col md:flex-row justify-between items-center text-sm text-slate-500">
            <p>&copy; <?php echo $data['footer_year'] . " " . $data['footer_copyright']; ?></p>
            <p class="mt-2 md:mt-0">Designed for North Western Province</p>
        </div>
    </footer>

    <script>
        // Smooth scroll implementation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>