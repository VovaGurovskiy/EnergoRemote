/*function rd(){
	// находим нужный элемент по его id
	var list = document.getElementById('list')

	// создаем новый элемент
	var li = document.createElement('LI')
	// добавляем текст внутрь созданого элемента
	li.innerHTML = 'Новый элемент списка'
	 
	// добавление в конец списка (ul) нового элемента
	list.appendChild(li)
}
// запускаем ф-ию rd() при загрузке странички 
window.onload = rd;
// событие клика на ссылку
window.onload = function () {
								document.getElementById('myelement').onclick = function() {alert("Hello!");}		
}



window.onbeforeunload = function() {
  return "Данные не сохранены. Точно перейти?";
};*/
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
          
          $("#slider").slider({

          	stop: function(event, ui) 
          	{
	      		$.ajax({
		                type: "GET", //Метод отправки
		                url: "setdata.php", //путь до php фаила отправителя
		                data: $("#sendData").serialize(),
		                success: function () {
		                    //код в этом блоке выполняется при успешной отправке сообщения
		                }
		            });
          	}
          });
          //Added, set initial value.
          $("#amount").val(0);
 
          $("#amount-label").text(0);
     
          
          update();
      });
   $(document).ready(function() {
   	$("input[name='data']").change(function(){
   		 $.ajax({
                type: "GET", //Метод отправки
                url: "setdata.php", //путь до php фаила отправителя
                data: $("#OnOffMode").serialize(),
                success: function () {
                    //код в этом блоке выполняется при успешной отправке сообщения
             
                }
                });

   	});
   });
      //changed. now with parameter
      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1?val:$("#amount").val();
        /* commented
        $amount = $( "#slider" ).slider( "value" );
        $duration = $( "#slider2" ).slider( "value" );
         */
    
         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);
        $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
      }





$(document).ready( function(){

	
		$('#image_room').contextmenu(function(e)
		{
				d = document.getElementById('image_room');
					rect = d.getBoundingClientRect();
					//x = rect.left + e.offsetX;
					//y = rect.top  + e.offsetY;
					x = e.offsetX;
					y = e.offsetY;					
					var styles = {
					  zIndex : "1000",
					  visibility:"visible",
					  top: y + 'px',
					  left: x + 'px',
					  height: '100px',
					  width : '100px'
					};
			$('#context-menu').css(styles);
			return false;
		}
		);
		$('#context-menu').contextmenu(function(e){return false;}).mouseleave(function(e){$('#context-menu').css('visibility','hidden');});
});

	
function displayContext(e)
{
	var styles = {
      zIndex : "1000",
	  visibility:"visible",
	  top: y + 'px',
      left: x + 'px',
	  height: '100px',
	  width : '100px'
    };
	$('#context-menu').css(styles);

	
	return false;
}

/*var menuskin = "context";
var display_url = 1;
function showmenuie5() {
		var rightedge = document.body.clientWidth-event.clientX;
		var bottomedge = document.body.clientHeight-event.clientY;
		if (rightedge < ie5menu.offsetWidth)
			ie5menu.style.left = document.body.scrollLeft + event.clientX - ie5menu.offsetWidth;
		else
			ie5menu.style.left = document.body.scrollLeft + event.clientX;
		if (bottomedge < ie5menu.offsetHeight)
			ie5menu.style.top = document.body.scrollTop + event.clientY - ie5menu.offsetHeight;
		else
			ie5menu.style.top = document.body.scrollTop + event.clientY;
			ie5menu.style.visibility = "visible";
		return false;
}
function hidemenuie5() {
	ie5menu.style.visibility = "hidden";
}
function highlightie5() {
	if (event.srcElement.className == "contexttext") {
		event.srcElement.style.backgroundColor = "highlight";
	event.srcElement.style.color = "white";
	if (display_url)
		window.status = event.srcElement.url;
}
}
function lowlightie5() {
	if (event.srcElement.className == "contexttext") {
		event.srcElement.style.backgroundColor = "";
	event.srcElement.style.color = "C9CADA";
	window.status = "";
}
}
function jumptoie5() {
	if (event.srcElement.className == "contexttext") {
		if (event.srcElement.getAttribute("target") != null)
			window.open(event.srcElement.url, event.srcElement.getAttribute("target"));
			else
			window.location = event.srcElement.url;
}
}*/