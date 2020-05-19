
      <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        
        <div class="form-group">
          <label for="titletitle">Title</label>
          <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
          @if ($errors->has('title')) <p class="text-danger">{{ $errors->first('title') }}</p> @endif
        </div>
        
        <div class="form-group">
          <label for="titletitle">Title</label>
          <select class="form-control" name="category_id" id="category_id">
              <option>Select Category</option>
              @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
          </select>
          @if ($errors->has('title')) <p class="text-danger">{{ $errors->first('title') }}</p> @endif
        </div>


        
        <div class="form-group">
          <label for="description">Post Images</label>
          <input type="file" name="photo">
          @if ($errors->has('photo')) <p class="text-danger">{{ $errors->first('photo') }}</p> @endif
        </div>
        
        <div class="form-group">
          <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('desription') }}</textarea>
          @if ($errors->has('description')) <p class="text-danger">{{ $errors->first('description') }}</p> @endif
        </div>
        
        

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('home') }}" class="btn btn-primary" ‍style="float:right">Back</a>
      </form>
    