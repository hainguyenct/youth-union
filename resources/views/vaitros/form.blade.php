
<div class="form-group {{ $errors->has('DOANVIEN_THANHNIEN_ID') ? 'has-error' : '' }}">
    <label for="DOANVIEN_THANHNIEN_ID" class="col-md-2 control-label">D O A N V I E N  T H A N H N I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANVIEN_THANHNIEN_ID" name="DOANVIEN_THANHNIEN_ID">
        	    <option value="" style="display: none;" {{ old('DOANVIEN_THANHNIEN_ID', optional($vaitro)->DOANVIEN_THANHNIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n v i e n  t h a n h n i e n</option>
        	@foreach ($DoanvienThanhniens as $key => $DoanvienThanhnien)
			    <option value="{{ $key }}" {{ old('DOANVIEN_THANHNIEN_ID', optional($vaitro)->DOANVIEN_THANHNIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanvienThanhnien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANVIEN_THANHNIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_VT') ? 'has-error' : '' }}">
    <label for="TEN_VT" class="col-md-2 control-label">T E N  V T</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_VT" type="text" id="TEN_VT" value="{{ old('TEN_VT', optional($vaitro)->TEN_VT) }}" maxlength="50" placeholder="Enter t e n  v t here...">
        {!! $errors->first('TEN_VT', '<p class="help-block">:message</p>') !!}
    </div>
</div>

