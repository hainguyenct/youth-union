
<div class="form-group {{ $errors->has('DOANKHOA_ID') ? 'has-error' : '' }}">
    <label for="DOANKHOA_ID" class="col-md-2 control-label">D O A N K H O A</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANKHOA_ID" name="DOANKHOA_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANKHOA_ID', optional($doanphiThuDk)->DOANKHOA_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n k h o a</option>
        	@foreach ($Doankhoas as $key => $Doankhoa)
			    <option value="{{ $key }}" {{ old('DOANKHOA_ID', optional($doanphiThuDk)->DOANKHOA_ID) == $key ? 'selected' : '' }}>
			    	{{ $Doankhoa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANKHOA_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('THANGNAM_ID') ? 'has-error' : '' }}">
    <label for="THANGNAM_ID" class="col-md-2 control-label">T H A N G N A M</label>
    <div class="col-md-10">
        <select class="form-control" id="THANGNAM_ID" name="THANGNAM_ID" required="true">
        	    <option value="" style="display: none;" {{ old('THANGNAM_ID', optional($doanphiThuDk)->THANGNAM_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select t h a n g n a m</option>
        	@foreach ($Thangnams as $key => $Thangnam)
			    <option value="{{ $key }}" {{ old('THANGNAM_ID', optional($doanphiThuDk)->THANGNAM_ID) == $key ? 'selected' : '' }}>
			    	{{ $Thangnam }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('THANGNAM_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_DONG_DK') ? 'has-error' : '' }}">
    <label for="NGAY_DONG_DK" class="col-md-2 control-label">N G A Y  D O N G  D K</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_DONG_DK" type="text" id="NGAY_DONG_DK" value="{{ old('NGAY_DONG_DK', optional($doanphiThuDk)->NGAY_DONG_DK) }}" placeholder="Enter n g a y  d o n g  d k here...">
        {!! $errors->first('NGAY_DONG_DK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

