<div class="card">
    <div class="card-header">
        <h4 class="card-title">Create Notice</h4>
    </div>
    <div class="card-body">
        <form action="{{route('notices.store')}}" method="post" enctype="multipart/form-data" class="md:w-1/2">
            <x-display-validation-errors/>
            <x-input id="title" name="title" label="Notice title" placeholder="Enter Notice title" required />
            
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="Academic">Academic</option>
                    <option value="Sports">Sports</option>
                    <option value="Cultural">Cultural</option>
                    <option value="Administrative">Administrative</option>
                </select>
            </div>
            
            <x-textarea id="content" name="content" label="Notice content/body" placeholder="Enter body" required />
            
            <div class="row">
                <div class="col-md-6">
                    <x-input type="date" id="start_date" name="start_date" label="Start date" required />
                </div>
                <div class="col-md-6">
                    <x-input type="date" id="stop_date" name="stop_date" label="End date" required />
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1">
                        <label class="form-check-label" for="is_featured">Featured Notice</label>
                        <div class="form-text">Featured notices appear prominently on the notice board.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="is_important" name="is_important" value="1">
                        <label class="form-check-label" for="is_important">Important Notice</label>
                        <div class="form-text">Important notices trigger email notifications.</div>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="event_date" class="form-label">Event Date & Time (Optional)</label>
                <input type="datetime-local" class="form-control" id="event_date" name="event_date">
                <div class="form-text">If this notice is for an event, specify the date and time.</div>
            </div>
            
            @csrf
            <x-input id="file" type="file" name="attachment" accept=".gif,.jpg,.jpeg,.png,.doc,.docx,.pdf" label="Upload file" placeholder="Choose a file...(optional)" />
            
            <div class='col-12 my-2'>
                <x-button label="Create" theme="primary" icon="fas fa-key" type="submit" class="w-full md:w-1/2"/>
            </div>
        </form>
    </div>
</div>
