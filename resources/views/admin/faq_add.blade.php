@extends('layouts.adminHome')

@section('title', 'Faq Add')

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Faq</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add  Faq</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Add a Frequently Asked Question </h5>
            <hr/>
            <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin_faq_store')}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Position</label>
                                    <input type="number" name="position" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Question</label>
                                    <input type="text" name="question"  class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">

                                    <label for="inputProductDescription" class="form-label">Answer</label>
                                    <textarea id="mytextarea" name="answer"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputVendor" class="form-label">Status</label>
                                    <select class="form-control select2" id="inputProductType" name="status" style="width: 100%;">
                                        <option selected="selected">False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Faq</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
        </div>
    </div>
@endsection


@section('jsz')
    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>



    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

@endsection
