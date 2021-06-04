@extends('layouts.dashpord')
@section('content')

                    <!-- ROW-1 OPEN -->
                    <form method="POST" action="{{route('company.store')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h3 class="card-title">Add Company</h3>
                                    <button type="submit" class="btn btn-success mt-1">Add</button>

                                </div>
                                <div class="card-body">


                                    <div class="form-group">


                                    </div>


                                        <div class="form-group">
                                            <label class="form-label">Company Name</label>
                                            <input id="name" type="text" class="form-control" name="name" placeholder="Enter Product Name">
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                        <label class="form-label">Company Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter Description here ..."></textarea>
                                            @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>



                                        <div class="col-lg-12">
                                            <div class="card shadow">
                                                <div class="card-header">
                                                    <h3 class="mb-0 card-title">Company Image</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="dropify-wrapper" style="height: 312px;"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" class="dropify" id="image" name="image" data-height="300"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                                    @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- COL END -->
                                    </form>



                                </div>
                            </div>
                        </div><!-- COL END -->


                    </div>
                    <!-- ROW-1 CLOSED -->
                    <!-- ============== END CONTENT ==============  -->


    </div>

                    <!-- ROW-1 CLOSED -->




                </div>
            </div>
            <!-- CONTAINER END -->
        </div>
        <!-- Remove Order MODAL -->
        <div id="smallModal" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Delete Order !!</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are You Sure To Delete Order !!</p>
                    </div><!-- MODAL-BODY -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div><!-- MODAL-DIALOG -->
        </div>
        <!-- Remove Order MODAL CLOSED -->
        <!-- Show Order MODAL -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                             <!-- COL END -->
							<div class="col-md-12  col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order <span class="text-blue">#55</span></h3>

									</div>
									<div class="card-body">
                                        <div>
                                            <p class="font-weight-bolder">Order  Number : <span class="text-blue">55</span></p>
                                            <p class="font-weight-bolder">Product : <span class="text-blue">Paper</span></p>
                                            <p class="font-weight-bolder">Quntaty : <span class="text-blue">5</span></p>
                                            <p class="font-weight-bolder">Amount : <span class="text-blue">$ 2,356</span></p>
                                            <p class="font-weight-bolder">Date : <span class="text-blue">07/15/2021</span></p>
                                            <p class="font-weight-bolder">Status : <span class="text-success">Active</span></p>
                                        </div>
									</div>
								</div>
							</div><!-- COL END -->
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Show Order CLOSED -->

@endsection
