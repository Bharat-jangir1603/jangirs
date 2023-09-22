<div class="box_con">
  <div class="sub_cubox">
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Member Form
    </h4>
    <div class="sub_cbox">
      <form action="<?php echo base_url('insert'); ?>" method="post">
        <div class="form-group">
          <label for="inputAddress">Member Name</label>
          <input name="name" type="text" class="form-control" id="inputAddress" placeholder="Member Name" required />
        </div>
        <div class="form-group">
          <label for="inputAddress">Occupation</label>
          <input name='work' type="text" class="form-control" id="inputAddress1" placeholder="Occupation" required />
        </div>
        <label>Status</label>

        <div class="form-group" style="display: flex;">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="Single" />
            <label class="form-check-label" for="gridRadios1">
              Single
            </label>
          </div>
          <div class="form-check" style="margin-left: 20px;">
            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="Married" checked />
            <label class="form-check-label" for="gridRadios2">
              Married
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress3">Date of birth</label>
          <input name="birth" type="date" class="form-control" id="inputAddress3" placeholder="Date of birth" required />
        </div>
        <div class="form-group">
          <label for="inputAddress5">Address:Only City Name</label>
          <input name="city" type="text" class="form-control" id="inputAddress5" placeholder="Chara Ka Bas" required />
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
    </div>

  </div>
</div>
<div class="box_con" style="margin-top: 50px;">
  <div class="sub_cubox">
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Admin Form
    </h4>
    <div class="sub_cbox">
      <form id="adad" action="<?php echo base_url('/insertad'); ?>" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Admin name</label>
            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Admin name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Admin email</label>
            <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="Admin email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress7">Password</label>
          <input type="password" name="pass" class="form-control" id="inputAddress7" placeholder="password">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Re-password</label>
          <input type="password" name="re-pass" class="form-control" id="inputAddress2" placeholder="Re-password">
        </div>
        <div class="form-group">
          <label for="inputAddress8">City/Village</label>
          <input type="text" name="city" class="form-control" id="inputAddress8" placeholder="City/Village">
        </div>
        <div class="form-group">
          <label for="inputAddress9">Your password</label>
          <input type="password" name="admin_pass" class="form-control is-invalid" id="inputAddress9" placeholder="Your password">
        </div>
        <button type="submit" class="btn btn-primary">New Admin</button>
      </form>
    </div>
  </div>
</div>