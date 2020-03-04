<?php require_once '../component/header.php'?>


    <div class="form-background ">
        <div class="bg-image ">
            <div class="container p-0 ">
                <h1 class="text-center mb-3 ">FIRST TIME USER</h1>

                <form name="getstarted " action=" " method="post " enctype="multipart/form-data ">
                    <fieldset class="p-3 mt-5 ">
                        <legend>Personal Information</legend>
                        <div class="row ">

                        </div>
                        <div class="row mb-4 ">
                            <div class="col-md-6 col-sm-12 ">
                                <label>First Name</label>
                                <input type="text " class="form-control " name="firstname " placeholder="Enter First Name " required />
                            </div>

                            <div class="col-md-6 col-sm-12 ">
                                <label>Last Name</label>
                                <input type="text " class="form-control " name="lastname " placeholder="Enter Last Name " required />
                            </div>
                        </div>

                        <div class="row mb-4 ">
                            <div class="col-md-6 col-sm-12 ">
                                <label>Username</label>
                                <input type="text " class="form-control " name="username " placeholder="Enter Preffered Username " required />
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <label>Date Of Birth</label>
                                <input type="date " class="form-control " name="dob " required />
                            </div>
                        </div>

                        <div class="row mb-4 ">
                            <div class="col-md-6 col-sm-12 ">
                                <label>Email address</label>
                                <input type="email " class="form-control " name="email " placeholder="Enter email " required />
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <label>Confirm Email address</label>
                                <input type="email " class="form-control " name="email1 " placeholder="Enter email " required />
                            </div>
                        </div>


                        <div class="row mb-4 ">
                            <div class="col-md-6 col-sm-12 ">
                                <label>Password</label>
                                <input type="password " class="form-control " name="password " placeholder="Password " required />
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <label>Confirm Password</label>
                                <input type="password " class="form-control " name="password1 " placeholder="Confirm Password " required />
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <div class="col-md-6 col-sm-12 ">
                                <label>Gender</label>
                                <select class="form-control " name="gender " required>
                                        <option>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>

                            </div>
                            <div class="form-group mt-1 col-md-6 col-sm-12 ">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address"required/>
                            </div>
                        </div>
                    </fieldset>

                    <button type="submit " class="btn btn-primary text-light" name="getstarted " onclick="loadloginpage() ">Submit</button>

                </form>
            </div>

        </div>
    </div>

    <?php
require_once "../component/footer.php";
?>