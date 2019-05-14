@extends('layouts.master')

@section('css')
        <!-- Custom box css -->
        <link href="{{ URL::asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
@endsection

@section('content')
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                                            <li class="breadcrumb-item active">Modals</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Modals</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <!-- Bootstrap Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title">Bootstrap Modals (default)</h4>

                                    <p class="sub-header">
                                        A rendered modal with header, body, and set of actions in the footer.
                                    </p>

                                    <!-- sample modal content -->
                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6>Text in a modal</h6>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    <hr>
                                                    <h6>Overflowing text to show scroll behavior</h6>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!--  Modal content for the above example -->
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!-- Long Content Scroll Modal -->
                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-list">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                        <!-- Small modal -->
                                        <button  type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                        <!-- Center modal -->
                                        <button  type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Center modal</button>
                                        <!-- Long Content Scroll -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalScrollable">Scrollable</button>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div> 
                        <!-- end row -->  
                        
                        <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title">Custom Modals</h4>

                                    <p class="sub-header">
                                        Examples of custom modals.
                                    </p>

                                    <!-- sample modal content -->

                                    <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-full">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="full-width-modalLabel">Modal Heading</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Text in a modal</h4>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    <hr>
                                                    <h4>Overflowing text to show scroll behavior</h4>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modal Content is Responsive</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Name</label>
                                                                <input type="text" class="form-control" id="field-1" placeholder="John">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Surname</label>
                                                                <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Address</label>
                                                                <input type="text" class="form-control" id="field-3" placeholder="Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-4" class="control-label">City</label>
                                                                <input type="text" class="form-control" id="field-4" placeholder="Boston">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-5" class="control-label">Country</label>
                                                                <input type="text" class="form-control" id="field-5" placeholder="United States">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-6" class="control-label">Zip</label>
                                                                <input type="text" class="form-control" id="field-6" placeholder="123456">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Personal Info</label>
                                                                <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->


                                    <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0">
                                                <div id="accordion">
                                                    <div class="card mb-0">
                                                        <div class="card-header" id="headingOne">
                                                            <h5 class="m-0">
                                                                <a href="#collapseOne" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                                    Collapsible Group Item #1
                                                                </a>
                                                            </h5>
                                                        </div>
                                            
                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                                                anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                                you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-0">
                                                        <div class="card-header" id="headingTwo">
                                                            <h5 class="m-0">
                                                                <a href="#collapseTwo" class="collapsed text-dark" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Collapsible Group Item #2
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                                                anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                                you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-0">
                                                        <div class="card-header" id="headingThree">
                                                            <h5 class="m-0">
                                                                <a href="#collapseThree" class="collapsed text-dark" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                                                    Collapsible Group Item #3
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                                                anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                                you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="button-list">
                                        <!-- Full width modal -->
                                        <button type="button" class="btn btn-blue waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal">Full width Modal</button>
                                        <!-- Responsive modal -->
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
                                        <!-- Accordion modal -->
                                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-toggle="modal" data-target="#accordion-modal">Accordion in Modal</button>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div> 
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Modals Animations</h4>

                                    <p class="sub-header">
                                        Use <code>data-animation="xxx" data-plugin="custommodal" data-overlayColor="#xxx"</code>.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-centered mb-0">
                                            <thead class="bg-light border-0">
                                                <tr>
                                                    <th style="width:30%;">Modal Type</th>
                                                    <th>Animation Code</th>
                                                    <th>Example</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Fade in</td>
                                                    <td><code>data-animation="fadein"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slide</td>
                                                    <td><code>data-animation="slide"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="slide" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Newspaper</td>
                                                    <td><code>data-animation="newspaper"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="newspaper" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fall</td>
                                                    <td><code>data-animation="fall"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="fall" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Side Fall</td>
                                                    <td><code>data-animation="sidefall"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="sidefall" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Blur</td>
                                                    <td><code>data-animation="blur"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="blur" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Flip</td>
                                                    <td><code>data-animation="flip"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="flip" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sign</td>
                                                    <td><code>data-animation="sign"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="sign" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Super Scaled</td>
                                                    <td><code>data-animation="superscaled"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="superscaled" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slit</td>
                                                    <td><code>data-animation="slit"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="slit" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rotate</td>
                                                    <td><code>data-animation="rotate"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="rotate" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Letmein</td>
                                                    <td><code>data-animation="letmein"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="letmein" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Makeway</td>
                                                    <td><code>data-animation="makeway"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="makeway" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slip</td>
                                                    <td><code>data-animation="slip"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="slip" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Corner</td>
                                                    <td><code>data-animation="corner"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="corner" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slide together</td>
                                                    <td><code>data-animation="slidetogether"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="slidetogether" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Scale</td>
                                                    <td><code>data-animation="scale"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="scale" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Door</td>
                                                    <td><code>data-animation="door"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="door" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Push</td>
                                                    <td><code>data-animation="push"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="push" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Content Scale</td>
                                                    <td><code>data-animation="contentscale"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="contentscale" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Swell</td>
                                                    <td><code>data-animation="swell"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="swell" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rotate Down</td>
                                                    <td><code>data-animation="rotatedown"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="rotatedown" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Flash</td>
                                                    <td><code>data-animation="flash"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-light btn-sm waves-effect" data-animation="flash" data-plugin="custommodal" data-overlayColor="#38414a">Show
                                                            Me</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end card-box -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

@endsection

@section('script')

        <!-- Custom Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.modal.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Animation Modal title</h4>
            <div class="custom-modal-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </div>
        </div>  

        <!-- Modal-Effect -->
        <script src="{{ URL::asset('assets/libs/custombox/custombox.min.js')}}"></script>

@endsection