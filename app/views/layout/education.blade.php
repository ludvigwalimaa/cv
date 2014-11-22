<div class="row contenttype">
			<div class="col-xs-3">
				<div class="ctype">Utbildning</div>


			</div>
		</div>
<div class="row contentrecord">
			@foreach($educations as $education)
				@if($education->hidden == 0)
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-4 hidden-xs">
							<div class="cdate">{{$education->start}} - {{$education->finish}}</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-6">
							<div class="cheader">{{$education->title}}</div>
							<div class="clocation">{{$education->location}} <div class="cdate visible-xs">{{$education->start}} - {{$education->finish}}</div></div>
							<div class="ctext">{{$education->text}}</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>

		<div class="row contentrecordhidden" id="hidden_edu">
			@foreach($educations as $education)
				@if($education->hidden == 1)
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-4 hidden-xs">
							<div class="cdate">{{$education->start}} - {{$education->finish}}</div>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="cheader">{{$education->title}}</div>
							<div class="clocation">{{$education->location}} <div class="cdate visible-xs">{{$education->start}} - {{$education->finish}}</div></div>
							<div class="ctext">{{$education->text}}</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>

		<div class="row">
			<div class="col-xs-12">	
				<div class="more" data-panelid="hidden_edu">Mer</div>
			</div>
		</div>