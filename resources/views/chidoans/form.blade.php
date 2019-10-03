
<div class="form-group {{ $errors->has('PHIEUDANHGIA_CHIDOAN_ID') ? 'has-error' : '' }}">
    <label for="PHIEUDANHGIA_CHIDOAN_ID" class="col-md-2 control-label">P H I E U D A N H G I A  C H I D O A N</label>
    <div class="col-md-10">
        <select class="form-control" id="PHIEUDANHGIA_CHIDOAN_ID" name="PHIEUDANHGIA_CHIDOAN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PHIEUDANHGIA_CHIDOAN_ID', optional($chidoan)->PHIEUDANHGIA_CHIDOAN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p h i e u d a n h g i a  c h i d o a n</option>
        	@foreach ($PhieudanhgiaChidoans as $key => $PhieudanhgiaChidoan)
			    <option value="{{ $key }}" {{ old('PHIEUDANHGIA_CHIDOAN_ID', optional($chidoan)->PHIEUDANHGIA_CHIDOAN_ID) == $key ? 'selected' : '' }}>
			    	{{ $PhieudanhgiaChidoan }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHIEUDANHGIA_CHIDOAN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DOANPHI_CHI_CD_ID') ? 'has-error' : '' }}">
    <label for="DOANPHI_CHI_CD_ID" class="col-md-2 control-label">D O A N P H I  C H I  C D</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANPHI_CHI_CD_ID" name="DOANPHI_CHI_CD_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANPHI_CHI_CD_ID', optional($chidoan)->DOANPHI_CHI_CD_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n p h i  c h i  c d</option>
        	@foreach ($DoanphiChiCds as $key => $DoanphiChiCd)
			    <option value="{{ $key }}" {{ old('DOANPHI_CHI_CD_ID', optional($chidoan)->DOANPHI_CHI_CD_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanphiChiCd }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANPHI_CHI_CD_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DOANKHOA_ID') ? 'has-error' : '' }}">
    <label for="DOANKHOA_ID" class="col-md-2 control-label">D O A N K H O A</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANKHOA_ID" name="DOANKHOA_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANKHOA_ID', optional($chidoan)->DOANKHOA_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n k h o a</option>
        	@foreach ($Doankhoas as $key => $Doankhoa)
			    <option value="{{ $key }}" {{ old('DOANKHOA_ID', optional($chidoan)->DOANKHOA_ID) == $key ? 'selected' : '' }}>
			    	{{ $Doankhoa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANKHOA_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('KHOA_ID') ? 'has-error' : '' }}">
    <label for="KHOA_ID" class="col-md-2 control-label">K H O A</label>
    <div class="col-md-10">
        <select class="form-control" id="KHOA_ID" name="KHOA_ID" required="true">
        	    <option value="" style="display: none;" {{ old('KHOA_ID', optional($chidoan)->KHOA_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select k h o a</option>
        	@foreach ($Khoas as $key => $Khoa)
			    <option value="{{ $key }}" {{ old('KHOA_ID', optional($chidoan)->KHOA_ID) == $key ? 'selected' : '' }}>
			    	{{ $Khoa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('KHOA_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_CD') ? 'has-error' : '' }}">
    <label for="TEN_CD" class="col-md-2 control-label">T E N  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_CD" type="text" id="TEN_CD" value="{{ old('TEN_CD', optional($chidoan)->TEN_CD) }}" maxlength="50" placeholder="Enter t e n  c d here...">
        {!! $errors->first('TEN_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

