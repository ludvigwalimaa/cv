<div class="row contenttype">
			<div class="col-xs-3">
				<div class="ctype">Anställningar</div>


			</div>
		</div>
<div class="row contentrecord">
			@foreach($employments as $employment)
				@if($employment->hidden == 0)
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-4 hidden-xs">
							<div class="cdate">{{$employment->start}} - {{$employment->finish}}</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-6">
							<div class="cheader">{{$employment->title}}</div>
							<div class="clocation">{{$employment->location}} <div class="cdate visible-xs">{{$employment->start}} - {{$employment->finish}}</div></div>
							<div class="ctext">{{$employment->text}}</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>

		<div class="row contentrecordhidden" id="hidden_emp">
			@foreach($employments as $employment)
				@if($employment->hidden == 1)
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-4 hidden-xs">
							<div class="cdate">{{$employment->start}} - {{$employment->finish}}</div>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="cheader">{{$employment->title}}</div>
							<div class="clocation">{{$employment->location}} <div class="cdate visible-xs">{{$employment->start}} - {{$employment->finish}}</div></div>
							<div class="ctext">{{$employment->text}}</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>

		<div class="row">
			<div class="col-xs-12">	
				<div class="more" data-panelid="hidden_emp">Mer&nbsp; <i class="fa fa-chevron-down"></i></div>
			</div>
		</div>

