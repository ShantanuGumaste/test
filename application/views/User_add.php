<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Student Form</h1>

    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <form action="<?php echo base_url('add_user_data')?>" method="post">
          <label for="name">Enter Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
          </div>
        </div>
          <div class="col-lg-12">
            <div class="form-group">
          <label for="email">Enter Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
          <label for="phone">Enter Mobile Num</label>
          <input type="number" class="form-control" name="phone" id="phone" placeholder="Mobile No." required>
          <button class="btn btn-secondary" type="submit">Submit Form</button>
        </form>

        <div class="col-lg-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td>Sr.No.</td>
                <td>Name</td>
                <td>Email</td>
                <td>Mobile</td>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach($users as $u)
                {
                  ?>
                      <tr>
                          <td><?php echo $u->id;?></td>
                          <td><?php echo $u->name;?></td>
                          <td><?php echo $u->email;?></td>
                          <td><?php echo $u->mobile;?></td>
                      </tr>

                  <?php
                 
                }
              ?>
            </tbody>
          </table>
        </div>
        
        </div>
      </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
