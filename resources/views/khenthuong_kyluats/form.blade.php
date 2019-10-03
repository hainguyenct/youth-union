
<div class="form-group {{ $errors->has('LOAI_KTKL_ID') ? 'has-error' : '' }}">
    <label for="LOAI_KTKL_ID" class="col-md-2 control-label">L O A I  K T K L</label>
    <div class="col-md-10">
        <select class="form-control" id="LOAI_KTKL_ID" name="LOAI_KTKL_ID" required="true">
        	    <option value="" style="display: none;" {{ old('LOAI_KTKL_ID', optional($khenthuongKyluat)->LOAI_KTKL_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select l o a i  k t k l</option>
        	@foreach ($LoaiKtkls as $key => $LoaiKtkl)
			    <option value="{{ $key }}" {{ old('LOAI_KTKL_ID', optional($khenthuongKyluat)->LOAI_KTKL_ID) == $key ? 'selected' : '' }}>
			    	{{ $LoaiKtkl }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('LOAI_KTKL_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('HINHTHUC_KTKL_ID') ? 'has-error' : '' }}">
    <label for="HINHTHUC_KTKL_ID" class="col-md-2 control-label">H I N H T H U C  K T K L</label>
    <div class="col-md-10">
        <select class="form-control" id="HINHTHUC_KTKL_ID" name="HINHTHUC_KTKL_ID" required="true">
        	    <option value="" style="display: none;" {{ old('HINHTHUC_KTKL_ID', optional($khenthuongKyluat)->HINHTHUC_KTKL_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select h i n h t h u c  k t k l</option>
        	@foreach ($HinhthucKtkls as $key => $HinhthucKtkl)
			    <option value="{{ $key }}" {{ old('HINHTHUC_KTKL_ID', optional($khenthuongKyluat)->HINHTHUC_KTKL_ID) == $key ? 'selected' : '' }}>
			    	{{ $HinhthucKtkl }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('HINHTHUC_KTKL_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_KTKL') ? 'has-error' : '' }}">
    <label for="TEN_KTKL" class="col-md-2 control-label">T E N  K T K L</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_KTKL" type="text" id="TEN_KTKL" value="{{ old('TEN_KTKL', optional($khenthuongKyluat)->TEN_KTKL) }}" maxlength="50" placeholder="Enter t e n  k t k l here...">
        {!! $errors->first('TEN_KTKL', '<p class="help-block">:message</p>') !!}
    </div>
</div>

