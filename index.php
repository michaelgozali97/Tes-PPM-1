<!DOCTYPE html>
<html>
<head>
	<title>Tes PPM 1</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role=page id=pageh>
		<div data-role="panel" id="mypanel" data-swipe-close="false" data-dismissible="false">
			<h1>About</h1>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
			<p>
    		<a data-rel="close" data-role="button">Hide</a>
    		</p>
		</div>
		<div data-role=header>
			<h1>Home</h1>
		</div>
		<div data-role=content>
			<select name="select-custom-1" id="select-custom-1" data-native-menu="false">
        	<option value="#page1">Kalkulator</option>
        	<option value="#page2">Color RGB</option>
        	<option value="#page3">Rangkuman</option>
    		</select>
    		<ul data-role="listview">
    			<li><a href="#page1">Kalkulator</li>
    			<li><a href="#page2">COLOR RGB</li>
    			<li><a href="#page3">Rangkuman</li>
    		</ul>
			<div class="loader">
				<button class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="true" data-msgtext="Loading theme a" data-inline="true">Theme A</button>
				<button class="show-page-loading-msg" data-theme="b" data-textonly="false" data-textvisible="true" data-msgtext="Loading theme b" data-inline="true">Theme B</button>
				<button class="hide-page-loading-msg" data-inline="true" data-icon="delete">Hide</button>
			</div>
			<script type="text/javascript">
			$(function(){
    		$('select').change(function() {
        	var nextpage = $(this).children('option:selected').attr('value');
        	$.mobile.changePage( '#' + nextpage );
    		});
			});​
			</script>
		</div>
		<div data-role=footer>
			<h1>26415112</h1>
		</div>
	</div>
	<div data-role=page id=page1>
		<div data-role=header>
			<h1>Kalkulator</h1>
		</div>
		<div data-role=content>
		<label for="inputn">Inputkan Angka</label>
    	<input type="range" name="inputn" id="inputn" min="0" max="100" value="0">
		<button name="convert" id="convert">Binary</button>
		<button name="converthx" id="converthx">Hexadecimal</button>
		<ul data-role="listview">
    			<li><a href="#pageh">Home</li>
    			<li><a href="#page2">COLOR RGB</li>
    			<li><a href="#page3">Rangkuman</li>
    		</ul>
		<script type="text/javascript">
			$(function(){
				$("#convert").click(function(){
					var n = $('#inputn');
					var  i = 1;
             		var rem = 0;
             		var binary = 0;
             		while (n!=0) {
           			rem= n % 2;
           			n= parseInt(n/2, 10);
           			binary = binary + rem * i;
           			i= i * 10;
       				}
       				alert(binary);
				})
			})
		</script>
		<script type="text/javascript">
		$(function(){
    	$('#select').change(function() {
        var nextpage = $(this).children('option:selected').attr('value');
        $.mobile.changePage( '#' + nextpage );
    	});
		});​
		</script>
		</div>
		<div data-role=footer>
			<h1>1</h1>
		</div>
	</div>
	<div data-role=page id=page2>
		<div data-role=header>
			<h1>Color RGB</h1>
		</div>
		<div data-role=content>
			<label for="inputrgb">Inputkan RGB</label>
			<input type="text" name="inputrgb" id="inputrgb" value="" placeholder="RGB">
			<button name="convertrgb" id="convertrgb">Convert</button>
			<script type="text/javascript">
				
			</script>
			<ul data-role="listview">
    			<li><a href="#pageh">Home</li>
    			<li><a href="#page1">Kalkulator</li>
    			<li><a href="#page3">Rangkuman</li>
    		</ul>
		<script type="text/javascript">
		$(function(){
    	$('select').change(function() {
        var nextpage = $(this).children('option:selected').attr('value');
        $.mobile.changePage( '#' + nextpage );
    	});
		});​
		</script>
		</div>
		<div data-role=footer>
			<h1>2</h1>
		</div>
	</div>
	<div data-role=page id=page3>
		<div data-role="header">
			<h1>Rangkuman Materi</h1>
		</div>
		<div data-role=content>
			<div class="ui-grid-a">
    		<div class="ui-block-a">
    		<div class="ui-bar ui-bar-a" style="height:60px">Github merupakan layanan berbasis web yang dapat digunakan oleh berbagai developer untuk pengembangan proyek dengan berkolaborasi dengan developer" lainnya</div>
    		</div>
    		<div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:60px">jQuery Moblie adalah web framework yang dapat digunakan untuk membuat web berbasis smartphone/tablet</div></div>
			</div>
			<ul data-role="listview">
    			<li><a href="#pageh">Home</li>
    			<li><a href="#page1">Kalkulator</li>
    			<li><a href="#page2">COLOR RGB</li>
    		</ul>
			<script type="text/javascript">
			$(function(){
    		$('select').change(function() {
        	var nextpage = $(this).children('option:selected').attr('value');
        	$.mobile.changePage( '#' + nextpage );
    		});
			});​
			</script>
		</div>
		<div data-role=footer>
			<h1>3</h1>
		</div>
	</div>
	
</body>
</html>