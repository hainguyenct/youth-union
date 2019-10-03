
<div class="form-group {{ $errors->has('CHIDOAN_ID') ? 'has-error' : '' }}">
    <label for="CHIDOAN_ID" class="col-md-2 control-label">C H I D O A N</label>
    <div class="col-md-10">
        <select class="form-control" id="CHIDOAN_ID" name="CHIDOAN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('CHIDOAN_ID', optional($doanphiThuCd)->CHIDOAN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select c h i d o a n</option>
        	@foreach ($Chidoans as $key => $Chidoan)
			    <option value="{{ $key }}" {{ old('CHIDOAN_ID', optional($doanphiThuCd)->CHIDOAN_ID) == $key ? 'selected' : '' }}>
			    	{{ $Chidoan }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('CHIDOAN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('THANGNAM_ID') ? 'has-error' : '' }}">
    <label for="THANGNAM_ID" class="col-md-2 control-label">T H A N G N A M</label>
    <div class="col-md-10">
        <select class="form-control" id="THANGNAM_ID" name="THANGNAM_ID" required="true">
        	    <option value="" style="display: none;" {{ old('THANGNAM_ID', optional($doanphiThuCd)->THANGNAM_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select t h a n g n a m</option>
        	@foreach ($Thangnams as $key => $Thangnam)
			    <option value="{{ $key }}" {{ old('THANGNAM_ID', optional($doanphiThuCd)->THANGNAM_ID) == $key ? 'selected' : '' }}>
			    	{{ $Thangnam }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('THANGNAM_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_DONG_CD') ? 'has-error' : '' }}">
    <label for="NGAY_DONG_CD" class="col-md-2 control-label">N G A Y  D O N G  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_DONG_CD" type="text" id="NGAY_DONG_CD" value="{{ old('NGAY_DONG_CD', optional($doanphiThuCd)->NGAY_DONG_CD) }}" placeholder="Enter n g a y  d o n g  c d here...">
        {!! $errors->first('NGAY_DONG_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

