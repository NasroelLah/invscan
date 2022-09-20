<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description page-description-tabbed">
                        <h1>Settings</h1>

                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="hoaccountme" aria-selected="true">Account</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">Security</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="settingsInputEmail" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="settingsInputEmail" aria-describedby="settingsEmailHelp" placeholder="example@neptune.com">
                                            <div id="settingsEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="settingsPhoneNumber" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="settingsPhoneNumber" placeholder="(xxx) xxx-xxxx">
                                        </div>
                                    </div>
                                    <div class="row m-t-lg">
                                        <div class="col-md-6">
                                            <label for="settingsInputFirstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="settingsInputFirstName" placeholder="John">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="settingsInputLastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="settingsInputLastName" placeholder="Doe">
                                        </div>
                                    </div>
                                    <div class="row m-t-lg">
                                        <div class="col-md-6">
                                            <label for="settingsInputUserName" class="form-label">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="settingsInputUserName-add">neptune.com/</span>
                                                <input type="text" class="form-control" id="settingsInputUserName" aria-describedby="settingsInputUserName-add" placeholder="username">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="settingsState" class="form-label">State</label>
                                            <select class="js-states form-control" id="select" tabindex="-1" style="display: none; width: 100%">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row m-t-lg">
                                        <div class="col">
                                            <label for="settingsAbout" class="form-label">About</label>
                                            <textarea class="form-control" id="settingsAbout" maxlength="500" rows="4" aria-describedby="settingsAboutHelp"></textarea>
                                            <div id="emailHelp" class="form-text">Brief information about you to display on profile (max: 500 characters)</div>
                                        </div>
                                    </div>
                                    <div class="row m-t-lg">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="SettingsNewsLetter">
                                                <label class="form-check-label" for="SettingsNewsLetter">
                                                    Receive notifications about updates &amp; maintenances
                                                </label>
                                            </div>
                                            <a href="#" class="btn btn-primary m-t-sm">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-t-xxl">
                                        <div class="col-md-6">
                                            <label for="settingsCurrentPassword" class="form-label">Current Password</label>
                                            <input type="password" class="form-control" aria-describedby="settingsCurrentPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                            <div id="settingsCurrentPassword" class="form-text">Never share your password with anyone.</div>
                                        </div>
                                    </div>
                                    <div class="row m-t-xxl">
                                        <div class="col-md-6">
                                            <label for="settingsNewPassword" class="form-label">New Password</label>
                                            <input type="password" class="form-control" aria-describedby="settingsNewPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                        </div>
                                    </div>
                                    <div class="row m-t-xxl">
                                        <div class="col-md-6">
                                            <label for="settingsConfirmPassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" aria-describedby="settingsConfirmPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                        </div>
                                    </div>
                                    <div class="row m-t-lg">
                                        <div class="col">
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="settingsPasswordLogout" checked>
                                                <label class="form-check-label" for="settingsPasswordLogout">
                                                    Log out from all current sessions
                                                </label>
                                            </div> -->
                                            <a href="#" class="btn btn-primary m-t-sm">Change Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>