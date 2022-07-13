<?php

function base64url_encode($data)
{
    // First of all you should encode $data to Base64 string
    $b64 = base64_encode($data);

    // Make sure you get a valid result, otherwise, return FALSE, as the base64_encode() function do
    if ($b64 === false) {
        return false;
    }

    // Convert Base64 to Base64URL by replacing “+” with “-” and “/” with “_”
    $url = strtr($b64, '+/', '-_');

    // Remove padding character from the end of line and return the Base64URL result
    return rtrim($url, '=');
}

function MakeJwt($request)
{
    $header = [
        'typ' => 'JWT',
        'alg' => 'HS256'
    ];
    $header = json_encode($header);
    $header = base64_encode($header);

    $payload = $request;
    $payload = json_encode($payload);
    $payload = base64_encode($payload);

    $signature = hash_hmac('sha256', "$header.$payload", '4jud450c14l', true);
    $signature = base64url_encode($signature);

    $jwt_token = "$header.$payload.$signature";

    return $jwt_token;
}

function DateRecurrences(String $date, Int $qtd)
{
    $initial = 0;

    $date = strtotime($date);

    $year = date("Y", $date);
    $month = date("m", $date);
    $day = date("d", $date);

    for ($i = $initial; $i < $qtd; $i++) {

        if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
            if ($day == 31) {
                $date = "$year-$month-31";
            } else {
                $date = "$year-$month-$day";
            }
        } else if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
            if ($day > 30) {
                $date = "$year-$month-30";
            } else {
                $date = "$year-$month-$day";
            }
        } else if ($month == 2) {
            if ($day > 29) {
                $leap = date('L', mktime(0, 0, 0, 1, 1, $year));
                if ($leap) {
                    $date = "$year-$month-29";
                } else {
                    $date = "$year-$month-28";
                }
            } else {
                if ($day > 28) {
                    $date = "$year-$month-28";
                } else {
                    $date = "$year-$month-$day";
                }
            }
        }

        if ($month == 12) {
            $month = 0;
            $year++;
        }

        $month++;

        $dates[$i] = $date;
    }

    return $dates;
}

function except($request)
{
    if (!empty($request->query()['except']) && $request->query()['except'] == 'true') {
        //exec();
    }
}

function jwt_decode($token)
{
    $tokenParts = explode(".", $token);
    $tokenHeader = base64_decode($tokenParts[0]);
    $tokenPayload = base64_decode($tokenParts[1]);
    $jwtHeader = json_decode($tokenHeader);
    $jwtPayload = json_decode($tokenPayload);
    return $jwtPayload;
}

function concat_timestamps($text)
{
    $date = date('d-m-Y h:i:s');
    $date = str_replace("-", "", $date);
    $date = str_replace(" ", "", $date);
    $date = str_replace(":", "", $date);
    return $date . "_" . $text;
}

function concat_inverse_timestamps($text)
{
    $date = date('h:i');
    $date = str_replace("-", "", $date);
    $date = str_replace(" ", "", $date);
    $date = str_replace(":", "", $date);
    return $text . "" . $date;
}

function upload_file_to_S3($pathFile, $mimeType, $nameFile)
{
    try {

        $pathStorage = storage_path();
        $fullPath = $pathStorage . '/app/public/tmp/images/' . $pathFile;
        $curl = curl_init();

        @curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wdpll61ve0.execute-api.us-east-1.amazonaws.com/ehome/upload',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('file' => curl_file_create($fullPath, $mimeType, $nameFile)),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function new_payment_to_safe2pay($payment)
{
    try {

        $curl = curl_init();

        @curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://payment.safe2pay.com.br/v2/Payment',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                    "IsSandbox": false,
                    "Application": "ajuda.social/' . $payment->username . '",
                    "Vendor": "' . $payment->vendor . '",
                    "CallbackUrl": "https://ajuda.social/webhook/transactions/post/'.$payment->post_id.'",
                    "PaymentMethod": "' . $payment->method . '",
                    "Reference": "' . $payment->reference . '",
                    "Customer": {
                        "Name": "' . $payment->name . '",
                        "Identity": "' . $payment->cpf . '",
                        "Phone": "' . $payment->phone . '",
                        "Email": "' . $payment->email . '",
                        "Address": {
                            "ZipCode": "81010080",
                            "Street": "Rua Capitão João Zaleski",
                            "Number": "842",
                            "Complement": "",
                            "District": "Lindóia",
                            "CityName": "Curitiba",
                            "StateInitials": "PR",
                            "CountryName": "Brasil"
                        }
                    },
                    "Products": [
                        {
                            "Code": "' . $payment->id . '",
                            "Description": "Ajuda de ' . $payment->name . ' para ' . $payment->vendor . '",
                            "UnitPrice": ' . $payment->amount . ',
                            "Quantity": 1
                        }
                    ]
                }',
            CURLOPT_HTTPHEADER => array(
                'x-api-key: 2DBDCA22C9A14DB7BAB33CFEC08005F2',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
