@extends('template')

@section('script')

      
       <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

      <!-- ajax visitorActivityData -->
      <script src="{{ asset('admin_lang/visitorActivityData/ajax-page-activity.js')}}"></script>

            <!-- ajax visitorActivityData -->
            <script src="{{ asset('admin_lang/visitorActivityData/ajax-button-activity.js')}}"></script>



@endsection

@section('contents')

  {{-- Page Activity  --}}
   <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
         <div class="d-flex justify-content-between">
            <h4 class="card-title">Pages Activity</h4>
         </div>
         <div class="row">
            <div class="form-group col-12 col-md-3">
               <label for="exampleInputName1">Select from date *</label>
               <input type="text" value="2080-9-23" value class="form-control activity_start_date" id="exampleInputName1" placeholder="Date">
             </div>
             <div class="form-group col-12 col-md-3">
               <label for="exampleInputName1">Select to date *</label>
               <input type="text" value="2080-9-23" class="form-control activity_end_date" id="exampleInputName1" placeholder="Date">
             </div>
             <div class="form-group col-12 col-md-3 mb-0">
               <label for="exampleFormControlSelect2">Select School *</label>
               <select class="form-control" id="select-school">
                 <option value="https://gurukul.scriptqube.com/api/get-page-activity">Gurukul School</option>
                 <option value="https://sunrise.scriptqube.com/api/get-page-activity">Sunrise School</option>
                 <option value="https://demo.scriptqube.com/api/get-page-activity">Demo School</option>
                 <option value="https://developer.scriptqube.com/api/get-page-activity">Developer School</option>
                 <option value="https://milestone.scriptqube.com/api/get-page-activity">Milestone School</option>
                 <option value="https://sbps.scriptqube.com/api/get-page-activity">Shree Bhampura School</option>
                 <option value="https://omacademy.scriptqube.com/api/get-page-activity">Om Academ Schooly</option>
                 <option value="https://siddharthashishu.scriptqube.com/api/get-page-activity">siddharthashishu School</option>
               </select>
             </div>
             <div class="col-12 col-md-3 mb-2">
               <br>
               <input type="submit" value="Search" id="search-btn" class="form-control">
             </div>
         </div>
         <div class="d-flex justify-content-between">
            <p>Total Result: </p>
            <div class="d-flex mb-1">
               <select class="form-control mx-1" id="visitor-name">
                  <option value="A-Z">A-Z</option>
                </select>
                <select class="form-control" id="select-spend">
                  <option value="wating_second">Spend</option>
                  <option value="load_count">Load</option>
                  <option value="last_time">Last</option>
                </select>
            </div>
         </div>

         <div class="table-responsive">
            <table class="table table-dark">
            <thead>
               <tr>
                  <th> # </th>
                  <th>Name</th>
                  <th>Page</th>
                  <th>Load</th>
                  <th>Spend</th>
                  <th>Date</th>
                  <th>Device</th>
                  <th>Browser</th>
                  <th>Last Time</th>
                  <th>Ago</th>
                  <th>Address</th>
               </tr>
            </thead>
            <tbody class="activity-report-table">
 
            </tbody>
            </table>
         </div>
      </div>
      </div>
   </div>


  {{-- Page Activity  --}}
  <div class="col-lg-12 grid-margin stretch-card">
   <div class="card">
   <div class="card-body">
      <div class="d-flex justify-content-between">
         <h4 class="card-title">Button Activity</h4>
      </div>
      <div class="row">
         <div class="form-group col-12 col-md-3">
            <label for="exampleInputName1">Select from date *</label>
            <input type="text" value="2080-9-23" value class="form-control activity_start_date" id="exampleInputName1" placeholder="Date">
          </div>
          <div class="form-group col-12 col-md-3">
            <label for="exampleInputName1">Select to date *</label>
            <input type="text" value="2080-9-23" class="form-control activity_end_date" id="exampleInputName1" placeholder="Date">
          </div>
          <div class="form-group col-12 col-md-3 mb-0">
            <label for="exampleFormControlSelect2">Select School *</label>
            <select class="form-control" id="select-school-button">
              <option value="https://gurukul.scriptqube.com/api/get-button-activity">Gurukul School</option>
              <option value="https://sunrise.scriptqube.com/api/get-button-activity">Sunrise School</option>
              <option value="https://demo.scriptqube.com/api/get-button-activity">Demo School</option>
              <option value="https://developer.scriptqube.com/api/get-button-activity">Developer School</option>
              <option value="https://milestone.scriptqube.com/api/get-button-activity">Milestone School</option>
              <option value="https://omacademy.scriptqube.com/api/get-button-activity">Om Academy School</option>
              <option value="https://siddharthashishu.scriptqube.com/api/get-button-activity">siddharthashishu school</option>
            </select>
          </div>
          <div class="col-12 col-md-3 mb-2">
            <br>
            <input type="submit" value="Search" id="search-btn-button" class="form-control">
          </div>
      </div>
      <div class="d-flex justify-content-between">
         <p>Total Result: </p>
         <div class="d-flex">
            <select class="form-control" id="visitor-name-button">
              <option value="A-Z">A-Z</option>
            </select>
            <select class="form-control" id="select-spend-button">
              <option value="clicking">Clicking</option>
              <option value="last_time">Last</option>
            </select>
          </div>
      </div>

      <div class="table-responsive">
         <table class="table table-dark">
         <thead>
            <tr>
               <th> # </th>
               <th>Name</th>
               <th>Button</th>
               <th>Click</th>
               <th>Page</th>
               <th>Last Time</th>
               <th>Ago</th>
               <th>Date</th>
               <th>Device</th>
               <th>Browser</th>
               <th>Address</th>
            </tr>
         </thead>
         <tbody class="button-report-table">

         </tbody>
         </table>
      </div>
   </div>
   </div>
</div>
@endsection