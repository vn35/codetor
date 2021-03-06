<?php $baseUrl = 'http://localhost/codetor/';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="jquery-1.8.3.min.js"></script>
    <title>Editor Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>css/docs.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"/></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <link rel="stylesheet" href="<?php echo $baseUrl;?>js/docs.min.js">
</head>
<body>
<div class="container">
<body>

<table class="table table-bordered table-responsive">
    <tr>
        <th colspan="10" align="left"> お客様情報</th>
    </tr>
    <tr>
        <th rowspan="3" align="left" bgcolor="#d1d2d4">ご氏名（自署）</th>
        <td>フリガナ</td>
        <td></td>
        <td bgcolor="#d1d2d4" colspan="1">電話番号</td>
        <td bgcolor="#d1d2d4">
            a
        </td>
    </tr>
    <tr>
      <td>姓</td>
        <td>名</td>
        <td bgcolor="#d1d2d4">性別</td>
    </tr>
     <tr>
       <td>Last Name（パスポート記載の姓）</td>
        <td>First Name（パスポート記載の名）</td>
        <td bgcolor="#d1d2d4">性別</td>
    </tr>
    
    <tr>
        <th rowspan="3" align="left"  bgcolor="#d1d2d4">現住所</th>
        <td>col1</td>
        <td>col2</td>
        <td rowspan="3" bgcolor="#d1d2d4">col3</td>
    </tr>
    <tr>
        <td>col1</td>
        <td>col2</td>
    </tr>
    <tr>
        <td>col1</td>
        <td>col2</td>
    </tr>
    <tr>
        <th rowspan="3" align="left" bgcolor="#d1d2d4">Email</th>
    </tr>
    <tr>
      <td colspan="3" >共 同 名 義 で お 申 込 み の 際 は 下 記 へ 共 同 名 義 の 方 の 詳 細 を ご 記 入 く だ さ い 。</td>
    </tr>
     <tr>
        <td colspan="3" >col2</td>
    </tr>
    <tr>
        <th align="left" bgcolor="#d1d2d4">職業(業種)</th>
        <td></td>
        <td>会社名英語表記</td>
        <td>※ 英語表記がない場合は、会社名をローマ字でご記入ください。</td>
    </tr>
</table>


<table class="table table-bordered table-responsive">
    <tr>
        <th colspan="10" align="left">契約内容※ いずれかにチェック又はご記入ください。</th>
    </tr>
    <tr>
        <th rowspan="3" align="left" bgcolor="#d1d2d4">ご氏名</th>
        <td>フリガナ</td>
        <td></td>
        <td bgcolor="#d1d2d4" colspan="1">婚姻状況</td>
        <td>独身・既婚</td>
        <td bgcolor="#d1d2d4">生年月日</td>
        <td>年 　　月 　　 日</td>
    </tr>
    <tr>
      <td>姓</td>
        <td>名</td>
        <td bgcolor="#d1d2d4">性別</td>
        <td>男・ 女</td>
        <td bgcolor="#d1d2d4">国籍</td>
        <td></td>
    </tr>
     <tr>
       <td>Last Name（パスポート記載の姓）</td>
        <td>First Name（パスポート記載の名）</td>
        <td bgcolor="#d1d2d4">パスポート番号</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
</body>


</div>
</body>
</html>
