@extends("layouts.application")

<div class="container clearix">
	<div class="row">
		<div class="col-md-4">
<h1>AKira Toriyama</h1>
<img src="http://s1.tsuki-board.net/pics/figure/big/74695.jpg?t=1327380369" style="border-radius:100px;width:150px;height:150px;border:none;">
</div>


	<div class="col-md-7">
	{{Form::open(array('url' => 'contact', 'role'=>'form'))}}

	<div class="form-group">
	{{Form::label('mail', 'Email', array('class'=> 'col-lg-3 control-label'))}}
	<div class="col-lg-9">
		{{Form::text('email', 'Email Anda', array('class'=>'form-control'))}}
	</div>
	<div class="clear"><br/><br/></div>
</div>

<div class="form-group">
	{{Form::label('massage', 'Massage', array('class'=> 'col-lg-3 control-label'))}}
	<div class="col-lg-9">
		{{Form::textarea('isi', 'Message Anda', array('class'=>'form-control'))}}
	</div>
	<div class="clear"> </div>
</div>

<div class="form-group">
	<div class="col-lg-3"></div>
	<div class="col-lg-9">
		{{Form::submit('Submit', array('class'=> 'btn btn-primary'))}}
	</div>
	<div class="clear"></div>
</div>

{{Form::close()}}
</div>
</div>
</div>