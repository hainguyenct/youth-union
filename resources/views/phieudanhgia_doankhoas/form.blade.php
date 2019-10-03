
<div class="form-group {{ $errors->has('XEPLOAI_DK_ID') ? 'has-error' : '' }}">
    <label for="XEPLOAI_DK_ID" class="col-md-2 control-label">X E P L O A I  D K</label>
    <div class="col-md-10">
        <select class="form-control" id="XEPLOAI_DK_ID" name="XEPLOAI_DK_ID" required="true">
        	    <option value="" style="display: none;" {{ old('XEPLOAI_DK_ID', optional($phieudanhgiaDoankhoa)->XEPLOAI_DK_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select x e p l o a i  d k</option>
        	@foreach ($XeploaiDks as $key => $XeploaiDk)
			    <option value="{{ $key }}" {{ old('XEPLOAI_DK_ID', optional($phieudanhgiaDoankhoa)->XEPLOAI_DK_ID) == $key ? 'selected' : '' }}>
			    	{{ $XeploaiDk }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('XEPLOAI_DK_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('MAUPHIEU_ID') ? 'has-error' : '' }}">
    <label for="MAUPHIEU_ID" class="col-md-2 control-label">M A U P H I E U</label>
    <div class="col-md-10">
        <select class="form-control" id="MAUPHIEU_ID" name="MAUPHIEU_ID" required="true">
        	    <option value="" style="display: none;" {{ old('MAUPHIEU_ID', optional($phieudanhgiaDoankhoa)->MAUPHIEU_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select m a u p h i e u</option>
        	@foreach ($Mauphieus as $key => $Mauphieu)
			    <option value="{{ $key }}" {{ old('MAUPHIEU_ID', optional($phieudanhgiaDoankhoa)->MAUPHIEU_ID) == $key ? 'selected' : '' }}>
			    	{{ $Mauphieu }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('MAUPHIEU_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_PDGDK') ? 'has-error' : '' }}">
    <label for="TEN_PDGDK" class="col-md-2 control-label">T E N  P D G D K</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PDGDK" type="text" id="TEN_PDGDK" value="{{ old('TEN_PDGDK', optional($phieudanhgiaDoankhoa)->TEN_PDGDK) }}" maxlength="50" placeholder="Enter t e n  p d g d k here...">
        {!! $errors->first('TEN_PDGDK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

