
<div class="form-group {{ $errors->has('DOANVIEN_THANHNIEN_ID') ? 'has-error' : '' }}">
    <label for="DOANVIEN_THANHNIEN_ID" class="col-md-2 control-label">D O A N V I E N  T H A N H N I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANVIEN_THANHNIEN_ID" name="DOANVIEN_THANHNIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANVIEN_THANHNIEN_ID', optional($doanphiThuDv)->DOANVIEN_THANHNIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n v i e n  t h a n h n i e n</option>
        	@foreach ($DoanvienThanhniens as $key => $DoanvienThanhnien)
			    <option value="{{ $key }}" {{ old('DOANVIEN_THANHNIEN_ID', optional($doanphiThuDv)->DOANVIEN_THANHNIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanvienThanhnien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANVIEN_THANHNIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('THANGNAM_ID') ? 'has-error' : '' }}">
    <label for="THANGNAM_ID" class="col-md-2 control-label">T H A N G N A M</label>
    <div class="col-md-10">
        <select class="form-control" id="THANGNAM_ID" name="THANGNAM_ID" required="true">
        	    <option value="" style="display: none;" {{ old('THANGNAM_ID', optional($doanphiThuDv)->THANGNAM_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select t h a n g n a m</option>
        	@foreach ($Thangnams as $key => $Thangnam)
			    <option value="{{ $key }}" {{ old('THANGNAM_ID', optional($doanphiThuDv)->THANGNAM_ID) == $key ? 'selected' : '' }}>
			    	{{ $Thangnam }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('THANGNAM_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_DONG_DP_DV') ? 'has-error' : '' }}">
    <label for="NGAY_DONG_DP_DV" class="col-md-2 control-label">N G A Y  D O N G  D P  D V</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_DONG_DP_DV" type="text" id="NGAY_DONG_DP_DV" value="{{ old('NGAY_DONG_DP_DV', optional($doanphiThuDv)->NGAY_DONG_DP_DV) }}" placeholder="Enter n g a y  d o n g  d p  d v here...">
        {!! $errors->first('NGAY_DONG_DP_DV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

