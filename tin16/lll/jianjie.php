<?php
echo "<html><head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='./main.css' rel='stylesheet' type='text/css' />";
echo "<style type='text/css'>
body{ text-align:left} 
#divcenter{margin:0 auto;width:800px}</style>
</head><body><div id='divcenter'>";
echo "<font size=4><center><h1>勇者斗恶龙9游戏简介</h1></center>
<p><br><center><strong>【职业系统详解】</strong></center><br>
本次游戏一共有6个初始职业，6个上级职业。主角初始状态是旅行艺人职业，完成达玛神殿的剧情以后即可进行转职。上级职业需要完成特定的任务以后才能开启，职业开启后可以随时进行转职，无视角色的等级与职历。转职成其他职业以后，等级归零，咒文也不保留，仅保留前职业分配的技能点数。注意如果有两个职业的技能其中某一项共通的话，该项的技能点可以跨职业累计。比如战士和旅行艺人都具有剑技能，如果转职前在战士职业上加了20点剑技能的话，转职成旅行艺人之后可以直接从20点开始继续累加。 <br>
  此外，每个职业的最后一项技能都是被动技能，如&ldquo;常时力量+10&rdquo;等等。这些被动技能一旦习得之后将会永久生效，而且即使转成其他职业，被动技能的效果也会继续加成。 <br>
  某些职业会限制角色的装备，如战斗大师和游侠等职业无法装备盾牌等，不过只要将某些主动技能修满100点以后，可以开启装备破限的特权。比如盾技能100点的特权是全职业可以装备盾牌，剑技能100点是全职业可以装备剑等等。当然，如果以剑技能100点的状态转职为魔法师的话，魔法师不但可以装备剑，而且所有的剑技能都可以使用。 <br>
  转职成新职业之后，装备品全部自动卸下，需要手动给角色重新装备该职业对应的装备品。但如果先前曾经转过某个职业的话，转职后角色身上的装备将会自动复原为原先的装备品。如果其中某些装备已经不存在或者被其他角色正在装备中的话，该项装备栏会自动留空。 <br>
<center><strong>【炼金壶简介】</strong></center><br>
   完成黑骑士的剧情之后，回到鲁伊达酒店即可开启炼金壶系统。所谓的炼金壶就是合成系统，可以通过合成公式合成必要的道具和装备等。合成的素材通过城镇中搜刮、敌人掉落以及商店购买可以得到，而合成公式需要在各个村庄内翻阅书柜可以获得。通过合成系统可以合成出更强的装备，也可以合成出上级回复道具等。需要注意合成的时候必须参考公式，如果不按照公式将会无法合成。合成不需要时间，选择合成素材之后，合成的成功或失败当场即可知晓。 <br>
<center><strong>【任务系统简介】</strong></center><br>
  在各大城镇、村庄中靠近NPC时，如果对方头上出现蓝色的光标即表明该NPC有任务委托。和NPC对话之后，答应对方的委托即可开始任务。任务的种类非常多，有的比较简单，如摆姿势等，有的则需要讨伐规定数量的特定怪物等等。完成任务之后可以得到一定的奖励，包括物质上的奖励以及开启必杀技、获得藏宝图、甚至是转职任务等等。游戏中任务的数量种类繁多，想要查看现在正在完成中的任务可以通过战历里面的选项来随时查看。 <br>
 </p></font>";
echo "</div></body></html>";
?>
<?php
include_once("/var/www/counter.php");
upcounter(__FILE__)
?>
