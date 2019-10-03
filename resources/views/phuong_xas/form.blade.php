
<div class="form-group {{ $errors->has('QUAN_HUYEN_ID') ? 'has-error' : '' }}">
    <label for="QUAN_HUYEN_ID" class="col-md-2 control-label">Q U A N  H U Y E N</label>
    <div class="col-md-10">
        <select class="form-control" id="QUAN_HUYEN_ID" name="QUAN_HUYEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('QUAN_HUYEN_ID', optional($phuongXa)->QUAN_HUYEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select q u a n  h u y e n</option>
        	@foreach ($QuanHuyens as $key => $QuanHuyen)
			    <option value="{{ $key }}" {{ old('QUAN_HUYEN_ID', optional($phuongXa)->QUAN_HUYEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $QuanHuyen }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('QUAN_HUYEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_PX') ? 'has-error' : '' }}">
    <label for="TEN_PX" class="col-md-2 control-label">T E N  P X</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PX" type="text" id="TEN_PX" value="{{ old('TEN_PX', optional($phuongXa)->TEN_PX) }}" maxlength="50" placeholder="Enter t e n  p x here...">
        {!! $errors->first('TEN_PX', '<p class="help-block">:message</p>') !!}
    </div>
</div>

