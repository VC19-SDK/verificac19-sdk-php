<?php
namespace Herald\GreenPass;

class GPDataTest
{

    public static $qrcode_certificate_valid_but_revoked = 'HC1:6BFOXN%TSMAHN-H3YS1IK47ES6IXJR4E47X5*T917VF+UOGIS1RYZV:X9:IMJZTCV4*XUA2PSGH.+H$NI4L6HUC%UG/YL WO*Z7ON13:LHNG7H8H%BFP8FG4T 9OKGUXI$NIUZUK*RIMI4UUIMI.J9WVHWVH+ZEOV1AT1HRI2UHD4TR/S09T./08H0AT1EYHEQMIE9WT0K3M9UVZSVV*001HW%8UE9.955B9-NT0 2$$0X4PCY0+-CVYCRMTB*05*9O%0HJP7NVDEBO584DKH78$ZJ*DJWP42W5P0QMO6C8PL353X7H1RU0P48PCA7T5MCH5:ZJ::AKU2UM97H98$QP3R8BH9LV3*O-+DV8QJHHY4I4GWU-LU7T9.V+ T%UNUWUG+M.1KG%VWE94%ALU47$71MFZJU*HFW.6$X50*MSYOJT1MR96/1Z%FV3O-0RW/Q.GMCQS%NE';

    public static $qrcode_new_zeland_gp = 'NZCP:/1/2KCEVIQEIVVWK6JNGEASNICZAEP2KALYDZSGSZB2O5SWEOTOPJRXALTDN53GSZBRHEXGQZLBNR2GQLTOPICRUYMBTIFAIGTUKBAAUYTWMOSGQQDDN5XHIZLYOSBHQJTIOR2HA4Z2F4XXO53XFZ3TGLTPOJTS6MRQGE4C6Y3SMVSGK3TUNFQWY4ZPOYYXQKTIOR2HA4Z2F4XW46TDOAXGG33WNFSDCOJONBSWC3DUNAXG46RPMNXW45DFPB2HGL3WGFTXMZLSONUW63TFGEXDALRQMR2HS4DFQJ2FMZLSNFTGSYLCNRSUG4TFMRSW45DJMFWG6UDVMJWGSY2DN53GSZCQMFZXG4LDOJSWIZLOORUWC3CTOVRGUZLDOSRWSZ3JOZSW4TTBNVSWISTBMNVWUZTBNVUWY6KOMFWWKZ2TOBQXE4TPO5RWI33CNIYTSNRQFUYDILJRGYDVAYFE6VGU4MCDGK7DHLLYWHVPUS2YIDJOA6Y524TD3AZRM263WTY2BE4DPKIF27WKF3UDNNVSVWRDYIYVJ65IRJJJ6Z25M2DO4YZLBHWFQGVQR5ZLIWEQJOZTS3IQ7JTNCFDX';

    public static $qrcode_de_test_kid_invalid = 'HC1:NCFOXNEG2NBJ5*H:QO-.O9B3QZ8Y*M9WL7LG4/8+W4VGAXOE4+4J59BZ6%-OD 4YQFPF6R:5SVBWVBDKBYLDR4DF4D$ZJ*DJWP42W5J3U4OG7.R7%NC.UPTUD*Q9RK7RMEN4CD1B+K8AV2PTO*N--T0SFXZQ H9RQGX-FO2WYZQ2J95J02O8..V$T7%$D4J8$T7T$7YNGHM4PRAAUICO1DV59UE6Q1M650 LHZA0D9E2LBHHGKLO-K%FGLIA5D8MJKQJK JMDJL9GG.IA.C8KRDL4O54O4IGUJKJGI.IAHLCV5GVWNZIKXGG JMLII7EDTG91PC3DE0OARH9W/IO6AHCRTWA4EQN95N14Z+HP+POC1.AO5PIZ.VTZOSV0I+QWZJHN1ZBQR*MTNK EM5MGPI5A-M8F7AJOZNV9JHKIJYE9*FJ+UVAZ8-.A2*CEHJ5$0O/A%4SL/IG%8R.9Z6TG0MW%8N*48-930J7*4E%2L+9N2LY2Q%%2G0M172ZUJYBW897MJM5DB0J4XETW8PX+KN4K.-V:3WROR$04.7E93Q6VUE$TO%R$:3HUCQZ6D8OG2B:%A6-I8PJ8%VKYOU1Q96E01MRKUU2G730F%2H2';

    public static $vaccine = Array(
        "v" => Array(
            "0" => Array(
                "dn" => '2',
                "ma" => 'ORG-100031184',
                "vp" => '1119349007',
                "dt" => '2021-08-13',
                "co" => 'IT',
                "ci" => 'FAKEID#0',
                "mp" => 'EU/1/20/1507',
                "is" => 'Ministero della Salute',
                "sd" => '2',
                "tg" => '840539006'
            )
        ),
        "nam" => Array(
            "fnt" => 'UTENTE',
            "fn" => 'UTENTE',
            "gnt" => 'TEST',
            "gn" => 'TEST'
        ),
        "ver" => "1.0.0",
        "dob" => "1999-12-12"
    );

    public static $testresult = Array(
        "t" => Array(
            "0" => Array(
                "sc" => "2021-10-13T18:45:00+02:00",
                "ma" => "1324",
                "tt" => "LP217198-3",
                "co" => "IT",
                "tc" => "PROVA SNC",
                "ci" => "TESTIDFAKE#2",
                "is" => "Ministero della Salute",
                "tg" => "840539006",
                "tr" => "260415000"
            )
        ),
        "nam" => Array(
            "fnt" => 'UTENTE',
            "fn" => 'UTENTE',
            "gnt" => 'TEST',
            "gn" => 'TEST'
        ),
        "ver" => "1.0.0",
        "dob" => "1999-12-12"
    );

    public static $recovery = Array(
        "r" => Array(
            "0" => Array(
                "fr" => "2021-01-13",
                "df" => "2021-01-13",
                "du" => "2021-12-13",
                "co" => "IT",
                "ci" => "TESTIDFAKERECOVERY#2",
                "is" => "Ministero della Salute",
                "tg" => "840539006"
            )
        ),
        "nam" => Array(
            "fnt" => 'UTENTE',
            "fn" => 'UTENTE',
            "gnt" => 'TEST',
            "gn" => 'TEST'
        ),
        "ver" => "1.0.0",
        "dob" => "1999-12-12"
    );
}