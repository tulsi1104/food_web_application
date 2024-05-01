<x-userlayout>
    <style>
            .proceed-button{
                padding:10px;
                width:100%;
                background-color: #1d283c;
                color:white;
                border-radius: 10px;
                margin-bottom:15px;
                position: relative;
            }
            body {
                margin: 0;
                color: #2e323c;
                background: #f5f6fa;
                position: relative;
            }
            .account-settings .user-profile {
                margin: 0 0 1rem 0;
                padding-bottom: 1rem;
                text-align: center;
            }
            .account-settings .user-profile .user-avatar {
                margin: 0 0 1rem 0;
            }
            .account-settings .user-profile .user-avatar img {
                width: 90px;
                height: 90px;
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
            }
            .account-settings .user-profile h5.user-name {
                margin: 0 0 0.5rem 0;
            }
            .account-settings .user-profile h6.user-email {
                margin: 0;
                font-size: 0.8rem;
                font-weight: 400;
                color: #9fa8b9;
            }
            .account-settings .about {
                margin: 2rem 0 0 0;
                text-align: center;
            }
            .account-settings .about h5 {
                margin: 0 0 15px 0;
                color: #007ae1;
            }
            .account-settings .about p {
                font-size: 0.825rem;
            }
            .form-control {
                border: 1px solid #cfd1d8;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                font-size: .825rem;
                background: #ffffff;
                color: #2e323c;
            }

            .card {
                background: #ffffff;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                margin-bottom: 1rem;
            }
    </style>
<div>
<form action="{{ route('logout.logout') }}" method="POST" id="logoutForm">
            @csrf
            <button class="proceed-button" id="checkbox-count">
                Log Out
            </button>
</form>
            <button class="proceed-button" id="editProfileButton">
                Edit Profile
            </button>
</div>
<div class="row gutters" id="profileForm" style="display: none;">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body" style="padding:46px;">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="{{ asset('storage/customer.png') }}" alt="Maxwell Admin">
                        </div>
                        <h5 class="user-name">{{Auth::user()->name}}</h5>
                        <h6 class="user-email">{{Auth::user()->email}}</h6>
                    </div>
                    <form action="{{route('changepassword.change_password')}}" method="POST">
                        @csrf
                        <div class="about" id="password_info" style="display:none;">
                            <div class="form-group">
                                <input type="password" name="current_password" class="form-control" id="website" placeholder="Current Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="new_password" class="form-control" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Contains a mix of uppercase and lowercase letters, numbers, and special characters(At least 8 characters long)." id="newpassword" placeholder="New Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_password" class="form-control" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" id="confirmpassword" placeholder="Confirm Password" required>
                                <div class="user-profile" id="password_alert" style="display:none;">
                                    <h6 class="user-email">Passwords do not match.</h6>
                                </div>
                            </div>
                            <button type="submit" id="updatePasswordButton" class="btn btn-primary">Update Password</button>
                            <button type="button" id="password_cancel" class="btn btn-primary">Cancel</button>
                        </div>
                    </form>
                    <div class="about" id="change_password">
                    <button type="button" id="changePasswordButton" class="btn btn-primary">Change Password</button>
                        <div class="user-profile" style="margin:10px;">
                            <h6 class="user-email">Last modified:{{Auth::user()->updated_at}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <form action="{{route('updatecustomer.UpdateCustomer')}}" method="POST">
                    @csrf
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" pattern="^[a-zA-Z]+(?: [a-zA-Z]+)*$" title="Username must contain only letters" id="fullName" name="name" value="{{$name}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" pattern=".+@gmail\.com" title="Please enter a valid email address(username@gmail.com)" id="eMail" name="email" value="{{$email}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" id="phone" name="phone" value="{{$phone_number}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="addresses">Addresses</label>
                                <select class="form-control" id="addresses" name="address">
                                    <option value="address1">{{$address}}</option>
                                    <option value="address2">Address 2</option>
                                    <option value="address2">Address 2</option>
                                    <option value="address2">Address 2</option>
                                    <option value="address2">Address 2</option>
                                    <option value="address2">Address 2</option>
                                    <option value="address2">Address 2</option>
                                    <option value="address2">Address 2</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary">Default Address</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">Street</label>
                                <input type="name" class="form-control" id="Street" name="street" value="{{$street}},{{$area}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">City</label>
                                <input type="name" class="form-control" pattern="^[a-zA-Z]+(?: [a-zA-Z]+)*$" title="City name must contain only letters" id="ciTy" name="city" value="{{$city}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="sTate">State</label>
                                <input type="text" class="form-control" id="sTate" name="state" pattern="^[a-zA-Z]+(?: [a-zA-Z]+)*$" title="State name must contain only letters" value="{{$state}}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Zip Code</label>
                                <input type="text" class="form-control" id="zIp" name="zipcode" pattern="[0-9]{6}" title="Please enter a 6-digit Postal Code" value="{{$zipcode}}">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <button type="button" id="cancelbutton" class="btn btn-secondary">Cancel</button>
                                <button type="submit" id="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('editProfileButton').addEventListener('click', function() {
        var form = document.getElementById('profileForm');
        var button =document.getElementById('editProfileButton');
        if (form.style.display === 'none') {
            button.style.display='none'
            form.style.display = 'flex';
        } 
    });
    document.getElementById('cancelbutton').addEventListener('click', function() {
        var form = document.getElementById('profileForm');
        var button =document.getElementById('editProfileButton');
        if(form.style.display = 'flex'){
            form.style.display = 'none';
            button.style.display='block'
        }
    });
    
    document.getElementById('change_password').addEventListener('click', function() {
        var password_info = document.getElementById('password_info');
        var button =document.getElementById('change_password');
        if(password_info.style.display === 'none'){
            password_info.style.display = 'block';
            button.style.display='none'
        }
    });

    document.getElementById('password_cancel').addEventListener('click', function() {
        var password_info = document.getElementById('password_info');
        var button =document.getElementById('change_password');
        if(password_info.style.display === 'block'){
            password_info.style.display = 'none';
            button.style.display='block'
        }
    });

    document.getElementById('updatePasswordButton').addEventListener('click', function() {
    // Get password fields and alert element
    var newPassword = document.getElementById("newpassword").value;
    var confirmPassword = document.getElementById("confirmpassword").value;
    var alert = document.getElementById("password_alert");

    // Check if passwords match
    if (newPassword !== confirmPassword) {
        alert.style.display = "block";
    } else {
        alert.style.display = "none";
        // If passwords match, proceed with the form submission
        document.getElementById("profileForm").submit();
    }
});

</script>
</x-userlayout>

