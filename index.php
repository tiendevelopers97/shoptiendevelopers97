
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Meta-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Title-->
	<title>PULSE - Coming Soon</title>
	<!--CSS-->
	<link rel="stylesheet" href="./thc-assets/thc-css/tiendevelopers-main.blue.css" id="color-switcher">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
	<link rel="stylesheet" href="./thc-assets/thc-css/tiendevelopers-mCustomScrollbar.min.css">
	<style>
	#more::-webkit-scrollbar{
		width: 6px;
		background-color: #F5F5F5;
	}
	#more::-webkit-scrollbar-thumb{
		background-color: #000000;
	}

	</style>

<style>

.more .portfolio .work:nth-child(1) { background:url(./thc-assets/thc-image/thc-avatarchuweb.jpg) center/cover no-repeat; }
.more .portfolio .work:nth-child(2) { background:url(./thc-assets/thc-image/avatar-no.jpg) center/cover no-repeat; }
.more .portfolio .work:nth-child(3) { background:url(./thc-assets/thc-image/avatar-no.jpg) center/cover no-repeat; }
.more .portfolio .work:nth-child(4) { background:url(./thc-assets/thc-image/avatar-no.jpg) center/cover no-repeat; }

.music-box{position:fixed;width:300px;height:160px;z-index:120;bottom:30px;left:30px}
.music-box a{color:#fff}
@media (max-width: 991px) {
.music-box{width:250px;height:120px;left:auto;left:30px}
}
.music-box .music-holder{width:100%;height:100%;border:2px solid #eee;position:absolute;left:0;top:-30px;visibility:hidden;opacity:0;-webkit-transition:all .5s ease-out;-o-transition:all .5s ease-out;transition:all .5s ease-out}
.music-box .music-holder iframe{width:100%;height:100%}
.music-box button{background:rgba(0,0,0,0.1);width:40px;height:40px;line-height:0;font-size:18px;font-size:1rem;color:#fff;border:1px solid #e6e6e6;outline:0;padding:0;margin:0;position:absolute;left:0;bottom:0;-webkit-border-radius:50%;-moz-border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;border-radius:50%}
@media (max-width: 991px) {
.music-box button{left:auto;left:0}
}
.music-box .toggle-music-box{top:-50px;visibility:visible;opacity:1}

.fill {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    right: 0;
    bottom: 0;
    padding: 0!important;
    margin: 0!important;
}

@keyframes sparkle {
    0% { background-position:0 0,0px 0,0px 0; } 100% { background-position:-500px -1000px,-400px -400px,300px 300px; } 
} 
.effect-sparkle { background-image:url("https://i.imgur.com/UylqP0m.png"),url("https://i.imgur.com/VvrcsW4.png"); animation:sparkle 10s linear infinite; }

</style>
	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Raleway|Righteous" rel="stylesheet">
</head>
<body>
 <div class="tiendevelopers active">
  <div class="centered">
   <img class="tiendevelopers-avatar avatartien" src="./thc-assets/thc-image/thc-avatarchuweb.jpg" alt="Tiến Developerss 97">
   <h1 class="title">Tiến Developers 97</h1>
   <h2 class="heading">Coming Soon</h2>
   <div class="countdown" id="countdown">Đếm Ngược Thời Gian Tiến Developers 97</div>
   <p class="description">Trang web của chúng tôi đang được xây dựng, chúng tôi đang làm việc rất chăm chỉ để mang đến cho bạn trải nghiệm tốt nhất với trang web này.</p>
   <div class="buttons">
    <a id="know-more-button" href="#" class="button btn-round btn-solid">Thông Tin & Liên Hệ <br/> Với Tôi</a>
	<a id="subscribe-button" href="#" class="button btn-round btn-ghost">Đăng Ký Nhận <br/> Thông Tin SHOP</a>
   </div>
  </div>
  <div class="social-text">
   <a href="#">Facebook</a>
   <a href="#">Twitter</a>
   <a href="#">Instagram</a>
   <a href="#">Behance</a>
  </div>
  <div class="effect-sparkle bg-effect fill no-click"></div>
  <div class="modal modal-subscirbe" id="subscribe-modal">
   <div class="content">
    <h2>Đăng Ký Nhận Tin Tức <br/> Mới Nhất Từ SHOP</h2>
	<p>Vui lòng nhập email để nhận mọi tin tức mới nhất từ Website Shop.</p>
	<form id="mc-form" class="subscribe-form subscribe-split">
	 <input id="mc-email" type="email" placeholder="Nhập Địa Chỉ E-Mail">
	 <input class="btn-solid" type="submit" value="Gửi">
	 <label class="response" for="mc-email">Result</label>
	</form>
   </div>
   <div class="exit" id="subscribe-close">+</div>
  </div>
 </div>
	<!--More-->
	<div class="more" id="more" data-mcs-theme="minimal-dark">
		<div class="exit" id="more-close">+</div>
		<h1 class="more-heading">Giới Thiệu Web</h1>
		<p class="more-description">Đây là hệ thống Website SHOP của Tiến Nguyễn sắp được hoàn thiện và đi vào hoạt động tới đây.</p>
		<h2 class="more-sub-heading">Quản Lý Website</h2>
		<div class="portfolio">
			<div class="work">
				<div class="work-card">
					<div class="content">
						<p class="name">Tiến</p>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<div class="work">
				<div class="work-card">
					<div class="content">
						<p class="name">Không Rõ</p>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<div class="work">
				<div class="work-card">
					<div class="content">
						<p class="name">Không Rõ</p>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<div class="work">
				<div class="work-card">
					<div class="content">
						<p class="name">Không Rõ</p>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
		<h2 class="more-sub-heading">Gửi Tin Nhắn Tới Chủ Website</h2>
		<!--p class="more-description">Bạn muốn liên hệ với tôi!</p-->
		<form action="#" class="contact-form" id="contact-form">
			<div class="name">
				<label for="name">Tên (Name):</label>
				<input name="name" id="name" type="text">
			</div>
			<div class="email">
				<label for="email">Hộp Thư (Email):</label>
				<input name="email" id="email" type="email">
			</div>
			<div class="clearfix"></div>
			<div class="message">
				<label for="message">Tin Nhắn (Message):</label>
				<textarea name="message" id="message" cols="25" rows="10"></textarea>
			</div>
			<div class="submit">
				<input type="submit" value="Gửi (submit)">
			</div>
			<p id="contact-result" class="contact-result">Empty message</p>
		</form>
		<h2 class="more-sub-heading">Thông Tin Liên Hệ</h2>
		<ul class="info">
			<li class="info-block">
				<i class="fa fa-phone"></i><p>Điện Thoại (Phone):</p><p>+0356 858 xxx</p>
			</li>
			<li class="info-block">
				<i class="fa fa-map-marker"></i><p>Địa Chỉ (Location):</p><p>N.Hanh, Văn Tự, T.Tín, Hà Nội</p>
			</li>
			<li class="info-block">
				<i class="fa fa-envelope"></i><p>E-Mail:</p><p>tienhamchoi1997@gmail.com</p>
			</li>
		</ul>
	</div>
	<!--Overlay-->
	<div class="overlay" id="overlay"></div>
	
	<!--div class="music-box">
	 <button class="music-box-toggle-btn"><a title="Play music"><i class="fa fa-music"></i></a></button>
	 <div class="music-holder">
	  <iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/WAg0jKqgmuI?controls=0&amp;autoplay=1" width="560"></iframe>
	 </div>
	</div-->

	<!--Scripts-->
	<script src="./thc-assets/thc-js/jquery-3.1.1.min.js"></script>
	<script src="./thc-assets/thc-js/tiendevelopers-countdown.min.js"></script>
	<script type="text/javascript">//<![CDATA[
	$(document).ready(function(){	
	var configDate = "2021 05 20 00:00:00";
	// Subscribe & More
	$('#subscribe-button').on("click", function(){
		$('#subscribe-modal').addClass("open");
		$(overlay).addClass("on");
	});
	$('#subscribe-close').on("click", function(){
		$('#subscribe-modal').removeClass("open");
		$(overlay).removeClass("on");
	});
	$('#know-more-button').on("click", function(){
		$(overlay).addClass("on");
		$('#more').addClass("open");
		return false;
	});
	$('#more-close').on("click", function(){
		$('#more').removeClass("open");
		$(overlay).removeClass("on");
		return false;
	});
	$(overlay).on("click", function(){
		if($('#more').hasClass("open")) {
			$('#more').removeClass("open");
			$(overlay).removeClass("on");
		}
	})
	//Countdown
	if(countdown){ $(".countdown").addClass("active"); }
	$('#countdown').countdown({
		date: configDate,
		render: function(data){
			$(this.el).html(
				"<div class=\"count-box\"><h2 class=\"countdown-num\">" + data.days + "</h2>" + " <h4 class=\"countdown-word\">Ngày</h4></div>" +
				"<div class=\"count-box\"><h2 class=\"countdown-num\">" + data.hours + "</h2>" + " <h4 class=\"countdown-word\">Giờ</h4></div>" +
				"<div class=\"count-box\"><h2 class=\"countdown-num\">" + this.leadingZeros(data.min, 2) + "</h2>" + " <h4 class=\"countdown-word\">Phút</h4></div>" +
				"<div class=\"count-box\"><h2 class=\"countdown-num\">" + this.leadingZeros(data.sec, 2) + "</h2>" + " <h4 class=\"countdown-word\">Giây</h4></div>");
			}
		});
		//week
		
	});
	//MUSIC
    if($(".music-box").length){
	 var musicBtn = $(".music-box-toggle-btn"), musicBox = $(".music-holder"); 
	 musicBtn.on("click", function() {musicBox.toggleClass("toggle-music-box");return false;})
	}
	/*
	var counter = 0, interval_set = 0, anbus = ["tiendevelopers97.vn"]
	function changeTitle(){
     var d = new Date();
     var ts = d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getFullYear() + "_" + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	 var msg = "" + anbus[counter % anbus.length] + "/@/" + ts;
	  history.pushState("", "", "/")
	  history.pushState("", "", msg)
	  counter++;
	   if(interval_set == 0){
		interval_set = 1
		setInterval(function(){
		 changeTitle()
		}, 1000);
	   }
	}
	changeTitle();
*/
	//]]></script>
</body>
</html>