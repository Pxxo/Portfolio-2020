<?php
$mail = "";
$content ="";

if (!empty($_POST["mail"])) {
    $mail = $_POST['mail'];
    $true_m = 0;
}else{
    $true_m = 1;
}
if (!empty($_POST["content"])) {
    $content = $_POST['content'];
    $true_c = 0;
}else{
    $true_c = 1;
}

if($true_m === 0 && $true_c === 0){
    $to = "pinochi0202@gmail.com";
    $subject = "お問い合わせ";
    $message = "メールアドレス : ".$mail."\n"."\n"."・内容"."\n".$content;
    $headers = "";
    mb_send_mail($to, $subject, $message, $headers);

    $to2 = $mail;
    $subject2 = "お問い合わせありがとうございます。";
    $message2 = $mail."様。お問い合わせ誠にありがとうございます。"."\n"."━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"."\n"."下記からSNSをご覧いただけます。"."\n"."Twitter : https://twitter.com"."\n"."Youtube : https://youtube.com"."\n"."Instagram : https://instagram.com"."\n"."━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"."\n"."↓↓↓Portfolioはこちら↓↓↓"."\n"."https://portfolio/index.php";
    $headers2 = "";
    mb_send_mail($to2, $subject2, $message2, $headers2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="./home.css">
</head>

<body>
    <!-- toppage -->
    <div class="toppage">
        <h1 class="nameTitle01">Hey,I'm</h1>
        <h1 class="nameTitle02">
            Kosei<br>
            Oketani
        </h1>
    </div>
    <!-- toppage -->

    <div class="marginBox01"></div>

    <!-- aboutme -->
    <div class="aboutme">
        <div class="center01">
            <h1 class="subTitle01">aboutme</h1>
        </div>
        <div class="contents01">
            <p class="contents02">
                はじめまして。Koseiと申します。この度は私のポートフォリオにお越しいただき誠にありがとうございます。 簡単な自己紹介をすると私は2005年2月2日生まれの15歳高専の1年生です。少し若すぎるかもしれませんね(笑)
                年齢のことも含め最近悩んでいることが1つあります。それは自分に自信が持てないことです、なぜなら働いた経験が全くないので自分が今できるすべてをかけたとしても仕事で役に立てることがあるのかが分からないからです。
                なんとも無責任な話ですが、私は今この問題が頭について離れません。なので私は経験を積むために必要なことを何とかして手に入れていきたいと思っています。
                まだまだ未熟ですが私はこの年齢でも役に立てることは少なからずあると考えています。というか高専の1年生でもなにか役に立てることがあるのなら喜んでお受けしたいと考えます。
                もし何か私にできることがあれば下の<a href="#contact" class="jump01">contact</a>より、お気軽にお問い合わせください。
            </p>
        </div>
    </div>
    <!-- aboutme -->

    <div class="marginBox02"></div>

    <!-- languege -->
    <div class="language">
        <div class="center01">
            <h1 class="subTitle01">language</h1>
        </div>

        <div class="marginBox03"></div>

        <div class="boxGroup01">
            <div class="box01">
                <h1 class="language01">HTML</h1>
            </div>
            <div class="box01">
                <h1 class="language02">CSS</h1>
            </div>
            <div class="box01">
                <h1 class="language03">Javascript</h1>
            </div>
        </div>

        <div class="boxGroup02">
            <div class="box02">
                <h1 class="language04">PHP</h1>
            </div>
            <div class="box02">
                <h1 class="language05">Learning</h1>
            </div>
            <div class="box02">
                <h1 class="language06">Learning</h1>
            </div>
        </div>
    </div>
    <!-- languege -->
    
    <!-- PLANS -->
    <div class="plans">
        <div class="service_pages">
            <h1 class="subTitle01">PLANS</h1>
            <div class="price_group01" id="inline">
                <p class="pricetitle01" data-aos="fade-up">Easy Plan</p>
                <p class="line"></p>
                <p class="price01" data-aos="fade-down">¥X,XXX</p>
                <p class="watchout01"><br>・最大ページ数 : XPages</p>
            </div>
            <div class="price_group02" id="inline">
                <p class="pricetitle02" data-aos="fade-up">Nomal Plan</p>
                <p class="line"></p>
                <p class="price02" data-aos="fade-down">¥X,XXX</p>
                <p class="watchout01"><br>・最大ページ数 : XPages</p>
            </div>
            <div class="price_group03" id="inline">
                <p class="pricetitle03" data-aos="fade-up">Hard Plan</p>
                <p class="line"></p>
                <p class="price03" data-aos="fade-down">¥X,XXX</p>
                <p class="watchout01"><br>・最大ページ数 : XPages</p>
            </div>
            <p class="watchout02">※完成度やサポートなどは価格による変動はございません※</p>
        </div>
    </div>
    <!-- PLANS -->
    
    <div class="marginBox02"></div>

    <!-- contact -->
    <div class="contact">
        <h1 class="subTitle01">contact</h1>
    </div>
    <div class="form">
        <form action="#contact" method="POST">
            <div class="center01">
                <input type="text" name="mail" class="mail" placeholder="メールアドレス"><br><br>
                <textarea type="text" name="content" class="contents03" placeholder="お問い合わせ内容"></textarea><br>
                <input type="submit" value="お問い合わせ" class="button01" id="contact">
            </div>
        </form>
    </div>
</body>
</html>