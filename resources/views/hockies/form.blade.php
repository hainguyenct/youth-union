
<div class="form-group {{ $errors->has('NAMHOC_ID') ? 'has-error' : '' }}">
    <label for="NAMHOC_ID" class="col-md-2 control-label">N A M H O C</label>
    <div class="col-md-10">
        <select class="form-control" id="NAMHOC_ID" name="NAMHOC_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NAMHOC_ID', optional($hocky)->NAMHOC_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n a m h o c</option>
        	@foreach ($Namhocs as $key => $Namhoc)
			    <option value="{{ $key }}" {{ old('NAMHOC_ID', optional($hocky)->NAMHOC_ID) == $key ? 'selected' : '' }}>
			    	{{ $Namhoc }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('NAMHOC_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_HK') ? 'has-error' : '' }}">
    <label for="TEN_HK" class="col-md-2 control-label">T E N  H K</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_HK" type="text" id="TEN_HK" value="{{ old('TEN_HK', optional($hocky)->TEN_HK) }}" maxlength="50" placeholder="Enter t e n  h k here...">
        {!! $errors->first('TEN_HK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

