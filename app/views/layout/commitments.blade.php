<div class="row contenttype">
			<div class="col-xs-3">
				<div class="ctype">Övriga meriter</div>
				<!-- Engagemang, Antaganden, Övriga kval. -->

			</div>
		</div>
<div class="row contentrecord">
			@foreach($commitments as $commitment)
				@if($commitment->hidden == 0)
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-4 hidden-xs">
							<div class="cdate">{{$commitment->start}} - {{$commitment->finish}}</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-6">
							<div class="cheader">{{$commitment->title}}</div>
							<div class="clocation">{{$commitment->location}} <div class="cdate visible-xs">{{$commitment->start}} - {{$commitment->finish}}</div></div>
							<div class="ctext">{{$commitment->text}}</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>

		<div class="row contentrecordhidden" id="hidden_com">
			@foreach($commitments as $commitment)
				@if($commitment->hidden == 1)
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-4 hidden-xs">
							<div class="cdate">{{$commitment->start}} - {{$commitment->finish}}</div>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="cheader">{{$commitment->title}}</div>
							<div class="clocation">{{$commitment->location}} <div class="cdate visible-xs">{{$commitment->start}} - {{$commitment->finish}}</div></div>
							<div class="ctext">{{$commitment->text}}</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>
