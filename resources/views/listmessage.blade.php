
@extends('theme2')

@section('abc')




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Message</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row mb-4">
                            <div class="col-xl-8">
                                <div class="card mb-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                                                <i class="bx bx-user-circle font-size-20"></i>
                                                <span class="d-none d-sm-block">About</span>
                                            </a>
                                        </li>


                                    </ul>
                                    <!-- Tab content -->
                                    <div class="tab-content p-4">
                                        <div class="tab-pane active" id="about" role="tabpanel">
                                            <div>
                                                <div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <h5 class="font-size-16 mb-4">Message</h5>

                                                    <ul class="activity-feed mb-0 ps-2">
                                                        <li class="feed-item">
                                                            <div class="feed-item-list">
                                                                <p class="text-muted mb-1">{{$contcon->created_at}}</p>
                                                                <h5 class="font-size-15">{{$contcon->namesender}}</h5>

                                                                <p class="text-muted">{{$contcon->message}}</p>

                                                            </div>

                                                        </li>

                                                    </ul>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="tab-pane" id="messages" role="tabpanel">
                                            <div>
                                                <div data-simplebar style="max-height: 430px;">
                                                    <div class="d-flex align-items-start border-bottom py-4">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-3.jpg" alt="avatar-3 images">
                                                        </div>

                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15 mb-1">Marion Walker <small class="text-muted float-end">1 hr ago</small></h5>
                                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting .</p>

                                                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i
                                                                class="mdi mdi-reply"></i> Reply</a>

                                                            <div class="d-flex align-items-start mt-4">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-4.jpg" alt="avatar-4 images">
                                                                </div>

                                                                <div class="flex-grow-1">
                                                                    <h5 class="font-size-15 mb-1">Shanon Marvin <small class="text-muted float-end">1 hr ago</small></h5>
                                                                    <p class="text-muted">It will be as simple as in fact, it will be Occidental. To it will seem like simplified .</p>


                                                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block">
                                                                        <i class="mdi mdi-reply"></i> Reply
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start border-bottom py-4">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-5.jpg" alt="avatar-5 images">
                                                        </div>

                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15 mb-1">Janice Morgan <small class="text-muted float-end">2 hrs ago</small></h5>
                                                            <p class="text-muted">To achieve this, it would be necessary to have uniform pronunciation.</p>

                                                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i
                                                                class="mdi mdi-reply"></i> Reply</a>

                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start border-bottom py-4">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-7.jpg" alt="avatar-7 images">
                                                        </div>

                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15 mb-1">Patrick Petty <small class="text-muted float-end">3 hrs ago</small></h5>
                                                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit </p>

                                                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i
                                                                class="mdi mdi-reply"></i> Reply</a>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border rounded mt-4">
                                                    <form action="#">
                                                        <div class="px-2 py-1 bg-light">

                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="bx bx-link"></i></button>
                                                                <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="bx bx-smile"></i></button>
                                                                <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="bx bx-at"></i></button>
                                                              </div>

                                                        </div>
                                                        <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your Message..."></textarea>

                                                    </form>
                                                </div> <!-- end .border-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


            </div>
            <!-- end main content-->

            @endsection
