<html lang="en">
<head>
    <style type='text/css'>
        body, html {
            margin: 0;
            padding: 0;
        }
        body {
            padding: 30px;
            background: linear-gradient(270deg, #000000 -100%, #272927 100%);
            display: table;
            font-family: Open Sans, sans-serif;
            color: #ffffff;
            text-align: center;
        }
        .container {
            border: 5px solid #DBA514;
            width: 842px;
            height: 595px;
            display: inline-block;
            vertical-align: middle;
        }
        .logo {
            margin-top: 26px;
        }
        .marquee {
            margin-top: 32px;
            font-family: Libre Baskerville;
            font-size: 64px;
            line-height: 60px;
            background: -webkit-linear-gradient( #FCC201 20%, #EEB609 40%, #DBA514 60%, #C69320 80%, #B78628 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .number {
            margin-top: 8px;
            width: fit-content;
            display: inline-table;
            padding: 0 20px;
            background: linear-gradient(90deg, #ADA996 0%, #F2F2F2 33.33%, #DBDBDB 66.67%, #EAEAEA 100%);
            border-radius: 100px;
        }
        .number .text {
            font-size: 18px;
            font-weight: 600;
            color: #272927;
            line-height: 25px;
        }
        .assignment {
            margin-top: 16px;
            font-size: 18px;
            line-height: 25px;
        }
        .name {
            font-size: 36px;
            font-weight: bold;
        }
        .as-label {
            font-size: 18px;
            line-height: 25px;
        }
        .as {
            margin-top: 4px;
            font-size: 24px;
            line-height: 33px;
            font-weight: bold;
        }
        .reason {
            margin-top: 12px;
            line-height: 19px;
            font-size: 14px;
            font-weight: normal;
        }
        .reason span {
            font-style: italic;
        }
        .pic {
            margin-top: 128px;
            font-size: 12px;
            font-weight: 600;
        }
        .pic-job {
            font-size: 12px;
            font-weight: 300;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="{{ asset('assets/img/logo.svg') }}" alt="">
    </div>

    <div class="marquee">
        Sertifikat
    </div>

    <div class="number">
        <div class="text">
            Nomor: 01.001.10.2020
        </div>
    </div>

    <div class="assignment">
        diberikan kepada
    </div>

    <div class="name">
        {{ $user->name }}
    </div>

    <div class="as-label">
        sebagai
    </div>

    <div class="as">
        Peserta
    </div>

    <div class="reason">
        dalam kegiatan Kangguru Talk #1 yang diselenggarakan pada <br>
        hari Sabtu, 03 Oktober 2020 dengan mengangkat tema <br>
        <span>”Kuliah Aja Ga Cukup”</span>
    </div>

    <div class="pic">
        Wahyu Kresna Rachmadika
    </div>

    <div class="pic-job">
        CEO Kangguru Indonesia
    </div>
</div>
</body>
</html>
