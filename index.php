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
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>