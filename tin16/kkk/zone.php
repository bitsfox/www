<?php
echo "<html><head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='./main.css' rel='stylesheet' type='text/css' />";
echo "<style type='text/css'>
body{ text-align:left} 
#divcenter{margin:0 auto;width:800px}</style>
</head><body><div id='divcenter'>";
echo "
本作的职业系统采用了&ldquo;战斗次数=职业熟练度&rdquo;的设定，但是和弱小的怪物战斗不会提高熟练度。何种情况不会提升熟练度？下表中显示的数字即为等级，当角色等级<font color='#ff0000'>大于</font>该数值之后，就算战斗次数再多也不会再加算熟练度了。熟练度只和地域有关，当同样的怪物在不同的地方出现时，熟练度限界等级也未必相同。DS版和原版没有任何变化<br />
游戏中期值得推荐的地方是梦世界的魔术师塔，那里怪物实力不强，但是熟练度限界等级是99，方便练职业。</p>
<p><br />
场所&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;限界等级<br />
梦世界ライフコッド周围&mdash;&mdash;５<br />
梦世界山肌の道全域&mdash;&mdash;５<br />
梦世界ライフコッド南方告示牌周围&mdash;&mdash;６<br />
梦世界シエーナ周围（街往东５步为止）&mdash;&mdash;７<br />
梦世界大穴周围（后期メダル王城周围）&mdash;&mdash;７<br />
现实世界トルッカ周围&mdash;&mdash;８<br />
梦世界レイドック周围（城往南５步）&mdash;&mdash;９<br />
梦世界暴れ馬の森周围、試練の塔周围&mdash;&mdash;９<br />
梦世界試練の塔全域&mdash;&mdash;１０<br />
梦世界レイドック北东关所～川の抜け道&mdash;&mdash;１１<br />
梦世界川の抜け道&mdash;&mdash;１２<br />
梦世界の抜け道～ダーマ神殿、ダーマ神殿周围&mdash;&mdash;１３<br />
现实世界ダーマ神殿&middot;サンマリーノ&middot;マーズの馆周围&mdash;&mdash;１４<br />
现实世界夢見の洞窟周围（洞窟往北９步为止）&mdash;&mdash;１４<br />
现实世界夢見の洞窟Ｂ１Ｆ&mdash;&mdash;１４<br />
现实世界夢見の洞窟Ｂ２Ｆ以后&mdash;&mdash;１５<br />
现实世界レイドック&middot;月鏡の塔周围&mdash;&mdash;１６<br />
现实世界アモール周围&mdash;&mdash;１６<br />
梦世界アモール周围（アモール往南１步）&mdash;&mdash;１７<br />
梦世界アモール西方和アモール南方半岛北侧&mdash;&mdash;１７<br />
梦世界アモール北洞窟Ｂ２Ｆ&mdash;&mdash;１５<br />
梦世界アモール北洞窟Ｂ３Ｆ以后&mdash;&mdash;１８<br />
现实世界月鏡の塔全域&mdash;&mdash;１９<br />
梦世界地底魔城周围&mdash;&mdash;２０<br />
梦世界地底魔城全域&mdash;&mdash;２１<br />
现实世界ゲントの村周围&mdash;&mdash;２２<br />
现实世界ムドー島周围&mdash;&mdash;２２<br />
现实世界ムドーの島３Ｆ为止&mdash;&mdash;２３<br />
现实世界ムドーの島４Ｆ以上&mdash;&mdash;２４<br />
现实世界ムドーの城&mdash;&mdash;２５<br />
海梦世界（ムドーの島和天馬の塔周围海域）&mdash;&mdash;２６<br />
现实世界小さな祠（レイドック南）周围&mdash;&mdash;２４<br />
现实世界フォーン城北井户周围以及レイドック南の祠西边&mdash;&mdash;２３<br />
现实世界モンストル&middot;モンストル北の山周围&mdash;&mdash;２２<br />
现实世界モンストル北の山全域&mdash;&mdash;２３<br />
现实世界アークボルト西边&mdash;&mdash;２２<br />
现实世界アークボルト周围&mdash;&mdash;２４<br />
现实世界旅の洞窟（アークボルト北）&mdash;&mdash;２５<br />
现实世界三栋并排的家（アークボルト北）周围&mdash;&mdash;２５<br />
梦世界カルカド东侧&mdash;&mdash;２５<br />
梦世界砂漠の抜け道（カルカド）&mdash;&mdash;２４<br />
梦世界カルカド周围、幸せの国周围&mdash;&mdash;２５<br />
梦世界海上（幸せの国南、ダーマ神殿北方海域）&mdash;&mdash;２４<br />
梦世界海上（世界中心海域）&mdash;&mdash;２４<br />
梦世界ダーマ神殿南方井户周围&mdash;&mdash;２５<br />
梦世界ダーマ神殿南方井户南方（ゼニスの城北部）&mdash;&mdash;２６<br />
梦世界魔術師の塔北方群岛&mdash;&mdash;２６<br />
梦世界魔術師の塔周围、包含山脈东侧的西边&mdash;&mdash;２６<br />
梦世界魔術師の塔山脉东侧&mdash;&mdash;２７<br />
梦世界クリアベールの山脈东侧&mdash;&mdash;２７<br />
现实世界关所（ホルストック北）周围（ホルコッタ南方２步为止）&mdash;&mdash;２４<br />
现实世界ホルストック&middot;ホルコッタ&middot;洗礼の祠周围&mdash;&mdash;２７<br />
现实世界洗礼の祠全域&mdash;&mdash;２８<br />
梦世界クリアベール周围、含北部和西部&mdash;&mdash;２７<br />
现实世界クリアベールの西台阶&middot;お洒落な锻冶屋周围&mdash;&mdash;２９<br />
现实世界クリアベール&middot;運命の壁周围&mdash;&mdash;２９<br />
现实世界運命の壁全域&mdash;&mdash;３０<br />
梦世界森の教会（グレイス城所在的岛）周围（教会东边）&mdash;&mdash;２９<br />
梦世界占いの館（グレイス城所在的岛）周围、グレイス城周围&mdash;&mdash;３１<br />
梦世界アモールの南方半岛南侧&mdash;&mdash;３２<br />
梦世界スライム格闘場北方占卜馆周围&mdash;&mdash;３２<br />
梦世界スライム格闘場周围&mdash;&mdash;２４<br />
梦世界カルベローナ周围&mdash;&mdash;３１<br />
现实世界ライフコッド周围以及其南（小屋向西８步为止）&mdash;&mdash;１９<br />
现实世界山肌の道&mdash;&mdash;２６<br />
梦世界ダーマ神殿南方井户山脉东侧&mdash;&mdash;３３<br />
梦世界ゼニスの城周围&mdash;&mdash;３３<br />
狭間絶望の町&middot;ヘルハーブの湯周围&mdash;&mdash;２４<br />
现实世界フォーン城周围&mdash;&mdash;９９<br />
梦世界海梦世界（カルベローナ周边海域以及地图外侧的海域）&mdash;&mdash;９９<br />
梦世界魔術師の塔&mdash;&mdash;９９<br />
现实世界海梦世界（海底神殿和沈没船所在海域）&mdash;&mdash;９９<br />
现实世界アモール西方以及ペスカニ周围&mdash;&mdash;９９<br />
现实世界海底全域&mdash;&mdash;９９<br />
现实世界沈没船&mdash;&mdash;９９<br />
梦世界井戸（ダーマ神殿南）&mdash;&mdash;９９<br />
现实世界マウントスノー山脚之家周围以及グレイス城所在的島&mdash;&mdash;９９<br />
现实世界マウントスノー&middot;氷の洞窟周围&mdash;&mdash;９９<br />
现实世界マウントスノー北方井户周围&mdash;&mdash;９９<br />
现实世界海底神殿&mdash;&mdash;９９<br />
现实世界ポルテの家周围&mdash;&mdash;９９<br />
现实世界ライフコッド山脚&mdash;&mdash;９９<br />
现实世界ロンガデセオ周围&mdash;&mdash;９９<br />
现实世界ガンディーノ&middot;神の祠&middot;天馬の塔周围&mdash;&mdash;９９<br />
不思議な洞窟（Ｂ２Ｆ为止）&mdash;&mdash;９９<br />
现实世界不思議な洞窟（Ｂ４Ｆ）&mdash;&mdash;９９<br />
现实世界地现实世界水脈（レイドック井户）&mdash;&mdash;９９<br />
现实世界氷の洞窟&mdash;&mdash;９９<br />
梦世界ライフコッド北东部&mdash;&mdash;９９<br />
现实世界ザクソン周围&mdash;&mdash;９９<br />
现实世界海梦世界（地图外侧海域）&mdash;&mdash;９９<br />
现实世界海梦世界（ガンディーノ西侧海域）&mdash;&mdash;９９<br />
现实世界天馬の塔全域&mdash;&mdash;９９<br />
狭間世界全域&mdash;&mdash;９９<br />
隐藏迷宫全域&mdash;&mdash;９９";
echo "</div></body></html>";
?>
<?php
include_once("/var/www/counter.php");
upcounter(__FILE__)
?>
