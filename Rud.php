<!DOCTYPE THML>
<html>
<head>
	<title>EnergoKuznya</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="desctiption" content="Lab_7">
	<meta name="keywords" content="lab_7">
	<link rel="stylesheet" type="text/css" href="css/StyleRud.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	</head>
<body>
<div class="container" id="main_cont">
<div class="cl-sm-12" id="header">
	<div id="logo" class="col-md-4  col-sm-4">
	<img src="img/logo.png" alt=""  id="logoimg">
		<div id="title">EnergoKuznya</div>
		<div id="subtitle">EnergoRemote Panel</div>
	</div>
	<div class="col-md-3  col-sm-3" id="social_lincs">
		<a  href="#" class="socialimg" id="social1"></a>
		<a  href="#" class="socialimg" id="social2"></a>
		<a  href="#" class="socialimg" id="social3"></a>
	</div>
</div>
<div class="col-sm-12" id="profile">
	<div class="col-md-1 col-xs-4 col-sm-2" id="avatar"></div>
	<div class="col-md-2 col-sm-2" id="user">
		<div class="titleText">Lorem ipsum dolo.</div>
		<div class="subText">Lorem ipsum .</div>
	</div>
	<div class="col-md-2  col-sm-2 slash">
		<div class="titleText">Lorem ipsum dolor </div>
		<div class="subText">Lorem ipsum .</div>
	</div>
	<div class="col-md-2  col-sm-2 slash">	
		<div class="titleText">Lorem ipsum dolo.</div>
		<div class="subText">Lorem ipsum .</div></div>
	<div class="col-md-2 col-sm-2 slash">	
		<div class="titleText">Lorem ipsum dol.</div>
		<div class="subText">Lorem ipsum .</div></div>
	<div class="playerbox">	
		
		</div>
</div>
<div class="col-md-12" id="menucont">
	<div class="content" id="left_navig">
		<a href="" class="" id="remote"><p>Remote</p></a>
		<a href="" class="" id="statistics"><p>Statistics</p></a>
		<a href="" class="" id="settings"><p>Settings</p></a>

	</div>
	<div class="" id="content">
		<div class="" id="image_room">
		<div class="accesspoint" id="r1p1">
			<div class="internal"></div>
		</div>
			<div class="menu" id="r1m1">
				<div class="price-slider">
		            <h4 class="great">Amount</h4>
		            <span>Minimum $10 is required</span>
		            <div class="col-sm-12">
		              <div id="slider"></div>
		            </div>
         		 </div>
				<form id="sendData">
				<ul class="menuul">
					<li>On/Off</li>
					<input type="hidden" name="log" value="test">
					<input type="hidden" name="pass" value="test">
					<input type="hidden" name="id_group" value="1">
					<input type="hidden" name="typedata" value="bright_white">
					<input type="hidden" id ="amount" name="data" value="">
					<li>Slider</li>
					<li>Auto</li>
					<li><span class="r">R</span><span  class="g">G</span><span   class="b">B</span></li>
					<li>Sleep</li>
					<li>Party</li>
					<li>Simulations</li>
				</ul>
			</form>
			</div>
		</div>
		<div class="" id="menu_room">
			<div class="rooms">
				<div class="borderbg activeroom">
					<div class="roomsbg " id="roomno1"></div>
				</div>
			</div>
			<div class="rooms">
				<div class="borderbg">
					<div class="roomsbg" id="roomno2"></div>
				</div>
			</div>
			<div class="rooms">
				<div class="borderbg">
					<div class="roomsbg" id="roomno3"></div>
				</div>
			</div>
			<div class="rooms">
				<div class="borderbg">
					<div class="roomsbg" id="roomno4"></div>
				</div>
			</div>
			<div class="rooms">
				<div class="borderbg">
					<div class="roomsbg" id="roomno5"></div>
				</div>
			</div>
			<div class="rooms">
				<div class="borderbg">
					<div class="roomsbg" id="addroom">
						<div id="horiz"></div>
						<div id="vert"></div>
					</div>
				</div>
			</div>
		</div>
		<div id="usefull" class=" col-lg-7">
			<div id="usefulladvice">Usefull advice 
				<div class="switch">swich</div>
			</div>
			<div id="usefullcontent">
				<div class="advice " id="adviceno1">
				<div class="advimg"><img src="img/phone.png" alt=""></div>
					<div class="advicecont">
						<div class="advicetitle">Charge your mobile phone
							<div class="advdate">3 hours ago</div>
							</div>
						<div class="advicedescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, dolorum.
						</div>
						<button class="reminder "><img src="img/reminder.png" alt=""> Reminder</button>
					</div>
				</div>
					<div class="advice " id="adviceno2">
					<div class="advimg"><img src="img/phone.png" alt=""></div>
					<div class="advicecont">
						<div class="advicetitle">Charge your mobile phone
							<div class="advdate">3 hours ago</div>
							</div>
						<div class="advicedescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, dolorum.
						</div>
						<button class="reminder "><img src="img/reminder.png" alt=""> Reminder</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<script>
      $(document).ready(function() {
          $("#slider").slider({
              range: "min",
              animate: true,
              value:1,
              min: 0,
              max: 255,
              step: 1,
              slide: function(event, ui) {
                update(1,ui.value); //changed
              }
          });

          

          //Added, set initial value.
          $("#amount").val(0);
 
          $("#amount-label").text(0);
     
          
          update();

      });
  
      //changed. now with parameter
      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1?val:$("#amount").val();

        /* commented
        $amount = $( "#slider" ).slider( "value" );
        $duration = $( "#slider2" ).slider( "value" );
         */
         if($amount>1){
            //устанавливаем событие отправки для формы с id=form
            var form_data = $("#sendData").serialize(); //собераем все данные из формы
            $.ajax({
                type: "GET", //Метод отправки
                url: "setdata.php", //путь до php фаила отправителя
                data: $("#sendData").serialize(),
                success: function () {
                    //код в этом блоке выполняется при успешной отправке сообщения
             
                }
                });
      
			}





         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);

        $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
      }
	

    </script>
</body>
</html>
