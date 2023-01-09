@csrf

<div class="row">
    <div class="col-md-6">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Industry</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label
                        for="industry"
                        class=" col-form-label"
                    >Industry</label
                    >
                    <input
                        type="text"
                        class="form-control  {{ $errors->has('industry') ? 'industry' : '' }}"
                        id="industry"
                        name="industry"
                        placeholder="Industry"
                        @if(isset($model) || old('industry')) value="{{ old('industry') ? old('industry') : $model->industry}}" @endif
                    />
                    @if ($errors->has('industry'))
                        <label id="industry-error" class="error" for="industry">{{ $errors->first('industry') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="sub_industry"
                        class=" col-form-label"
                    >SubIndustry</label
                    >
                    <input
                        type="text"
                        class="form-control {{ $errors->has('sub_industry') ? 'error' : '' }} "
                        id="sub_industry"
                        name="sub_industry"
                        placeholder="SubIndustry"
                        @if(isset($model) || old('sub_industry')) value="{{ old('sub_industry') ? old('sub_industry') : $model->sub_industry}}" @endif
                    />
                    @if ($errors->has('sub_industry'))
                        <label id="sub_industry-error" class="error" for="sub_industry">{{ $errors->first('sub_industry') }}</label>
                    @endif
                </div>
                <div class="form-group ">
                    <label
                        for="geo_code"
                        class=" col-form-label"
                    >GeoCode</label
                    >
                    <input
                        type="text"
                        class="form-control  {{ $errors->has('geo_code') ? 'error' : '' }}"
                        id="geo_code"
                        name="geo_code"
                        placeholder="GeoCode"
                        @if(isset($model) || old('geo_code')) value="{{ old('geo_code') ? old('geo_code') : $model->geo_code}}" @endif
                    />
                    @if ($errors->has('geo_code'))
                        <label id="geo_code-error" class="error" for="geo_code">{{ $errors->first('geo_code') }}</label>
                    @endif
                </div>
                <div class="form-group ">
                    <label
                        for="inputHqOrBr"
                        class=" col-form-label"
                    >HQ or BR</label
                    >
                    <div class="row">
                        <div class="col-6">
                            <div
                                class="custom-control custom-radio"
                            >
                                <input
                                    class="custom-control-input"
                                    type="radio"
                                    id="hq_or_br1"
                                    name="hq_or_br"
                                    value="HQ"
                                    @if(isset($model) || old('hq_or_br'))
                                        @if(isset($model) && $model->hq_or_br == 'HQ') checked @endif
                                        @if(old('hq_or_br') &&old('hq_or_br') == 'HQ') checked @endif
                                    @endif
                                    @if(!isset($model) || !old('hq_or_br')) checked @endif
                                    value="HR"
                                />
                                <label
                                    for="hq_or_br1"
                                    class="custom-control-label"
                                >HQ</label
                                >
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="custom-control custom-radio"
                            >
                                <input
                                    class="custom-control-input"
                                    type="radio"
                                    id="hq_or_br2"
                                    name="hq_or_br"
                                    value="BR"
                                    @if(isset($model) || old('hq_or_br'))
                                        @if(isset($model) && $model->hq_or_br == 'BR') checked @endif
                                    @if(old('hq_or_br') &&old('hq_or_br') == 'BR') checked @endif
                                    @endif
                                />
                                <label
                                    for="hq_or_br2"
                                    class="custom-control-label"
                                >BR</label
                                >
                            </div>
                        </div>
                        @if ($errors->has('hq_or_br'))
                            <label id="hq_or_br-error" class="error" for="hq_or_br">{{ $errors->first('hq_or_br') }}</label>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <label
                        for="scale"
                        class=" col-form-label {{ $errors->has('scale') ? 'error' : '' }}"
                    >Scale</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="scale"
                        name="scale"
                        placeholder="Scale"
                        @if(isset($model) || old('scale')) value="{{ old('scale') ? old('scale') : $model->scale}}" @endif
                    />
                    @if ($errors->has('scale'))
                        <label id="scale-error" class="error" for="scale">{{ $errors->first('scale') }}</label>
                    @endif
                </div>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Organization</h3>
            </div>
            <div class="card-body">
                <div class="form-group ">
                    <label
                        for="organization_eng"
                        class=" col-form-label"
                    >OrganizationE</label
                    >
                    <textarea
                        class="form-control {{ $errors->has('organization_eng') ? 'error' : '' }}"
                        rows="3"
                        placeholder="OrganizationE"
                        id="organization_eng"
                        name="organization_eng"
                    >@if(isset($model) || old('organization_eng')) {{ old('organization_eng') ? old('organization_eng') : $model->organization_eng}} @endif</textarea>
                    @if ($errors->has('organization_eng'))
                        <label id="organization_eng-error" class="error" for="organization_eng">{{ $errors->first('organization_eng') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="organization_viet"
                        class=" col-form-label"
                    >OrganizationV</label
                    >
                    <textarea
                        class="form-control {{ $errors->has('organization_viet') ? 'error' : '' }}"
                        rows="3"
                        placeholder="OrganizationV"
                        id="organization_viet"
                        name="organization_viet"
                    >@if(isset($model) || old('organization_viet')){{ old('organization_viet') ? old('organization_viet') : $model->organization_viet}}@endif</textarea>
                    @if ($errors->has('organization_viet'))
                        <label id="organization_viet-error" class="error" for="organization_viet">{{ $errors->first('organization_viet') }}</label>
                    @endif
                </div>
                <div class="form-group ">
                    <label
                        for="website"
                        class=" col-form-label"
                    >Website</label
                    >
                    <input
                        type="text"
                        class="form-control {{ $errors->has('website') ? 'error' : '' }}"
                        id="website"
                        name="website"
                        placeholder="Website"
                        @if(isset($model) || old('website')) value="{{ old('website') ? old('website') : $model->website}}" @endif
                    />
                    @if ($errors->has('website'))
                        <label id="website-error" class="error" for="website">{{ $errors->first('website') }}</label>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Customer Info</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label
                        for="prefix"
                        class=" col-form-label"
                    >Prefix</label
                    >
                    <input
                        type="text"
                        class="form-control {{ $errors->has('prefix') ? 'error' : '' }}"
                        id="prefix"
                        name="prefix"
                        placeholder="Prefix"
                        @if(isset($model) || old('prefix')) value="{{ old('prefix') ? old('prefix') : $model->prefix}}" @endif
                    />
                    @if ($errors->has('prefix'))
                        <label id="prefix-error" class="error" for="prefix">{{ $errors->first('prefix') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="name"
                        class=" col-form-label"
                    >Name</label
                    >
                    <input
                        type="text"
                        class="form-control {{ $errors->has('name') ? 'error' : '' }}"
                        id="name"
                        name="name"
                        placeholder="Name"
                        @if(isset($model) || old('name')) value="{{ old('name') ? old('name') : $model->name}}" @endif
                    />
                    @if ($errors->has('name'))
                        <label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="title_department_eng"
                        class=" col-form-label"
                    >Title € - Department
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('title_department_eng') ? 'error' : '' }}"
                        id="title_department_eng"
                        name="title_department_eng"
                        placeholder="Title1Department"
                        @if(isset($model) || old('title_department_eng')) value="{{ old('title_department_eng') ? old('title_department_eng') : $model->title_department_eng}}" @endif
                    />
                    @if ($errors->has('title_department_eng'))
                        <label id="title_department_eng-error" class="error" for="title_department_eng">{{ $errors->first('title_department_eng') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="title_department_viet"
                        class=" col-form-label"
                    >Title (V) - Department
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('title_department_viet') ? 'error' : '' }}"
                        id="title_department_viet"
                        name="title_department_viet"
                        placeholder="TitleVDepartment"
                        @if(isset($model) || old('title_department_viet')) value="{{ old('title_department_viet') ? old('title_department_viet') : $model->title_department_viet}}" @endif
                    />
                    @if ($errors->has('title_department_viet'))
                        <label id="title_department_viet-error" class="error" for="title_department_viet">{{ $errors->first('title_department_viet') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="professional"
                        class=" col-form-label"
                    >Professional
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('professional') ? 'error' : '' }}"
                        id="professional"
                        name="professional"
                        placeholder="Professional"
                        @if(isset($model) || old('professional')) value="{{ old('professional') ? old('professional') : $model->professional}}" @endif
                    />
                    @if ($errors->has('professional'))
                        <label id="professional-error" class="error" for="professional">{{ $errors->first('professional') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="title_level"
                        class=" col-form-label"
                    >TitleLevel
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('title_level') ? 'error' : '' }}"
                        id="title_level"
                        name="title_level"
                        placeholder="TitleLevel"
                        @if(isset($model) || old('title_level')) value="{{ old('title_level') ? old('title_level') : $model->title_level}}" @endif
                    />
                    @if ($errors->has('title_level'))
                        <label id="title_level-error" class="error" for="title_level">{{ $errors->first('title_level') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="directphone_extension"
                        class=" col-form-label"
                    >DirectPhone/Extension
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('directphone_extension') ? 'error' : '' }}"
                        id="directphone_extension"
                        name="directphone_extension"
                        placeholder="DirectPhone/Extension"
                        @if(isset($model) || old('directphone_extension')) value="{{ old('directphone_extension') ? old('directphone_extension') : $model->directphone_extension}}" @endif
                    />
                    @if ($errors->has('directphone_extension'))
                        <label id="directphone_extension-error" class="error" for="directphone_extension">{{ $errors->first('directphone_extension') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="mobile"
                        class=" col-form-label"
                    >Mobile
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('mobile') ? 'error' : '' }}"
                        id="mobile"
                        name="mobile"
                        placeholder="Mobile"
                        @if(isset($model) || old('mobile')) value="{{ old('mobile') ? old('mobile') : $model->mobile}}" @endif
                    />
                    @if ($errors->has('mobile'))
                        <label id="mobile-error" class="error" for="mobile">{{ $errors->first('mobile') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="linkedIn"
                        class=" col-form-label"
                    >LinkedIn
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('linkedIn') ? 'error' : '' }}"
                        id="linkedIn"
                        name="linkedIn"
                        placeholder="LinkedIn"
                        @if(isset($model) || old('linkedIn')) value="{{ old('linkedIn') ? old('linkedIn') : $model->linkedIn}}" @endif
                    />
                    @if ($errors->has('linkedIn'))
                        <label id="linkedIn-error" class="error" for="linkedIn">{{ $errors->first('linkedIn') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="company_email"
                        class=" col-form-label"
                    >Company Email
                    </label>
                    <input
                        type="email"
                        class="form-control {{ $errors->has('company_email') ? 'error' : '' }}"
                        id="company_email"
                        name="company_email"
                        placeholder="Company Email"
                        @if(isset($model) || old('company_email')) value="{{ old('company_email') ? old('company_email') : $model->company_email}}" @endif
                    />
                    @if ($errors->has('company_email'))
                        <label id="company_email-error" class="error" for="company_email">{{ $errors->first('company_email') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="business_email"
                        class=" col-form-label"
                    >Business Email
                    </label>
                    <input
                        type="email"
                        class="form-control {{ $errors->has('business_email') ? 'error' : '' }}"
                        id="business_email"
                        name="business_email"
                        placeholder="Business Email"
                        @if(isset($model) || old('business_email')) value="{{ old('business_email') ? old('business_email') : $model->business_email}}" @endif
                    />
                    @if ($errors->has('business_email'))
                        <label id="business_email-error" class="error" for="business_email">{{ $errors->first('business_email') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="personal_email"
                        class=" col-form-label"
                    >Personal Email
                    </label>
                    <input
                        type="email"
                        class="form-control {{ $errors->has('personal_email') ? 'error' : '' }}"
                        id="personal_email"
                        name="personal_email"
                        placeholder="Personal Email"
                        @if(isset($model) || old('personal_email')) value="{{ old('personal_email') ? old('personal_email') : $model->personal_email}}" @endif
                    />

                    @if ($errors->has('personal_email'))
                        <label id="personal_email-error" class="error" for="personal_email">{{ $errors->first('personal_email') }}</label>
                    @endif
                </div>

                <div class="form-group">
                    <label
                        for="address"
                        class=" col-form-label"
                    >Address</label
                    >
                    <input
                        type="text"
                        class="form-control {{ $errors->has('address') ? 'error' : '' }}"
                        id="address"
                        name="address"
                        placeholder="Address"
                        @if(isset($model) || old('address')) value="{{ old('address') ? old('address') : $model->address}}" @endif
                    />
                    @if ($errors->has('address'))
                        <label id="address-error" class="error" for="address">{{ $errors->first('address') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="outdate_business_email"
                        class=" col-form-label text-danger"
                    >Outdate Business Email</label
                    >
                    <input
                        type="email"
                        class="form-control {{ $errors->has('outdate_business_email') ? 'error' : '' }}"
                        id="outdate_business_email"
                        name="outdate_business_email"
                        placeholder="Outdate Business Email"
                        @if(isset($model) || old('outdate_business_email')) value="{{ old('outdate_business_email') ? old('outdate_business_email') : $model->outdate_business_email}}" @endif
                    />
                    @if ($errors->has('outdate_business_email'))
                        <label id="outdate_business_email-error" class="error" for="outdate_business_email">{{ $errors->first('outdate_business_email') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="outdate_personal_email"
                        class=" col-form-label text-danger"
                    >Outdate Personal Email</label
                    >
                    <input
                        type="email"
                        class="form-control {{ $errors->has('outdate_personal_email') ? 'error' : '' }}"
                        id="outdate_personal_email"
                        name="outdate_personal_email"
                        placeholder="Outdate Personal Email"
                        @if(isset($model) || old('outdate_personal_email')) value="{{ old('outdate_personal_email') ? old('outdate_personal_email') : $model->outdate_personal_email}}" @endif
                    />
                    @if ($errors->has('outdate_personal_email'))
                        <label id="outdate_personal_email-error" class="error" for="outdate_personal_email">{{ $errors->first('outdate_personal_email') }}</label>
                    @endif
                </div>

                <div class="form-group">
                    <label
                        for="last_updated_date"
                        class=" col-form-label  text-danger"
                    >LastUpdatedDate
                    </label>
                    <input
                        type="date"
                        class="form-control {{ $errors->has('last_updated_date') ? 'error' : '' }}"
                        id="last_updated_date"
                        name="last_updated_date"
                        placeholder="LastUpdatedDate"
                        @if(isset($model) || old('last_updated_date')) value="{{ old('last_updated_date') ? old('last_updated_date') : $model->last_updated_date}}" @endif
                    />
                    @if ($errors->has('last_updated_date'))
                        <label id="last_updated_date-error" class="error" for="last_updated_date">{{ $errors->first('last_updated_date') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="attendance"
                        class=" col-form-label"
                    >Attendance
                    </label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('attendance') ? 'error' : '' }}"
                        id="attendance"
                        name="attendance"
                        placeholder="Attendance"
                        @if(isset($model) || old('attendance')) value="{{ old('attendance') ? old('attendance') : $model->attendance}}" @endif
                    />
                    @if ($errors->has('attendance'))
                        <label id="attendance-error" class="error" for="attendance">{{ $errors->first('attendance') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label
                        for="note"
                        class=" col-form-label"
                    >Note
                    </label>
                    <textarea class="form-control  {{ $errors->has('note') ? 'error' : '' }}" rows="3" placeholder="Note" id="note" name="note"
                    >@if(isset($model) || old('note')){{ old('note') ? old('note') : $model->note}}@endif</textarea>
                    @if ($errors->has('note'))
                        <label id="note-error" class="error" for="note">{{ $errors->first('note') }}</label>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group row  pb-5">
    <div class="offset-sm-1 col-sm-10 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fa-solid fa-circle-plus"></i>
            @if(isset($model)) Update @else Create @endif
        </button>
        <a href="{{ route('customers.index')}}" class="btn btn-secondary">
            <i class="fa-regular fa-rectangle-xmark"></i>
            Cancel
        </a>
    </div>
</div>
