@include('shared.header')
@include('shared.nav')
@include('shared.sidNav')


<section class="content">
    <div class="container-fluid">

        <!-- Inline Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add new lesson
                        </h2>

                    </div>
                    <div class="body">
                        <form method="post" action="{{ url('/Lesson/') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title">
                                            <label class="form-label">Lesson Title</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{ session()->get('current_track') }}" name="trackID">
                                {{-- trackID --}}

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <button type="submit"
                                        class="btn btn-primary btn-lg m-l-15 waves-effect">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- # Dispaly error messages .... --}}

                    @if (session()->get('Message') !== null)
                        <div class="alert alert-info">
                            {{ session()->get('Message') }}
                        </div>

                    @endif


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <!-- #END# Inline Layout | With Floating Label -->

    </div>
</section>

@include('shared.footer')
