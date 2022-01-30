<div class="modal fade" tabindex="-1" role="dialog" id="custom_quote_form_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content request_quote_form_modal_form form-book">
            <div class="modal-header">
                <h5 class="modal-title">{{__("Custom Quote Info Form")}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bravo_single_book" id="custom-request-quote-form">
                <input type="hidden" name="request_quote_service_id" value="{{$row->id}}">
                <input type="hidden" name="request_quote_service_type" value="{{$service_type ?? ''}}">
                <div class="form-group form-date-field form-date-search clearfix " data-format="{{get_moment_date_format()}}">
                    <div class="date-wrapper clearfix" @click="openStartDate">
                        <div class="check-in-wrapper">
                            <label>{{__("Start Date")}}</label>
                            <div class="render check-in-render">@{{start_date_html}}</div>
                        </div>
                        <i class="fa fa-angle-down arrow"></i>
                    </div>
                    <input type="text" name="start_date" class="start_date" ref="start_date" style="height: 1px; visibility: hidden">
                </div>
                <div class="form-group">
                    <div class="date-wrapper clearfix">
                        <div class="check-in-wrapper">
                            <label>{{__("Default Persons")}}</label>
                        </div>
                        <i class="fa fa-angle-down arrow" data-toggle="collapse" href="#customDefaultPricing" role="button" aria-expanded="false" aria-controls="customDefaultPricing"></i>
                    </div>
                </div>
                <div class="collapse" id="customDefaultPricing">
                    <div class="card card-body">
                        <div class="">
                            <div class="form-group form-guest-search">
                                <div class="guest-wrapper d-flex justify-content-between align-items-center">
                                    <div class="flex-grow-1">
                                        <label>Adult</label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="input-number-group">
                                            <input type="number" name="default_person_adult" class="form-control text-center" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-guest-search">
                                <div class="guest-wrapper d-flex justify-content-between align-items-center">
                                    <div class="flex-grow-1">
                                        <label>Child</label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="input-number-group">
                                            <input type="number" name="default_person_child" class="form-control text-center" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="date-wrapper clearfix">
                        <div class="check-in-wrapper">
                            <label>{{__("EA Citizen Persons")}}</label>
                        </div>
                        <i class="fa fa-angle-down arrow" data-toggle="collapse" href="#customEaCitizensPricing" role="button" aria-expanded="false" aria-controls="customEaCitizensPricing"></i>
                    </div>
                </div>
                <div class="collapse" id="customEaCitizensPricing">
                    <div class="card card-body">
                        <div class="">
                            <div class="form-group form-guest-search">
                                <div class="guest-wrapper d-flex justify-content-between align-items-center">
                                    <div class="flex-grow-1">
                                        <label>Adult</label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="input-number-group">
                                            <input type="number" name="ea_person_adult" class="form-control text-center" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-guest-search">
                                <div class="guest-wrapper d-flex justify-content-between align-items-center">
                                    <div class="flex-grow-1">
                                        <label>Child</label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="input-number-group">
                                            <input type="number" name="ea_person_child" class="form-control text-center" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="date-wrapper clearfix">
                        <div class="check-in-wrapper">
                            <label>{{__("TZ Resident Persons")}}</label>
                        </div>
                        <i class="fa fa-angle-down arrow" data-toggle="collapse" href="#customTzCitizensPricing" role="button" aria-expanded="false" aria-controls="customTzCitizensPricing"></i>
                    </div>
                </div>
                <div class="collapse" id="customTzCitizensPricing">
                    <div class="card card-body">
                        <div class="">
                            <div class="form-group form-guest-search">
                                <div class="guest-wrapper d-flex justify-content-between align-items-center">
                                    <div class="flex-grow-1">
                                        <label>Adult</label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="input-number-group">
                                            <input type="number" name="tz_person_adult" class="form-control text-center" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-guest-search">
                                <div class="guest-wrapper d-flex justify-content-between align-items-center">
                                    <div class="flex-grow-1">
                                        <label>Child</label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="input-number-group">
                                            <input type="number" name="tz_person_child" class="form-control text-center" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="{{ __("Note: Please provide details as much as possible like start date, number of people, asking price etc.") }}" name="request_quote_note"></textarea>
                </div>
                <div class="message_box"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-primary btn-submit-request-quote">{{__("Send now")}}
                    <i class="fa icon-loading fa-spinner fa-spin fa-fw" style="display: none"></i>
                </button>
            </div>
        </div>
    </div>
</div>
