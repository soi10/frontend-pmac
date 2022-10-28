<link href="https://fonts.googleapis.com/css?family=Sarabun&;display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp',
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNewItalic.ttf',
            'B' => 'THSarabunNewBold.ttf',
            'BI' => "THSarabunNewBoldItalic.ttf",
        ],
    ],
]);
$id = $_GET['id'];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://103.13.231.66:3001/appMapping/dataid?id=' . $id . '',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS => '_id=' . $id . '',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$pdf_data = json_decode($response, true);

function DateThai($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
}
date_default_timezone_set('Asia/Bangkok');
$date_time = date("Y-m-d H:i:s", strtotime($pdf_data["createdAt"]));
$date_result = substr(DateThai($date_time), 0, 16);
$time_result = substr(DateThai($date_time), 17, 20);

if ($pdf_data["sign_1"] == 0) {
    $sign_cus = "ผู้ใช้ไฟไม่อยู่ขณะตรวจสอบ";
    $img_sign = '<img src="http://103.13.231.66:3001/uploads/nosign.png" alt="Mountain" width="50" height="40">';
} else {
    $sign_cus = $pdf_data["name"];
    $img_sign = '<img src="http://103.13.231.66:3001/uploads/' . $pdf_data["sign_1"] . '" alt="Mountain" width="60" height="50">';
}
//คำนวณการจับรอบ
$mt_rev_spec = $pdf_data["MT_REV_SPEC"];
$mt_rev_spec_con = intval(preg_replace('/[^0-9]+/', '', $mt_rev_spec), 10);
$insp_round = $pdf_data["INSP_ROUND"];
$INSP_TIME = $pdf_data["INSP_TIME"];
$E_P_A = $pdf_data["E_P_A"];
$energy1 = (1000 / $mt_rev_spec_con) * $insp_round;
$energy2 = $E_P_A / 3600;
//ob_start(); // Start get HTML code
$head = '
<link href="https://fonts.googleapis.com/css?family=Sarabun&;display=swap" rel="stylesheet">
<style>
    body{
        font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
    }
    body {
      font-family: sarabun;
      font-size: 18px;
  }
  table {
    border-collapse: collapse;
    width: 100%;
  }
  table.head {
    border: 3px solid red;
  }

  td, th {
    // text-align: left;
    padding: 8px;
  }
  td.he, th.he {
    // text-align: left;
    padding: 8px;
    border: 0px;
  }
  td.dark, {
    background-color:#C2BABA"
  }
  p.head-1 {
    font-size: 180%;
    font-weight: bold;
    text-align: center;
  }
  p.left {
    text-align: left;
  }
  .center {
    text-align: center;
  }
  p.centerhead {
    text-align: center;
    font-size: 130%;
    display: block;
    margin-top: 0em;
    margin-bottom: 0em;
    font-weight: bold;
    text-decoration: underline;
  }
  p.sub {
    text-align: left;
    font-size: 110%;
    display: block;
    margin-top: 0em;
    margin-bottom: 0em;
  }
  p.subhead {
    text-align: left;
    font-size: 110%;
    display: block;
    margin-top: 0em;
    margin-bottom: 0em;
    text-decoration: underline;
  }
  p.subhead1 {
    text-align: left;
    font-size: 110%;
    display: block;
    margin-top: 0em;
    margin-bottom: 0em;
    margin-left: 40;
  }
  p.subhead2 {
    text-align: left;
    font-size: 110%;
    display: block;
    margin-top: 0em;
    margin-bottom: 0em;
    margin-left: 50;
  }
}
u.dotted {
  text-decoration: underline dotted;
}



</style>
<div style="A_CSS_ATTRIBUTE:all;position: absolute;bottom: 20px; right: 80px;left: 80px; top: 40px;  ">

<div class="center">
<img src="./image/logo-pea.jpg" alt="ddd" width="100" height="90" />
<p class="centerhead">การไฟฟ้าส่วนภูมิภาค</p>
<p class="centerhead">แบบฟอร์มการตรวจสอบมิเตอร์ ชนิด 1 เฟส 2 สาย</p>
</div>
<br>

<div class="center">
<p class="sub">ชื่อผู้ใช้ไฟ <u class="dotted">' . $pdf_data["name"] . '</u> หมายเลขผู้ใช้ไฟ <u class="dotted">' . $pdf_data["ca"] . '</u> การไฟฟ้า <u class="dotted">' . $pdf_data["Peaname"] . '</u></p>
<p class="sub">kWh-Meter ผลิตภัณฑ์ <u class="dotted">' . $pdf_data["producer"] . '</u> แบบ <u class="dotted">' . $pdf_data["phase"] . '</u> กระแส <u class="dotted">' . $pdf_data["amp"] . '</u> แอมป์</p>
<p class="sub">แรงดัน <u class="dotted">' . $pdf_data["V_AN"] . '</u> ไวลท์ <u class="dotted">' . $pdf_data["MT_REV_SPEC"] . '</u> รอบ/กิโลวัตต์-ชั่วโมง PEA.NO <u class="dotted">' . (int) $pdf_data["peano"] . '</u></p>
<p class="sub">ตราตระกั่วฝาครอบที่ต่อสาย..........................หมายเลข...................... ( ) ปกติ  ( ) ไม่ปกติ ( ) ไม่มี</p>
<p class="sub">ตราตระกั่วฝาครอบตัวมิเตอร์..........................หมายเลข...................... ( ) ปกติ  ( ) ไม่ปกติ ( ) ไม่มี</p>
<p class="sub">กิโลวัตต์-ขั่วโมง อ่านค่าได้ <u class="dotted">' . $pdf_data["UNIT_EST"] . '</u> </p>
<hr>
</div>

<div class="center">
<p class="subhead">ค่าที่ได้การจากวัด</p>
<p class="subhead1">1. kWh-Meter หมุน <u class="dotted">' . $pdf_data["INSP_ROUND"] . '</u> รอบ  ใช้เวลา <u class="dotted">' . $pdf_data["INSP_TIME"] . '</u> วินาที</p>
<p class="subhead1">2. แรงดันเฟส Vn <u class="dotted">' . $pdf_data["V_AN"] . '</u> โวลท์ กระแสเฟส <u class="dotted">' . $pdf_data["I_A"] . '</u> แอมป์ PF.เฟส <u class="dotted">' . $pdf_data["PF_A"] . '</u> </p>
<p class="subhead2">( ) Lag  ( ) Lead</p>
<hr>
</div>

<div class="center">
<p class="subhead">ค่าที่ได้จากการคำนวณ</p>


<p class="subhead1">1. จากการจับรอบ         = <u class="dotted">' . number_format($energy1, 2) . '</u> K.W.</p>
<p class="subhead1">2. จากการวัด         = <u class="dotted">' . number_format($energy2, 2) . '</u> K.W.</p>
<p class="subhead1">3. ค่า % Error         = <u class="dotted">' . number_format($pdf_data["ERR_MT_A"], 2) . '</u> %</p>
<hr>
</div>

<div class="center">
<p class="sub">วันที่ <u class="dotted">' . $date_result . '</u> เวลา <u class="dotted">' . $time_result . '</u> น. หลังจากการตรวจสอบตีตราตะกั่วหมายเลข.......................................</p>
<p class="sub">ทีฝาครอบที่ต่อสายเรียบร้อยแล้ว</p>
<p class="sub">สรุปผลการตรวจสอบ <u class="dotted">' . $pdf_data["RESULT_MT"] . '</u> </p>
<p class="sub">หมายเหตุ: <u class="dotted">' . $pdf_data["MONITOR_MT1"] . '' . $pdf_data["MONITOR_CT1"] . '</u></p>
<p class="sub">&nbsp;</p>
<p class="sub">&nbsp;</p>
<p class="sub">&nbsp;</p>
</div>

<div class="center">
<table style="border-collapse: collapse; width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%; text-align: center;"></td>
<td style="width: 50%; text-align: center;"></td>
</tr>
<tr>
<td style="width: 50%; text-align: center;">
<p>ลงชื่อ ' . $img_sign . ' ผู้ใช้ไฟฟ้า</p>
<td style="width: 50%; text-align: center;">
<p>&nbsp;</p>
<p>ลงชื่อ ........................................ ผู้ตรวจสอบ</p>
</td>
</tr>
<tr>
<td style="width: 50%; text-align: center;">
<p>( ' . $sign_cus . ' </u> )</p>
<p>.</p>
<td style="width: 50%; text-align: center;">
<p>( ' . $pdf_data["full_name"] . ' </u> )</p>
<p>' . $pdf_data["DepartmentShortName"] . '' . $pdf_data["Peaname"] . '</p>
</td>
</tr>
</tbody>
</table>
</div>




</div>
';
$mpdf->WriteHTML($head);
$mpdf->defaultfooterline = 0;
$mpdf->SetFooter('<div style="text-align: left;font-size:18px;">มต.ทม.๕/๑ ป.๕๘</div>');
$mpdf->SetTitle('แบบฟอร์มการตรวจสอบมิเตอร์ ชนิด 1 เฟส 2 สาย');
$mpdf->SetWatermarkText('PMAC');
$mpdf->showWatermarkText = true;
$mpdf->Output('singlephase.pdf', 'I');
$mpdf->Output();
?>