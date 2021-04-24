<form id="TrainingAdd">
<div class="modal fade" id="TrainingAddModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employee Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h5 class="card-title">Form row</h5>
                            <h6 class="card-subtitle text-muted">Bootstrap column layout.</h6>
                        </div> -->
                        <div class="card-body">
                                    <div class="form-group ">
                                        <label for="FirstName">FirstName</label>
                                        <input type="text" class="form-control" name="FirstName" placeholder="FirstName">
                                    </div>
                                    <div class="form-group ">
                                        <label for="BirthDate">MiddleName</label>
                                        <input type="text" class="form-control" name="MiddleName" placeholder="MiddleName">
                                    </div>
                                    <div class="form-group ">
                                        <label for="FullName">LastName</label>
                                        <input type="text" class="form-control" name="LastName" placeholder="LastName">
                                    </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="BirthDate">BirthDate</label>
                                        <input type="text" class="form-control" name="BirthDate" placeholder="Birth Date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="FullName">Sex</label>
                                        <select name="Sex" class="form-control">
                                            <option selected="">Choose sex...</option>
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="HighestEducation">Position</label>
                                    <input type="text" class="form-control" name="HighestEducation" placeholder="Highest Education">
                                </div>
                                <div class="form-group">
                                    <label for="HighestEducation">Highest Education</label>
                                    <input type="text" class="form-control" name="HighestEducation" placeholder="Highest Education">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="PerformanceRating">Performance Rating</label>
                                    <input type="text" class="form-control" name="PerformanceRating" placeholder="Performance Rating">
                                </div> -->
                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>