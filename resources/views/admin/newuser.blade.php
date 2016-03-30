@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                    <h3 class="content-header">Default Form Elements</h3>
                </div>
                <div class="porlets-content">
                    <form action="" class="form-horizontal row-border">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Simplest Input</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password Field</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Input with Placeholder</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Placeholder">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Disabled Input</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Disabled Input" disabled="">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Read only field</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" readonly="" value="Read only text goes here">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">With pre-defined value</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="http://">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">With max length</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" maxlength="20" placeholder="max 20 characters here">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Popover Input</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control popovers" placeholder="Popover Input" data-trigger="hover" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tooltip Input</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Box</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="source">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK"> Argentina </option>
                                        <option value="HI"> Aruba </option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA"> Belarus </option>
                                        <option value="NV"> Chile </option>
                                        <option value="OR"> Ecuador </option>
                                        <option value="WA"> Cyprus </option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ"> Finland </option>
                                        <option value="CO"> Georgia </option>
                                        <option value="ID"> Germany </option>
                                        <option value="MT"> Honduras </option>
                                        <option value="NE"> Georgia </option>
                                        <option value="NM"> Ireland </option>
                                        <option value="ND"> Japan </option>
                                        <option value="UT"> Utah </option>
                                        <option value="WY"> Wyoming </option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL"> Kazakhstan </option>
                                        <option value="AR"> Kuwait </option>
                                        <option value="IL"> Illinois </option>
                                        <option value="IA"> Libya </option>
                                        <option value="KS"> Kansas </option>
                                        <option value="KY"> Kentucky </option>
                                        <option value="LA"> Macau </option>
                                        <option value="MN"> Minnesota </option>
                                        <option value="MS"> Mississippi </option>
                                        <option value="MO"> Liberia </option>
                                        <option value="OK"> Oklahoma </option>
                                        <option value="SD"> South Dakota </option>
                                        <option value="TX"> Texas </option>
                                        <option value="TN"> Tennessee </option>
                                        <option value="WI"> Wisconsin </option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT"> Moldova </option>
                                        <option value="DE"> Nauru </option>
                                        <option value="FL"> New Zealand </option>
                                        <option value="GA"> Georgia </option>
                                        <option value="IN"> Indiana </option>
                                        <option value="ME"> Nigeria </option>
                                        <option value="MD"> Maryland </option>
                                        <option value="MA"> Massachusetts </option>
                                        <option value="MI"> Michigan </option>
                                        <option value="NH"> New Hampshire </option>
                                        <option value="NJ"> New Jersey </option>
                                        <option value="NY"> New York </option>
                                        <option value="NC"> North Carolina </option>
                                        <option value="OH"> Ohio </option>
                                        <option value="PA"> Pennsylvania </option>
                                        <option value="RI"> Rhode Island </option>
                                        <option value="SC"> South Carolina </option>
                                        <option value="VT"> Vermont </option>
                                        <option value="VA"> Virginia </option>
                                        <option value="WV"> West Virginia </option>
                                    </optgroup>
                                </select>
                            </div><!--/col-sm-9-->
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Disabled Dropdown</label>
                            <div class="col-sm-9">
                                <select class="form-control" disabled="" placeholder="Disabled Dropdown">
                                    <option> Lorem </option>
                                    <option> Lorem ipsum dolor. </option>
                                    <option> Amet, impedit aperiam? </option>
                                    <option> Nemo, alias, quasi? </option>
                                    <option> impedit, expedita. </option>
                                </select>
                            </div><!--/col-sm-9-->
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Textarea</label>
                            <div class="col-sm-9">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="bottom">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div><!--/form-group-->
                    </form>
                </div><!--/porlets-content-->
            </div><!--/block-web-->
        </div><!--/col-md-6-->

        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                    <h3 class="content-header">Basic Form Elements</h3>
                </div>
                <div class="porlets-content">
                    <form action="" class="form-horizontal row-border">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Before Text Field</label>
                            <div class="col-sm-9">
                                <div class="input-group"> <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">After Text Field</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">.00</span> </div>
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Both</label>
                            <div class="col-sm-9">
                                <div class="input-group"> <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">.00</span> </div>
                            </div>
                        </div><!--form-group end-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Checkbox</label>
                            <div class="col-sm-9">
                                <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox">
                      <span class="custom-checkbox"></span> </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Radio</label>
                            <div class="col-sm-9">
                                <div class="input-group"> <span class="input-group-addon">
                      <input type="radio">
                      <span class="custom-radio"></span> </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Buttons instead of text</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-danger">Go!</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--/form-group-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Buttons with Dropdowns</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action <i class="icon-caret-down"></i></button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--form-group-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Segmentded Dropdown</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <i class="icon-caret-down"></i></button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Inline Radio</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <input type="radio" id="inlineradio1" value="option1">
                                    Option 1 </label>
                                <label class="radio-inline">
                                    <input type="radio" id="inlineradio2" value="option2">
                                    Option 2 </label>
                                <label class="radio-inline">
                                    <input type="radio" id="inlineradio3" value="option3">
                                    Option 3 </label>
                            </div>
                        </div><!--/form-group-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Radio</label>
                            <div class="col-sm-9">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                        Option one is this and that </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Option two can be something else </label>
                                </div>
                            </div>
                        </div><!--/form-group-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Inline Checkbox</label>
                            <div class="col-sm-9">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlinecheckbox1" value="option1">
                                    Option 1 </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlinecheckbox2" value="option2">
                                    Option 2 </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlinecheckbox3" value="option3">
                                    Option 3 </label>
                            </div>
                        </div><!--/form-group-->

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Checkbox</label>
                            <div class="col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="custom-checkbox"></span> Option one is this and that </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="custom-checkbox"></span> Option two can be something else </label>
                                </div>
                            </div>
                        </div><!--/form-group-->
                        <div class="bottom">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div><!--/porlets-content-->
            </div><!--/block-web-->
        </div><!--/col-md-6-->
    </div>
@endsection