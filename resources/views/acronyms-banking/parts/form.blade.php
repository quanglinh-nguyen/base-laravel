{{ csrf_field() }}
<div class="form-group row">
    <label for="inputAcronyms" class="col-sm-2 col-form-label">Acronyms Backing</label>
    <div class="col-sm-10">
        <input type="text" name="acronym"
               class="form-control {{ $errors->has('acronym') ? 'error' : '' }} " id="inputAcronyms"
               placeholder="Acronyms Backing"
                @if(isset($model) || old('acronym')) value="{{ old('acronym') ? old('acronym') : $model->acronym}}" @endif
        >
        @if ($errors->has('acronym'))
            <label id="inputAcronyms-error" class="error" for="inputAcronyms">{{ $errors->first('acronym') }}</label>
        @endif
    </div>

</div>
<div class="form-group row">
    <label for="inputFullName" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
        <input type="text" name="full_name"
               class="form-control {{ $errors->has('full_name') ? 'error' : '' }}"
               id="inputFullName" placeholder="Full Name"
               @if(isset($model) || old('full_name')) value="{{ old('full_name') ? old('full_name') : $model->full_name}}" @endif
        >
        @if ($errors->has('full_name'))
            <label id="inputFullName-error" class="error" for="inputFullName">{{ $errors->first('full_name') }}</label>
        @endif
    </div>
</div>
