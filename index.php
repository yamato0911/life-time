<?php  
    include('header.php');
 

?>

        <div class="content-width wow animate__fadeIn" data-wow-duration="3.0s">            <section class="section1">
                <p class="main-text mt-5 main-font">
                    自分の<span class="hight-light">寿命</span>について考えたことはありますか？<br>
                    誰にでも平等に与えられているもの、それが<span class="hight-light">時間</span>です。自分の人生に残された日数や時間を知ることで、これから過ごす毎日が変わるかも！？
                    <p class="main-text my-5">当サイトは人生を無駄なく、後悔せず生きるために<span class="hight-light">あなたに残された寿命を診断するサイト</span>です。</p>
                </p>
            </section>
            <section class="section2">
                <h2>こんな人は時間を無駄にしている可能性が・・・</h2>
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
                <p class="main-text mt-5 main-font">
                    このような生活に心当たりはありませんか？
                    そんな生活を見直せるチャンスになるかもしれません。
                    では、さっそくあなたに残された寿命を診断してみましょう！</p>
                <p class="main-text mt-5 main-font hight-light">
                    *あなたの生年月日と、1日の平均睡眠時間を教えてください。ついでに、あなたが今日ダラダラしちゃった時間も正直に答えてみて！</p>

        <form action="answer.php" method="post">
            <div class="row box">
                <div class="col-6">
                    <label for="birthyear">生まれた西暦</label>
                    <select name="birthyear" id="birthyear" class="select-box w-100">
                        <?php for ($birthyear =1945; $birthyear <= 2020; $birthyear++) : ?>
                            <option value="<?php echo $birthyear ?>"><?php echo $birthyear; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="col-3">
                    <label for="birthmonth">誕生月</label>
                    <select name="birthmonth" id="birthmonth" class="select-box w-100">
                        <?php for ($birthmonth =1; $birthmonth <= 12; $birthmonth++) : ?>
                            <option value="<?php echo $birthmonth ?>"><?php echo $birthmonth; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="col-3">
                    <label for="birthday">誕生日</label>
                    <select name="birthday" id="birthday" class="select-box w-100">
                        <?php for ($birthday =01; $birthday <= 31; $birthday++) : ?>
                            <option value="<?php echo $birthday ?>"><?php echo $birthday; ?></option>   
                        <?php endfor; ?>
                    </select>
                </div>  
            </div>

            <div class="row box">
                <div class="col-6">
                    <label for="birthyear">1日の平均睡眠時間</label>
                    <select name="sleeptime" id="sleeptime" class="select-box w-100">
                        <?php for ($sleeptime =0; $sleeptime <= 20; $sleeptime++) : ?>
                            <option value="<?php echo $sleeptime ?>"><?php echo $sleeptime; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="col-6">
                    <label for="poortime">ダラダラした時間</label>
                    <select name="poortime" id="poortime" class="select-box w-100">
                        <?php for ($poortime =0; $poortime <= 20; $poortime++) : ?>
                            <option value="<?php echo $poortime ?>"><?php echo $poortime; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
                <input type="submit" value="診断する" class="submit-btn">
            </form>
            </section>
        </div>

        <div class="container">
            <span class="badge badge-danger">注意</span>
            <p class="main-text hight-light">想像しているよりも寿命が短いということにショック死する可能性があります……</p>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>

<?php 

include('footer.php');

?>
