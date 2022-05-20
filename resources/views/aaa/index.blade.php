<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, user-scalable=yes">
    <title>スグ食べ</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/accessory.css') }}" rel="stylesheet">
    <link href="{{ asset('css/question.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header-bg">
            <h1 id="top"><img class="header-logo" src="images/logo.svg" alt="スグ食べロゴ"></h1>
            <button onClick="location.href='{{route('product.index')}}'" class="button14">
                お試しセットを注文
            </button>
        </div>
    </header>
    <div class="scrolldown2"><span>Scroll</span></div>
    <main class="main">
        <section class="section-top">
            <div class="section-top__bg">
                <h2 class="section-top__lead"><span>こだわり農家の</span><br>
                    朝どりオーガニック野菜を<br>
                    ご自宅で。</h2>
            </div>
            <div class="section-top__description">
                <p>「スグ食べ」は、厳選したオーガニック農家の穫れたて野菜を販売している最短24時間以内に届く新鮮な
                    オーガニック野菜宅配サービスです。食材から選べるのはもちろん、生産者からも選べます。<br>
                    生産方法や生産地、それぞれ異なるこだわりで、お気に入りの農家さんを見つけてください。</p>
            </div>
        </section>
        <section class="section-reason">
            <h2><span class="under_line">スグ食べが選ばれる<br class="under_line-br">3つの理由</span></h2>
            <ol>
                <li class="section-reason__content">
                    <div class="section-reason__content-box01">
                        <div class="square-box"> <img class="box-img01" src="images/cart.png" alt=""></div>
                        <div class="section-reason__paragraph01">
                            <p class="section-reason__number"><span>01</span>/03</p>
                            <h3 class="section-reason__titile">本当の意味での産地直送</h3>
                            <p class="section-reason__paragraph">「なるべく収穫したばかりの状態で、野菜を味わって欲しい。」<br>
                                スグ食べでは、箱詰め倉庫を介すことなく農家が収穫した当日にお客様の元へ直送で野菜をお送りします。</p>
                        </div>
                    </div>
                </li>
                <li class="section-reason__content">
                    <div class="section-reason__content-box02">
                        <div class="square-box02"><img src="images/vagetable.png" alt=""></div>
                        <div class="section-reason__paragraph02">
                            <p class="section-reason__number"><span>02</span>/03</p>
                            <h3 class="section-reason__titile">安心安全な無農薬野菜</h3>
                            <p class="section-reason__paragraph">出品している生産者は、有機栽培もしくは自然栽培の農家のみ。<br>
                                全ての商品が無農薬・無化学肥料など、安全にこだわって生産された「オーガニック農作物」です。<br>
                                そのため、どの商品も安心してお買い求めいただけます。</p>
                        </div>
                    </div>
                </li>
                <li class="section-reason__content">
                    <div class="section-reason__content-box03">
                        <div class="square-box"><img src="images/meet.png" alt=""></div>
                        <div class="section-reason__paragraph03">
                            <p class="section-reason__number"><span>03</span>/03</p>
                            <h3 class="section-reason__titile">たくさんの旬な野菜との出会い</h3>
                            <p class="section-reason__paragraph">年間数十種の野菜を作る生産者から、今が旬の多様な野菜が届きます。<br>
                                スグ食べでは生産者ごとに商品が異なります。<br>中には年間100種類もの多品種生産をしている生産者も。旬な野菜はもちろん、珍しい野菜とも出会えます。</p>
                        </div>
                    </div>
                </li>
            </ol>
        </section>
        <section class="section-trial">
            <h2> <span class="section-trial__subtitle">自信があるから食べてもらいたい</span><br>
                <span class="section-trial__title">1回限り！少量お試しセット</span>
            </h2>
            <ul>
                <div class="section-trial__wrapper">
                    <li class="section-trial__list">
                        <div class="section-trial__paregraph">
                            <h3 class="section-trial__set">旬＊お試し野菜セット<span>(6品目)</span></h3>
                            <p class="section-trial__famer">生産者：長野県飯田市　くちぶえ農園</p>
                            <p class="section-trial__price">￥1,280<span>（税込 / 送料別）</span></p>
                        </div>
                        <img src="assets/images/trial01.jpg.jpg" alt="くちぶえ農園お試しセット">
                    </li>
                    <li class="section-trial__list">
                        <div class="section-trial__paregraph">
                            <h3 class="section-trial__set">旬＊お試し野菜セット<span>(6品目)</span></h3>
                            <p class="section-trial__famer">生産者：千葉県松戸市　べジックス</p>
                            <p class="section-trial__price">￥1,280<span>（税込 / 送料別）</span></p>
                        </div>
                        <img src="images/trial02.jpg.jpg" alt="">
                    </li>
                </div>
            </ul>
            <div class="button02"><a href=""><span>初回限定！</span><br>
                    お試しセットを注文する</a></div>
        </section>
        <section class="section-cultivation">
            <h2> <span class="section-cultivation__subtitle">きちんと知っておきたい</span><br>
                <span class="section-cultivation__title">栽培方法による違い</span>
            </h2>
            <ul>
                <li class="section-cultivation__list"><img class="section-cultivation__img" src="images/natulal.jpg.jpg" alt="">
                    <div class="section-cultivation__content">
                        <h3>自然栽培</h3>
                        <p>第三者機関認証なし<br>
                            農薬・肥料・堆肥など</p>
                    </div>
                </li>
                <li class="section-cultivation__list"><img class="section-cultivation__img" src="images/organic.jpg.jpg" alt="">
                    <div class="section-cultivation__content">
                        <h3>有機栽培</h3>
                        <p>第三者機関認証アリ</p>
                    </div>
                </li>
                <li class="section-cultivation__list"><img class="section-cultivation__img" src="images/nokemikal.jpg.jpg" alt="">
                    <div class="section-cultivation__content">
                        <h3>無農薬栽培</h3>
                        <p>第三者機関認証ナシ<br>
                            有機の農薬・肥料・堆肥<br>
                            のみ使用</p>
                    </div>
                </li>
                <li class="section-cultivation__list"><img class="section-cultivation__img" src="images/litlekemikal.jpg.jpg" alt="">
                    <div class="section-cultivation__content">
                        <h3>減農薬栽培</h3>
                        <p>第三者機関認証ナシ<br>
                            基準量より50%以下の<br>
                            化学農薬・肥料・<br>
                            堆肥を使用</p>
                    </div>
                </li>
                <li class="section-cultivation__list"><img class="section-cultivation__img" src="images/special.jpg.jpg" alt="">
                    <div class="section-cultivation__content">
                        <h3>特別栽培</h3>
                        <p>第三者機関認証ナシ</p>
                    </div>
                </li>
            </ul>
        </section>
        <section class="section-organic">
            <h2><span>オーガニックは、<br>農家は国内全体の0.5％</span></h2>
            <div class="section-organic__box">
                <img class="section-organic__img" src="images/graph01-3-last.png" alt="">
                <div class="section-organic__paragraph">
                    <h3>実はこんなに少ない<br>オールがニック農家</h3>
                    <p>最近はレストランなどでもよく目にするのでもっとたくさんあるかと思いきや、実はオーガニック農家は国内農家の0.5％しか存在していません。
                        ですが0.5％のオーガニック農家は、健やかな野菜を安心して食べてもらいたいという強い気持ちで大切に野菜を作っています。
                        スグ食べではそんな農家さんを厳選し、出品していただいています。農家さんによって栽培方法も違います。
                        自分や家族の体を作る礎となる野菜の栽培方法をこの際把握してみては？</p>
                </div>
            </div>
        </section>
        <section class="section-famer">
            <h2><span class="section-famer__subtitle">私たちの野菜こんなに美味しいんです</span><br>
                <span class="section-famer__title">こんな農家さんが<br>登録しています。</span>
            </h2>
            <ul>
                <li class="section-famer__01">
                    <div class="section-famer__box-01">
                        <div class="section-famer__01-img"><img src="images/famer01.jpg" alt=""></div>
                        <div class="section-famer__01-blok">
                            <h3>安心安全なお野菜を<br>
                                ご堪能ください！</h3>
                            <p class="section-famer__name01">岡山県ひだまり農場<br>
                                山田　陽一</p>
                            <p class="section-famer__paragraph01">「ひだまり農場」では栽培機関中に農薬・化学肥料を一切使用せず、年間100種類の野菜と米、卵を生産しています。堆肥・肥料も全て手作りし、有機質のものを使用しています。</p>
                        </div>
                    </div>
                </li>
                <li class="section-famer__02">
                    <div class="section-famer__box-02">
                        <div class="section-famer__02-img"><img src="images/famer02.jpg" alt=""></div>
                        <div class="section-famer__02-blok">
                            <h3>旬な野菜を<br>
                                存分に楽しんでください。 </h3>
                            <p class="section-famer__name02">爽緑農園<br>
                                太田　紘一</p>
                            <p class="section-famer__paragraph02">「爽緑農園」では農薬や除草剤は一切使用せず、一つ一つのお野菜を丁寧に栽培しています。お日様の光をたくさん浴びて育ったお野菜は、葉や皮まで余すことなく食べることができます。</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section class="section-trial">
            <h2><span class="section-trial__subtitle">自信があるから食べてもらいたい</span><br>
                <span class="section-trial__title">1回限り！少量お試しセット</span>
            </h2>
            <ul>
                <div class="section-trial__wrapper">
                    <li class="section-trial__list">
                        <div class="section-trial__paregraph">
                            <h3 class="section-trial__set">旬＊お試し野菜セット<span>(6品目)</span></h3>
                            <p class="section-trial__famer">生産者：長野県飯田市　くちぶえ農園</p>
                            <p class="section-trial__price">￥1,280<span>（税込 / 送料別）</span></p>
                        </div>
                        <img src="images/trial01.jpg.jpg" alt="くちぶえ農園お試しセット">
                    </li>
                    <li class="section-trial__list">
                        <div class="section-trial__paregraph">
                            <h3 class="section-trial__set">旬＊お試し野菜セット<span>(6品目)</span></h3>
                            <p class="section-trial__famer">生産者：千葉県松戸市　べジックス</p>
                            <p class="section-trial__price">￥1,280<span>（税込 / 送料別）</span></p>
                        </div>
                        <img src="images/trial02.jpg.jpg" alt="">
                    </li>
                </div>
            </ul>
            <div class="button02"><a href=""><span>初回限定！</span><br>お試しセットを注文する</a></div>
        </section>
        <section class="customer-voice">
            <h2><span class="customer-voice__subtitle">食べてわかったこの違い</span><br>
                <span class="customer-voice__title">お客様からの声</span>
            </h2>
            <ul>
                <div class="customer-voice__list-box">
                    <li class="customer-voice__list"><img src="images/customer01.jpg" alt="">
                        <div class="customer-voice__paragraph">
                            <h3>香りまで美味しい新鮮さ！</h3>
                            <p class="customer-name">神奈川県A様</p>
                            <p class="customer-voice__description">箱を開けた途端に広がった野菜の香り。スーパーで買った野菜とはどうしてこんなに違いがあるのかとびっくりするほど豊かな大地の香りです。葉っぱまでシャキシャキのにんじんは特に子供がお気に入り。ゆでただけでも、野菜の甘みが優しく広がり本来の味がたのしめます。</p>
                        </div>
                    </li>
                    <li class="customer-voice__list"><img src="images/customer02.jpg" alt="">
                        <div class="customer-voice__paragraph">
                            <h3>安心できる品質に大満足</h3>
                            <p class="customer-name">千葉県O様</p>
                            <p class="customer-voice__description">無農薬・無化学肥料にこだわった生産者から送られてくるため、とても安心して毎日食卓に出せるのがうれしいです。小さな子供や働き盛りの夫など、健康に気を遣って食から体づくりをしたい我が家には、もう手放せない野菜となっています。</p>
                        </div>
                    </li>
                    <li class="customer-voice__list"><img src="images/customer03.jpg" alt="">
                        <div class="customer-voice__paragraph">
                            <h3>香りまで美味しい新鮮さ！</h3>
                            <p class="customer-name">神奈川県A様</p>
                            <p class="customer-voice__description">鮮度にこだわる「スグ食べ」だからこそ、旬になった野菜を「今だ！」と送ってきてくれるので食卓に並ぶ野菜は常に旬の食材です。一カ所の農家さんからではなく複数の農家から選べるので、地域によっての旬の違いも楽しめます。たまにスーパーに並ばないような珍しい野菜がまざるのもわくわくしますね。</p>
                        </div>
                    </li>
                </div>
            </ul>
        </section>
        <section class="section-question">
            <h2><span>よくある質問</span></h2>
            <ul>
                <li>
                    <h3 class="title">産地直送のサービスってよく見るけど何が違うの？</h3>
                    <div class="box">
                        <p>鮮度が抜群に違います。通常の産直サービスは、一度倉庫などに野菜を集め、そこで箱詰め作業をして配送しています。この仕組みでは、お客様が商品を受け取る時には収穫してから3,4日が経過しています。スグ食べでは、箱詰め作業を農家さんにお願いすることにより、最短で収穫当日に商品を受け取ることができます。</p>
                    </div>
                </li>
                <li>
                    <h3 class="title">どんな農家さんが登録してるの？</h3>
                    <div class="box">
                        <p>無農薬にこだわる、オーガニック農家さんのみが登録しています。有機栽培や自然栽培などの環境に配慮した農法で生産するには、通常以上に費用も手間もかかります。そんな中でも、「安心な野菜を食べて欲しい」という強い思いを持って、こだわって野菜を作っている農家さんがいます。 そういった、厳選されたオーガニック農家さんのみが登録しているため、安心してお買い物を楽しんでいただけます。</p>
                    </div>
                </li>
            </ul>
        </section>
        <section class="section-quality">
            <div class="section-quality__bg">
                <div class="section-quality__bg-box">
                    <div class="section-quality__content">
                        <h2> <span class="section-quality__subtitle">商品に不備があった際には、<br>
                                スグ食べが “全額” 返金対応します</span><br>
                            <span class="section-quality__title">スグ食べの品質保証</span>
                        </h2>
                        <p>スグ食べに出品している農家さんたちは、「大切に育てた自慢の農作物を、できるだけ美味しい状態で食べてもらいたい。」<br>そんな想いを持った農家さんばかりです。そのため、収穫から梱包・出荷にいたるまでしっかりと品質管理されています。とはいえ、実物を見ずに野菜や果物を購入するのはちょっと不安…そんな方にも安心してご購入いただけるよう、スグ食べでは品質保証をお約束しています。<br>万が一届いた商品に不備があった際には、スグ食べにて全額返金対応いたします。</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer"> <small>copyright©️sugutabe.inc</small> </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="css/script.js"></script>
</body>

</html>
