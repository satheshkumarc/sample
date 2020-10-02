
<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="firstname" value="{{{ isset($students->firstname) ? $students->firstname : old('firstname') }}}">
                                    <span style="color:red">{{$errors->first('firstname')}}</span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lastname" value="{{{ isset($students->lastname) ? $students->lastname : old('lastname') }}}">
                                    <span style="color:red">{{$errors->first('lastname')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Dob</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dob" value="{{{ isset($students->dob) ? $students->dob : old('dob') }}}">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        <span style="color:red">{{$errors->first('dob')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="gender" value="male" {{{ isset($students->gender) && $students->gender == 'male' ? 'checked' : '' }}}>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="female" {{{ isset($students->gender) && $students->gender == 'female' ? 'checked' : '' }}}>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span style="color:red">{{$errors->first('gender')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" value="{{{ isset($students->email) ? $students->email : old('email') }}}">
                                    <span style="color:red">{{$errors->first('email')}}</span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" value="{{{ isset($students->phone) ? $students->phone : old('phone') }}}">
                                    <span style="color:red">{{$errors->first('phone')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option selected="selected" value="{{{ isset($students->subject) ? $students->subject : old('subject') }}}">{{{ isset($students->subject) ? $students->subject : 'Choose option' }}}</option>
                                    <option value="Subject 1">Subject 1</option>
                                    <option value="Subject 2">Subject 2</option>
                                    <option value="Subject 3">Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                                <span style="color:red">{{$errors->first('subject')}}</span>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" id="test_submit">Submit</button>
                        </div>
                        @csrf