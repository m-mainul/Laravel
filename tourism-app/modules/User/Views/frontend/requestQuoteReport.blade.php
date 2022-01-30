@extends('layouts.user')
@section('head')

@endsection
@section('content')
    <h2 class="title-bar no-border-bottom">
        {{ $page_title }}
    </h2>
    @include('admin.message')
    <div class="booking-history-manager">
        <div class="tabbable">
<!--            --><?php //echo '<pre>'; print_r($rows); echo '</pre>'; ?>
            @if(!empty($rows) and $rows->total() > 0)
                <div class="tab-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-booking-history">
                            <thead>
                            <tr>
                                <th width="2%">{{__("Type")}}</th>
                                <th>{{__('Service Info')}}</th>
                                <th>{{__('Customer Info')}}</th>
                                <th>{{__('Price')}}</th>
                                <th width="80px">{{__('Status')}}</th>
                                <th>{{__('Start Date')}}</th>
                                <th>{{__('Persons')}}</th>
                                <th width="180px">{{__('Created At')}}</th>
                                <th>{{__("Action")}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($rows->total() > 0)
                                @foreach($rows as $row)
<!--                                    --><?php //echo '<pre>'; print_r($row); echo '</pre>'; exit;?>
                                    <tr>
                                        <td class="booking-history-type">
                                            @if($service = $row->service)
                                                <i class="{{$service->getServiceIconFeatured()}}"></i>
                                            @endif
                                            <small>{{$row->object_model}}</small>
                                        </td>
                                        <td>
                                            @if($service = $row->service)
                                                <?php
                                                    $custom_quote_url = $service->getRequestQuoteDetailUrl(true, $row->price, 'custom_quote_request');
                                                    $custom_quote_title = $service->title ?? '';
                                                ?>
                                                <a href="{{$service->getRequestQuoteDetailUrl(true, $row->price, 'custom_quote_request')}}" target="_blank">{{$service->title ?? ''}}</a>
                                            @else
                                                {{__("[Deleted]")}}
                                            @endif
                                        </td>
                                        <td>
                                            <div>{{__("Name:")}} {{$row->name}}</div>
                                            <div>{{__("Email:")}} {{$row->email}}</div>
                                            <div>{{__("Phone:")}} {{$row->phone}}</div>
                                            <div>{{__("Notes:")}} {{$row->note}}</div>
                                        </td>
                                        <td>{{$row->price}}</td>
                                        <td>
                                            <span class="label label-{{$row->status}}">{{$row->statusName}}</span>
                                        </td>
                                        <td>{{display_datetime($row->start_date)}}</td>
                                        <td style="width: 170px">
                                            <div>{{__("Default Adult:")}} {{$row->default_person_adult}}</div>
                                            <div>{{__("Default Child:")}} {{$row->default_person_child}}</div>
                                            <div>{{__("EA Adult:")}} {{$row->ea_person_adult}}</div>
                                            <div>{{__("EA Child:")}} {{$row->ea_person_child}}</div>
                                            <div>{{__("TZ Adult:")}} {{$row->tz_person_adult}}</div>
                                            <div>{{__("TZ Child:")}} {{$row->tz_person_child}}</div>
                                        </td>
                                        <td>{{display_datetime($row->updated_at)}}</td>
                                        <td width="2%">
                                            @if(!empty( $has_permission_request_quote_update ))
                                                <a class="btn btn-xs btn-info btn-make-as" data-toggle="dropdown">
                                                    <i class="icofont-ui-settings"></i>
                                                    {{__("Action")}}
                                                </a>
                                                <div class="dropdown-menu">
                                                    @if(!empty($statues))
                                                        @foreach($statues as $status)
                                                            <a href="{{ route("vendor.request_quote_report.bulk_edit" , ['id'=>$row->id , 'status'=>$status, 'name'=>$row->name, 'email'=>$row->email, 'custom_quote_url' => $custom_quote_url, 'custom_quote_title' => $custom_quote_title]) }}">
{{--                                                            <a href="{{ route("vendor.request_quote_report.bulk_edit" , ['id'=>$row->id , 'status'=>$status, 'name'=>'1', 'email'=>'22', 'custom_quote_url' => '33', 'custom_quote_title' => '44']) }}">--}}
                                                                <i class="icofont-long-arrow-right"></i> {{__('Mark as: :name',['name'=>booking_status_to_text($status)])}}
                                                            </a>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('report.admin.edit',['id'=>$row->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> {{__('Edit')}}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">{{__("No data")}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="bravo-pagination">
                        {{$rows->appends(request()->query())->links()}}
                    </div>
                </div>
            @else
                {{__("No data")}}
            @endif
        </div>
    </div>
@endsection
@section('footer')

@endsection
