<div class="modal fade" id="PerformanceRatingModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span id="AssetName"></span> Performance Rating</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
            
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h5 class="card-title">Add Log</h5> -->
                            <!-- <h6 class="card-subtitle text-muted">Bootstrap column layout.</h6> -->
                        </div>
                        <form id="PerformanceRating">
                            <div class="card-body">
                        
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Log">Year</label>
                                        <input id="Year" name="Year" class="form-control"  placeholder="Textarea">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="Log">Rating</label>
                                        <input id="Rating" name="Rating" class="form-control"  placeholder="Textarea">
                                    </div>
                                </div>
                                <div class="form">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        
                        </form>
                    </div>
                    
                </div>
                <table id="PerformanceRating_datatable" class="table table-striped" style="width:100%">
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>