
<div class="form-group {{ $errors->has('NAMHOC_ID') ? 'has-error' : '' }}">
    <label for="NAMHOC_ID" class="col-md-2 control-label">N A M H O C</label>
    <div class="col-md-10">
        <select class="form-control" id="NAMHOC_ID" name="NAMHOC_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NAMHOC_ID', optional($phieudanhgiaDoanvien)->NAMHOC_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n a m h o c</option>
        	@foreach ($Namhocs as $key => $Namhoc)
			    <option value="{{ $key }}" {{ old('NAMHOC_ID', optional($phieudanhgiaDoanvien)->NAMHOC_ID) == $key ? 'selected' : '' }}>
			    	{{ $Namhoc }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('NAMHOC_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SINHVIEN_ID') ? 'has-error' : '' }}">
    <label for="SINHVIEN_ID" class="col-md-2 control-label">S I N H V I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="SINHVIEN_ID" name="SINHVIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('SINHVIEN_ID', optional($phieudanhgiaDoanvien)->SINHVIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select s i n h v i e n</option>
        	@foreach ($Sinhviens as $key => $Sinhvien)
			    <option value="{{ $key }}" {{ old('SINHVIEN_ID', optional($phieudanhgiaDoanvien)->SINHVIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $Sinhvien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('SINHVIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_PDGDV') ? 'has-error' : '' }}">
    <label for="TEN_PDGDV" class="col-md-2 control-label">T E N  P D G D V</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PDGDV" type="text" id="TEN_PDGDV" value="{{ old('TEN_PDGDV', optional($phieudanhgiaDoanvien)->TEN_PDGDV) }}" maxlength="50" placeholder="Enter t e n  p d g d v here...">
        {!! $errors->first('TEN_PDGDV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMRENLUYEN') ? 'has-error' : '' }}">
    <label for="DIEMRENLUYEN" class="col-md-2 control-label">D I E M R E N L U Y E N</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMRENLUYEN" type="number" id="DIEMRENLUYEN" value="{{ old('DIEMRENLUYEN', optional($phieudanhgiaDoanvien)->DIEMRENLUYEN) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m r e n l u y e n here...">
        {!! $errors->first('DIEMRENLUYEN', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMTRUNGBINH') ? 'has-error' : '' }}">
    <label for="DIEMTRUNGBINH" class="col-md-2 control-label">D I E M T R U N G B I N H</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMTRUNGBINH" type="number" id="DIEMTRUNGBINH" value="{{ old('DIEMTRUNGBINH', optional($phieudanhgiaDoanvien)->DIEMTRUNGBINH) }}" min="-9" max="9" placeholder="Enter d i e m t r u n g b i n h here...">
        {!! $errors->first('DIEMTRUNGBINH', '<p class="help-block">:message</p>') !!}
    </div>
</div>

