
<div class="form-group {{ $errors->has('PHIEUDANHGIA_DOANKHOA_ID') ? 'has-error' : '' }}">
    <label for="PHIEUDANHGIA_DOANKHOA_ID" class="col-md-2 control-label">P H I E U D A N H G I A  D O A N K H O A</label>
    <div class="col-md-10">
        <select class="form-control" id="PHIEUDANHGIA_DOANKHOA_ID" name="PHIEUDANHGIA_DOANKHOA_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PHIEUDANHGIA_DOANKHOA_ID', optional($doankhoa)->PHIEUDANHGIA_DOANKHOA_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p h i e u d a n h g i a  d o a n k h o a</option>
        	@foreach ($PhieudanhgiaDoankhoas as $key => $PhieudanhgiaDoankhoa)
			    <option value="{{ $key }}" {{ old('PHIEUDANHGIA_DOANKHOA_ID', optional($doankhoa)->PHIEUDANHGIA_DOANKHOA_ID) == $key ? 'selected' : '' }}>
			    	{{ $PhieudanhgiaDoankhoa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHIEUDANHGIA_DOANKHOA_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_DK') ? 'has-error' : '' }}">
    <label for="TEN_DK" class="col-md-2 control-label">T E N  D K</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_DK" type="text" id="TEN_DK" value="{{ old('TEN_DK', optional($doankhoa)->TEN_DK) }}" maxlength="50" placeholder="Enter t e n  d k here...">
        {!! $errors->first('TEN_DK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

