
<div class="form-group {{ $errors->has('NAMHOC_ID') ? 'has-error' : '' }}">
    <label for="NAMHOC_ID" class="col-md-2 control-label">N A M H O C</label>
    <div class="col-md-10">
        <select class="form-control" id="NAMHOC_ID" name="NAMHOC_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NAMHOC_ID', optional($phieudanhgiaChidoan)->NAMHOC_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n a m h o c</option>
        	@foreach ($Namhocs as $key => $Namhoc)
			    <option value="{{ $key }}" {{ old('NAMHOC_ID', optional($phieudanhgiaChidoan)->NAMHOC_ID) == $key ? 'selected' : '' }}>
			    	{{ $Namhoc }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('NAMHOC_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('XEPLOAI_CD_ID') ? 'has-error' : '' }}">
    <label for="XEPLOAI_CD_ID" class="col-md-2 control-label">X E P L O A I  C D</label>
    <div class="col-md-10">
        <select class="form-control" id="XEPLOAI_CD_ID" name="XEPLOAI_CD_ID" required="true">
        	    <option value="" style="display: none;" {{ old('XEPLOAI_CD_ID', optional($phieudanhgiaChidoan)->XEPLOAI_CD_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select x e p l o a i  c d</option>
        	@foreach ($XeploaiCds as $key => $XeploaiCd)
			    <option value="{{ $key }}" {{ old('XEPLOAI_CD_ID', optional($phieudanhgiaChidoan)->XEPLOAI_CD_ID) == $key ? 'selected' : '' }}>
			    	{{ $XeploaiCd }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('XEPLOAI_CD_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('MAUPHIEU_ID') ? 'has-error' : '' }}">
    <label for="MAUPHIEU_ID" class="col-md-2 control-label">M A U P H I E U</label>
    <div class="col-md-10">
        <select class="form-control" id="MAUPHIEU_ID" name="MAUPHIEU_ID" required="true">
        	    <option value="" style="display: none;" {{ old('MAUPHIEU_ID', optional($phieudanhgiaChidoan)->MAUPHIEU_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select m a u p h i e u</option>
        	@foreach ($Mauphieus as $key => $Mauphieu)
			    <option value="{{ $key }}" {{ old('MAUPHIEU_ID', optional($phieudanhgiaChidoan)->MAUPHIEU_ID) == $key ? 'selected' : '' }}>
			    	{{ $Mauphieu }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('MAUPHIEU_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_PDGCD') ? 'has-error' : '' }}">
    <label for="TEN_PDGCD" class="col-md-2 control-label">T E N  P D G C D</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PDGCD" type="text" id="TEN_PDGCD" value="{{ old('TEN_PDGCD', optional($phieudanhgiaChidoan)->TEN_PDGCD) }}" maxlength="50" placeholder="Enter t e n  p d g c d here...">
        {!! $errors->first('TEN_PDGCD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

