<div class="row">
    <div class="col-md-12">
         <div class="card">
            <form class="form-horizontal" method="get" action="{{ url('/farmings') }}" 
                name="filter_categories" id="filter_categories" novalidate="novalidate">
                <div class="card-body">
                    <h5 class="card-title">Filter Farmings</h5>
                    <div class="row mb-3"> 
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="field_name">Field</label>
                                <input type="text" id="field_name" name="field_name" class="form-control" 
                                    value="{{ !empty($data) ? $data['field_name'] : '' }}">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="field_culture">Culture</label>
                                <input type="text" id="field_culture" name="field_culture" class="form-control" 
                                    value="{{ !empty($data) ? $data['field_culture'] : '' }}">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="tractor_name">Tractor</label>
                                <input type="text" id="tractor_name" name="tractor_name" class="form-control" 
                                    value="{{ !empty($data) ? $data['tractor_name'] : '' }}">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control mydatepicker" placeholder="yyyy-mm-dd" id="date" 
                                        name="date" value="{{ !empty($data) ? $data['date'] : '' }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    <button type="submit" class="btn btn-success">Search</button>
                    <a type="button" href={{ url('/farmings') }} class="btn btn-primary">Clear Search</a>
                </div>
            </div>
        </form>
    </div>
</div>
