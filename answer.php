<?php  

    include('header.php');
    require_once('main.php');
    


?>

    <div class="content-width wow animate__fadeIn" data-wow-duration="3.0s"">
            <section class="section1">
                <h3 class="sub-title">【診断結果】</h3>
                <p class="main-text mt-5 main-font">
                ふむふむ…あなたは<span class="hight-light answer"><?php echo $birthdate = date('Y年m月d日',strtotime($birth)); ?></span>生まれなんですね。
                ということは、今は<span class="hight-light answer"><?php echo $nowYear; ?></span>ですね。
                    <p class="main-text my-5">そうすると、あなたが生まれてから今日(<?php echo $today; ?>)まで、これだけの時間が経っています。</p>
                </p>

                <div class="answer-section">
                    <p class="">あなたが生きてきた日数「<span class="hight-light answer"><?php echo number_format($passedDay) . '日'; ?> </span>」</p>
                    <p class="">あなたが生きてきた時間「<span class="hight-light answer"><?php echo number_format($lifedHour) . '時間'; ?> </span>」</p>
                </div>
            </section>
            <section class="section2 text-left">
                <div class="">
                    <p class="main-text mt-5 main-font">
                    すごいですね！
                    </p>
                    <p class="main-text mt-5 main-font">
                    さて、ここからが本題です。<br>
                    あなたが仮に100歳まで生きるとしたら、<br>
                    死ぬまでに残された日数は…何日になるでしょう？
    
                    <br>
                    <br>
                    想像してみてください。
                    <br>
                    ・・・・・・・・・・・<br>
                    ・・・・・・・・・<br>
                    ・・・・・・・<br>
                    </p>
                </div>
                <div class="text-center my-5">
                    <img src="https://studio-k-k.com/lifetime/img/img4.jpg" alt="" class="answer-img ">
                </div>
                <div class="answer-section">
                    <p class="">あなたが100歳まで生きれる日数は</p>                  
                    <p class="mb-0">「<span class=answer><?php echo number_format($futureDay); ?><span class="value">日（約</span><?php echo $remainYear;?><span class="value">年）</span></span>」</p>
                </div>
                <div class="">
                    <p class="main-text mt-5 main-font">
                    どうでしょう、意外と短いですよね。
                    </p>
                    <p class="main-text mt-5 main-font">
                    そして、1日に<span class="hight-light answer"><?php echo $sleepTime . '時間' ;?></span>の平均睡眠時間をとるあなたは、活動できる日数（起きている時間）としてはさらに短くなります。
                    </p>
                    <span class=sub-text>※活動時間（起きている時間）＝（24時間-睡眠時間）</span>
                </div>

                <div class="answer-section my-5">
                    <p class="">100歳まで活動可能な日数は</p>
                    <p class="mb-0">「<span class="hight-light answer"><?php echo number_format($activeDay);?><span class="value">日（約</span><?php echo $activeYear;?><span class="value">年）</span></span>」</p>
                </div>
                <div class="two-col my-5">
                    <div class="row text-center">
                        <div class="col-md-6 my-4">
                            <p class="main-text">100歳までの日数</p>
                            <div class="circle green">
                                <span class="hight-light answer"><?php echo number_format($futureDay) . '日'; ?>
                                <span class="value">（約</span><?php echo $remainYear;?><span class="value">年）</span>
                            </div>
                        </div>
                        <div class="col-md-6 my-4">
                            <p class="main-text">100歳までの活動可能日数</p>
                            <div class="circle red">
                                <span class="hight-light answer"><?php echo number_format($activeDay) . '日'; ?>
                                <span class="value">（約</span><?php echo $activeYear;?><span class="value">年）</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="main-text mt-5 main-font">
                さらに短くなってびっくりしませんか？<br>
                生きることができる日数は多いけど、<span class="hight-light">起きて自由に行動できる日数を計算すると、たったのこれだけ</span>しかないのです。
                </p>
                <p class="main-text mt-5 main-font">
                1日1日を大切に、自分を大切に、家族を大切に、恋人を大切に、友人を大切に、時間を大切に、意味のある時間を生きていきたいですね^^
                </p>
            </section>
            <section class="section2">
                <h2>なるべく避けたい行動↓↓↓</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-4 my-3">
                        <img src="https://studio-k-k.com/lifetime/img/img1.png" alt="">
                        <p class="sub-text my-3">毎日家でゴロゴロ</p>
                    </div>
                    <div class="col-sm-12 col-md-4 my-3">
                        <img src="https://studio-k-k.com/lifetime/img/img2.png" alt="">
                        <p class="sub-text my-3">ゲーム三昧</p>
                    </div>
                    <div class="col-sm-12 col-md-4 my-3">
                        <img src="https://studio-k-k.com/lifetime/img/img3.png" alt="">
                        <p class="sub-text my-3">ゲーム三昧</p>
                    </div>
                </div>
            </section>
            <section class="section3">
                <h3 class="sub-title">あなたの時間の使い方は？</h3>
                <?php if($poorTime <= 0):?>
                    <p>あなたのダラダラ時間は<span class="hight-light font-24"><?php echo $poorTime ?>時間</span>ですか！
                    <br>
                    素晴らしい！目的を持って生きている証拠ですね！</p> 
                    
                <?php elseif($poorTime <= 1) :?>
                     <p class="main-text">あなたのダラダラ時間は時間は・・・・<span class="hight-light font-24"><?php echo $poorTime ?>時間</span>ですか！
                    <br>
                    時間を有効活用できていますね！</p> 
                    <p>素晴らしいです！
                        <br>ただ、このペースだと残りの人生の<span class="hight-light font-24"><?php echo number_format($wasteTime); ?>日</span>をダラダラに費やしてしまいます。塵も積もれば山となる。さらに、時間管理をして見てはいかがでしょか？</p>
                <?php elseif($poorTime <= 3): ?>
                    <p class="main-text">あなたのダラダラ時間は・・・・<span class="hight-light font-24"><?php echo $poorTime ?>時間</span>ですか！
                    <br>時間の使い方を見直しましょう！</p> 
                    <p>このペースでダラダラすると、残りの人生の<span class="hight-light font-24"><?php echo number_format($wasteTime); ?>日</span>をダラダラに費やしてしまいます。ちょっと長すぎると思いませんか？</p>
                <?php else : ?>
                    <p class="main-text">あなたのダラダラ時間は・・・・<span class="hight-light font-24"><?php echo $poorTime ?>時間</span>ですか！
                    <br>時間を持て余してますね。</p> 
                    <p>このペースでダラダラすると、残りの人生の<span class="hight-light font-24"><?php echo number_format($wasteTime); ?>日</span>をダラダラに費やしてしまいます。人生は一度きりです。もし、何かに興味があれば挑戦してみてはどうでしょうか？</p>
                <?php endif; ?>
            </section>
            <section class="section3">
                <ul class="advice-wrap">
                    <h3 class="sub-title">プチ情報<br>〜何に時間を使いますか？〜</h3>
                    <p class="mb-4">※個人差があります。あくまで参考に!</p>
                    <li class="advice">
                        <h3 class="good main-text">当サイトの模写（制作）時間</h3>
                        <span class="plus">+</span>
                        <div class="g-answer">
                            <p>約50時間</p>
                            <p>※HTML/CSS/jQuery/PHPの基礎知識は必要です</p>
                        </div>
                    </li>
                    <li class="advice">
                        <h3 class="good main-text">エクセルVBAの脱初心者</h3>
                        <span class="plus">+</span>
                        <div class="g-answer">
                            <p>約100時間</p>
                            <p>毎日3時間を1ヶ月</p>
                        </div>
                    </li>
                    <li class="advice">
                        <h3 class="good main-text">簿記資格習得にかかる時間（独学）</h3>
                        <span class="plus">+</span>
                        <div class="g-answer">
                          <p>3級：120~140時間</p>
                          <p>2級：250~350時間</p>
                          <p>1級：500~700時間</p>
                          <p>※2級・1級に関しては、<br>それぞれ3級・2級合格レベルの知識を有する</p>
                        </div>
                    </li>
                    <li class="advice">
                        <h3 class="good main-text">東大合格に必要な勉強時間</h3>
                        <span class="plus">+</span>
                        <div class="g-answer">
                          <p>約4,000〜5,000時間（諸説あり）</p>
                          <p>単純計算：160日〜200日</p>
                        </div>
                    </li>
                </ul>
            </section>
            
            <section class="section4 py-5">
                <p class="share ">診断サイトをシェアする</p>
                <a href="http://twitter.com/share?url=[http://localhost:8888/100year-life/index.php]&text=[これすけさんの寿命診断アプリ模写したよ]&hashtags=[これすけメンター] "class="twitter"><i class="fab fa-twitter"></i></a>
            </section>
        </div>
        <div class="container text-center my-3">
            <a href="index.php" class="submit-btn again">
                もう一度診断する
            </a>    
        </div>

<?php 

    include('footer.php');  

?>
