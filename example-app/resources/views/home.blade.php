@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
<form>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">AdminLTE Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputFname1">ชื่อ</label>
                      <input type="Fname" class="form-control" id="exampleInputFname1" placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputLname1">สกุล</label>
                      <input type="Lname" class="form-control" id="exampleInputLname1" placeholder="Enter Your Last Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLname1">วัน/เดิอน/ปี</label>
                        <input type="date" class="form-control" id="exampleInputYear1" placeholder="MM/DD/YYYY">
                      </div>
                    <div class="form-group">
                        <label for="exampleInputAge1">อายุ</label>
                        <input type="Age" class="form-control" id="exampleInputAge1" placeholder="Enter Your Age">
                    </div>
                    <label>เพศ</label>
                    <div class="col-sm-6">
                        <!-- radio -->
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1">
                                <label class="form-check-label">ชาย</label>
                                <input style="margin-left: 20px" class="form-check-input" type="radio" name="radio1">
                                <label style="margin-left: 40px" class="form-check-label">หญิง</label>
                              </div>
                        </div>
                    </div>
                    <label>รูป</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label class="address" style="margin-top: 10px">ที่อยู่</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Your Address"></textarea>
                    </div>
                    <label>สีที่ชอบ</label>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                          <select class="form-control">
                            <option value=""disabled selected>-</option>
                            <option>สีแดง</option>
                            <option>สีเหลือง</option>
                            <option>สีฟ้า</option>
                          </select>
                        </div>
                    </div>
                    <label>แนวเพลงที่ชอบ</label>
                    <div class="col-sm-6">
                        <!-- radio -->
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio2">
                                <label class="form-check-label">เพื่อชีวิต</label>
                                <input style="margin-left: 20px" class="form-check-input" type="radio" name="radio2">
                                <label style="margin-left: 40px" class="form-check-label">ลูกทุ่ง</label>
                                <input style="margin-left: 20px" class="form-check-input" type="radio" name="radio2">
                                <label style="margin-left: 40px" class="form-check-label">อืนๆ</label>
                              </div>
                        </div>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary" style="margin-left: 40px">Submit</button>
                  </div>
      </section>
@endsection
