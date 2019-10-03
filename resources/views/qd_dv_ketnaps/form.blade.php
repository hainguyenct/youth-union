
<div class="form-group {{ $errors->has('DV_KETNAP_ID') ? 'has-error' : '' }}">
    <label for="DV_KETNAP_ID" class="col-md-2 control-label">D V  K E T N A P</label>
    <div class="col-md-10">
        <select class="form-control" id="DV_KETNAP_ID" name="DV_KETNAP_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DV_KETNAP_ID', optional($qdDvKetnap)->DV_KETNAP_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d v  k e t n a p</option>
        	@foreach ($DvKetnaps as $key => $DvKetnap)
			    <option value="{{ $key }}" {{ old('DV_KETNAP_ID', optional($qdDvKetnap)->DV_KETNAP_ID) == $key ? 'selected' : '' }}>
			    	{{ $DvKetnap }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DV_KETNAP_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DOANVIEN_THANHNIEN_ID') ? 'has-error' : '' }}">
    <label for="DOANVIEN_THANHNIEN_ID" class="col-md-2 control-label">D O A N V I E N  T H A N H N I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANVIEN_THANHNIEN_ID" name="DOANVIEN_THANHNIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANVIEN_THANHNIEN_ID', optional($qdDvKetnap)->DOANVIEN_THANHNIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n v i e n  t h a n h n i e n</option>
        	@foreach ($DoanvienThanhniens as $key => $DoanvienThanhnien)
			    <option value="{{ $key }}" {{ old('DOANVIEN_THANHNIEN_ID', optional($qdDvKetnap)->DOANVIEN_THANHNIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanvienThanhnien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANVIEN_THANHNIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DUYET_KN') ? 'has-error' : '' }}">
    <label for="DUYET_KN" class="col-md-2 control-label">D U Y E T  K N</label>
    <div class="col-md-10">
        <input class="form-control" name="DUYET_KN" type="text" id="DUYET_KN" value="{{ old('DUYET_KN', optional($qdDvKetnap)->DUYET_KN) }}" maxlength="50" placeholder="Enter d u y e t  k n here...">
        {!! $errors->first('DUYET_KN', '<p class="help-block">:message</p>') !!}
    </div>
</div>

