<link href="https://fonts.googleapis.com/css?family=Sarabun&;display=swap" rel="stylesheet">
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
                'B' =>  'THSarabunNewBold.ttf',
                'BI' => "THSarabunNewBoldItalic.ttf",
            ]
        ],
]);
$id = $_GET['id'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://103.253.73.187:8080/appMapping/dataid?id='.$id.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS => '_id='.$id.'',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$pdf_data = json_decode($response, true);

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}
  date_default_timezone_set('Asia/Bangkok');
  $date_time = date( "Y-m-d H:i:s", strtotime($pdf_data["createdAt"]) );
  $date_result = substr(DateThai($date_time),0,16);
  $time_result = substr(DateThai($date_time),17,20);

  if($pdf_data["sign_1"]==0){
    $sign_cus = "ผู้ใช้ไฟไม่อยู่ขณะตรวจสอบ";
  }else{
    $sign_cus = $pdf_data["name"];
  }

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

  
</style>
<div style="A_CSS_ATTRIBUTE:all;position: absolute;bottom: 20px; right: 25px;left: 25px; top: 15px;  ">

<table style="border-collapse: collapse; width: 98.8868%; height: 1152px;" border="1">
<tbody>
<tr style="height: 128px;">
<td style="width: 100%; height: 150px;" >
<table style="height: 110px; width: 100%; border-collapse: collapse;" border="1" style="text-align: center;">
<tbody>
<tr style="height: 100%;">
<td class="he" style="width: 19.9999%; height: 110px;"><img src="./image/logo-pea.jpg" alt="ddd" width="100" height="80" /></td>
<td class="he" style="width: 55.1112%; height: 110px;">
<p class="head-1" style="text-align: center;"><span style="text-decoration: underline;">การไฟฟ้าส่วนภูมิภาค</span></p>
<p style="text-align: center;"><span style="text-decoration: underline;">แบบฟอร์มการตรวจสอบมิเตอร์ อัตรา &Omicron; ปกติ &Omicron; TOU &Omicron; TOD</span></p>
<p style="text-align: center;"><span style="text-decoration: underline;">ลักษณะการติดตั้ง &Omicron; ๑ เฟส ต่อตรง &Omicron; ๓ เฟส ต่อตรง</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td class="he" style="width: 24.8888%; height: 110px;">
<p class="head-1">แบบต่อตรง</p>
<p>๑ A = ๗๐ หน่วย</p>
<p>๑๐ KVA = ๔๓ A</p>
<p>๑๐ KVA = ๓,๐๐๐ หน่วย</p>
<p>(ที่ LF = ๐.๕,pf = ๐.๘๕)</p>
</td>
</tr>
</tbody>
</table>
<p class="left">๑. ข้อมูล</p>
<p style="text-align: left;">ข้อมูลผู้ใช้ไฟ&nbsp; <u class="dotted">'.$pdf_data["name"].'</u> หมายเลขผู้ใช้ <u class="dotted">'.$pdf_data["ca"].'</u> การไฟฟ้า <u class="dotted">'.$pdf_data["mruname"].'</u></p>
<p style="text-align: left;">KWh-Meter ผลิตภัณฑ์ <u class="dotted">'.$pdf_data["producer"].'</u> รุ่น <u class="dotted">'.$pdf_data["phase"].' </u> กระแส <u class="dotted">'.$pdf_data["MT_SIZE"].'</u> แอมป์ แรงดัน _______ โวลท์ มิเตอร์ <u class="dotted">'.$pdf_data["MT_SIZE"].'</u></p>
<p style="text-align: left;">Pulse <u class="dotted">'.$pdf_data["MT_REV_SPEC"].' </u>  รอบ/กิโลวัตต์-ชั่วโมง PEA no. <u class="dotted">'.$pdf_data["peano"].' </u>  Serial no. _____ ประเภทธุรกิจปัจจุบัน _______</p>
<p style="text-align: left;">ขนาดหม้อแปลงหม้อแปลงระบบจำหน่าย __ KVA ระยะห่างระหว่างมิเตอร์กับหม้อแปลงระบบจำหน่ายประมาณ __ เมตร</p>
<p style="text-align: left;">ตราตะกั่วตู้มิเตอร์&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;หมายเลข _________ (.......) ปกติ&nbsp; (.....) ไม่ปกติ&nbsp; (.....)&nbsp; ไม่มี</p>
<p style="text-align: left;">ตราตะกั่วฝาครอบที่ต่อสาย&nbsp; &nbsp; &nbsp; &nbsp; หมายเลข _________ (.......) ปกติ&nbsp; (.....) ไม่ปกติ&nbsp; (.....)&nbsp; ไม่มี</p>
<p style="text-align: left;">ตราตะกั่วฝาครอบตัวมิเตอร์&nbsp; &nbsp; &nbsp; &nbsp; หมายเลข _________ (.......) ปกติ&nbsp; (.....) ไม่ปกติ&nbsp; (.....)&nbsp; ไม่มี</p>
<p>&nbsp;</p>
</td>
</tr>
<tr style="height: 305px;">
<td style="width: 100%; height: 896px; text-align: left;">
<p>๒. ข้อมูลในตัวมิเตอร์&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&Omicron; มิเตอร์แบบจานหมุน&nbsp; &nbsp; &Omicron; มิเตอร์ Smart แบบ Nomal &Omicron; มิเตอร์ Smart แบบ TOU</p>
<p><strong>มิเตอร์แบบจานหมุน</strong></p>
<p><span style="text-decoration: underline;">&nbsp;KWh-Meter</span> จับรอบ หมุน  <u class="dotted">'.$pdf_data["INSP_ROUND"].' </u>   รอบ ใช้เวลา  <u class="dotted">'.$pdf_data["INSP_TIME"].' </u>   วินาที ได้ P =  <u class="dotted">'.$pdf_data["P_TOT"].' </u>   KW หน่วยสะสมปัจจุบัน  <u class="dotted">'.$pdf_data["E_P_TOT"].' </u>   หน่วย</p>
<p><strong>มิเตอร์ Smart แบบ Normal</strong></p>
<table style="border-collapse: collapse; width: 37.3334%; height: 61px;" border="1">
<tbody>
<tr>
<td style="width: 50%;">กิโลวัตต์ ชั่วโมงรวม</td>
<td style="width: 50%;">กิโลวัตต์สูงสุด สะสม</td>
</tr>
<tr>
<td style="width: 50%;">&nbsp;</td>
<td style="width: 50%;">&nbsp;</td>
</tr>
</tbody>
</table>
<p>มิเตอร์ Smart แบบ TOU</p>
<table style="border-collapse: collapse; width: 100%; height: 180px;" border="1">
<tbody>
<tr style="height: 36px;">
<td style="width: 15.7778%; text-align: center; height: 36px;">บันทึกการอ่านค่า</td>
<td style="width: 15.926%; text-align: center; height: 36px;">หน่วยรวม (kWh)</td>
<td style="width: 15.4816%; text-align: center; height: 36px;">PeaK(Rate A)</td>
<td style="width: 18.5926%; text-align: center; height: 36px;">Off-Peak(Rate B)</td>
<td style="width: 16.3703%; text-align: center; height: 36px;">Holiday (Rate C)</td>
<td style="width: 17.8519%; text-align: center; height: 36px;">ค่ากิโลวาร์ ( kVar)</td>
</tr>
<tr style="height: 18px;">
<td style="width: 15.7778%; height: 18px;">กิโลวัตต์-ชั่วโมง</td>
<td style="width: 15.926%; height: 18px; text-align: right;">(๐๐๐)</td>
<td style="width: 15.4816%; height: 18px; text-align: right;">(๐๐๑)</td>
<td style="width: 18.5926%; height: 18px; text-align: right;">(๐๐๒)</td>
<td style="width: 16.3703%; height: 18px; text-align: right;">(๐๐๓)</td>
<td style="width: 17.8519%; height: 18px; text-align: right;">(๑๐๐)</td>
</tr>
<tr style="height: 18px;">
<td style="width: 15.7778%; height: 18px;">กิโลวัตต์สูงสุด</td>
<td class="dark" style="width: 15.926%; height: 36px;" rowspan="2">&nbsp;</td>
<td style="width: 15.4816%; height: 18px; text-align: right;">(๐๐๕)</td>
<td style="width: 18.5926%; height: 18px; text-align: right;">(๐๐๖)</td>
<td style="width: 16.3703%; height: 18px; text-align: right;">(๐๐๗)</td>
<td style="width: 17.8519%; height: 18px; text-align: right;">(๑๘๐)</td>
</tr>
<tr style="height: 18px;">
<td style="width: 15.7778%; height: 18px;">กิโลวัตต์สะสม</td>
<td style="width: 15.4816%; height: 18px; text-align: right;">(๐๑๕)</td>
<td style="width: 18.5926%; height: 18px; text-align: right;">(๐๑๖)</td>
<td style="width: 16.3703%; height: 18px; text-align: right;">(๐๑๗)</td>
<td style="width: 17.8519%; height: 18px; text-align: right;">(๒๘๐)</td>
</tr>
<tr style="height: 18px;">
<td style="width: 15.7778%; height: 18px;">&nbsp;</td>
<td style="width: 15.926%; height: 18px;">Phase A</td>
<td style="width: 15.4816%; height: 18px;">Phase B</td>
<td style="width: 18.5926%; height: 18px;">Phase C</td>
<td style="width: 16.3703%; height: 18px;">ค่ากิโลวัตต์ ณ ขนะนั้น</td>
<td style="width: 17.8519%; height: 18px;">ค่ากิโลวาร์ ณ ขณะนั้น</td>
</tr>
<tr style="height: 36px;">
<td style="width: 15.7778%; height: 36px;">แรงดันในมิเตอร์(V)</td>
<td style="width: 15.926%; height: 36px; text-align: right;">(๕๐๐)</td>
<td style="width: 15.4816%; height: 36px; text-align: right;">(๕๐๑)</td>
<td style="width: 18.5926%; height: 36px; text-align: right;">(๕๐๒)</td>
<td style="width: 16.3703%; height: 36px; text-align: right;"> <u class="dotted">'.$pdf_data["P_TOT_C093"].' </u>  (๐๙๓)</td>
<td style="width: 17.8519%; height: 36px; text-align: right;">(๑๙๓)</td>
</tr>
<tr style="height: 18px;">
<td style="width: 15.7778%; height: 18px;">กระแสในมิเตอร์ (A)</td>
<td style="width: 15.926%; height: 18px; text-align: right;">(๕๐๓)</td>
<td style="width: 15.4816%; height: 18px; text-align: right;">(๕๐๔)</td>
<td style="width: 18.5926%; height: 18px; text-align: right;">(๕๐๕)</td>
<td style="width: 16.3703%; height: 18px;">&nbsp;</td>
<td style="width: 17.8519%; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 15.7778%; height: 18px;">เพาเวอร์แฟคเตอร์(pf)</td>
<td style="width: 15.926%; height: 18px; text-align: right;">(๕๑๒)</td>
<td style="width: 15.4816%; height: 18px; text-align: right;">(๕๑๓)</td>
<td style="width: 18.5926%; height: 18px; text-align: right;">(๕๑๔)</td>
<td style="width: 16.3703%; height: 18px;">&nbsp;</td>
<td style="width: 17.8519%; height: 18px;">&nbsp;</td>
</tr>
</tbody>
</table>
<p>๓. ข้อมูลจากการัด Clip-On Meter และคำนวณ</p>
<table style="border-collapse: collapse; width: 100%; height: 204px;" border="1">
<tbody>
<tr style="height: 18px;">
<td style="width: 20%; height: 18px;">แรงดันสาย</td>
<td style="width: 20%; height: 18px;">Van = <u class="dotted">'.$pdf_data["V_AN"].' </u>  V</td>
<td style="width: 20%; height: 18px;">Vbn = <u class="dotted">'.$pdf_data["V_BN"].' </u>   V</td>
<td style="width: 20%; height: 18px;">Vcn = <u class="dotted">'.$pdf_data["V_CN"].' </u>  ;V</td>
<td style="width: 20%; height: 18px;">(&nbsp; &nbsp;) RST (&nbsp; &nbsp;) TSR</td>
</tr>
<tr style="height: 18px;">
<td style="width: 20%; height: 18px;">กระแสเฟส</td>
<td style="width: 20%; height: 18px;">la = <u class="dotted">'.$pdf_data["I_A"].' </u>  A</td>
<td style="width: 20%; height: 18px;">lb = <u class="dotted">'.$pdf_data["I_B"].' </u> A</td>
<td style="width: 20%; height: 18px;">lc = <u class="dotted">'.$pdf_data["I_C"].' </u>  A</td>
<td style="width: 20%; height: 18px;">ln =&nbsp; &nbsp; &nbsp;A</td>
</tr>
<tr style="height: 132px;">
<td style="width: 20%; height: 132px;">cos &theta; ระหว่าง V Line กับ l phase (pf)</td>
<td style="width: 20%; height: 132px;">
<p>cos &theta; a = <u class="dotted">'.$pdf_data["PF_A"].' </u>  </p>
<p>(&nbsp; ) Lag ( ) Lead มุม</p>
</td>
<td style="width: 20%; height: 132px;">
<p>cos &theta; b = <u class="dotted">'.$pdf_data["PF_B"].' </u>  </p>
<p>(&nbsp; ) Lag ( ) Lead มุม&nbsp;</p>
</td>
<td style="width: 20%; height: 132px;">
<p>cos &theta; c = <u class="dotted">'.$pdf_data["PF_C"].' </u>  </p>
<p>(&nbsp; ) Lag ( ) Lead มุม</p>
</td>
<td style="width: 20%; height: 132px;">
<p>kWh-Meter จับรอบ =</p>
<p>3600/(รอบ/Kwh)X จำนวนรอบที่นับ/(เวลาที่จับ(s))</p>
</td>
</tr>
<tr style="height: 18px;">
<td style="width: 20%; height: 18px;">กิโลวัตต์(คำนวน)(Va*la๒*cos &theta;)</td>
<td style="width: 20%; height: 18px;">Pa =&nbsp; &nbsp; &nbsp; kW</td>
<td style="width: 20%; height: 18px;">Pb =&nbsp; &nbsp; &nbsp; &nbsp; kW</td>
<td style="width: 20%; height: 18px;">Pc =&nbsp; &nbsp; &nbsp;kW</td>
<td style="width: 20%; height: 18px;">P รวม =&nbsp; &nbsp; &nbsp; kW</td>
</tr>
<tr style="height: 18px;">
<td style="width: 20%; height: 18px;">กิโลวัตต์จาก Clip-On Meter</td>
<td style="width: 20%; height: 18px;">Pa = <u class="dotted">'.number_format($pdf_data["V_AN"]*$pdf_data["I_A"]*$pdf_data["PF_A"],2).' </u>   kW</td>
<td style="width: 20%; height: 18px;">Pb =<u class="dotted">'.number_format($pdf_data["V_BN"]*$pdf_data["I_B"]*$pdf_data["PF_B"],2).' </u> kW</td>
<td style="width: 20%; height: 18px;">Pc =<u class="dotted">'.number_format($pdf_data["V_CN"]*$pdf_data["I_C"]*$pdf_data["PF_C"],2).' </u>kW</td>
<td style="width: 20%; height: 18px;">&nbsp;P รวม =<u class="dotted">'.number_format((float)$pdf_data["P_A"] + (float)$pdf_data["P_B"] + (float)$pdf_data["P_C"], 2).' </u> kW</td>
</tr>
</tbody>
</table>
<p>หน่วยการใช้ไฟรวมเดือนที่แล้ว (SAP : ClCo)&nbsp; &nbsp; &nbsp; &nbsp; หน่วย&nbsp; &nbsp; กิโลวัตต์สูงสุด&nbsp; &nbsp; &nbsp; &nbsp; kW&nbsp; &nbsp; &nbsp;Load Factor =&nbsp;</p>
<p>ประเมินหน่วยหน่วยจากการคำนวณ&nbsp; (&nbsp; &nbsp; &nbsp; kW, ที่ LF =&nbsp; &nbsp; &nbsp; )&nbsp; = kW*LF*๒๔*๓๐ =&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;หน่วย</p>
<p>หน่วยจากกระแส = (la+lb+lc) x ๗๐ หน่วย =&nbsp;</p>
</td>
</tr>
<tr style="height: 198px;">
<td style="width: 100%; height: 106px;">
<p>วันที่&nbsp; </u> &nbsp;เวลา&nbsp;  น. ในตัวเตอร์ วันที่ <u class="dotted">'.$date_result.'</u> เวลา <u class="dotted">'.$time_result.'</u> น. ปัจจุบันขณะตรวจสอบ คลาดเคลื่อน&nbsp; &nbsp; &nbsp;นาที</p>
<p>หลังการตรวจสอบได้ตีตราตระกั๋ว หมายเลข&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ที่ ฝาครอบ,ที่ต่อสาย และ ตู้มิเตอร์</p>
<p>สรุปผลการตรวจสอบ % error =&nbsp;&nbsp;<u class="dotted">'.$pdf_data["ERR_MT_A"].' </u> &nbsp;&nbsp;&nbsp;&Omicron; ปกติ&nbsp; &Omicron;&nbsp; ไม่ปกติ &nbsp;&nbsp;<u class="dotted">'.$pdf_data["RESULT_MT"].' </u></p>
<p>_______________________________________________________________________</p>
<table style="border-collapse: collapse; width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%; text-align: center;">
<p>ลงชื่อ........................... ผู้ตรวจสอบ</p>
<p>(....................................)</p>
</td>
<td style="width: 50%; text-align: center;">
<p>ลงชื่อ........................... ผู้ตรวจสอบ</p>
<p>( '.$pdf_data["full_name"].' </u> )  </p>
<p>'.$pdf_data["DepartmentShortName"].''.$pdf_data["Peaname"].' </p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
</td>
</tr>
</tbody>
</table>

</div>

';
$mpdf->WriteHTML($head);
$mpdf->SetTitle('แบบฟอร์มการตรวจสอบมิเตอร์ ชนิด 3 เฟส');
$mpdf->SetWatermarkText('PMAC');
$mpdf->showWatermarkText = true;
$mpdf->Output('singlephase.pdf', 'I');
$mpdf->Output();