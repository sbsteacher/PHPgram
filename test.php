<?php $session = mt_rand(1,999); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">	
	<style type="text/css">
	* {margin:0;padding:0;box-sizing:border-box;font-family:arial,sans-serif;resize:none;}
	html,body {width:100%;height:100%;}
	#wrapper {position:relative;margin:auto;max-width:1000px;height:100%;}
	#chat_output {position:absolute;top:0;left:0;padding:20px;width:100%;height:calc(100% - 100px);}
	#chat_input {position:absolute;bottom:0;left:0;padding:10px;width:100%;height:100px;border:1px solid #ccc;}
	</style>
</head>
<body>
	<div id="wrapper">
		<div id="chat_output"></div>
		<textarea id="chat_input" placeholder="Deine Nachricht..."></textarea>
		<script type="text/javascript">

            const websocket_server = new WebSocket("ws://localhost:8090/");
            const divChatOutput = document.querySelector('#chat_output');
            const textareaChatInput = document.querySelector('#chat_input');

			websocket_server.onopen = function(e) {
				websocket_server.send(
					JSON.stringify({
						'type': 'conn',
						'user_id': <?=$session?>,
					})
				);
			};

            websocket_server.onerror = function(e) {
				// Errorhandling
                console.log(e);
			}
			websocket_server.onmessage = function(e) {
				var json = JSON.parse(e.data);
				console.log(json);
				switch(json.type) {
					case 'dm':
						divChatOutput.append(json.msg);
						break;
				}
			}

            textareaChatInput.addEventListener('keyup',function(e){
				if(e.keyCode==13 && !e.shiftKey) {
					var chat_msg = this.value;
					websocket_server.send(
						JSON.stringify({
							'type': 'dm',
							'user_id': <?=$session?>,
							'chat_msg': chat_msg
						})
					);
					this.vallue = '';
				}
			});

            /*
		jQuery(function($){
			// Websocket
			var websocket_server = new WebSocket("ws://localhost:8080/");
			websocket_server.onopen = function(e) {
				websocket_server.send(
					JSON.stringify({
						'type': 'socket',
						'user_id': <?=$session?>,
					})
				);
			};
			websocket_server.onerror = function(e) {
				// Errorhandling
			}
			websocket_server.onmessage = function(e) {
				var json = JSON.parse(e.data);
				switch(json.type) {
					case 'chat':
						$('#chat_output').append(json.msg);
						break;
				}
			}
			// Events
			$('#chat_input').on('keyup',function(e){
				if(e.keyCode==13 && !e.shiftKey) {
					var chat_msg = $(this).val();
					websocket_server.send(
						JSON.stringify({
							'type': 'chat',
							'user_id': <?=$session?>,
							'chat_msg': chat_msg
						})
					);
					$(this).val('');
				}
			});
		});
        */
		</script>
	</div>
</body>
</html>