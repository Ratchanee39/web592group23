<style>

#menu {	text-align:center; margin-top: 50px;}

#menu button{
	font-size: 16pt;
	width: 300px;
	height:50px;
	border: 2px solid #000;
	margin: 10px;
	display:block;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	}
	button.level1 { background-color: #FDB4BF }
	button.level2 { background-color: #88DDBB }
	button.level3 { background-color: #F2ED8C }
	
#menu button:hover {
	background-color: #00AA00;
	color:#FFFFFF;
	border-radius: 20px;
	}
	
#play_pane{
	display:none;
	font-size: 24pt
	background-color: #66FFFF;
	height:300pxmargin: 20px
	border: 3px outset #FC0;
}
.box {
	border: 1pt solid #000;
	width: 80px; height: 70px;
	text-align: center;
	background-color: #FF66CC;
	display: inline-block;
	padding-top:20px;
	font-size: 28pt;
}
#msg_pane{
	position:absolute;
	display:none;
	left:250px;
	top:250px;
	text-align: center;
	font-size: 28pt;
	width:400px; height:100px;
	border: 2px solid #ffffff;
	padding:30px;
	}
.wrong { background: #9999FF; }
.right { background : #FF6699;
}


	
</style>
<div id='menu'>
<h2>เลือกระดับความยาก</h2> <br>
	<button class='level1' onclick="startGame(1)"><b>ง่าย ตัวเลขไม่เกิน 20</b></button>
	<button class='level2' onclick="startGame(2)"><b>ปานกลาง ตัวเลขไม่เกิน 50</b></button>
	<button class='level3' onclick="startGame(3)"><b>ยาก ตัวเลขไม่เกิน 100</b></button>
</div>
<div id='play_pane'>
	<div>
		ระดับ :<span id='lb_level'>1</span> ข้อที่ :<span id='lb_pbno'>1</span>
		ตอบถูก:<span id='lb_score'>0</span> ตอบผิด:<span id='lb_wrong'>0</span>
	</div>
	<div>
		<span id='lb_num1' class='box'>0</span> + 
		<span id='lb_num2' class='box'>0</span> =
		<span >?</span>
	</div>
	<div>
		<b>ให้เลือกคำตอบที่ถูกต้อง</b> <br>
		<span id='lb_ans1' class='box' onclick='ansclick(this)'>0</span>
		<span id='lb_ans2' class='box' onclick='ansclick(this)'>0</span>
		<span id='lb_ans3' class='box' onclick='ansclick(this)'>0</span>
		<span id='lb_ans4' class='box' onclick='ansclick(this)'>0</span>
		<span id='lb_ans5' class='box' onclick='ansclick(this)'>0</span>
		<span id='lb_ans6' class='box' onclick='ansclick(this)'>0</span>
	</div>
<div id='msg_pane'></div>
</div>
<script>
	function show(x){
		x.style.display = 'block';
	}
	function hide(x){
		x.style.display = 'none';
	}
	function sortNumber(a,b){
		return a - b;
	}
	var level=0;
	var score=0, wrong=0,pbno=1;
	var num1=0,num2=0;
	function startGame(lv){
		level = lv;
		hide(menu);
		show(play_pane);
		score=0;
		wrong=0;
		pbno=1;
		showPlayPane();
	}
	function showPlayPane(){
		lb_level.innerHTML = level;
		lb_pbno.innerHTML = pbno;
		lb_score.innerHTML = score;
		lb_wrong.innerHTML = wrong;
		
		max = 20;
		if(level == 2) max = 50;
		if(level == 3) max = 100;
		do{
			num1 = Math.round(Math.random()*max);
			num2 = Math.round(Math.random()*15);
		}while(num1+num2 > max);
		
		lb_num1.innerHTML = num1;
		lb_num2.innerHTML = num2;
		
		num3 = num1 + num2;
		ans = new Array();
		ans.push(num3);
		x = Math.round(num3-Math.random()*10);
		for(i = 0;i < 5;i++){
			do{
				x +=2;
			}while(x == num3);
			ans.push(x);
		}
		ans = ans.sort(sortNumber);
		for(i = 1;i <= 6;i++){
			document.getElementById('lb_ans' + i).innerHTML = ans[i-1];
			document.getElementById('lb_ans' + i).style.backgroundColor="green";
		}
	}
	function ansclick(x){
		ans = Number(x.innerHTML);
		if(ans == num1 + num2){
			score++;
			pbno++;
			msg_pane.innerHTML = "ว้าวววววเก่งมาก!!";
			msg_pane.className = 'right';
			msg_pane.style.display = "block";
			x.style.backgroundColor= 'brown';
			window.setTimeout("hide(msg_pane)",2000);
			window.setTimeout("showPlayPane()",2000);
		}else{
			wrong++;
			lb_wrong.innerHTML = wrong;
			msg_pane.innerHTML = "เสียใจด้วย!!!ลองใหม่นะ";
			x.style.backgroundColor = '#990000';
			msg_pane.className = 'wrong';
			msg_pane.style.display = "block";
			window.setTimeout("hide(msg_pane)",3000);
		}
	}
</script

