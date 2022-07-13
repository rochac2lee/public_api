<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = array(
            [
                "id" => 1,
                "code" => "001",
                "name" => "BCO DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 2,
                "code" => "070",
                "name" => "BRB - BCO DE BRASILIA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 3,
                "code" => "007",
                "name" => "BNDES",
                "ISPB" => null
            ],
            [
                "id" => 4,
                "code" => "720",
                "name" => "BCO RNX S.A.",
                "ISPB" => null
            ],
            [
                "id" => 5,
                "code" => "136",
                "name" => "CONF NAC COOP CENTRAIS UNICRED",
                "ISPB" => null
            ],
            [
                "id" => 6,
                "code" => "104",
                "name" => "CAIXA ECONOMICA FEDERAL",
                "ISPB" => null
            ],
            [
                "id" => 7,
                "code" => "077",
                "name" => "BANCO INTER",
                "ISPB" => null
            ],
            [
                "id" => 8,
                "code" => "741",
                "name" => "BCO RIBEIRAO PRETO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 10,
                "code" => "739",
                "name" => "BCO CETELEM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 11,
                "code" => "743",
                "name" => "BANCO SEMEAR",
                "ISPB" => null
            ],
            [
                "id" => 12,
                "code" => "100",
                "name" => "PLANNER CV S.A.",
                "ISPB" => null
            ],
            [
                "id" => 13,
                "code" => "096",
                "name" => "BCO B3 S.A.",
                "ISPB" => null
            ],
            [
                "id" => 14,
                "code" => "747",
                "name" => "BCO RABOBANK INTL BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 15,
                "code" => "748",
                "name" => "BCO COOPERATIVO SICREDI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 16,
                "code" => "752",
                "name" => "BCO BNP PARIBAS BRASIL S A",
                "ISPB" => null
            ],
            [
                "id" => 17,
                "code" => "091",
                "name" => "CCCM UNICRED CENTRAL RS",
                "ISPB" => null
            ],
            [
                "id" => 19,
                "code" => "108",
                "name" => "PORTOCRED S.A.",
                "ISPB" => null
            ],
            [
                "id" => 20,
                "code" => "756",
                "name" => "BANCO SICOOB S.A.",
                "ISPB" => null
            ],
            [
                "id" => 21,
                "code" => "757",
                "name" => "BCO KEB HANA DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 22,
                "code" => "102",
                "name" => "XP INVESTIMENTOS CCTVM SA",
                "ISPB" => null
            ],
            [
                "id" => 23,
                "code" => "084",
                "name" => "UNIPRIME NORTE DO PARANÁ CC",
                "ISPB" => null
            ],
            [
                "id" => 24,
                "code" => "180",
                "name" => "CM CAPITAL MARKETS CCTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 25,
                "code" => "066",
                "name" => "BCO MORGAN STANLEY S.A.",
                "ISPB" => null
            ],
            [
                "id" => 26,
                "code" => "015",
                "name" => "UBS BRASIL CCTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 27,
                "code" => "143",
                "name" => "TREVISO CC S.A.",
                "ISPB" => null
            ],
            [
                "id" => 28,
                "code" => "062",
                "name" => "HIPERCARD BM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 29,
                "code" => "074",
                "name" => "BCO. J.SAFRA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 30,
                "code" => "099",
                "name" => "UNIPRIME CENTRAL CCC LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 31,
                "code" => "025",
                "name" => "BCO ALFA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 32,
                "code" => "075",
                "name" => "BCO ABN AMRO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 33,
                "code" => "040",
                "name" => "BCO CARGILL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 34,
                "code" => "190",
                "name" => "SERVICOOP",
                "ISPB" => null
            ],
            [
                "id" => 35,
                "code" => "063",
                "name" => "BANCO BRADESCARD",
                "ISPB" => null
            ],
            [
                "id" => 37,
                "code" => "191",
                "name" => "NOVA FUTURA CTVM LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 38,
                "code" => "064",
                "name" => "GOLDMAN SACHS DO BRASIL BM S.A",
                "ISPB" => null
            ],
            [
                "id" => 39,
                "code" => "097",
                "name" => "CREDISIS CENTRAL DE COOPERATIVAS DE CRÉDITO LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 40,
                "code" => "016",
                "name" => "CCM DESP TRÂNS SC E RS",
                "ISPB" => null
            ],
            [
                "id" => 41,
                "code" => "012",
                "name" => "BANCO INBURSA",
                "ISPB" => null
            ],
            [
                "id" => 42,
                "code" => "003",
                "name" => "BCO DA AMAZONIA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 43,
                "code" => "060",
                "name" => "CONFIDENCE CC S.A.",
                "ISPB" => null
            ],
            [
                "id" => 44,
                "code" => "037",
                "name" => "BCO DO EST. DO PA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 45,
                "code" => "159",
                "name" => "CASA CREDITO S.A. SCM",
                "ISPB" => null
            ],
            [
                "id" => 47,
                "code" => "085",
                "name" => "COOP CENTRAL AILOS",
                "ISPB" => null
            ],
            [
                "id" => 48,
                "code" => "114",
                "name" => "CENTRAL COOPERATIVA DE CRÉDITO NO ESTADO DO ESPÍRITO SANTO",
                "ISPB" => null
            ],
            [
                "id" => 49,
                "code" => "036",
                "name" => "BCO BBI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 50,
                "code" => "394",
                "name" => "BCO BRADESCO FINANC. S.A.",
                "ISPB" => null
            ],
            [
                "id" => 51,
                "code" => "004",
                "name" => "BCO DO NORDESTE DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 52,
                "code" => "320",
                "name" => "BCO CCB BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 53,
                "code" => "189",
                "name" => "HS FINANCEIRA",
                "ISPB" => null
            ],
            [
                "id" => 54,
                "code" => "105",
                "name" => "LECCA CFI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 55,
                "code" => "076",
                "name" => "BCO KDB BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 56,
                "code" => "082",
                "name" => "BANCO TOPÁZIO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 57,
                "code" => "093",
                "name" => "POLOCRED SCMEPP LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 58,
                "code" => "273",
                "name" => "CCR DE SÃO MIGUEL DO OESTE",
                "ISPB" => null
            ],
            [
                "id" => 59,
                "code" => "157",
                "name" => "ICAP DO BRASIL CTVM LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 60,
                "code" => "183",
                "name" => "SOCRED SA",
                "ISPB" => null
            ],
            [
                "id" => 61,
                "code" => "014",
                "name" => "STATE STREET BR S.A. BCO COMERCIAL",
                "ISPB" => null
            ],
            [
                "id" => 62,
                "code" => "130",
                "name" => "CARUANA SCFI",
                "ISPB" => null
            ],
            [
                "id" => 64,
                "code" => "127",
                "name" => "CODEPE CVC S.A.",
                "ISPB" => null
            ],
            [
                "id" => 65,
                "code" => "079",
                "name" => "BCO ORIGINAL DO AGRO SA",
                "ISPB" => null
            ],
            [
                "id" => 66,
                "code" => "081",
                "name" => "BANCOSEGURO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 67,
                "code" => "133",
                "name" => "CRESOL CONFEDERAÇÃO",
                "ISPB" => null
            ],
            [
                "id" => 68,
                "code" => "121",
                "name" => "BCO AGIBANK S.A.",
                "ISPB" => null
            ],
            [
                "id" => 69,
                "code" => "083",
                "name" => "BCO DA CHINA BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 70,
                "code" => "138",
                "name" => "GET MONEY CC LTDA",
                "ISPB" => null
            ],
            [
                "id" => 71,
                "code" => "024",
                "name" => "BCO BANDEPE S.A.",
                "ISPB" => null
            ],
            [
                "id" => 72,
                "code" => "088",
                "name" => "BANCO RANDON S.A.",
                "ISPB" => null
            ],
            [
                "id" => 73,
                "code" => "095",
                "name" => "TRAVELEX BANCO DE CÂMBIO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 74,
                "code" => "094",
                "name" => "BANCO FINAXIS",
                "ISPB" => null
            ],
            [
                "id" => 76,
                "code" => "276",
                "name" => "BCO SENFF S.A.",
                "ISPB" => null
            ],
            [
                "id" => 78,
                "code" => "092",
                "name" => "BRK S.A. CFI",
                "ISPB" => null
            ],
            [
                "id" => 79,
                "code" => "047",
                "name" => "BCO DO EST. DE SE S.A.",
                "ISPB" => null
            ],
            [
                "id" => 80,
                "code" => "144",
                "name" => "BEXS BCO DE CAMBIO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 81,
                "code" => "126",
                "name" => "BR PARTNERS BI",
                "ISPB" => null
            ],
            [
                "id" => 82,
                "code" => "173",
                "name" => "BRL TRUST DTVM SA",
                "ISPB" => null
            ],
            [
                "id" => 83,
                "code" => "119",
                "name" => "BCO WESTERN UNION",
                "ISPB" => null
            ],
            [
                "id" => 84,
                "code" => "254",
                "name" => "PARANA BCO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 85,
                "code" => "268",
                "name" => "BARI CIA HIPOTECÁRIA",
                "ISPB" => null
            ],
            [
                "id" => 86,
                "code" => "107",
                "name" => "BCO BOCOM BBM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 87,
                "code" => "412",
                "name" => "BCO CAPITAL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 88,
                "code" => "124",
                "name" => "BCO WOORI BANK DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 89,
                "code" => "149",
                "name" => "FACTA S.A. CFI",
                "ISPB" => null
            ],
            [
                "id" => 90,
                "code" => "197",
                "name" => "STONE PAGAMENTOS S.A.",
                "ISPB" => null
            ],
            [
                "id" => 91,
                "code" => "142",
                "name" => "BROKER BRASIL CC LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 92,
                "code" => "389",
                "name" => "BCO MERCANTIL DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 93,
                "code" => "184",
                "name" => "BCO ITAÚ BBA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 94,
                "code" => "634",
                "name" => "BCO TRIANGULO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 95,
                "code" => "545",
                "name" => "SENSO CCVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 96,
                "code" => "132",
                "name" => "ICBC DO BRASIL BM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 97,
                "code" => "260",
                "name" => "NU PAGAMENTOS S.A.",
                "ISPB" => null
            ],
            [
                "id" => 98,
                "code" => "129",
                "name" => "UBS BRASIL BI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 99,
                "code" => "128",
                "name" => "MS BANK S.A. BCO DE CÂMBIO",
                "ISPB" => null
            ],
            [
                "id" => 100,
                "code" => "194",
                "name" => "PARMETAL DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 101,
                "code" => "163",
                "name" => "COMMERZBANK BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 102,
                "code" => "280",
                "name" => "WILL FINANCEIRA S.A.CFI",
                "ISPB" => null
            ],
            [
                "id" => 103,
                "code" => "146",
                "name" => "GUITTA CC LTDA",
                "ISPB" => null
            ],
            [
                "id" => 104,
                "code" => "279",
                "name" => "CCR DE PRIMAVERA DO LESTE",
                "ISPB" => null
            ],
            [
                "id" => 106,
                "code" => "272",
                "name" => "AGK CC S.A.",
                "ISPB" => null
            ],
            [
                "id" => 107,
                "code" => "271",
                "name" => "IB CCTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 108,
                "code" => "021",
                "name" => "BCO BANESTES S.A.",
                "ISPB" => null
            ],
            [
                "id" => 109,
                "code" => "246",
                "name" => "BCO ABC BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 111,
                "code" => "751",
                "name" => "SCOTIABANK BRASIL",
                "ISPB" => null
            ],
            [
                "id" => 112,
                "code" => "208",
                "name" => "BANCO BTG PACTUAL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 113,
                "code" => "746",
                "name" => "BCO MODAL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 114,
                "code" => "241",
                "name" => "BCO CLASSICO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 115,
                "code" => "612",
                "name" => "BCO GUANABARA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 116,
                "code" => "604",
                "name" => "BCO INDUSTRIAL DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 117,
                "code" => "505",
                "name" => "BCO CREDIT SUISSE S.A.",
                "ISPB" => null
            ],
            [
                "id" => 118,
                "code" => "196",
                "name" => "FAIR CC S.A.",
                "ISPB" => null
            ],
            [
                "id" => 119,
                "code" => "300",
                "name" => "BCO LA NACION ARGENTINA",
                "ISPB" => null
            ],
            [
                "id" => 120,
                "code" => "477",
                "name" => "CITIBANK N.A.",
                "ISPB" => null
            ],
            [
                "id" => 121,
                "code" => "266",
                "name" => "BCO CEDULA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 122,
                "code" => "122",
                "name" => "BCO BRADESCO BERJ S.A.",
                "ISPB" => null
            ],
            [
                "id" => 123,
                "code" => "376",
                "name" => "BCO J.P. MORGAN S.A.",
                "ISPB" => null
            ],
            [
                "id" => 125,
                "code" => "473",
                "name" => "BCO CAIXA GERAL BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 126,
                "code" => "745",
                "name" => "BCO CITIBANK S.A.",
                "ISPB" => null
            ],
            [
                "id" => 128,
                "code" => "120",
                "name" => "BCO RODOBENS S.A.",
                "ISPB" => null
            ],
            [
                "id" => 129,
                "code" => "265",
                "name" => "BCO FATOR S.A.",
                "ISPB" => null
            ],
            [
                "id" => 131,
                "code" => "188",
                "name" => "ATIVA S.A. INVESTIMENTOS CCTVM",
                "ISPB" => null
            ],
            [
                "id" => 132,
                "code" => "134",
                "name" => "BGC LIQUIDEZ DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 135,
                "code" => "029",
                "name" => "BANCO ITAÚ CONSIGNADO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 136,
                "code" => "243",
                "name" => "BCO MÁXIMA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 137,
                "code" => "078",
                "name" => "HAITONG BI DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 138,
                "code" => "111",
                "name" => "OLIVEIRA TRUST DTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 139,
                "code" => "017",
                "name" => "BNY MELLON BCO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 141,
                "code" => "174",
                "name" => "PEFISA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 142,
                "code" => "495",
                "name" => "BCO LA PROVINCIA B AIRES BCE",
                "ISPB" => null
            ],
            [
                "id" => 143,
                "code" => "125",
                "name" => "BANCO GENIAL",
                "ISPB" => null
            ],
            [
                "id" => 144,
                "code" => "488",
                "name" => "JPMORGAN CHASE BANK",
                "ISPB" => null
            ],
            [
                "id" => 145,
                "code" => "065",
                "name" => "BCO ANDBANK S.A.",
                "ISPB" => null
            ],
            [
                "id" => 146,
                "code" => "492",
                "name" => "ING BANK N.V.",
                "ISPB" => null
            ],
            [
                "id" => 147,
                "code" => "145",
                "name" => "LEVYCAM CCV LTDA",
                "ISPB" => null
            ],
            [
                "id" => 148,
                "code" => "250",
                "name" => "BCV - BCO, CRÉDITO E VAREJO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 150,
                "code" => "253",
                "name" => "BEXS CC S.A.",
                "ISPB" => null
            ],
            [
                "id" => 151,
                "code" => "269",
                "name" => "BCO HSBC S.A.",
                "ISPB" => null
            ],
            [
                "id" => 152,
                "code" => "213",
                "name" => "BCO ARBI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 153,
                "code" => "139",
                "name" => "INTESA SANPAOLO BRASIL S.A. BM",
                "ISPB" => null
            ],
            [
                "id" => 154,
                "code" => "018",
                "name" => "BCO TRICURY S.A.",
                "ISPB" => null
            ],
            [
                "id" => 155,
                "code" => "422",
                "name" => "BCO SAFRA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 156,
                "code" => "630",
                "name" => "SMARTBANK",
                "ISPB" => null
            ],
            [
                "id" => 157,
                "code" => "224",
                "name" => "BCO FIBRA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 158,
                "code" => "600",
                "name" => "BCO LUSO BRASILEIRO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 159,
                "code" => "623",
                "name" => "BANCO PAN",
                "ISPB" => null
            ],
            [
                "id" => 161,
                "code" => "655",
                "name" => "BCO VOTORANTIM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 162,
                "code" => "479",
                "name" => "BCO ITAUBANK S.A.",
                "ISPB" => null
            ],
            [
                "id" => 163,
                "code" => "456",
                "name" => "BCO MUFG BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 164,
                "code" => "464",
                "name" => "BCO SUMITOMO MITSUI BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 165,
                "code" => "341",
                "name" => "ITAÚ UNIBANCO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 166,
                "code" => "237",
                "name" => "BCO BRADESCO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 167,
                "code" => "613",
                "name" => "OMNI BANCO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 168,
                "code" => "652",
                "name" => "ITAÚ UNIBANCO HOLDING S.A.",
                "ISPB" => null
            ],
            [
                "id" => 169,
                "code" => "637",
                "name" => "BCO SOFISA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 170,
                "code" => "653",
                "name" => "BCO INDUSVAL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 171,
                "code" => "069",
                "name" => "BCO CREFISA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 173,
                "code" => "370",
                "name" => "BCO MIZUHO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 175,
                "code" => "249",
                "name" => "BANCO INVESTCRED UNIBANCO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 176,
                "code" => "318",
                "name" => "BCO BMG S.A.",
                "ISPB" => null
            ],
            [
                "id" => 178,
                "code" => "626",
                "name" => "BCO C6 CONSIG",
                "ISPB" => null
            ],
            [
                "id" => 179,
                "code" => "366",
                "name" => "BCO SOCIETE GENERALE BRASIL",
                "ISPB" => null
            ],
            [
                "id" => 180,
                "code" => "113",
                "name" => "MAGLIANO S.A. CCVM",
                "ISPB" => null
            ],
            [
                "id" => 181,
                "code" => "131",
                "name" => "TULLETT PREBON BRASIL CVC LTDA",
                "ISPB" => null
            ],
            [
                "id" => 182,
                "code" => "011",
                "name" => "C.SUISSE HEDGING-GRIFFO CV SA",
                "ISPB" => null
            ],
            [
                "id" => 183,
                "code" => "611",
                "name" => "BCO PAULISTA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 184,
                "code" => "755",
                "name" => "BOFA MERRILL LYNCH BM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 185,
                "code" => "089",
                "name" => "CREDISAN CC",
                "ISPB" => null
            ],
            [
                "id" => 186,
                "code" => "643",
                "name" => "BCO PINE S.A.",
                "ISPB" => null
            ],
            [
                "id" => 187,
                "code" => "140",
                "name" => "EASYNVESTSA",
                "ISPB" => null
            ],
            [
                "id" => 188,
                "code" => "707",
                "name" => "BCO DAYCOVAL S.A",
                "ISPB" => null
            ],
            [
                "id" => 189,
                "code" => "101",
                "name" => "RENASCENCA DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 190,
                "code" => "487",
                "name" => "DEUTSCHE BANK S.A.BCO ALEMAO",
                "ISPB" => null
            ],
            [
                "id" => 191,
                "code" => "233",
                "name" => "BANCO CIFRA",
                "ISPB" => null
            ],
            [
                "id" => 192,
                "code" => "177",
                "name" => "GUIDE",
                "ISPB" => null
            ],
            [
                "id" => 193,
                "code" => "633",
                "name" => "BCO RENDIMENTO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 194,
                "code" => "218",
                "name" => "BCO BS2 S.A.",
                "ISPB" => null
            ],
            [
                "id" => 197,
                "code" => "080",
                "name" => "B&T CC LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 198,
                "code" => "753",
                "name" => "NOVO BCO CONTINENTAL SA",
                "ISPB" => null
            ],
            [
                "id" => 199,
                "code" => "222",
                "name" => "BCO CRÉDIT AGRICOLE BR S.A.",
                "ISPB" => null
            ],
            [
                "id" => 200,
                "code" => "754",
                "name" => "BANCO SISTEMA",
                "ISPB" => null
            ],
            [
                "id" => 201,
                "code" => "098",
                "name" => "CREDIALIANÇA CCR",
                "ISPB" => null
            ],
            [
                "id" => 202,
                "code" => "610",
                "name" => "BCO VR S.A.",
                "ISPB" => null
            ],
            [
                "id" => 203,
                "code" => "712",
                "name" => "BCO OURINVEST S.A.",
                "ISPB" => null
            ],
            [
                "id" => 204,
                "code" => "010",
                "name" => "CREDICOAMO",
                "ISPB" => null
            ],
            [
                "id" => 205,
                "code" => "033",
                "name" => "BCO SANTANDER (BRASIL) S.A.",
                "ISPB" => null
            ],
            [
                "id" => 206,
                "code" => "217",
                "name" => "BANCO JOHN DEERE S.A.",
                "ISPB" => null
            ],
            [
                "id" => 207,
                "code" => "041",
                "name" => "BCO DO ESTADO DO RS S.A.",
                "ISPB" => null
            ],
            [
                "id" => 208,
                "code" => "117",
                "name" => "ADVANCED CC LTDA",
                "ISPB" => null
            ],
            [
                "id" => 209,
                "code" => "654",
                "name" => "BCO DIGIMAIS S.A.",
                "ISPB" => null
            ],
            [
                "id" => 210,
                "code" => "212",
                "name" => "BANCO ORIGINAL",
                "ISPB" => null
            ],
            [
                "id" => 211,
                "code" => "336",
                "name" => "BCO C6 S.A.",
                "ISPB" => null
            ],
            [
                "id" => 212,
                "code" => "290",
                "name" => "PAGSEGURO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 213,
                "code" => "301",
                "name" => "BPP IP S.A.",
                "ISPB" => null
            ],
            [
                "id" => 215,
                "code" => "364",
                "name" => "GERENCIANET",
                "ISPB" => null
            ],
            [
                "id" => 217,
                "code" => "323",
                "name" => "MERCADO PAGO",
                "ISPB" => null
            ],
            [
                "id" => 225,
                "code" => "330",
                "name" => "BANCO BARI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 231,
                "code" => "362",
                "name" => "CIELO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 232,
                "code" => "322",
                "name" => "CCR DE ABELARDO LUZ",
                "ISPB" => null
            ],
            [
                "id" => 234,
                "code" => "350",
                "name" => "CREHNOR LARANJEIRAS",
                "ISPB" => null
            ],
            [
                "id" => 240,
                "code" => "360",
                "name" => "TRINUS CAPITAL DTVM",
                "ISPB" => null
            ],
            [
                "id" => 251,
                "code" => "387",
                "name" => "BCO TOYOTA DO BRASIL S.A.",
                "ISPB" => null
            ],
            [
                "id" => 252,
                "code" => "326",
                "name" => "PARATI CFI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 254,
                "code" => "315",
                "name" => "PI DTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 257,
                "code" => "307",
                "name" => "TERRA INVESTIMENTOS DTVM",
                "ISPB" => null
            ],
            [
                "id" => 259,
                "code" => "296",
                "name" => "VISION S.A. CC",
                "ISPB" => null
            ],
            [
                "id" => 262,
                "code" => "382",
                "name" => "FIDUCIA SCMEPP LTDA",
                "ISPB" => null
            ],
            [
                "id" => 266,
                "code" => "299",
                "name" => "BCO SOROCRED S.A.",
                "ISPB" => null
            ],
            [
                "id" => 271,
                "code" => "359",
                "name" => "ZEMA CFI SA",
                "ISPB" => null
            ],
            [
                "id" => 283,
                "code" => "286",
                "name" => "CCR DE OURO",
                "ISPB" => null
            ],
            [
                "id" => 285,
                "code" => "391",
                "name" => "CCR DE IBIAM",
                "ISPB" => null
            ],
            [
                "id" => 287,
                "code" => "368",
                "name" => "BCO CSF S.A.",
                "ISPB" => null
            ],
            [
                "id" => 289,
                "code" => "259",
                "name" => "MONEYCORP BCO DE CÂMBIO S.A.",
                "ISPB" => null
            ],
            [
                "id" => 297,
                "code" => "340",
                "name" => "SUPER PAGAMENTOS E ADMINISTRACAO DE MEIOS ELETRONICOS S.A.",
                "ISPB" => null
            ],
            [
                "id" => 306,
                "code" => "319",
                "name" => "OM DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 307,
                "code" => "274",
                "name" => "MONEY PLUS SCMEPP LTDA",
                "ISPB" => null
            ],
            [
                "id" => 314,
                "code" => "332",
                "name" => "ACESSO SOLUCOES PAGAMENTO SA",
                "ISPB" => null
            ],
            [
                "id" => 316,
                "code" => "325",
                "name" => "ÓRAMA DTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 319,
                "code" => "331",
                "name" => "FRAM CAPITAL DTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 321,
                "code" => "309",
                "name" => "CAMBIONET CC LTDA",
                "ISPB" => null
            ],
            [
                "id" => 335,
                "code" => "298",
                "name" => "VIPS CC LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 336,
                "code" => "321",
                "name" => "CREFAZ SCMEPP LTDA",
                "ISPB" => null
            ],
            [
                "id" => 341,
                "code" => "383",
                "name" => "JUNO",
                "ISPB" => null
            ],
            [
                "id" => 342,
                "code" => "310",
                "name" => "VORTX DTVM LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 346,
                "code" => "343",
                "name" => "FFA SCMEPP LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 348,
                "code" => "335",
                "name" => "BANCO DIGIO",
                "ISPB" => null
            ],
            [
                "id" => 349,
                "code" => "349",
                "name" => "AL5 S.A. CFI",
                "ISPB" => null
            ],
            [
                "id" => 350,
                "code" => "278",
                "name" => "GENIAL INVESTIMENTOS CVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 354,
                "code" => "292",
                "name" => "BS2 DTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 356,
                "code" => "352",
                "name" => "TORO CTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 364,
                "code" => "329",
                "name" => "QI SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 366,
                "code" => "342",
                "name" => "CREDITAS SCD",
                "ISPB" => null
            ],
            [
                "id" => 372,
                "code" => "348",
                "name" => "BCO XP S.A.",
                "ISPB" => null
            ],
            [
                "id" => 383,
                "code" => "355",
                "name" => "ÓTIMO SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 384,
                "code" => "367",
                "name" => "VITREO DTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 385,
                "code" => "373",
                "name" => "UP.P SEP S.A.",
                "ISPB" => null
            ],
            [
                "id" => 387,
                "code" => "306",
                "name" => "PORTOPAR DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 397,
                "code" => "354",
                "name" => "NECTON INVESTIMENTOS S.A CVM",
                "ISPB" => null
            ],
            [
                "id" => 407,
                "code" => "390",
                "name" => "BCO GM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 415,
                "code" => "381",
                "name" => "BCO MERCEDES-BENZ S.A.",
                "ISPB" => null
            ],
            [
                "id" => 425,
                "code" => "270",
                "name" => "SAGITUR CC LTDA",
                "ISPB" => null
            ],
            [
                "id" => 436,
                "code" => "288",
                "name" => "CAROL DTVM LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 437,
                "code" => "363",
                "name" => "SINGULARE CTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 442,
                "code" => "365",
                "name" => "SIMPAUL",
                "ISPB" => null
            ],
            [
                "id" => 446,
                "code" => "293",
                "name" => "LASTRO RDV DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 447,
                "code" => "285",
                "name" => "FRENTE CC LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 451,
                "code" => "281",
                "name" => "CCR COOPAVEL",
                "ISPB" => null
            ],
            [
                "id" => 457,
                "code" => "283",
                "name" => "RB INVESTIMENTOS DTVM LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 463,
                "code" => "371",
                "name" => "WARREN CVMC LTDA",
                "ISPB" => null
            ],
            [
                "id" => 465,
                "code" => "289",
                "name" => "DECYSEO CC LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 485,
                "code" => "379",
                "name" => "CECM COOPERFORTE",
                "ISPB" => null
            ],
            [
                "id" => 488,
                "code" => "378",
                "name" => "BBC LEASING",
                "ISPB" => null
            ],
            [
                "id" => 555,
                "code" => "384",
                "name" => "GLOBAL SCM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 572,
                "code" => "396",
                "name" => "HUB PAGAMENTOS",
                "ISPB" => null
            ],
            [
                "id" => 581,
                "code" => "313",
                "name" => "AMAZÔNIA CC LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 589,
                "code" => "377",
                "name" => "BMS SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 596,
                "code" => "324",
                "name" => "CARTOS SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 605,
                "code" => "374",
                "name" => "REALIZE CFI S.A.",
                "ISPB" => null
            ],
            [
                "id" => 643,
                "code" => "403",
                "name" => "CORA SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 663,
                "code" => "393",
                "name" => "BCO VOLKSWAGEN S.A",
                "ISPB" => null
            ],
            [
                "id" => 724,
                "code" => "380",
                "name" => "PICPAY SERVICOS SA",
                "ISPB" => null
            ],
            [
                "id" => 725,
                "code" => "311",
                "name" => "DOURADA CORRETORA",
                "ISPB" => null
            ],
            [
                "id" => 726,
                "code" => "312",
                "name" => "HSCM SCMEPP LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 727,
                "code" => "328",
                "name" => "CECM FABRIC CALÇADOS SAPIRANGA",
                "ISPB" => null
            ],
            [
                "id" => 728,
                "code" => "358",
                "name" => "MIDWAY S.A.",
                "ISPB" => null
            ],
            [
                "id" => 729,
                "code" => "386",
                "name" => "NU FINANCEIRA S.A. CFI",
                "ISPB" => null
            ],
            [
                "id" => 730,
                "code" => "395",
                "name" => "F D GOLD DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 731,
                "code" => "397",
                "name" => "LISTO SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 732,
                "code" => "398",
                "name" => "IDEAL CTVM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 733,
                "code" => "399",
                "name" => "KIRTON BANK",
                "ISPB" => null
            ],
            [
                "id" => 734,
                "code" => "400",
                "name" => "CC POUP SER FIN CO",
                "ISPB" => null
            ],
            [
                "id" => 735,
                "code" => "401",
                "name" => "IUGU SERVICOS NA INTERNET SA",
                "ISPB" => null
            ],
            [
                "id" => 736,
                "code" => "402",
                "name" => "COBUCCIO SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 737,
                "code" => "404",
                "name" => "SUMUP SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 738,
                "code" => "406",
                "name" => "ACCREDITO SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 739,
                "code" => "407",
                "name" => "ÍNDIGO INVESTIMENTOS DTVM LTDA.",
                "ISPB" => null
            ],
            [
                "id" => 740,
                "code" => "408",
                "name" => "BONUSPAGO SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 741,
                "code" => "410",
                "name" => "PLANNER SCM S.A.",
                "ISPB" => null
            ],
            [
                "id" => 742,
                "code" => "411",
                "name" => "VIA CERTA FINANCIADORA S.A.",
                "ISPB" => null
            ],
            [
                "id" => 743,
                "code" => "413",
                "name" => "BCO BV S.A.",
                "ISPB" => null
            ],
            [
                "id" => 744,
                "code" => "414",
                "name" => "WORK SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 745,
                "code" => "416",
                "name" => "LAMARA SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 746,
                "code" => "419",
                "name" => "NUMBRS SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 747,
                "code" => "426",
                "name" => "BIORC FINANCEIRA",
                "ISPB" => null
            ],
            [
                "id" => 748,
                "code" => "427",
                "name" => "CRED-UFES",
                "ISPB" => null
            ],
            [
                "id" => 749,
                "code" => "428",
                "name" => "CRED-SYSTEM SCD S.A.",
                "ISPB" => null
            ],
            [
                "id" => 750,
                "code" => "438",
                "name" => "PLANNER TRUSTEE DTVM LTDA",
                "ISPB" => null
            ],
            [
                "id" => 751,
                "code" => "461",
                "name" => "ASAAS IP S.A.",
                "ISPB" => null
            ]
        );

        DB::table('banks')->insert($banks);
    }
}
