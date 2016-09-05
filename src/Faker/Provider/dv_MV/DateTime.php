<?php

namespace Faker\Provider\dv_MV;

class DateTime extends \Faker\Provider\DateTime
{
  public static function dayOfWeek($max = 'now')
  {
      $dayarray = ['Sunday'=>'އާދިއްތަ', 'Monday'=>'ހޯމަ', 'Tuesday'=>'އަންގާރަ', 'Wednesday'=>'ބުދަ', 'Thursday'=>'ބުރާސްފަތި', 'Friday'=>'ހުކުރު', 'Saturday'=>'ހޮނިހިރު'];
      return $dayarray[static::dateTime($max)->format('l')];
  }

  public static function monthName($max = 'now')
  {
      $montharray = ['January'=>'ޖެނުއަރީ', 'February'=>'ފެބްރުއަރީ', 'March'=>'މާރޗް', 'April'=>'އޭޕްރިލް', 'May'=>'މެއި', 'June'=>'ޖޫން', 'July'=>'ޖުލައި', 'August'=>'އޯގަސްޓް', 'September'=>'ސެޕްޓެމްބަރު', 'October'=>'އޮކްޓޯބަރު', 'November'=>'ނޮވެމްބަރު', 'December'=>'ޑިސެމްބަރު'];
      return $montharray[static::dateTime($max)->format('F')];
  }

  public static function amPm($max = 'now')
  {
      $ampmarray = ['am'=>'މެންދުރުކުރި', 'pm'=>'މެންދުރުފަސް'];
      return $ampmarray[static::dateTime($max)->format('a')];
  }

  public static function timezone()
  {
    $timezonearray 	= 	[
'Africa/Abidjan'=>'އެފްރިކާ/އަބިޖާން',
'Africa/Accra' => 'އެފްރިކާ/އަކްރާ',
'Africa/Addis_Ababa' => 'އެފްރިކާ/އައްޑިސް_އަބާބާ',
'Africa/Algiers' => 'އެފްރިކާ/އަލްޖިއަރސް',
'Africa/Asmara' => 'އެފްރިކާ/އަސްމަރަ',
'Africa/Bamako' => 'އެފްރިކާ/ބަމަކޮ',
'Africa/Bangui' => 'އެފްރިކާ/ބަންގުއި',
'Africa/Banjul' => 'އެފްރިކާ/ބަންޖުލް',
'Africa/Bissau' => 'އެފްރިކާ/ބިސައު',
'Africa/Blantyre' => 'އެފްރިކާ/ބްލަންޓައިރ',
'Africa/Brazzaville' => 'އެފްރިކާ/ބްރަޒަވިލް',
'Africa/Bujumbura' => 'އެފްރިކާ/ބުޖުމްބުރާ',
'Africa/Cairo' => 'އެފްރިކާ/ކައިރޯ',
'Africa/Casablanca' => 'އެފްރިކާ/ކަސަބްލަންކާ',
'Africa/Ceuta' => 'އެފްރިކާ/ސުއެޓަ',
'Africa/Conakry' => 'އެފްރިކާ/ކޮނަކްރީ',
'Africa/Dakar' => 'އެފްރިކާ/ޑަކަރ',
'Africa/Dar_es_Salaam' => 'އެފްރިކާ/ދާރުއްސަލާމް',
'Africa/Djibouti' => 'އެފްރިކާ/ޑިޖިބައުޓީ',
'Africa/Douala' => 'އެފްރިކާ/ޑުއަލާ',
'Africa/El_Aaiun' => 'އެފްރިކާ/އަލްއައިން',
'Africa/Freetown' => 'އެފްރިކާ/ފްރީޓައުން',
'Africa/Gaborone' => 'އެފްރިކާ/ގަބޮރޯން',
'Africa/Harare' => 'އެފްރިކާ/ހަރާރޭ',
'Africa/Johannesburg' => 'އެފްރިކާ/ޖޮހޮނަސްބާރގް',
'Africa/Juba' => 'އެފްރިކާ/ޖުބާ',
'Africa/Kampala' => 'އެފްރިކާ/ކަމްޕަލަ',
'Africa/Khartoum' => 'އެފްރިކާ/ކަރުޓުމް',
'Africa/Kigali' => 'އެފްރިކާ/ކިގަލި',
'Africa/Kinshasa' => 'އެފްރިކާ/ކިންށާސަ',
'Africa/Lagos' => 'އެފްރިކާ/ލަގޮސް',
'Africa/Libreville' => 'އެފްރިކާ/ލައިބަރވިލް',
'Africa/Lome' => 'އެފްރިކާ/ލޮމް',
'Africa/Luanda' => 'އެފްރިކާ/ލުއަންޑާ',
'Africa/Lubumbashi' => 'އެފްރިކާ/ލުބުމްބަށި',
'Africa/Lusaka' => 'އެފްރިކާ/ލުސަކަ',
'Africa/Malabo' => 'އެފްރިކާ/މަލަބޮ',
'Africa/Maputo' => 'އެފްރިކާ/މަޕުޓޮ',
'Africa/Maseru' => 'އެފްރިކާ/މަސެރު',
'Africa/Mbabane' => 'އެފްރިކާ/މްބަނެ',
'Africa/Mogadishu' => 'އެފްރިކާ/މޮގަޑިޝު',
'Africa/Monrovia' => 'އެފްރިކާ/މޮންރޯވިއާ',
'Africa/Nairobi' => 'އެފްރިކާ/ނައިރޯބީ',
'Africa/Ndjamena' => 'އެފްރިކާ/ޖަމެނަ',
'Africa/Niamey' => 'އެފްރިކާ/ނިއަމޭ',
'Africa/Nouakchott' => 'އެފްރިކާ/ނައުޗޮއްޓު',
'Africa/Ouagadougou' => 'އެފްރިކާ/އުގަޑޯގޯ',
'Africa/Porto-Novo' => 'އެފްރިކާ/ޕޯޓް_ނޯވޯ',
'Africa/Sao_Tome' => 'އެފްރިކާ/ސައު_ޓޯމް',
'Africa/Tripoli' => 'އެފްރިކާ/ޓްރީޕޮލީ',
'Africa/Tunis' => 'އެފްރިކާ/ޓޫނިސް',
'Africa/Windhoek' => 'އެފްރިކާ/ވިންޑްހޮއެކް',
'America/Adak' => 'އެމެރިކާ/އަޑަކް',
'America/Anchorage' => 'އެމެރިކާ/އެންކޮރޭޖް',
'America/Anguilla' => 'އެމެރިކާ/އަންގުއިލާ',
'America/Antigua' => 'އެމެރިކާ/އެންޓިގާ',
'America/Araguaina' => 'އެމެރިކާ/އަރަގުއައިނާ',
'America/Argentina/Buenos_Aires' => 'އެމެރިކާ/ބުއޯނަސް_އ/އާޖެންޓީނާައިރިސް',
'America/Argentina/Catamarca' => 'އެމެރިކާ/ކަ/އާޖެންޓީނާޓަމަރަކާ',
'America/Argentina/Cordoba' => 'އެމެރިކާ/އާޖެންޓީނާ/ކޯޑޮބާ',
'America/Argentina/Jujuy' => 'އެމެރިކާ/އާޖެންޓީނާ/ޖޫޖުއި',
'America/Argentina/La_Rioja' => 'އެމެރިކާ/އާޖެންޓީނާ/ލާ_ރިއޮޖާ',
'America/Argentina/Mendoza' => 'އެމެރިކާ/އާޖެންޓީނާ/މެންޑޯޒާ',
'America/Argentina/Rio_Gallegos' => 'އެމެރިކާ/އާޖެންޓީނާ/ރިއޯ_ގައްލެގޮސް',
'America/Argentina/Salta' => 'އެމެރިކާ/އާޖެންޓީނާ/ސަލްޓަ',
'America/Argentina/San_Juan' => 'އެމެރިކާ/އާޖެންޓީނާ/ސެން_ޖުއަން',
'America/Argentina/San_Luis' => 'އެމެރިކާ/އާޖެންޓީނާ/ސެން_ލުއިސް',
'America/Argentina/Tucuman' => 'އެމެރިކާ/އާޖެންޓީނާ/ޓުކުމަން',
'America/Argentina/Ushuaia' => 'އެމެރިކާ/އާޖެންޓީނާ/އުޝުއައި',
'America/Aruba' => 'އެމެރިކާ/އަރުބަ',
'America/Asuncion' => 'އެމެރިކާ/އަސުންޝިއަން',
'America/Atikokan' => 'އެމެރިކާ/އަޓިކޮކަން',
'America/Bahia' => 'އެމެރިކާ/ބާހިއާ',
'America/Bahia_Banderas' => 'އެމެރިކާ/ބާހިއާ_ބަންޑޭރަސް',
'America/Barbados' => 'އެމެރިކާ/ބާރބަޑޮސް',
'America/Belem' => 'އެމެރިކާ/ބެލެމް',
'America/Belize' => 'އެމެރިކާ/ބެލީޒް',
'America/Blanc-Sablon' => 'އެމެރިކާ/ބްލަން-ސަބްލޮން',
'America/Boa_Vista' => 'އެމެރިކާ/ބޯއަ_ވިސްޓާ',
'America/Bogota' => 'އެމެރިކާ/ބޮގޯޓާ',
'America/Boise' => 'އެމެރިކާ/ބޮއިސް',
'America/Cambridge_Bay' => 'އެމެރިކާ/ކެމްބްރިޖް_ބޭ',
'America/Campo_Grande' => 'އެމެރިކާ/ކަމްޕޮ_ގްރާންޑޭ',
'America/Cancun' => 'އެމެރިކާ/ކަންކުން',
'America/Caracas' => 'އެމެރިކާ/ކަރަކަސް',
'America/Cayenne' => 'އެމެރިކާ/ކަޔެން',
'America/Cayman' => 'އެމެރިކާ/ކޭމަން',
'America/Chicago' => 'އެމެރިކާ/ޗިކާގޯ',
'America/Chihuahua' => 'އެމެރިކާ/ޗިހުއަހުއާ',
'America/Costa_Rica' => 'އެމެރިކާ/ކޮސްޓާ_ރީކާ',
'America/Creston' => 'އެމެރިކާ/ކްރެސްޓަން',
'America/Cuiaba' => 'އެމެރިކާ/ކުއިއާބަ',
'America/Curacao' => 'އެމެރިކާ/ކުރަކައު',
'America/Danmarkshavn' => 'އެމެރިކާ/ޑަންމާކްޝަން',
'America/Dawson' => 'އެމެރިކާ/ޑޯސަން',
'America/Dawson_Creek' => 'އެމެރިކާ/ޑޯސަން_ކްރީކް',
'America/Denver' => 'އެމެރިކާ/ޑެންވަރ',
'America/Detroit' => 'އެމެރިކާ/ޑީޓްރޮއިޓް',
'America/Dominica' => 'އެމެރިކާ/ޑޮމިނިކާ',
'America/Edmonton' => 'އެމެރިކާ/އެޑްމޮންޓަން',
'America/Eirunepe' => 'އެމެރިކާ/އިއުރުނެޕެ',
'America/El_Salvador' => 'އެމެރިކާ/އެލް_ސެލްވަޑޯރ',
'America/Fort_Nelson' => 'އެމެރިކާ/ފޯޓް_ނެލްސަން',
'America/Fortaleza' => 'އެމެރިކާ/ފޯޓަލިޒާ',
'America/Glace_Bay' => 'އެމެރިކާ/ގްލޭސް_ބޭ',
'America/Godthab' => 'އެމެރިކާ/ގޮތަބް',
'America/Goose_Bay' => 'އެމެރިކާ/ގޫސް_ބޭ',
'America/Grand_Turk' => 'އެމެރިކާ/ގްރޭންޑް_ޓާކް',
'America/Grenada' => 'އެމެރިކާ/ގްރެނެޑާ',
'America/Guadeloupe' => 'އެމެރިކާ/ގުއަޑެލޯޕް',
'America/Guatemala' => 'އެމެރިކާ/ގުއަޓަމާލާ',
'America/Guayaquil' => 'އެމެރިކާ/ގުއަޔަކުއައިލް',
'America/Guyana' => 'އެމެރިކާ/ގުޔަނަ',
'America/Halifax' => 'އެމެރިކާ/ހެލިފެކްސް',
'America/Havana' => 'އެމެރިކާ/ހަވާނާ',
'America/Hermosillo' => 'އެމެރިކާ/ހަރމޮސިލޯ',
'America/Indiana/Indianapolis' => 'އެމެރިކާ/އިންޑިޔާނާ/އިންޑިޔާނަޕޮލިސް',
'America/Indiana/Knox' => 'އެމެރިކާ/އިންޑިޔާނާ/ނޮކްސް',
'America/Indiana/Marengo' => 'އެމެރިކާ/އިންޑިޔާނާ/މަރެންގޯ',
'America/Indiana/Petersburg' => 'އެމެރިކާ/އިންޑިޔާނާ/ޕީޓަސްބާރގް',
'America/Indiana/Tell_City' => 'އެމެރިކާ/އިންޑިޔާނާ/ޓެލް_ސިޓީ',
'America/Indiana/Vevay' => 'އެމެރިކާ/އިންޑިޔާނާ/ވީވޭ',
'America/Indiana/Vincennes' => 'އެމެރިކާ/އިންޑިޔާނާ/ވިންސެނަސް',
'America/Indiana/Winamac' => 'އެމެރިކާ/އިންޑިޔާނާ/ވިނަމެކް',
'America/Inuvik' => 'އެމެރިކާ/އިނުވިކް',
'America/Iqaluit' => 'އެމެރިކާ/އިގަލުއިޓް',
'America/Jamaica' => 'އެމެރިކާ/ޖަމައިކާ',
'America/Juneau' => 'އެމެރިކާ/ޖުނޯ',
'America/Kentucky/Louisville' => 'އެމެރިކާ/ކެންޓަކީ/ލުއިސްވިލް',
'America/Kentucky/Monticello' => 'އެމެރިކާ/ކެންޓަކީ/މޮންޓިސެލޯ',
'America/Kralendijk' => 'އެމެރިކާ/ކްރަންލެންޖިކް',
'America/La_Paz' => 'އެމެރިކާ/ލަ_ޕަޒް',
'America/Lima' => 'އެމެރިކާ/ލީމާ',
'America/Los_Angeles' => 'އެމެރިކާ/ލޮސް_އެންޖެލްސް',
'America/Lower_Princes' => 'އެމެރިކާ/ލޮވަރ_ޕްރިންސެސް',
'America/Maceio' => 'އެމެރިކާ/މަސެއޯ',
'America/Managua' => 'އެމެރިކާ/މަނަގުއާ',
'America/Manaus' => 'އެމެރިކާ/މަނައުސް',
'America/Marigot' => 'އެމެރިކާ/މަރިގޮޓް',
'America/Martinique' => 'އެމެރިކާ/މާޓީނީކް',
'America/Matamoros' => 'އެމެރިކާ/މަޓަމޮރޮސް',
'America/Mazatlan' => 'އެމެރިކާ/މަޒަޓްލަން',
'America/Menominee' => 'އެމެރިކާ/މެނޮމިނީ',
'America/Merida' => 'އެމެރިކާ/މެރިޑާ',
'America/Metlakatla' => 'އެމެރިކާ/މެޓްލަކަޓްލަ',
'America/Mexico_City' => 'އެމެރިކާ/މެކްސިކޯ_ސިޓީ',
'America/Miquelon' => 'އެމެރިކާ/މިގްލޮން',
'America/Moncton' => 'އެމެރިކާ/މޮންކްޓަން',
'America/Monterrey' => 'އެމެރިކާ/މޮންޓެރޭ',
'America/Montevideo' => 'އެމެރިކާ/މޮންޓެވީޑިއޯ',
'America/Montserrat' => 'އެމެރިކާ/މޮންޓްސެރަޓް',
'America/Nassau' => 'އެމެރިކާ/ނަސައު',
'America/New_York' => 'އެމެރިކާ/ނިއުޔޯކް',
'America/Nipigon' => 'އެމެރިކާ/ނިޕިގަން',
'America/Nome' => 'އެމެރިކާ/ނޯމް',
'America/Noronha' => 'އެމެރިކާ/ނޮރޮންހަ',
'America/North_Dakota/Beulah' => 'އެމެރިކާ/ނޯތް_ޑަކޯޓާ/ބެއުލްލަ',
'America/North_Dakota/Center' => 'އެމެރިކާ/ނޯތް_ޑަކޯޓާ/ސެންޓަރ',
'America/North_Dakota/New_Salem' => 'އެމެރިކާ/ނޯތް_ޑަކޯޓާ/ނިއު_ސަލެމް',
'America/Ojinaga' => 'އެމެރިކާ/އޮޖިނަގަ',
'America/Panama' => 'އެމެރިކާ/ޕަނަމާ',
'America/Pangnirtung' => 'އެމެރިކާ/ޕަންގިރޓަންގް',
'America/Paramaribo' => 'އެމެރިކާ/ޕަރަމަރިބޯ',
'America/Phoenix' => 'އެމެރިކާ/ފީނިކިސް',
'America/Port-au-Prince' => 'އެމެރިކާ/ޕޯޓް_އައު_ޕްރިންސް',
'America/Port_of_Spain' => 'އެމެރިކާ/ޕޯޓް_އޮފް_ސްޕެއިން',
'America/Porto_Velho' => 'އެމެރިކާ/ޕޯޓޯ_ވެލޯ',
'America/Puerto_Rico' => 'އެމެރިކާ/ޕުއެޓޯ_ރިކޯ',
'America/Rainy_River' => 'އެމެރިކާ/ރެއިނީ_ރިވަރ',
'America/Rankin_Inlet' => 'އެމެރިކާ/ރަންކިން_އިންލެޓް',
'America/Recife' => 'އެމެރިކާ/ރެސިފެ',
'America/Regina' => 'އެމެރިކާ/ރެޖީނާ',
'America/Resolute' => 'އެމެރިކާ/ރިސޮލޫޓް',
'America/Rio_Branco' => 'އެމެރިކާ/ރިއޯ_ބްރާންކޯ',
'America/Santa_Isabel' => 'އެމެރިކާ/ސަންޓަ_އިސަބެލް',
'America/Santarem' => 'އެމެރިކާ/ސަންޓަރެމް',
'America/Santiago' => 'އެމެރިކާ/ސަންޓިއާގޯ',
'America/Santo_Domingo' => 'އެމެރިކާ/ސަންޓޮ_ޑޮމިންގޯ',
'America/Sao_Paulo' => 'އެމެރިކާ/ސައޮ_ޕޯލޯ',
'America/Scoresbysund' => 'އެމެރިކާ/ސްކޯސްބައިސުންޑް',
'America/Sitka' => 'އެމެރިކާ/ސިޓްކަ',
'America/St_Barthelemy' => 'އެމެރިކާ/ސެއިންޓް_ބާތެލެމީ',
'America/St_Johns' => 'އެމެރިކާ/ސެއިންޓް_ޖޯންސް',
'America/St_Kitts' => 'އެމެރިކާ/ސެއިންޓް_ކިޓްސް',
'America/St_Lucia' => 'އެމެރިކާ/ސެއިންޓް_ލޫސިއާ',
'America/St_Thomas' => 'އެމެރިކާ/ސެއިންޓް_ތޯމަސް',
'America/St_Vincent' => 'އެމެރިކާ/ސެއިންޓް_ވިންސެންޓް',
'America/Swift_Current' => 'އެމެރިކާ/ސްވިފްޓް_ކަރަންޓް',
'America/Tegucigalpa' => 'އެމެރިކާ/ޓެގުސިގަލްޕާ',
'America/Thule' => 'އެމެރިކާ/ތޫލް',
'America/Thunder_Bay' => 'އެމެރިކާ/ތަންޑަރ_ބޭ',
'America/Tijuana' => 'އެމެރިކާ/ޓިޖުއާނާ',
'America/Toronto' => 'އެމެރިކާ/ޓޮރޮންޓޯ',
'America/Tortola' => 'އެމެރިކާ/ޓޯޓޮލާ',
'America/Vancouver' => 'އެމެރިކާ/ވެންކޯވާ',
'America/Whitehorse' => 'އެމެރިކާ/ވައިޓްހޯސް',
'America/Winnipeg' => 'އެމެރިކާ/ވިނިޕެގް',
'America/Yakutat' => 'އެމެރިކާ/ޔަކުޓަޓް',
'America/Yellowknife' => 'އެމެރިކާ/ޔެލޯނައިފް',
'Antarctica/Casey' => 'އެންޓާރޓިކާ/',
'Antarctica/Davis' => 'އެންޓާރޓިކާ/',
'Antarctica/DumontDUrville' => 'އެންޓާރޓިކާ/',
'Antarctica/Macquarie' => 'އެންޓާރޓިކާ/',
'Antarctica/Mawson' => 'އެންޓާރޓިކާ/',
'Antarctica/McMurdo' => 'އެންޓާރޓިކާ/',
'Antarctica/Palmer' => 'އެންޓާރޓިކާ/',
'Antarctica/Rothera' => 'އެންޓާރޓިކާ/',
'Antarctica/Syowa' => 'އެންޓާރޓިކާ/',
'Antarctica/Troll' => 'އެންޓާރޓިކާ/',
'Antarctica/Vostok' => 'އެންޓާރޓިކާ/',
'Arctic/Longyearbyen' => 'އެންޓާރޓިކާ/',
'Asia/Aden' => 'އޭޝިއާ/އަޑެން',
'Asia/Almaty' => 'އޭޝިއާ/އަލްމަޓީ',
'Asia/Amman' => 'އޭޝިއާ/އައްމަން',
'Asia/Anadyr' => 'އޭޝިއާ/އަނަޑީރް',
'Asia/Aqtau' => 'އޭޝިއާ/އަޤްޓައު',
'Asia/Aqtobe' => 'އޭޝިއާ/އަޤްޓޯބެ',
'Asia/Ashgabat' => 'އޭޝިއާ/އަޝްގަބަޓް',
'Asia/Baghdad' => 'އޭޝިއާ/ބަގްދާދު',
'Asia/Bahrain' => 'އޭޝިއާ/ބަހުރެއިން',
'Asia/Baku' => 'އޭޝިއާ/ބަކު',
'Asia/Bangkok' => 'އޭޝިއާ/ބެންގްކޮކް',
'Asia/Beirut' => 'އޭޝިއާ/ބެއިރޫތް',
'Asia/Bishkek' => 'އޭޝިއާ/ބިޝްކެކް',
'Asia/Brunei' => 'އޭޝިއާ/ބްރުނާއީ',
'Asia/Chita' => 'އޭޝިއާ/ޗީޓާ',
'Asia/Choibalsan' => 'އޭޝިއާ/ޗޮއިބަލްސަން',
'Asia/Colombo' => 'އޭޝިއާ/ކޮލޮމްބޯ',
'Asia/Damascus' => 'އޭޝިއާ/ޑަމަސްކަސް',
'Asia/Dhaka' => 'އޭޝިއާ/ޑާކާ',
'Asia/Dili' => 'އޭޝިއާ/ޑިލީ',
'Asia/Dubai' => 'އޭޝިއާ/ޑުބާއީ',
'Asia/Dushanbe' => 'އޭޝިއާ/ޑުޝަންބެ',
'Asia/Gaza' => 'އޭޝިއާ/ގާޒާ',
'Asia/Hebron' => 'އޭޝިއާ/ހެބްރޮން',
'Asia/Ho_Chi_Minh' => 'އޭޝިއާ/ހޯ_ޗީ_މިން',
'Asia/Hong_Kong' => 'އޭޝިއާ/ހޮންގް_ކޮންގް',
'Asia/Hovd' => 'އޭޝިއާ/ހޮވްޑް',
'Asia/Irkutsk' => 'އޭޝިއާ/އިރުކުސްކް',
'Asia/Jakarta' => 'އޭޝިއާ/ޖަކާޓާ',
'Asia/Jayapura' => 'އޭޝިއާ/ޖަޔަޕޫރާ',
'Asia/Jerusalem' => 'އޭޝިއާ/ޖެރޫސަލެމް',
'Asia/Kabul' => 'އޭޝިއާ/ކާބުލް',
'Asia/Kamchatka' => 'އޭޝިއާ/ކަމްޗަޓްކާ',
'Asia/Karachi' => 'އޭޝިއާ/ކަރާޗީ',
'Asia/Kathmandu' => 'އޭޝިއާ/ކަތަމަންޑޫ',
'Asia/Khandyga' => 'އޭޝިއާ/ކަންޑީގަ',
'Asia/Kolkata' => 'އޭޝިއާ/ކޮލްކަޓާ',
'Asia/Krasnoyarsk' => 'އޭޝިއާ/ކްރަސްނޮޔާސްކް',
'Asia/Kuala_Lumpur' => 'އޭޝިއާ/ކުއަލަ_ލަމްޕޫރު',
'Asia/Kuching' => 'އޭޝިއާ/ކުޗިންގް',
'Asia/Kuwait' => 'އޭޝިއާ/ކުވައިޓް',
'Asia/Macau' => 'އޭޝިއާ/މަކާއޯ',
'Asia/Magadan' => 'އޭޝިއާ/މަގަޑަން',
'Asia/Makassar' => 'އޭޝިއާ/މަކައްސަރު',
'Asia/Manila' => 'އޭޝިއާ/މަނީލާ',
'Asia/Muscat' => 'އޭޝިއާ/މުސްކަޓް',
'Asia/Nicosia' => 'އޭޝިއާ/ނިކޯސިއާ',
'Asia/Novokuznetsk' => 'އޭޝިއާ/ނޮވޮކުޒްނެޓްސްކް',
'Asia/Novosibirsk' => 'އޭޝިއާ/ނޮވޮސިބިރިސްކް',
'Asia/Omsk' => 'އޭޝިއާ/އޮމްސްކް',
'Asia/Oral' => 'އޭޝިއާ/އޯރަލް',
'Asia/Phnom_Penh' => 'އޭޝިއާ/ފްނޮމް_ޕެންހް',
'Asia/Pontianak' => 'އޭޝިއާ/ޕޮންޓިއަނަކް',
'Asia/Pyongyang' => 'އޭޝިއާ/ޕިޔޮންގްޔެންގް',
'Asia/Qatar' => 'އޭޝިއާ/ޤަތަރު',
'Asia/Qyzylorda' => 'އޭޝިއާ/ކީޒީލޯޑާ',
'Asia/Rangoon' => 'އޭޝިއާ/ރަންގޫން',
'Asia/Riyadh' => 'އޭޝިއާ/ރިޔާދު',
'Asia/Sakhalin' => 'އޭޝިއާ/ސަކަލިން',
'Asia/Samarkand' => 'އޭޝިއާ/ސަމަރުގަންދު',
'Asia/Seoul' => 'އޭޝިއާ/ސީއޮލް',
'Asia/Shanghai' => 'އޭޝިއާ/ޝަންގްހައި',
'Asia/Singapore' => 'އޭޝިއާ/ސިންގަޕޫރު',
'Asia/Srednekolymsk' => 'އޭޝިއާ/ސްރެޑްނެކޮލިމްސްކް',
'Asia/Taipei' => 'އޭޝިއާ/ޓައިޕޭ',
'Asia/Tashkent' => 'އޭޝިއާ/ޓަޝްކެންޓް',
'Asia/Tbilisi' => 'އޭޝިއާ/ޓްބިލިސި',
'Asia/Tehran' => 'އޭޝިއާ/ޓެހެރާން',
'Asia/Thimphu' => 'އޭޝިއާ/ތިމްފު',
'Asia/Tokyo' => 'އޭޝިއާ/ޓޯކިޔޯ',
'Asia/Ulaanbaatar' => 'އޭޝިއާ/އުލާންބާޓަރު',
'Asia/Urumqi' => 'އޭޝިއާ/އުރުމްކީ',
'Asia/Ust-Nera' => 'އޭޝިއާ/އުސްޓް-ނެރާ',
'Asia/Vientiane' => 'އޭޝިއާ/ވިއެންޓިއެން',
'Asia/Vladivostok' => 'އޭޝިއާ/ވްލަޑިވޮސްޓޮކް',
'Asia/Yakutsk' => 'އޭޝިއާ/ޔަކުސްކް',
'Asia/Yekaterinburg' => 'އޭޝިއާ/ޔެކަޓެރިންބާރގް',
'Asia/Yerevan' => 'އޭޝިއާ/ޔެރެވަން',
'Atlantic/Azores' => 'އެޓްލާންޓިކް/އަޒޯރެސް',
'Atlantic/Bermuda' => 'އެޓްލާންޓިކް/ބާމިއުޑާ',
'Atlantic/Canary' => 'އެޓްލާންޓިކް/ކެނެރީ',
'Atlantic/Cape_Verde' => 'އެޓްލާންޓިކް/ކޭޕް_ވާޑް',
'Atlantic/Faroe' => 'އެޓްލާންޓިކް/ފަރޯ',
'Atlantic/Madeira' => 'އެޓްލާންޓިކް/މަޑެއިރާ',
'Atlantic/Reykjavik' => 'އެޓްލާންޓިކް/ރޭކްޖަވިކް',
'Atlantic/South_Georgia' => 'އެޓްލާންޓިކް/ސައުތް_ޖޯޖިއާ',
'Atlantic/St_Helena' => 'އެޓްލާންޓިކް/ސެއިންޓް_ހެލެނާ',
'Atlantic/Stanley' => 'އެޓްލާންޓިކް/ސްޓޭންލީ',
'Australia/Adelaide' => 'އޮސްޓްރޭލިޔާ/އެޑެލައިޑް',
'Australia/Brisbane' => 'އޮސްޓްރޭލިޔާ/ބްރިސްބަން',
'Australia/Broken_Hill' => 'އޮސްޓްރޭލިޔާ/ބްރޮކެން_ހިލް',
'Australia/Currie' => 'އޮސްޓްރޭލިޔާ/ކުރީ',
'Australia/Darwin' => 'އޮސްޓްރޭލިޔާ/ޑާވިން',
'Australia/Eucla' => 'އޮސްޓްރޭލިޔާ/ޔޫކްލާ',
'Australia/Hobart' => 'އޮސްޓްރޭލިޔާ/ހޮބާޓް',
'Australia/Lindeman' => 'އޮސްޓްރޭލިޔާ/ލިންޑްމަން',
'Australia/Lord_Howe' => 'އޮސްޓްރޭލިޔާ/ލޯޑް_ހޮވީ',
'Australia/Melbourne' => 'އޮސްޓްރޭލިޔާ/މެލްބަން',
'Australia/Perth' => 'އޮސްޓްރޭލިޔާ/ޕާތް',
'Australia/Sydney' => 'އޮސްޓްރޭލިޔާ/ސިޑްނީ',
'Europe/Amsterdam' => 'ޔޫރަޕް/އެމްސްޓަޑަމް',
'Europe/Andorra' => 'ޔޫރަޕް/އެންޑޯރާ',
'Europe/Athens' => 'ޔޫރަޕް/އެތެންސް',
'Europe/Belgrade' => 'ޔޫރަޕް/ބެލްގްރޭޑް',
'Europe/Berlin' => 'ޔޫރަޕް/ބާލިން',
'Europe/Bratislava' => 'ޔޫރަޕް/ބްރަޓިސްލަވަ',
'Europe/Brussels' => 'ޔޫރަޕް/ބްރަސެލްސް',
'Europe/Bucharest' => 'ޔޫރަޕް/ބުކަރެސް',
'Europe/Budapest' => 'ޔޫރަޕް/ބުޑަޕެސްޓް',
'Europe/Busingen' => 'ޔޫރަޕް/ބުސިންގަން',
'Europe/Chisinau' => 'ޔޫރަޕް/ޗިސިނައު',
'Europe/Copenhagen' => 'ޔޫރަޕް/ކޮޕަންހޭގަން',
'Europe/Dublin' => 'ޔޫރަޕް/ޑަބްލިން',
'Europe/Gibraltar' => 'ޔޫރަޕް/ގިބްރަލްޓަރ',
'Europe/Guernsey' => 'ޔޫރަޕް/ގުއަންސޭ',
'Europe/Helsinki' => 'ޔޫރަޕް/ހެލްސިންކި',
'Europe/Isle_of_Man' => 'ޔޫރަޕް/އައިލް_އޮފް_މޭން',
'Europe/Istanbul' => 'ޔޫރަޕް/އިސްޓަންބުލް',
'Europe/Jersey' => 'ޔޫރަޕް/ޖާޒީ',
'Europe/Kaliningrad' => 'ޔޫރަޕް/ކަލިންނިންގްރާޑް',
'Europe/Kiev' => 'ޔޫރަޕް/ކިއެވް',
'Europe/Lisbon' => 'ޔޫރަޕް/ލިސްބަން',
'Europe/Ljubljana' => 'ޔޫރަޕް/ޖުބުލްޖަނާ',
'Europe/London' => 'ޔޫރަޕް/ލަންޑަން',
'Europe/Luxembourg' => 'ޔޫރަޕް/ލަކްސެމްބޯގް',
'Europe/Madrid' => 'ޔޫރަޕް/މެޑްރިޑް',
'Europe/Malta' => 'ޔޫރަޕް/މޯލްޓާ',
'Europe/Mariehamn' => 'ޔޫރަޕް/މަރީހަމްން',
'Europe/Minsk' => 'ޔޫރަޕް/މިންސްކް',
'Europe/Monaco' => 'ޔޫރަޕް/މޮނާކޯ',
'Europe/Moscow' => 'ޔޫރަޕް/މޮސްކޯ',
'Europe/Oslo' => 'ޔޫރަޕް/އޮސްލޯ',
'Europe/Paris' => 'ޔޫރަޕް/ޕެރިސް',
'Europe/Podgorica' => 'ޔޫރަޕް/ޕޮގޯރިކާ',
'Europe/Prague' => 'ޔޫރަޕް/ޕްރޭގް',
'Europe/Riga' => 'ޔޫރަޕް/ރިގާ',
'Europe/Rome' => 'ޔޫރަޕް/ރޯމް',
'Europe/Samara' => 'ޔޫރަޕް/ސަމާރާ',
'Europe/San_Marino' => 'ޔޫރަޕް/ސެން_މަރިނޯ',
'Europe/Sarajevo' => 'ޔޫރަޕް/ސަރްޖޭވޯ',
'Europe/Simferopol' => 'ޔޫރަޕް/ސިމްފެރޮޕޮލް',
'Europe/Skopje' => 'ޔޫރަޕް/ސްކޯޖެ',
'Europe/Sofia' => 'ޔޫރަޕް/ސޯފިއާ',
'Europe/Stockholm' => 'ޔޫރަޕް/ސްޓޮކްހޮލްމް',
'Europe/Tallinn' => 'ޔޫރަޕް/ޓައްލިން',
'Europe/Tirane' => 'ޔޫރަޕް/ޓިރޭން',
'Europe/Uzhgorod' => 'ޔޫރަޕް/އުޒްގޮރޮޑް',
'Europe/Vaduz' => 'ޔޫރަޕް/ވަޑުޒް',
'Europe/Vatican' => 'ޔޫރަޕް/ވެޓިކަން',
'Europe/Vienna' => 'ޔޫރަޕް/ވިއެނާ',
'Europe/Vilnius' => 'ޔޫރަޕް/ވިލްނިއަސް',
'Europe/Volgograd' => 'ޔޫރަޕް/ވޮލްގޮގްރާޑް',
'Europe/Warsaw' => 'ޔޫރަޕް/ވާސޯ',
'Europe/Zagreb' => 'ޔޫރަޕް/ޒަގްރެބް',
'Europe/Zaporozhye' => 'ޔޫރަޕް/ޒޮޕޯރޯޒައި',
'Europe/Zurich' => 'ޔޫރަޕް/ޒޫރިޗް',
'Indian/Antananarivo' => 'އިންޑިޔަން/އަންޓަނަންނަރިވޯ',
'Indian/Chagos' => 'އިންޑިޔަން/ޗާގޮސް',
'Indian/Christmas' => 'އިންޑިޔަން/ކްރިސްޓްމަސް',
'Indian/Cocos' => 'އިންޑިޔަން/ކޮކޮސް',
'Indian/Comoro' => 'އިންޑިޔަން/ކޮމޮރޮ',
'Indian/Kerguelen' => 'އިންޑިޔަން/ކަރގުއިލެން',
'Indian/Mahe' => 'އިންޑިޔަން/މަހޭ',
'Indian/Maldives' => 'އިންޑިޔަން/ދިވެހިރާއްޖެ',
'Indian/Mauritius' => 'އިންޑިޔަން/މޮރީޝިއަސް',
'Indian/Mayotte' => 'އިންޑިޔަން/މަޔޮއްޓެ',
'Indian/Reunion' => 'އިންޑިޔަން/ރިޔޫނިއަން',
'Pacific/Apia' => 'ޕެސިފިކް/އަޕިއާ',
'Pacific/Auckland' => 'ޕެސިފިކް/އޯކްލޭންޑް',
'Pacific/Bougainville' => 'ޕެސިފިކް/ބޯގަންވިލް',
'Pacific/Chatham' => 'ޕެސިފިކް/ޗަތަމް',
'Pacific/Chuuk' => 'ޕެސިފިކް/ޗޫކް',
'Pacific/Easter' => 'ޕެސިފިކް/އީސްޓަރ',
'Pacific/Efate' => 'ޕެސިފިކް/އެފާޓެ',
'Pacific/Enderbury' => 'ޕެސިފިކް/އެޑެންބަރީ',
'Pacific/Fakaofo' => 'ޕެސިފިކް/ފަކައޮފޮ',
'Pacific/Fiji' => 'ޕެސިފިކް/ފިޖި',
'Pacific/Funafuti' => 'ޕެސިފިކް/ފުނަފުޓި',
'Pacific/Galapagos' => 'ޕެސިފިކް/ގަލަޕަގޮސް',
'Pacific/Gambier' => 'ޕެސިފިކް/ގެމްބިއަރ',
'Pacific/Guadalcanal' => 'ޕެސިފިކް/ގުއަޑަލްކަނަލް',
'Pacific/Guam' => 'ޕެސިފިކް/ގުއާމް',
'Pacific/Honolulu' => 'ޕެސިފިކް/ހޮނޮލުލު',
'Pacific/Johnston' => 'ޕެސިފިކް/ޖޮންސްޓަން',
'Pacific/Kiritimati' => 'ޕެސިފިކް/ކިރިޓިމަޓި',
'Pacific/Kosrae' => 'ޕެސިފިކް/ކޮސްރައި',
'Pacific/Kwajalein' => 'ޕެސިފިކް/ކްވަޖަލެއިން',
'Pacific/Majuro' => 'ޕެސިފިކް/މަޖޫރޯ',
'Pacific/Marquesas' => 'ޕެސިފިކް/މާކުއިސަސް',
'Pacific/Midway' => 'ޕެސިފިކް/މިޑްވޭ',
'Pacific/Nauru' => 'ޕެސިފިކް/ނައުރު',
'Pacific/Niue' => 'ޕެސިފިކް/ނިއުއި',
'Pacific/Norfolk' => 'ޕެސިފިކް/ނޯފޯލްކް',
'Pacific/Noumea' => 'ޕެސިފިކް/ނޫމޭ',
'Pacific/Pago_Pago' => 'ޕެސިފިކް/ޕަގޮ_ޕަގޮ',
'Pacific/Palau' => 'ޕެސިފިކް/ޕަލައު',
'Pacific/Pitcairn' => 'ޕެސިފިކް/ޕިޓްކައިން',
'Pacific/Pohnpei' => 'ޕެސިފިކް/ޕޮއްޕެއި',
'Pacific/Port_Moresby' => 'ޕެސިފިކް/ޕޯޓް_މޯސްބައި',
'Pacific/Rarotonga' => 'ޕެސިފިކް/ރަރޯޓޮންގާ',
'Pacific/Saipan' => 'ޕެސިފިކް/ސައިޕަން',
'Pacific/Tahiti' => 'ޕެސިފިކް/ޓަހިޓީ',
'Pacific/Tarawa' => 'ޕެސިފިކް/ޓަރަވާ',
'Pacific/Tongatapu' => 'ޕެސިފިކް/ޓޮންގަޓަޕު',
'Pacific/Wake' => 'ޕެސިފިކް/ވޭކް',
'Pacific/Wallis' => 'ޕެސިފިކް/ވައްލިސް',
'UTC' => 'ޔޫޓީސީ',
];
      return $timezonearray[static::randomElement(\DateTimeZone::listIdentifiers())];
  }
}
