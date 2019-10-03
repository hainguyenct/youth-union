
<div class="form-group {{ $errors->has('DV_TT_DOAN_ID') ? 'has-error' : '' }}">
    <label for="DV_TT_DOAN_ID" class="col-md-2 control-label">D V  T T  D O A N</label>
    <div class="col-md-10">
        <select class="form-control" id="DV_TT_DOAN_ID" name="DV_TT_DOAN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DV_TT_DOAN_ID', optional($qdDvTtdoan)->DV_TT_DOAN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d v  t t  d o a n</option>
        	@foreach ($DvTtDoans as $key => $DvTtDoan)
			    <option value="{{ $key }}" {{ old('DV_TT_DOAN_ID', optional($qdDvTtdoan)->DV_TT_DOAN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DvTtDoan }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DV_TT_DOAN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DOANVIEN_THANHNIEN_ID') ? 'has-error' : '' }}">
    <label for="DOANVIEN_THANHNIEN_ID" class="col-md-2 control-label">D O A N V I E N  T H A N H N I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANVIEN_THANHNIEN_ID" name="DOANVIEN_THANHNIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANVIEN_THANHNIEN_ID', optional($qdDvTtdoan)->DOANVIEN_THANHNIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n v i e n  t h a n h n i e n</option>
        	@foreach ($DoanvienThanhniens as $key => $DoanvienThanhnien)
			    <option value="{{ $key }}" {{ old('DOANVIEN_THANHNIEN_ID', optional($qdDvTtdoan)->DOANVIEN_THANHNIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanvienThanhnien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANVIEN_THANHNIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DUYET_TTD') ? 'has-error' : '' }}">
    <label for="DUYET_TTD" class="col-md-2 control-label">D U Y E T  T T D</label>
    <div class="col-md-10">
        <input class="form-control" name="DUYET_TTD" type="text" id="DUYET_TTD" value="{{ old('DUYET_TTD', optional($qdDvTtdoan)->DUYET_TTD) }}" maxlength="50" placeholder="Enter d u y e t  t t d here...">
        {!! $errors->first('DUYET_TTD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

