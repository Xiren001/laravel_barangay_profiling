@extends('blotters.layout')

@section('content')
<div class="container" style="margin-bottom: 2rem;">
    <div class="container card mt-5">
        <div class="container show-title p-3">
            <h2 class="card-header">Add blotter</h2>
        </div>

        <div class="card-body">

            <form action="{{ route('blotters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="r-first">

                    <div class="r-in-e">

                        <div class="r-first-inn">

                        <div class="mb-3">
                                <label for="inputComplainant" class="form-label"><strong>Complainant</strong></label>
                                <input type="text" name="complainant" class="form-control @error('complainant') is-invalid @enderror" id="inputComplainant" placeholder="complainant">
                                @error('complainant')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputRespondent" class="form-label"><strong>Respondent</strong></label>
                                <input type="text" name="respondent" class="form-control @error('respondent') is-invalid @enderror" id="inputRespondent" placeholder="respondent">
                                @error('respondent')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputVictim" class="form-label"><strong>Victim</strong></label>
                                <input type="text" name="victim" class="form-control @error('victim') is-invalid @enderror" id="inputVictim" placeholder="victim">
                                @error('victim')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="r-first-inn">

                            <div class="mb-3">
                                <label for="inputIncident" class="form-label"><strong>Incident</strong></label>
                                <input type="text" name="incident" class="form-control @error('incident') is-invalid @enderror" id="inputIncident" placeholder="incident">
                                @error('incident')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputIncident_date" class="form-label"><strong>Incident Date</strong></label>
                                <input type="date" name="incident_date" class="form-control @error('incident_date') is-invalid @enderror" id="inputIncident_date" placeholder="incident_date">
                                @error('incident_date')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                           

                            <div class="mb-3">
                                <label for="inputStatus" class="form-label"><strong>Status</strong></label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror" id="inputStatus">
                                    <option value="">Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Under Investigation">Under Investigation</option>
                                    <option value="Resolved">Resolved</option>
                                    <option value="CLosed">CLosed</option>
                                </select>
                                @error('status')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                    </div>
                </div>
               

                    
                
                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary btn-sm" href="{{ route('blotters.index') }}">Cancel</a>
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Add</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function getImagePreview3(event) {
        var image = URL.createObjectURL(event.target.files[0]);
        var imagediv = document.getElementById('preview3');
        var newimg = document.createElement('img');
        imagediv.innerHTML = '';
        newimg.src = image;
        imagediv.appendChild(newimg);
    }
</script>
@endsection