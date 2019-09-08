<section class="addpanel-section">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading tab-bg-info">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#profile">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#edit-profile">
                                <i class="icon-envelope"></i>
                                Edit Profile
                            </a>
                        </li>
                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="profile" class="tab-pane active">
                            <section class="panel">
                                <div class="bio-graph-heading">
                                    Hello I’m {{ $teacher->name }}, and there will be some information about me
                                </div>
                                <div class="panel-body bio-graph-info">
                                    <h1>Bio Graph</h1>
                                    <div class="row">
                                        <div class="bio-row">
                                            <p><span>First Name </span>: Jenifer </p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Last Name </span>: Smith</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Birthday</span>: 27 August 1987</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Country </span>: United</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Occupation </span>: UI Designer</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Email </span>:jenifer@mailname.com</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Mobile </span>: (+6283) 456 789</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Phone </span>: (+021) 956 789123</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="row">
                                </div>
                            </section>
                        </div>
                        <!-- edit-profile -->
                        <div id="edit-profile" class="tab-pane">
                            <section class="panel">
                                <div class="panel-body bio-graph-info">
                                    <h1> Profile Info</h1>
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">First Name</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="f-name"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Last Name</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="l-name"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">About Me</label>
                                            <div class="col-lg-10">
                                                            <textarea name="" id="" class="form-control" cols="30"
                                                                      rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Country</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="c-name"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Birthday</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="b-day"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Occupation</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="occupation"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="email"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Mobile</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mobile"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Website URL</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="url"
                                                       placeholder="http://www.example.com ">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>