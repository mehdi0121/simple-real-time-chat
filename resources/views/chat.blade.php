<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="col-md-12 col-lg-6">
        <div class="panel">
        	<!--Heading-->
    		<div class="panel-heading">
    			<div class="panel-control">
    				<div class="btn-group">
    					<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
    					<button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i></button>
    					<ul class="dropdown-menu dropdown-menu-right">
    						<li><a href="#">Available</a></li>
    						<li><a href="#">Busy</a></li>
    						<li><a href="#">Away</a></li>
    						<li class="divider"></li>
    						<li><a id="demo-connect-chat" href="#" class="disabled-link" data-target="#demo-chat-body">Connect</a></li>
    						<li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body">Disconect</a></li>
    					</ul>
    				</div>
    			</div>
    			<h3 class="panel-title">Chat</h3>
				<div class="col-xs-9">
					<input type="name" placeholder="Enter your name" class="form-control chat-input" id="username">
				</div>
    		</div>

    		<!--Widget body-->
    		<div id="demo-chat-body" class="collapse in">
    			<div class="nano has-scrollbar" style="height:380px">
    				<div class="nano-content pad-all" tabindex="0" style="right: -17px;">
    					<ul class="list-unstyled media-block" id="messages">


    						 {{-- <li class="mar-btm"> --}}
    							{{-- <div class="media-left">
    								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
    							</div> --}}
    							{{-- <div class="media-body pad-hor">
    								<div class="speech">
    									<a href="#" class="media-heading">John Doe</a>
    									<p>Hello Lucy, how can I help you today ?</p>
    									</p>
    								</div>
    							</div> --}}
    						{{-- </li> --}}
    						{{--<li class="mar-btm">
    							<div class="media-right">
    								<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor speech-right">
    								<div class="speech">
    									<a href="#" class="media-heading">Lucy Doe</a>
    									<p>Hi, I want to buy a new shoes.</p>
    									<p class="speech-time">
    										<i class="fa fa-clock-o fa-fw"></i> 09:23AM
    									</p>
    								</div>
    							</div>
    						</li>
    						<li class="mar-btm">
    							<div class="media-left">
    								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor">
    								<div class="speech">
    									<a href="#" class="media-heading">John Doe</a>
    									<p>Shipment is free. You\'ll get your shoes tomorrow!</p>
    									<p class="speech-time">
    										<i class="fa fa-clock-o fa-fw"></i> 09:25
    									</p>
    								</div>
    							</div>
    						</li>
    						<li class="mar-btm">
    							<div class="media-right">
    								<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor speech-right">
    								<div class="speech">
    									<a href="#" class="media-heading">Lucy Doe</a>
    									<p>Wow, that\'s great!</p>
    									<p class="speech-time">
    										<i class="fa fa-clock-o fa-fw"></i> 09:27
    									</p>
    								</div>
    							</div>
    						</li>
    						<li class="mar-btm">
    							<div class="media-right">
    								<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor speech-right">
    								<div class="speech">
    									<a href="#" class="media-heading">Lucy Doe</a>
    									<p>Ok. Thanks for the answer. Appreciated.</p>
    									<p class="speech-time">
    									<i class="fa fa-clock-o fa-fw"></i> 09:28
    									</p>
    								</div>
    							</div>
    						</li>
    						<li class="mar-btm">
    							<div class="media-left">
    								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor">
    								<div class="speech">
    									<a href="#" class="media-heading">John Doe</a>
    									<p>You are welcome! <br> Is there anything else I can do for you today?</p>
    									<p class="speech-time">
    										<i class="fa fa-clock-o fa-fw"></i> 09:30
    									</p>
    								</div>
    							</div>
    						</li>
    						<li class="mar-btm">
    							<div class="media-right">
    								<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor speech-right">
    								<div class="speech">
    									<a href="#" class="media-heading">Lucy Doe</a>
    									<p>Nope, That\'s it.</p>
    									<p class="speech-time">
    										<i class="fa fa-clock-o fa-fw"></i> 09:31
    									</p>
    								</div>
    							</div>
    						</li>
    						<li class="mar-btm">
    							<div class="media-left">
    								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor">
    								<div class="speech">
    									<a href="#" class="media-heading">John Doe</a>
    									<p>Thank you for contacting us today</p>
    									<p class="speech-time">
    										<i class="fa fa-clock-o fa-fw"></i> 09:32
    									</p>
    								</div>
    							</div>
    						</li> --}}
    					</ul>
    				</div>
    			<div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>

    			<!--Widget footer-->
    			<div class="panel-footer">
    				<div class="row">
						<form id="message_form" >
							<div class="col-xs-9">
								<input type="text" id="message_input" placeholder="Enter your text" class="form-control chat-input">
							</div>
							<div class="col-xs-3">
								<button class="btn btn-primary btn-block" id="submit" type="submit">message</button>
							</div>
						</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<script src="{{ asset("js/app.js") }}"></script>

</body>
</html>