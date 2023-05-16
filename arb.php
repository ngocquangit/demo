<?php
// 
session_start();
error_reporting(E_ALL);
clearstatcache();

$array = [
    '0x455f499892fD2B32A02c8e38e3004e08705B314b',
    '0x8c237769fE0eb56A5be9af1e436f3484B30Fe621',
    '0x9E5dC66874F025cE3c9B8005181fBC6181cCB72D',
    '0x9E484AAD0AC2aa760D82c2955A45fb82eb46F1C1',
    '0xc398B7a87dA439e1c65754A0e84F928E9CC13f80',
    '0xDa7648615eaaFd67453a010C6d1e92F1984ed473',
    '0x934A9E08cA19911996BAda7B1DF8354F69DB95E4',
    '0x430EEa266e159c86be8aa20C1193FF625a7A8F1A',
    '0x01D63f3fb89F27D648B58468129b57F55E71a395',
    '0x9733e2d1Ce3833F41f555F3F51398CFB66bb7c1A',
    '0x04d9d8bEAfFb5962c1a7272BE04814442a6e968A',
    '0x3e492cb9DE4AD725c702824C4F8F3945e41b83Fb',
	'0x1cE5DBA0441f46c3Bf5D48d8Cedb1a29dC28d4F0',
	'0x919120035889A139A66426E66eeD1e8a76245369',
	'0x53E36B81A035f015F03F558A0E868A0D0b4B98EC',
	'0xBC4334424d2754509f6eF8BA094247B4Fe968Eab',
	'0x25250327F32ba2677E355592a8e57e29b9B90641',
	'0x5739F780fb73C9340577CfC8316fc01dc8627F3f',
    '0xCCf072feA36E1Bb033d0D5b5B7ff54d2c06E0937',
    '0x3776e20f42BD6578f0eF702e7eE7eB9E18e028FE',
    '0x8F0D9f54A3F044d487c725864eebDc3A029cc554',
    '0x2b247c1e0558244Cfe5cC2aE565A6099e72d2092',
    '0x295F82aD7ea13326ff44f3Aecc854a845a1cD7Ed',
    '0x1DaE524eaEcA2d7Bd5E81896e46D7d07c7C4AaFc',
    '0x50173aE58F3586Ba0f977cdEe8D94f7F27344175',
    '0xEE0D84560ed57C05DD3c57886164d77738ea2710',
    '0x81Ae49E6f74170BaBE25cF86729907aFD7FF2E24',
    '0xe7c7AEaba12854846548182d27ac407778D25e7b',
];
while(1){
    $date = new DateTime("now", new DateTimeZone('Asia/Ho_Chi_Minh'));

    echo "bat dau " .$date->format('Y-m-d H:i:s')." \n";
    for ($i=0; $i < count($array); $i++) { 
        $get = GET('https://swaprum.finance/server/claim-free?address='.$array[$i], array("user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36"));
        echo $get;
        sleep(1);
    }
    echo "Doi 1 tieng \n";
sleep(3800);
}
// function gui yeu cau GET
function GET($url, $headers){
// khoi tao curl
$curl = curl_init();
curl_setopt_array($curl, array(
    // dat thanh false thi ket tra ve se hien thi luon o man hinh con true se thanh 1 chuoi trong bien
    
    CURLOPT_RETURNTRANSFER => true,
    //url can request toi
    CURLOPT_URL => $url,
    CURLOPT_HTTPHEADER => $headers,
    
    
    ));
    
    // tien hanh request va tra ve ket qua
    
    $response = curl_exec($curl);
    //dong curl lai
    curl_close($curl);
    // tra lai ket qua vua request dc
    return $response;
}

// ham decode json
// neu ko truyen isarray cho no thi default se la true
function jsondecode($data, $isarray = true){
return json_decode($data,$isarray);
}


//
?>