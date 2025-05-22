<?php
  $girl_list = [
    //女の子プロフィールの配列
		$sarina = [
      'name'=>'なるみ', //名前
			'age'=>'22', //年齢
			'height'=>'155',//身長
			'size'=>'B.85(C) / W.56 / H.85', //3サイズ
      'rank'=>'gold', //platinum,gold,blackのどれかを入力
			'pic'=>'000', //ngもしくは女の子の画像名を入力
			'shop'=>'京橋店', //店舗名
		  'time'=>'09:00～19:00',//出勤時間
      'new'=> true //新人
			],
		$akari = [
      'rank'=>'gold',
      'pic'=>'ng',
      'shop'=>'日本橋店',
      'name'=>'のんな',
      'age'=>'24',
      'height'=>'155',
      'size'=>'B.83(B) / W.56 / H.85',
      'time'=>'12:00～20:00'
			],
		$yuuna = [
      'rank'=>'gold',
      'pic'=>'ng',
      'shop'=>'梅田店',
      'name'=>'ゆき',
      'age'=>'20',
      'height'=>'157',
      'size'=>'B.87(E) / W.59 / H.86',
      'time'=>'12:00～20:00'
			],
		$hikari = [
      'rank'=>'gold',
      'pic'=>'001',
      'shop'=>'難波店',
      'name'=>'麦',
      'age'=>'26',
      'height'=>'154',
      'size'=>'B.83(C) / W.55 / H.83',
      'time'=>'12:00～20:00'
			],
		$misa = [
      'rank'=>'gold',
      'pic'=>'ng',
      'shop'=>'難波店',
      'name'=>'莉乃',
      'age'=>'21',
      'height'=>'158',
      'size'=>'B.87(E) / W.59 / H.84',
      'time'=>'12:00～20:00'
			],
    $yumi = [
      'rank'=>'black',
      'pic'=>'002',
      'shop'=>'京橋店',
      'name'=>'スミレ',
      'age'=>'24',
      'height'=>'152',
      'size'=>'B.87(D) / W.58 / H.87',
      'time'=>'13:00～19:00'
    ],
    $mei = [
      'rank'=>'gold',
      'pic'=>'003',
      'shop'=>'谷九店',
      'name'=>'愛',
      'age'=>'24',
      'height'=>'150',
      'size'=>'B.83(B) / W.54 / H.83',
      'time'=>'09:00～19:00'
    ],
    $rimu = [
      'rank'=>'gold',
      'pic'=>'ng',
      'shop'=>'日本橋店',
      'name'=>'美里',
      'age'=>'26',
      'height'=>'163',
      'size'=>'B.85(C) / W.57 / H.83',
      'time'=>'13:00～20:00',
      'new'=> true
    ],
    $marina = [
      'rank'=>'platinum',
      'pic'=>'004',
      'shop'=>'天王寺店',
      'name'=>'美玲',
      'age'=>'22',
      'height'=>'157',
      'size'=>'B.82(B) / W.58 / H.84',
      'time'=>'17:00～3:00'
    ],
    $yuu = [
      'rank'=>'platinum',
      'pic'=>'009',
      'shop'=>'日本橋店',
      'name'=>'あさぎ',
      'age'=>'23',
      'height'=>'158',
      'size'=>'B.85(D) / W.56 / H.84',
      'time'=>'14:00～20:00'
    ],
    
    //以下顔出しNG
    $nanami = [
      'rank'=>'gold',
      'pic'=>'ng',
      'shop'=>'京橋店',
      'name'=>'めい',
      'age'=>'22',
      'height'=>'149',
      'size'=>'B.83(C) / W.54 / H.82',
      'time'=>'14:00～3:00'
    ],
    $ayaka = [
      'rank'=>'platinum',
      'pic'=>'005',
      'shop'=>'谷九店',
      'name'=>'ひなた',
      'age'=>'23',
      'height'=>'160',
      'size'=>'B.84(D) / W.58 / H.86',
      'time'=>'15:00～20:00'
    ],
    $mari = [
      'rank'=>'platinum',
      'pic'=>'006',
      'shop'=>'難波店',
      'name'=>'香',
      'age'=>'22',
      'height'=>'151',
      'size'=>'B.83(B) / W.56 / H.83',
      'time'=>'13:00～20:00'
    ],
    $narumi = [
      'rank'=>'gold',
      'pic'=>'007',
      'shop'=>'京橋店',
      'name'=>'春奈',
      'age'=>'21',
      'height'=>'148',
      'size'=>'B.85(D) / W.56 / H.84',
      'time'=>'18:00～3:00',
      'new'=> true
    ],
    $tinatsu = [
      'rank'=>'platinum',
      'pic'=>'008',
      'shop'=>'日本橋店',
      'name'=>'たまき',
      'age'=>'21',
      'height'=>'158',
      'size'=>'B.84(C) / W.56 / H.84',
      'time'=>'17:00～3:00'
    ]
  ];

  //曜日の配列
  $week = ['(日)','(月)','(火)','(水)','(木)','(金)','(土)'];
  $date = date('w');
  $now = date('G:i:s');

  //曜日ごとの配列
  $all = $girl_list; //全員
  $rank = array($sarina,$narumi);
  $day0 = array($akari,$sarina,$rimu,$narumi,$nanami,$sarina);
  $day1 = array($yumi,$rimu,$yuu,$ayaka,$mari,$tinatsu);
  $day2 = array($sarina,$rimu,$ayaka,$narumi,$nanami);
  $day3 = array($ayaka,$sarina,$akari,$marina,$mei,$rimu);
  $day4 = array($yumi,$rimu,$marina,$ayaka,$mari,$narumi,);
  $day5 = array($akari,$yumi,$mei,$rimu,$marina,$mari,$narumi,);
  $day6 = array($sarina,$akari,$mei,$rimu,$mari,$tinatsu);
  // 本日の出勤
  $top = ${'day'.$date}; 
  // トップの新人
  $newface = array($narumi,$sarina,$rimu,$tinatsu); 
  // ピックアップ
  $info = $yuu;

  //店舗タブ用
  $umeda = array($sarina,$mei);
  $namba = array($akari,$yuuna,$hikari,$misa);
  $nihonbashi = array($rimu,$yuu,$tinatsu);
  $kyobashi = array($yumi,$nanami,$mari);
  $tennoji = array($marina,$narumi);
  $tanikyu = array($ayaka);


  //パラメータを取得
  if(isset($_REQUEST["day"])){
    $day = htmlspecialchars($_REQUEST["day"], ENT_QUOTES, 'UTF-8');
  } else {
    $day = 0;
  };
?>
