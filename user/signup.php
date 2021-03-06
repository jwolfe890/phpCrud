    <div class="container">

        <div class="justify-content-md-center row mt-3">
            <h3 class="text-center">CRUD APPLICATION USER SIGN UP</h3>
        </div>

        <div class="row">
            <p>This is a system that allows users to create, read, update, and delete information</p>
        </div>

        <div class="form-border">

            <h3 ml-5 class="text-center">Welcome, Please Sign Up</h3>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email">
                    <span id="errorEmail"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label">Firstname</label>
                    <div class="col-sm-10">
                    <input type="firstname" class="form-control form-control-lg" name="firstname" id="firstname" placeholder="Firstname">
                    <span id="errorFirstname"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Lastname</label>
                    <div class="col-sm-10">
                    <input type="lastname" class="form-control form-control-lg" name="lastname" id="lastname" placeholder="Lastname">
                    <span id="errorLastname"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                    <span id="errorPassword"></span>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" id="submit" type="submit">Submit</button>

            </form>
        
        </div>
    </div>