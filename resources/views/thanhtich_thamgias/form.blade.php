
<div class="form-group {{ $errors->has('DOANVIEN_THANHNIEN_ID') ? 'has-error' : '' }}">
    <label for="DOANVIEN_THANHNIEN_ID" class="col-md-2 control-label">D O A N V I E N  T H A N H N I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANVIEN_THANHNIEN_ID" name="DOANVIEN_THANHNIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANVIEN_THANHNIEN_ID', optional($thanhtichThamgia)->DOANVIEN_THANHNIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n v i e n  t h a n h n i e n</option>
        	@foreach ($DoanvienThanhniens as $key => $DoanvienThanhnien)
			    <option value="{{ $key }}" {{ old('DOANVIEN_THANHNIEN_ID', optional($thanhtichThamgia)->DOANVIEN_THANHNIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanvienThanhnien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANVIEN_THANHNIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PT_DOANKHOA_ID') ? 'has-error' : '' }}">
    <label for="PT_DOANKHOA_ID" class="col-md-2 control-label">P T  D O A N K H O A</label>
    <div class="col-md-10">
        <select class="form-control" id="PT_DOANKHOA_ID" name="PT_DOANKHOA_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PT_DOANKHOA_ID', optional($thanhtichThamgia)->PT_DOANKHOA_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p t  d o a n k h o a</option>
        	@foreach ($PtDoankhoas as $key => $PtDoankhoa)
			    <option value="{{ $key }}" {{ old('PT_DOANKHOA_ID', optional($thanhtichThamgia)->PT_DOANKHOA_ID) == $key ? 'selected' : '' }}>
			    	{{ $PtDoankhoa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PT_DOANKHOA_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('THANHTICH_ID') ? 'has-error' : '' }}">
    <label for="THANHTICH_ID" class="col-md-2 control-label">T H A N H T I C H</label>
    <div class="col-md-10">
        <select class="form-control" id="THANHTICH_ID" name="THANHTICH_ID" required="true">
        	    <option value="" style="display: none;" {{ old('THANHTICH_ID', optional($thanhtichThamgia)->THANHTICH_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select t h a n h t i c h</option>
        	@foreach ($Thanhtiches as $key => $Thanhtich)
			    <option value="{{ $key }}" {{ old('THANHTICH_ID', optional($thanhtichThamgia)->THANHTICH_ID) == $key ? 'selected' : '' }}>
			    	{{ $Thanhtich }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('THANHTICH_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIENGIAI') ? 'has-error' : '' }}">
    <label for="DIENGIAI" class="col-md-2 control-label">D I E N G I A I</label>
    <div class="col-md-10">
        <input class="form-control" name="DIENGIAI" type="text" id="DIENGIAI" value="{{ old('DIENGIAI', optional($thanhtichThamgia)->DIENGIAI) }}" maxlength="200" placeholder="Enter d i e n g i a i here...">
        {!! $errors->first('DIENGIAI', '<p class="help-block">:message</p>') !!}
    </div>
</div>

