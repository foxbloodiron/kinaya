@extends('main')

@section('content')
<!-- partial -->
        <div class="content-wrapper">
         
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-warning text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Weekly Sales</h4>
                  <h2 class="font-weight-normal mb-5">$ 15,00000.00</h2>
                  <p class="card-text">Incresed by 60%</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Weekly Orders</h4>
                  <h2 class="font-weight-normal mb-5">45633456</h2>
                  <p class="card-text">Decreased by 10%</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Visitors Online</h4>
                  <h2 class="font-weight-normal mb-5">955741235</h2>
                  <p class="card-text">Increased by 5%</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sale Overview</h4>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">Satisfaction Graph</h4>
                  <div class="mt-auto">
                    <canvas id="satisfaction-chart" height="200"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Updates</h4>
                  <div class="d-flex">
                    <div class="d-flex align-items-center mr-4 text-muted">
                      <i class="mdi mdi-account icon-sm mr-2"></i>
                      <span>jack Menqu</span>
                    </div>
                    <div class="d-flex align-items-center text-muted">
                      <i class="mdi mdi-calendar-blank icon-sm mr-2"></i>
                      <span>October 3rd, 2018</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-6 pr-1">
                      <img src="{{asset('assets/images/dashboard/img_1.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                      <img src="{{asset('assets/images/dashboard/img_4.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                    </div>
                    <div class="col-6 pl-1">
                      <img src="{{asset('assets/images/dashboard/img_2.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                      <img src="{{asset('assets/images/dashboard/img_3.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                    </div>
                  </div>
                  <div class="d-flex mt-5 align-items-top">
                    <img src="{{asset('assets/images/faces/face3.jpg')}}" class="img-sm rounded-circle mr-3" alt="image">
                    <div class="mb-0 flex-grow">
                      <p class="font-weight-bold mr-2 mb-0">Jack Manque</p>
                      <p>This is amazing! We have moved to a brand new office in
                        New Hampshire with a lot more space.
                        We will miss our old office but we are very excited about our new space.</p>
                    </div>
                    <div class="ml-auto">
                      <i class="mdi mdi-heart-outline text-muted"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Tickets</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            Ticket No.
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Assignee
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Last Update
                          </th>
                          <th>
                            Tracking ID
                          </th>
                          <th>
                            Priority
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            5669
                          </td>
                          <td>
                            Fund is not recieved
                          </td>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces/face1.jpg')}}" class="mr-2" alt="image">
                            David Grey
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">DONE</label>
                          </td>
                          <td>
                            Dec 5, 2017
                          </td>
                          <td>
                            WD-12345
                          </td>
                          <td>
                            <i class="mdi mdi-arrow-up text-danger icon-sm mr-1"></i>High
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5670
                          </td>
                          <td>
                            High loading time
                          </td>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces/face2.jpg')}}" class="mr-2" alt="image">
                            Stella Johnson
                          </td>
                          <td>
                            <label class="badge badge-gradient-warning">PROGRESS</label>
                          </td>
                          <td>
                            Dec 12, 2017
                          </td>
                          <td>
                            WD-12346
                          </td>
                          <td>
                            <i class="mdi mdi-arrow-up text-danger icon-sm mr-1"></i>High
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5671
                          </td>
                          <td>
                            Website down for one week
                          </td>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces/face3.jpg')}}" class="mr-2" alt="image">
                            Marina Michel
                          </td>
                          <td>
                            <label class="badge badge-gradient-secondary">ON HOLD</label>
                          </td>
                          <td>
                            Dec 16, 2017
                          </td>
                          <td>
                            WD-12347
                          </td>
                          <td>
                            <i class="mdi mdi-arrow-up text-success icon-sm mr-1"></i>Low
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5672
                          </td>
                          <td>
                            Loosing control on server
                          </td>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces/face4.jpg')}}" class="mr-2" alt="image">
                            John Doe
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">DONE</label>
                          </td>
                          <td>
                            Dec 3, 2017
                          </td>
                          <td>
                            WD-12348
                          </td>
                          <td>
                            <i class="mdi mdi-arrow-up text-warning icon-sm mr-1"></i>Medium
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Shipping Status</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Overall Progress
                          </th>
                          <th>
                            ID
                          </th>
                          <th>
                            Start Date
                          </th>
                          <th>
                            Due Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            ST-3
                          </td>
                          <td>
                            May 10, 2015
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            ST-4
                          </td>
                          <td>
                            May 01, 2015
                          </td>
                          <td>
                            Jul 01, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            ST-5
                          </td>
                          <td>
                            Mar 10, 2015
                          </td>
                          <td>
                            Apr 12, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            ST-6
                          </td>
                          <td>
                            May 10, 2015
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            ST-7
                          </td>
                          <td>
                            Jan 23, 2015
                          </td>
                          <td>
                            May 03, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Ronald
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            ST-8
                          </td>
                          <td>
                            Jun 01, 2015
                          </td>
                          <td>
                            Jun 05, 2015
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
@endsection

@section('extra_script')

@endsection