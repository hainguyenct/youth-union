
<div class="form-group {{ $errors->has('MAUPHIEU_ID') ? 'has-error' : '' }}">
    <label for="MAUPHIEU_ID" class="col-md-2 control-label">M A U P H I E U</label>
    <div class="col-md-10">
        <select class="form-control" id="MAUPHIEU_ID" name="MAUPHIEU_ID" required="true">
        	    <option value="" style="display: none;" {{ old('MAUPHIEU_ID', optional($phieudanhgiaSinhvien)->MAUPHIEU_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select m a u p h i e u</option>
        	@foreach ($Mauphieus as $key => $Mauphieu)
			    <option value="{{ $key }}" {{ old('MAUPHIEU_ID', optional($phieudanhgiaSinhvien)->MAUPHIEU_ID) == $key ? 'selected' : '' }}>
			    	{{ $Mauphieu }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('MAUPHIEU_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NAMHOC_ID') ? 'has-error' : '' }}">
    <label for="NAMHOC_ID" class="col-md-2 control-label">N A M H O C</label>
    <div class="col-md-10">
        <select class="form-control" id="NAMHOC_ID" name="NAMHOC_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NAMHOC_ID', optional($phieudanhgiaSinhvien)->NAMHOC_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n a m h o c</option>
        	@foreach ($nAMHOCs as $key => $nAMHOC)
			    <option value="{{ $key }}" {{ old('NAMHOC_ID', optional($phieudanhgiaSinhvien)->NAMHOC_ID) == $key ? 'selected' : '' }}>
			    	{{ $nAMHOC }}
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
        	    <option value="" style="display: none;" {{ old('SINHVIEN_ID', optional($phieudanhgiaSinhvien)->SINHVIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select s i n h v i e n</option>
        	@foreach ($Sinhviens as $key => $Sinhvien)
			    <option value="{{ $key }}" {{ old('SINHVIEN_ID', optional($phieudanhgiaSinhvien)->SINHVIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $Sinhvien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('SINHVIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('XEPLOAI_SV_ID') ? 'has-error' : '' }}">
    <label for="XEPLOAI_SV_ID" class="col-md-2 control-label">X E P L O A I  S V</label>
    <div class="col-md-10">
        <select class="form-control" id="XEPLOAI_SV_ID" name="XEPLOAI_SV_ID" required="true">
        	    <option value="" style="display: none;" {{ old('XEPLOAI_SV_ID', optional($phieudanhgiaSinhvien)->XEPLOAI_SV_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select x e p l o a i  s v</option>
        	@foreach ($xEPLOAISVs as $key => $xEPLOAISV)
			    <option value="{{ $key }}" {{ old('XEPLOAI_SV_ID', optional($phieudanhgiaSinhvien)->XEPLOAI_SV_ID) == $key ? 'selected' : '' }}>
			    	{{ $xEPLOAISV }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('XEPLOAI_SV_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_PDGSV') ? 'has-error' : '' }}">
    <label for="TEN_PDGSV" class="col-md-2 control-label">T E N  P D G S V</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PDGSV" type="text" id="TEN_PDGSV" value="{{ old('TEN_PDGSV', optional($phieudanhgiaSinhvien)->TEN_PDGSV) }}" maxlength="50" placeholder="Enter t e n  p d g s v here...">
        {!! $errors->first('TEN_PDGSV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMRENLUYEN') ? 'has-error' : '' }}">
    <label for="DIEMRENLUYEN" class="col-md-2 control-label">D I E M R E N L U Y E N</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMRENLUYEN" type="number" id="DIEMRENLUYEN" value="{{ old('DIEMRENLUYEN', optional($phieudanhgiaSinhvien)->DIEMRENLUYEN) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m r e n l u y e n here...">
        {!! $errors->first('DIEMRENLUYEN', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMTRUNGBINH') ? 'has-error' : '' }}">
    <label for="DIEMTRUNGBINH" class="col-md-2 control-label">D I E M T R U N G B I N H</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMTRUNGBINH" type="number" id="DIEMTRUNGBINH" value="{{ old('DIEMTRUNGBINH', optional($phieudanhgiaSinhvien)->DIEMTRUNGBINH) }}" min="-9" max="9" placeholder="Enter d i e m t r u n g b i n h here...">
        {!! $errors->first('DIEMTRUNGBINH', '<p class="help-block">:message</p>') !!}
    </div>
</div>

