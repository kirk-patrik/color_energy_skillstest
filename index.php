<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'index', 'headCSS' => ['page/top.css']]) ?>
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
        <div class="flow__frame">
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
                <div class="flow__type">
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
            <div class="p-content02 p-content02--blue">
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
            <div class="p-content02 p-content02--violet">
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
            <div class="p-content02 p-content02--pink">
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
    <div class="p-content01">
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
            <div class="content01">
                <div class="row">
                    <p class="col1">暑さには、発汗対策を忘れずに。</p>
                    <div class="col2">
                        <p>すばやい水分と電解質の補給を。</p>
                        <p>クラシエの <span>経口補水液</span></p>
                    </div>
                    <img src="<?= resource('img', 'raw/sect_7-img01.png') ?>" alt="">
                </div>
            </div>
            <div class="content02">
                <img class="u-d-n-responsive" src="<?= resource('img', 'raw/sect_7-img02.png') ?>" alt="">
                <img class="u-d-n-laptop" src="<?= resource('img', 'raw/sect_7-img02-sp.png') ?>" alt="">
            </div>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>