@extends('layout.main')

@section('title_page','Add Customer')

@section('content')
    <!-- Default box -->

    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Industry</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label
                            for="inputIndustry"
                            class=" col-form-label"
                        >Industry</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputIndustry"
                            placeholder="Industry"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputSubIndustry"
                            class=" col-form-label"
                        >SubIndustry</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputSubIndustry"
                            placeholder="SubIndustry"
                        />
                    </div>
                    <div class="form-group ">
                        <label
                            for="inputGeoCode"
                            class=" col-form-label"
                        >GeoCode</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputGeoCode"
                            placeholder="GeoCode"
                        />
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
                                        id="customRadio1"
                                        name="inputHqOrBr"
                                        checked
                                        value="HR"
                                    />
                                    <label
                                        for="customRadio1"
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
                                        id="customRadio2"
                                        name="inputHqOrBr"
                                        value="BR"
                                    />
                                    <label
                                        for="customRadio2"
                                        class="custom-control-label"
                                    >BR</label
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label
                            for="inputScale"
                            class=" col-form-label"
                        >Scale</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputScale"
                            placeholder="Scale"
                        />
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
                            for="inputOrganizationE"
                            class=" col-form-label"
                        >OrganizationE</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputOrganizationE"
                            placeholder="OrganizationE"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputOrganizationV"
                            class=" col-form-label"
                        >OrganizationV</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputOrganizationV"
                            placeholder="OrganizationV"
                        />
                    </div>
                    <div class="form-group ">
                        <label
                            for="inputWebsite"
                            class=" col-form-label"
                        >Website</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputWebsite"
                            placeholder="Website"
                        />
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
                            for="inputPrefix"
                            class=" col-form-label"
                        >Prefix</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputPrefix"
                            placeholder="Prefix"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputName2"
                            class=" col-form-label"
                        >Name</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="inputName2"
                            placeholder="Name"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputTitle1Department"
                            class=" col-form-label"
                        >Title € - Department
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputTitle1Department"
                            placeholder="Title1Department"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputTitleVDepartment"
                            class=" col-form-label"
                        >Title (V) - Department
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputTitleVDepartment"
                            placeholder="TitleVDepartment"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputProfessional"
                            class=" col-form-label"
                        >Professional
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputProfessional"
                            placeholder="Professional"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputTitleLevel"
                            class=" col-form-label"
                        >TitleLevel
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputTitleLevel"
                            placeholder="TitleLevel"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputMobile"
                            class=" col-form-label"
                        >Mobile
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputMobile"
                            placeholder="Mobile"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputBusinessEmail"
                            class=" col-form-label"
                        >Business Email
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputBusinessEmail"
                            placeholder="BusinessEmail"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputPersonalEmail"
                            class=" col-form-label"
                        >Personal Email
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputPersonalEmail"
                            placeholder="PersonalEmail"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputOutdateBusinessEmail"
                            class=" col-form-label text-danger"
                        >Outdate Business Email</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputOutdateBusinessEmail"
                            placeholder="OutdateBusinessEmail"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputOutdatePersonalEmail"
                            class=" col-form-label text-danger"
                        >Outdate Personal Email</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputOutdatePersonalEmail"
                            placeholder="OutdatePersonalEmail"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputAddress"
                            class=" col-form-label"
                        >Address</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputAddress"
                            placeholder="Address"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputActionCode"
                            class=" col-form-label"
                        >ActionCode
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputActionCode"
                            placeholder="ActionCode"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputAttendance"
                            class=" col-form-label"
                        >Attendance
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="inputAttendance"
                            placeholder="Attendance"
                        />
                    </div>
                    <div class="form-group">
                        <label
                            for="inputBanking"
                            class=" col-form-label"
                        >Banking</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="inputBanking"
                            placeholder="Banking"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-12">
            <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
    </div>
@endsection
