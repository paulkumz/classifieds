<div class="profile">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="user-pro-section">
                            <!-- profile-details -->
                            <div class="profile-details section">
                                <h2>Profile Details</h2>
                                <!-- form -->
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="name-three">Mobile</label>
                                    <input type="text" class="form-control" value="{{ $user->phone }}">
                                </div>

                                <div class="form-group">
                                    <label>City</label>
                                    <select class="form-control">
                                        <option value="{{ $user->city }}">{{ $user->city }}</option>
                                        <option value="#">Dhaka, BD</option>
                                        <option value="#">Shanghai</option>
                                        <option value="#">Karachi</option>
                                        <option value="#">Beijing</option>
                                        <option value="#">Lagos</option>
                                        <option value="#">Delhi</option>
                                        <option value="#">Tianjin</option>
                                        <option value="#">Rio de Janeiro</option>
                                    </select>
                                </div>  

                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control" value="{{ $user->status }}">
                                </div>              
                            </div><!-- profile-details -->

                            <!-- change-password -->
                            <div class="change-password section">
                                <h2>Change password</h2>
                                <!-- form -->
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control" >
                                </div>
                                
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control">    
                                </div>
                                
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" class="form-control">
                                </div>                                                          
                            </div><!-- change-password -->
                            
                            <!-- preferences-settings -->
                            <div class="preferences-settings section">
                                <h2>Preferences Settings</h2>
                                <!-- checkbox -->
                                <div class="checkbox">
                                    <label><input type="checkbox" name="logged"> Comments are enabled on my ads </label>
                                    <label><input type="checkbox" name="receive"> I want to receive newsletter.</label>
                                    <label><input type="checkbox" name="want">I want to receive advice on buying and selling. </label>
                                </div><!-- checkbox -->                     
                            </div><!-- preferences-settings -->
                            
                            <a href="#" class="btn">Update Profile</a>
                            <a href="#" class="btn cancle">Cancle</a>
                        </div><!-- user-pro-edit -->
                    </div><!-- profile -->