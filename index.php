<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'index', 'headCSS' => ['page/top.css']]) ?>
<section class="sect_1" id="sect_1">
    <div class="l-wrap">
        <img class="multi-skywater u-d-n-laptop" src="<?= resource('img', 'raw/sect_1-img.png') ?>" alt="">
        <p class="c-heading04 sect_1__heading">ミネラル成分と水分をすばやく<br class="u-d-n-laptop">補給できる<br class="u-d-n-responsive">糖類控えめの<br class="u-d-n-laptop">ハイポトニック飲料<br class="u-d-n-laptop">「スカイウォーター」</p>
        <div class="sect_1__content01" data-aos="fade-up" data-aos-duration="1000">
            <div class="img01">
                <img src="<?= resource('img', 'raw/sect_1-img01.png') ?>" alt="">
            </div>
            <div class="img02">
                <img src="<?= resource('img', 'raw/sect_3-img03.png') ?>" alt="">
            </div>
            <p class="txt01">クエン酸の働きで<br class="u-d-n-laptop"> 疲労感軽減!</p>
            <p class="txt02">
                グレープフルーツ味は継続的な飲用で日常生活や<br class="u-d-n-responsive">
                運動後の疲労感を軽減するクエン酸(機能性関与成分)が<br class="u-d-n-responsive">
                3,000mg入った機能性表示食品です。
            </p>
            <div class="btn__area">
                <a href="#" class="c-button c-button--m">詳しくはこちら</a>
            </div>
        </div>
        <div class="p-content03 p-content03--01" data-aos="fade-up" data-aos-duration="1000">
            <p class="c-circle04 u-d-n-responsive">
                期間限定<br>
                公開中
            </p>
            <a href="#" class="p-content03__btn u-d-n-responsive">詳しくはこちら</a>
            <div class="row">
                <div class="col">
                    <div class="frame">
                        <img src="<?= resource('img', 'raw/filming_schedule.png') ?>" alt="">
                        <span>撮影予定</span>
                    </div>
                    <div class="para01">
                        <p>
                            SkyWater<br>
                            <span>アンバサダー</span>
                        </p>
                        <p>加藤ローサ<span>さん</span></p>
                    </div>
                </div>
                <div class="col">
                    <div class="para02">
                        <p>
                            ローサさんが日頃気を付けている<br class="u-d-n-laptop">ルーティンとは？
                        </p>
                        <p>SPECIAL<br class="u-d-n-laptop"> DIALOG
                            <span class="c-circle04 u-d-n-laptop">
                                期間限定<br>
                                公開中
                            </span>
                        </p>
                    </div>
                    <a href="#" class="p-content03__btn-sp u-d-n-laptop">詳しくはこちら</a>
                </div>
            </div>
        </div>
    </div>
    <img src="<?= resource('img', 'raw/sect_3-bg02.png') ?>" class="sect_3-bg02" alt="">
</section>
<section class="sect_2" id="sect_2">
    <div class="l-wrap">
        <div class="sect_2__header">
            <p class="c-heading01 c-heading01__main">
                features
            </p>
            <p class="c-heading01 c-heading01__sub c-heading01__sub--line">
                スカイウォーター<br class="u-d-n-laptop"><span class="yellow isCircle">4つの特徴</span>
            </p>
        </div>
        <div class="row">
            <div class="col" data-aos="fade-up" data-aos-duration="1000">
                <p class="c-circle01">
                    特徴
                    <span>1</span>
                </p>
                <p class="heading">糖類控えめ！</p>
                <div class="flex">
                    <p class="txt01">スカイウォーターは、3つのタイプとも糖類控えめ<span>※</span>が特徴です。<br class="u-d-n-responsive">
                        だから糖類の摂り過ぎが気になる方にも安心して水分補給ができます。</p>
                    <img src="<?= resource('img', 'raw/sect_2-img01.png') ?>" alt="">
                </div>
                <p class="txt02">※水1ℓ溶解時(グレープフルーツ味 10g/グレープ味 11g/ライチ味 0g)<br>
                    ※一般的なスポーツドリンクパウダーのおおよそ4分の1
                </p>
            </div>
            <div class="col" data-aos="fade-up" data-aos-duration="1000">
                <p class="c-circle01">
                    特徴
                    <span>2</span>
                </p>
                <p class="heading">すばやく水分補給！</p>
                <div class="flex">
                    <p class="txt01">
                        スカイウォーターは、3つのタイプとも<br class="u-d-n-responsive">
                        ハイポトニック飲料※です。<br class="u-d-n-responsive">
                        熱中症対策のための水分・塩分補給が出来ます。

                    </p>
                    <img src="<?= resource('img', 'raw/sect_2-img02.png') ?>" alt="">
                </div>
                <p class="txt02">※ヒトの安静時の体液よりも低い浸透圧（=ハイポトニック）ですので、運動による発汗などで体液が薄くなっている状態においては水分が素早く吸収されます。
            </div>
            <div class="col" data-aos="fade-up" data-aos-duration="1000">
                <p class="c-circle01">
                    特徴
                    <span>3</span>
                </p>
                <p class="heading">選べる3タイプ！</p>
                <div class="flex flex-start">
                    <p class="txt01">
                        スカイウォーターは、選べる3つのタイプ。発汗時やダイエット中の水分補給に、摂りたい成分やお好みの風味で、お選びいただけます。
                    </p>
                    <div class="flex flex-col">
                        <img src="<?= resource('img', 'raw/sect_2-img03.png') ?>" alt="">
                        <a href="#" class="c-button c-button--m">3つのタイプ紹介はこちら</a>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-duration="1000">
                <p class="c-circle01">
                    特徴
                    <span>4</span>
                </p>
                <p class="heading">おトクな粉末タイプ！</p>
                <div class="flex flex-start">
                    <div>
                        <p class="txt01">
                            スカイウォーターは1箱で、たっぷり10ℓ※だから、とても経済的にお飲みいただけます。
                        </p>
                        <p class="txt02">
                            ※1箱は、1ℓ用小袋×2袋×5コ入りです。
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <p class="speech">
                            1箱で、たっぷり10ℓ分!
                            <img src="<?= resource('img', 'raw/speech.svg') ?>" alt="">
                        </p>
                        <img src="<?= resource('img', 'raw/sect_2-img04.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?= resource('img', 'raw/sect_2-bg01.png') ?>" alt="">
</section>
<section class="sect_3" id="sect_3">
    <div class="l-wrap">
        <div class="sect_3__header">
            <p class="c-heading01 c-heading01__main">
                routine
            </p>
            <p class="c-heading01 c-heading01__sub c-heading01__sub--line">
                #<span class="blue isCircle">疲労感軽減</span><br class="u-d-n-laptop">ルーティンはじめよう
            </p>
        </div>
        <div class="sect_3__header_sub">
            <p class="c-heading02 c-heading02__main">
                いつもの飲み物をスカイウォーターグレープフルーツ味に変えることで、毎日の暮らしの中に気軽に<br>疲労感を軽減する習慣を取り入れていくこと。 それが「#疲労感軽減ルーティン」です。
            </p>
        </div>
    </div>
    <div class="p-content01" data-aos="fade-up" data-aos-duration="1000">
        <div class="l-wrap">
            <div class="p-content01__main">
                <div class="p-content01__row">
                    <div class="p-content01__column">
                        <img src="<?= resource('img', 'raw/sect_6-img01.png') ?>" alt="">
                        <p class="badge">機能性表示食品</p>
                        <div class="frame u-d-n-laptop">
                            <div class="frame__content">
                                <p>疲労感<br>
                                    軽減</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-content01__column">
                        <p class="heading"><span>クエン酸3,000mg配合</span><span>※</span><br class="u-d-n-laptop">で疲労感を軽減！</p>
                        <div class="row">
                            <div class="paragraph">
                                <p>
                                    クエン酸を1ℓ当たり3,000mg 配合。継続摂取により、日常生活や運動後の疲労感を軽減することが期待されます。
                                </p>
                                <p>※グレープフルーツ味のみ</p>
                            </div>
                            <div class="frame u-d-n-responsive">
                                <div class="frame__content">
                                    <p>疲労感<br>
                                        軽減</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-content01__footer">
                    本品は、事業者の責任において特定の保健の目的が期待できる旨を表示するものとして、消費者庁長官に届出されたものです。ただし、特定保健用食品と異なり、 消費者庁長官による個別審査を受けたものではありません。本品は、疾病の診断、治療、予防を目的としたものではありません。食生活は、主食、主菜、副菜を基本に、食事のバランスを。
                </p>
            </div>
        </div>
    </div>
    <div class="l-wrap">
        <div class="citric__acid" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col">
                    <img src="<?= resource('img', 'raw/sect_3-img01.png') ?>" alt="">
                </div>
                <div class="col">
                    <div class="heading">
                        <p class="title">citric acid</p>
                        <p class="sub">クエン酸とは？</p>
                    </div>
                    <p class="para u-d-n-responsive">クエン酸は柑橘類などに含まれる酸味成分で、活動エネルギー生産の中心的役割を担っています。継続的に摂取することで、 日常の生活や運動後の疲労感を軽減する働きがあることが報告されています。</p>
                </div>
            </div>
            <p class="para para-sp u-d-n-laptop">クエン酸は柑橘類などに含まれる酸味成分で、活動エネルギー生産の中心的役割を担っています。継続的に摂取することで、 日常の生活や運動後の疲労感を軽減する働きがあることが報告されています。</p>
        </div>
        <div class="recommended" data-aos="fade-up" data-aos-duration="1000">
            <div class="recommended__row">
                <p class="recommended__heading">こんなときに飲むのが<span>おすすめ</span></p>
                <div class="recommended__col">
                    <img src="<?= resource('img', 'raw/sect_3-recommended01.png') ?>" alt="">
                    <p>帰宅したときの<br class="u-d-n-laptop">１杯に…</p>
                </div>
                <div class="recommended__col">
                    <img src="<?= resource('img', 'raw/sect_3-recommended02.png') ?>" alt="">
                    <p>朝起きたときの<br class="u-d-n-laptop">１杯に…</p>
                </div>
                <div class="recommended__col">
                    <img src="<?= resource('img', 'raw/sect_3-recommended03.png') ?>" alt="">
                    <p>在宅勤務中の<br class="u-d-n-laptop">１杯に…</p>
                </div>
                <div class="recommended__col">
                    <img src="<?= resource('img', 'raw/sect_3-recommended04.png') ?>" alt="">
                    <p>お風呂上がりの<br class="u-d-n-laptop">１杯に…</p>
                </div>
                <div class="arrow-down">
                    <img class="u-d-n-responsive" src="<?= resource('img', 'raw/arrow-down.svg') ?>" alt="">
                    <img class="u-d-n-laptop" src="<?= resource('img', 'raw/arrow-down-sp.svg') ?>" alt="">
                </div>
            </div>
        </div>
        <div class="change" data-aos="fade-up" data-aos-duration="1000">
            <span>
                <img src="<?= resource('img', 'raw/change_word.svg') ?>" alt="">
            </span>
            <p>いつもの１杯をスカイウォーターの<br class="u-d-n-laptop">グレープフルーツ味にかえよう</p>
        </div>
        <div class="frame" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col">
                    <img class="u-d-n-responsive" src="<?= resource('img', 'raw/sect_3-img02.png') ?>" alt="">
                    <img class="u-d-n-laptop" src="<?= resource('img', 'raw/sect_3-img02-sp.png') ?>" alt="">
                </div>
                <div class="col">
                    <div class="image__container">
                        <img src="<?= resource('img', 'raw/sect_3-img03.png') ?>" alt="">
                        <p class="image__txt">
                            クエン酸<span>3,000</span><span>mg</span>配合
                        </p>
                    </div>
                    <div class="frame__content frame__content02">
                        <p>疲労感<br>
                            軽減</p>
                    </div>
                </div>
            </div>
            <div class="u-d-n-laptop" style="text-align: center; margin-top: 21.7px;">
                <img src="<?= resource('img', 'raw/arrow-down-sp.svg') ?>" alt="">
            </div>
        </div>
    </div>
    <div class="started" data-aos="fade-up" data-aos-duration="1000">
        <p class="c-heading02 c-heading02__sub started__heading">毎日のクエン酸習慣で<br class="u-d-n-laptop">日常の疲労感を軽減</p>
        <div class="started__banner">
            <div class="l-wrap">
                <div class="started__txt">
                    <p>Let’s get started !</p>
                    <p>わたしに合ったスタイルで</p>
                    <p class="c-heading02__sub"><span class="blue">#</span><span class="blue isCircle">疲労感軽減</span>ルーティンを</p>
                    <p>はじめよう!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-content03" data-aos="fade-up" data-aos-duration="1000">
        <p class="c-circle04 u-d-n-responsive">
            期間限定<br>
            公開中
        </p>
        <a href="#" class="p-content03__btn u-d-n-responsive">詳しくはこちら</a>
        <div class="row">
            <div class="col">
                <div class="frame">
                    <img src="<?= resource('img', 'raw/filming_schedule.png') ?>" alt="">
                    <span>撮影予定</span>
                </div>
                <div class="para01">
                    <p>
                        SkyWater<br>
                        <span>アンバサダー</span>
                    </p>
                    <p>加藤ローサ<span>さん</span></p>
                </div>
            </div>
            <div class="col">
                <div class="para02">
                    <p>
                        ローサさんが<br class="u-d-n-laptop">日頃気を付けている
                        <span class="c-circle04">
                            期間限定<br>
                            公開中
                        </span>
                    </p>
                    <p>ルーティン<span>とは？</span></p>
                </div>
                <a href="#" class="p-content03__btn-sp u-d-n-laptop">詳しくはこちら</a>
            </div>
        </div>
    </div>
    <img src="<?= resource('img', 'raw/sect_3-bg02.png') ?>" class="sect_3-bg02" alt="">
</section>
<section class="sect_4" id="sect_4">
    <div class="l-wrap">
        <div class="sect_4__header">
            <p class="c-heading01 c-heading01__main">
                routine diagnosis
            </p>
            <p class="c-heading01 c-heading01__sub c-heading01__sub--line">
                タイプ別<br class="u-d-n-laptop"> #疲労感軽減<br class="u-d-n-laptop"><span class="yellow isCircle u-d-n-responsive">ルーティン診断</span><span class="yellow isCircle u-d-n-laptop">ルーティン</span><span class="u-d-n-laptop" style="padding-left: 3px;">診断</span>
            </p>
        </div>
        <div class="sect_4__header_sub">
            <p class="c-heading02 c-heading02__main">
                あなたは何タイプ? 診断チャートであなたの生活<br>
                スタイルに合ったスカイウォーターグレープフルーツ味の飲み方を調べてみよう!
            </p>
        </div>
        <div class="flow__frame" data-aos="fade-up" data-aos-duration="1000">
            <img class="u-d-n-responsive" src="<?= resource('img', 'raw/sect_4-img01.png') ?>" alt="">
            <img class="u-d-n-laptop" src="<?= resource('img', 'raw/sect_4-img01-sp.png') ?>" alt="">
        </div>
        <?php

        $flowContent = [
            [
                "type" => "A",
                "icon" => "icon_rocket.png",
                "text01" => "おすすめの#疲労感軽減ルーティンは",
                "text02" => "朝からスタートダッシュ",
                "text03" => "朝にエンジンがかかりにくい場合は、寝る前や寝起きにスカイウォーターグレープフルーツ味を飲むのがおすすめ。1日の始まりにしっかり疲労感を軽減して、朝からスタートダッシュを決めましょう。",
            ],
            [
                "type" => "B",
                "icon" => "icon_running.png",
                "text01" => "おすすめの#疲労感軽減ルーティンは",
                "text02" => "もっとアクティブライフ",
                "text03" => "お出かけしたり、カラダを動かしたりしたあとはスカイウォーターグレープフルーツ味でしっかりクエン酸を補給。疲労感を軽減して、よりアクティブな毎日を過ごすことができます。",
            ],
            [
                "type" => "C",
                "icon" => "icon_coffee.png",
                "text01" => "おすすめの#疲労感軽減ルーティンは",
                "text02" => "充実させようジブン時間",
                "text03" => "お家に帰ったらまずスカイウォーターグレープフルーツ味を飲んで、リフレッシュ！ ジブン時間や溜まりがちな家事をこなして、充実した毎日を過ごせるように疲労感を軽減しましょう。",
            ],
        ];

        ?>
        <div class="flow__cards">
            <?php foreach ($flowContent as $flow) : ?>
                <div class="flow__type" data-aos="fade-up" data-aos-duration="1000">
                    <div class="c-circle02 flow__type_number">
                        <span>Type</span>
                        <span><?= $flow["type"] ?></span>
                    </div>
                    <p><?= $flow["text01"] ?></p>
                    <p><?= $flow["text02"] ?></p>
                    <div class="icon">
                        <img src="<?= resource('img', 'icon/') . $flow["icon"]; ?>" alt="">
                    </div>
                    <p><?= $flow["text03"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <img class="top-bg" src="<?= resource('img', 'raw/sect_4-bg01.png') ?>" alt="">
</section>
<section class="sect_5" id="sect_5">
    <div class="l-wrap">
        <div class="sect_5__header">
            <p class="c-heading01 c-heading01__main">
                type
            </p>
            <p class="c-heading01 c-heading01__sub c-heading01__sub--line">
                選べる<span class="yellow isCircle">3タイプ</span>
            </p>
        </div>
        <div class="sect_5__header_sub">
            <p class="c-heading02 c-heading02__main">
                スカイウォーターシリーズは、 3つのフレーバーをご用意。さまざまな味が楽しめるのは<br>もちろん、日常生活やスポーツなど目的やシーンに合わせてお選びいただけます。
            </p>
        </div>
        <div class="sect_5__main_content">
            <div class="p-content02 p-content02--blue"  data-aos="fade-up" data-aos-duration="1000">
                <div class="p-content02__heading">
                    <p>毎日の水分補給をしたい方に</p>
                    <img src="<?= resource('img', 'raw/sect_5-svg-skywater.svg') ?>" alt="">
                </div>
                <p class="flavor color__blue">グレープフルーツ味<span>機能性表示食品</span></p>
                <div class="p-content02__main">
                    <div class="row">
                        <div class="col">
                            <div class="circles">
                                <p class="c-circle03">
                                    <span>糖類 <br>
                                        控えめ!</span>
                                </p>
                                <p class="c-circle03">
                                    <span>1Lあたり<br>
                                        50kcal</span>
                                </p>
                                <p class="c-circle03">
                                    <span>ハイボ<br>
                                        トニック<br>
                                        飲料</span>
                                </p>
                                <div class="frame__content">
                                    <p>疲労感<br>
                                        軽減</p>
                                </div>
                            </div>
                            <p class="para1">
                                糖類控えめで、クエン酸3,000mgを配合しているから、スポーツ時や毎日の元気サポートにもおすすめ！
                                グレープフルーツ原料不使用で、高血圧のカルシウム拮抗薬等を飲まれている方にも安心です。
                            </p>
                            <div class="sp-center u-d-n-laptop">
                                <img src="<?= resource('img', 'raw/skywater-img01.svg') ?>" alt="">
                                <div class="drinking">
                                    <img src="<?= resource('img', 'raw/sect_5-drinking01.svg') ?>" alt="">
                                    <p class="color__blue">糖類控えめは<br>
                                        うれしい！</p>
                                </div>
                            </div>
                            <p class="para2">
                                栄養成分表示/小袋1袋(15g)当たり
                            </p>
                            <div class="table-row">
                                <div class="table-col">
                                    <div class="item">
                                        <div>
                                            <p>熱量</p>
                                            <p>タンパク質</p>
                                            <p>脂質</p>
                                            <p>炭水化物</p>
                                            <p>糖類</p>
                                        </div>
                                        <div>
                                            <p>50kcal</p>
                                            <p>0.1g</p>
                                            <p>0g</p>
                                            <p>13g</p>
                                            <p>10g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-col">
                                    <div class="item">
                                        <div>
                                            <p>食塩相当量</p>
                                            <p>カリウム</p>
                                            <p>カルシウム</p>
                                            <p>マグネシウム</p>
                                        </div>
                                        <div>
                                            <p>1.3g</p>
                                            <p>237mg</p>
                                            <p>22mg</p>
                                            <p>6mg</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <p>食塩相当量</p>
                                            <p>カリウム</p>
                                        </div>
                                        <div>
                                            <p class="hide">none</p>
                                            <p>3,000mg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col u-d-n-responsive">
                            <img src="<?= resource('img', 'raw/skywater-img01.svg') ?>" alt="">
                            <div class="drinking">
                                <img src="<?= resource('img', 'raw/sect_5-drinking01.svg') ?>" alt="">
                                <p class="color__blue">糖類控えめは<br>
                                    うれしい！</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notification" data-aos="fade-up" data-aos-duration="1000">
                <div class="notification__row">
                    <p class="notification__heading">届出表示</p>
                    <div class="notification__col">
                        <p>機能性関与成分 <span>：</span></p>
                        <p>クエン酸3,000mg</p>
                    </div>
                    <div class="notification__col">
                        <p>届出表示（G294)：</p>
                        <p>
                            本品にはクエン酸が含まれます。<br>
                            クエン酸は継続摂取により、日常の生活や運動後の疲労感を軽減する<br class="u-d-n-responsive">
                            働きがあることが報告されています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-content02 p-content02--violet" data-aos="fade-up" data-aos-duration="1000">
                <div class="p-content02__heading">
                    <p>パフォーマンスを上げたい方に</p>
                    <img src="<?= resource('img', 'raw/sect_5-svg-skywater.svg') ?>" alt="">
                </div>
                <p class="flavor color__violet">グレープ味</p>
                <div class="p-content02__main">
                    <div class="row">
                        <div class="col">
                            <div class="circles">
                                <p class="c-circle03">
                                    <span>糖類<br>
                                        控えめ</span>
                                </p>
                                <p class="c-circle03">
                                    <span>1Lあたり<br>
                                        50kcal</span>
                                </p>
                                <p class="c-circle03">
                                    <span>ハイボ<br>
                                        トニック<br>
                                        飲料</span>
                                </p>
                                <p class="c-circle03">
                                    <span>マルチ<br>
                                        アミノ酸<br>
                                        配合</span>
                                </p>
                            </div>
                            <p class="para1">
                                糖類控えめで、クエン酸3,000mgを配合しているから、スポーツ時や毎日の元気サポートにもおすすめ！
                                グレープフルーツ原料不使用で、高血圧のカルシウム拮抗薬等を飲まれている方にも安心です。
                            </p>
                            <div class="sp-center u-d-n-laptop">
                                <img src="<?= resource('img', 'raw/skywater-img02.svg') ?>" alt="">
                                <div class="drinking">
                                    <img src="<?= resource('img', 'raw/sect_5-drinking02.svg') ?>" alt="">
                                    <p class="color__violet">これなら<br>
                                        ゴクゴク<br>飲めるね</p>
                                </div>
                            </div>
                            <p class="para2">
                                栄養成分表示/小袋1袋(14.5g)当たり
                            </p>
                            <div class="table-row">
                                <div class="table-col">
                                    <div class="item">
                                        <div>
                                            <p>熱量</p>
                                            <p>タンパク質</p>
                                            <p>脂質</p>
                                            <p>炭水化物</p>
                                            <p>糖類</p>
                                            <p>食塩相当量</p>
                                            <p>カリウム</p>
                                        </div>
                                        <div>
                                            <p>50kcal</p>
                                            <p>0.2g</p>
                                            <p>0g</p>
                                            <p>13g</p>
                                            <p>11g</p>
                                            <p>1.0g</p>
                                            <p>170mg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-col">
                                    <div class="item">
                                        <div>
                                            <p>カルシウム</p>
                                            <p>マグネシウム</p>
                                        </div>
                                        <div>
                                            <p>22mg</p>
                                            <p>6mg</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <p>クエン酸</p>
                                            <p>アルギニン</p>
                                            <p>シトルリン</p>
                                            <p>グルタミン</p>
                                        </div>
                                        <div>
                                            <p>1,500mg</p>
                                            <p>30mg</p>
                                            <p>30mg</p>
                                            <p>15mg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col u-d-n-responsive">
                            <img src="<?= resource('img', 'raw/skywater-img02.svg') ?>" alt="">
                            <div class="drinking">
                                <img src="<?= resource('img', 'raw/sect_5-drinking02.svg') ?>" alt="">
                                <p class="color__violet">これなら<br>
                                    ゴクゴク<br>
                                    飲めるね</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-content02 p-content02--pink" data-aos="fade-up" data-aos-duration="1000">
                <div class="p-content02__heading">
                    <p>コンディションが気になる方に</p>
                    <img src="<?= resource('img', 'raw/sect_5-svg-skywater.svg') ?>" alt="">
                </div>
                <p class="flavor color__pink">ライチ味</p>
                <div class="p-content02__main">
                    <div class="row">
                        <div class="col">
                            <div class="circles">
                                <p class="c-circle03">
                                    <span>糖類<br>
                                        ゼロ!</span>
                                </p>
                                <p class="c-circle03">
                                    <span>1Lあたり<br>
                                        7kcal</span>
                                </p>
                                <p class="c-circle03">
                                    <span>ハイボ<br>
                                        トニック<br>
                                        飲料</span>
                                </p>
                                <p class="c-circle03">
                                    <span>マルチ<br>
                                        ビタミン<br>
                                        配合</span>
                                </p>
                            </div>
                            <p class="para1">
                                糖類ゼロで、クエン酸のほかに11種類のビタミン<br>
                                (V.B1、V.B2、V.B6、V.B12、V.A、V.C、V.D、V.E、<br>
                                葉酸、パントテン酸、ナイアシン)を配合しているから、<br>
                                スポーツ時のコンディション対策におすすめ！<br>
                                甘さすっきりで、飲みやすいライチ味です。
                            </p>
                            <div class="sp-center u-d-n-laptop">
                                <img src="<?= resource('img', 'raw/skywater-img03.svg') ?>" alt="">
                                <div class="drinking">
                                    <img src="<?= resource('img', 'raw/sect_5-drinking03.svg') ?>" alt="">
                                    <p class="color__pink">糖類<br>
                                        ゼロなら<br>あんしん</p>
                                </div>
                            </div>
                            <p class="para2">
                                栄養成分表示/小袋1袋(7g)当たり
                            </p>
                            <div class="table-row">
                                <div class="table-col">
                                    <div class="item">
                                        <div>
                                            <p>熱量</p>
                                            <p>タンパク質</p>
                                            <p>脂質</p>
                                            <p>炭水化物</p>
                                            <p>糖類</p>
                                            <p>食塩相当量</p>
                                            <p>カリウム</p>
                                            <p class="u-d-n-laptop">カルシウム</p>
                                            <p class="adjustfont u-d-n-laptop">マグネシウム</p>
                                        </div>
                                        <div>
                                            <p>7kcal</p>
                                            <p>0.05g</p>
                                            <p>0g</p>
                                            <p>5.5g</p>
                                            <p>0g</p>
                                            <p>1.0g</p>
                                            <p>158mg</p>
                                            <p class="u-d-n-laptop">34mg</p>
                                            <p class="u-d-n-laptop">6mg</p>
                                        </div>
                                    </div>
                                    <div class="item u-pt-5 u-d-n-laptop" style="border: none;">
                                        <div>
                                            <p>クエン酸</p>
                                        </div>
                                        <div>
                                            <p>1,500mg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-col u-d-n-responsive">
                                    <div class="item">
                                        <div>
                                            <p>カルシウム</p>
                                            <p class="adjustfont">マグネシウム</p>
                                            <p>V.A</p>
                                            <p>V.B<span>1</span></p>
                                            <p>V.B<span>2</span></p>
                                            <p>V.B<span>6</span></p>
                                            <p>V.B<span>12</span></p>
                                        </div>
                                        <div>
                                            <p>34mg</p>
                                            <p>6mg</p>
                                            <p>27μg</p>
                                            <p>0.04mg</p>
                                            <p>0.04mg</p>
                                            <p>0.03mg</p>
                                            <p>0.1μg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-col">
                                    <div class="item">
                                        <div>
                                            <p class="u-d-n-laptop">V.A</p>
                                            <p class="u-d-n-laptop">V.B<span>1</span></p>
                                            <p class="u-d-n-laptop">V.B<span>2</span></p>
                                            <p class="u-d-n-laptop">V.B<span>6</span></p>
                                            <p class="u-d-n-laptop">V.B<span>12</span></p>
                                            <p>V.C</p>
                                            <p>V.D</p>
                                            <p>V.E</p>
                                            <p>葉酸</p>
                                            <p>ナイアシン</p>
                                            <p class="adjustfont">パントテン酸</p>
                                            <p class="adjustfont rl">0.054mg</p>
                                        </div>
                                        <div>
                                            <p class="u-d-n-laptop">27μg</p>
                                            <p class="u-d-n-laptop">0.04mg</p>
                                            <p class="u-d-n-laptop">0.04mg</p>
                                            <p class="u-d-n-laptop">0.03mg</p>
                                            <p class="u-d-n-laptop">0.1μg</p>
                                            <p>3.6mg</p>
                                            <p>0.2μg</p>
                                            <p>0.2mg</p>
                                            <p>7μg</p>
                                            <p>0.4mg</p>
                                            <p class="hide">hide</p>
                                            <p class="adjustfont rr">-0.36mg</p>
                                        </div>
                                    </div>
                                    <div class="item u-pt-5 u-d-n-responsive" style="border: none;">
                                        <div>
                                            <p>クエン酸</p>
                                        </div>
                                        <div>
                                            <p>1,500mg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-col u-d-n"></div>

                            </div>
                        </div>
                        <div class="col u-d-n-responsive">
                            <img class="u-mt-15" src="<?= resource('img', 'raw/skywater-img03.svg') ?>" alt="">
                            <div class="drinking">
                                <img src="<?= resource('img', 'raw/sect_5-drinking03.svg') ?>" alt="">
                                <p class="color__pink">糖類<br>
                                    ゼロなら<br>
                                    あんしん</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <img class="top-bg" src="<?= resource('img', 'raw/sect_6-bg01.png') ?>" alt="">
</section>
<section class="sect_6" id="sect_6">
    <div class="l-wrap">
        <div class="sect_6__header">
            <p class="c-heading03 c-heading03__main">
                毎日の暮らしに無理なく、<br>
                #疲労感軽減ルーティンを<br class="u-d-n-laptop">取り入れましょう。
            </p>
        </div>
    </div>
    <div class="p-content01" data-aos="fade-up" data-aos-duration="1000">
        <div class="l-wrap">
            <div class="p-content01__main">
                <div class="p-content01__row">
                    <div class="p-content01__column">
                        <img src="<?= resource('img', 'raw/sect_6-img01.png') ?>" alt="">
                        <p class="badge">機能性表示食品</p>
                        <div class="frame u-d-n-laptop">
                            <div class="frame__content">
                                <p>疲労感<br>
                                    軽減</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-content01__column">
                        <p class="heading"><span>クエン酸3,000mg配合</span><span>※</span><br class="u-d-n-laptop">で疲労感を軽減！</p>
                        <div class="row">
                            <div class="paragraph">
                                <p>
                                    クエン酸を1ℓ当たり3,000mg 配合。継続摂取により、日常生活や運動後の疲労感を軽減することが期待されます。
                                </p>
                                <p>※グレープフルーツ味のみ</p>
                            </div>
                            <div class="frame u-d-n-responsive">
                                <div class="frame__content">
                                    <p>疲労感<br>
                                        軽減</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-content01__footer">
                    本品は、事業者の責任において特定の保健の目的が期待できる旨を表示するものとして、消費者庁長官に届出されたものです。ただし、特定保健用食品と異なり、 消費者庁長官による個別審査を受けたものではありません。本品は、疾病の診断、治療、予防を目的としたものではありません。食生活は、主食、主菜、副菜を基本に、食事のバランスを。
                </p>
            </div>
        </div>
    </div>
</section>
<section class="sect_7" id="sect_7">
    <div class="l-wrap">
        <div class="sect_7__main_content">
            <div class="content01" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <p class="col1">暑さには、発汗対策を忘れずに。</p>
                    <div class="col2">
                        <p>すばやい水分と電解質の補給を。</p>
                        <p>クラシエの <span>経口補水液</span></p>
                    </div>
                    <img src="<?= resource('img', 'raw/sect_7-img01.png') ?>" alt="">
                </div>
            </div>
            <div class="content02" data-aos="fade-up" data-aos-duration="1000">
                <img class="u-d-n-responsive" src="<?= resource('img', 'raw/sect_7-img02.png') ?>" alt="">
                <img class="u-d-n-laptop" src="<?= resource('img', 'raw/sect_7-img02-sp.png') ?>" alt="">
            </div>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>