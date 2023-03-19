<?php

$list = [
  ["group"=>"国内ドラマ","list"=>[
                          ["name"=>"逃げるは恥だが役に立つ","description"=>"星野源×新垣結衣のリアルカップルも誕生！契約結婚がテーマの「ムズキュン」ラブストーリー","url"=>"https://www.tbs.co.jp/NIGEHAJI_tbs/"],
                          ["name"=>"silent","description"=>"日本中を夢中にさせた社会現象ドラマ！温かさと切なさに誰もが号泣すること間違いなし","url"=>"https://www.fujitv.co.jp/silent/"],
                          ["name"=>"リッチマン、プアウーマン","description"=>"小栗旬×石原さとみ主演！ベンチャー企業社長と東大リケジョのお仕事系ラブストーリー","url"=>"https://ciatr.jp/topics/32620"]
                        ]
  ],
  ["group"=>"韓国ドラマ","list"=>[
                          ["name"=>"愛の不時着","description"=>"ヒョンビンロス続出！？南北の壁を超える愛を描くストーリー","url"=>"https://www.netflix.com/jp/title/81159258"],
                          ["name"=>"トッケビ～君がくれた愛しい日々～","description"=>"絶対に出会わなかった2人が、運命の厳しさを感じながらも心から愛し合っている姿に、切なさを覚えることでしょう。","url"=>"http://tokkebi.jp/"],
                          ["name"=>"梨泰院クラス","description"=>"若い飲食店経営者がカネと権力を理不尽に振りかざす巨大企業に、屈せずに立ち向かうサクセスストーリー","url"=>"https://www.netflix.com/jp/title/81193309"]
                        ]
  ],
  ["group"=>"映画","list"=>[
                          ["name"=>"万引き家族","description"=>"現代日本の闇と家族とはなにかを描く","url"=>"https://gaga.ne.jp/manbiki-kazoku/"],
                          ["name"=>"おくりびと","description"=>"さまざまな死と向き合う邦画の名作","url"=>"https://www.shochiku.co.jp/cinema/database/04689/"],
                          ["name"=>"花束みたいな恋をした","description"=>"ハッピーエンド至上主義の方は、深い傷を負うかもしれません。胸キュン要素は多いものの、覚悟して観てください！","url"=>"https://hana-koi.jp/"]
                        ]
  ],
  ["group"=>"アニメ","list"=>[
                          ["name"=>"チェンソーマン","description"=>"父親の借金返済のために極貧生活をしていた主人公・デンジが仕事を斡旋していたヤクザに騙され殺されてしまうも、相棒・ポチタの命と引き換えにチェンソーの悪魔として復活します。 大きな夢を持たず、普通の日常を過ごすために公安のデビルハンターとして銃の悪魔との討伐を目指すダークファンタジー","url"=>"https://chainsawman.dog/"],
                          ["name"=>"ブルーロック","description"=>"2022年のワールドカップ優勝に向けた、型破りな選手育成プロジェクトを描く。 「ブルーロック」と呼ばれる施設で、全国から選ばれた300人の高校生FWが、最後の一人になるために戦うサバイバルサッカー漫画。","url"=>""],
                          ["name"=>"SPY×FAMILY","description"=>"赤の他人だったスパイの男、殺し屋の女、超能力者の少女が「仮初の家族」を築き、「家族としての普通の日常」を送るために日々のトラブルと奮闘するホームコメディ。","url"=>"https://spy-family.net/"]
                        ]
  ]
];

?>

<!DOCTYPE html>
<html>
<head>
  <title>おすすめドラマ・映画・アニメ</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
  <?php foreach ($list as $item) { ?>
    <h2 class="food_title"><?php echo $item["group"]; ?></h2>
    <ul>
      <?php $i = 0; ?>
      <?php foreach ($item["list"] as $foodList) { ?>

        <?php $i++; ?>
        <li>
        <h3 class="food_title type<?php echo $i; ?>">
          <a href="<?php echo $foodList["url"]; ?>" target="_blank">
            <?php echo $foodList["name"]; ?>
          </a>
          <p class="rec">
          <?php if($foodList["name"] == "リッチマン、プアウーマン"){
            echo "　イチオシ！！！";
          }elseif($foodList["name"] == "梨泰院クラス"){
            echo "　イチオシ！！！";
          }elseif($foodList["name"] == "万引き家族"){
            echo "　イチオシ！！！";
          }elseif($foodList["name"] == "SPY×FAMILY"){
            echo "　イチオシ！！！";
          }
          ?>
          </p>
        </h3>
        <div><?php echo $foodList["description"]; ?></div>
      </li>
      <?php } ?>
    </ul>

  <?php } ?>

</body>
</html>