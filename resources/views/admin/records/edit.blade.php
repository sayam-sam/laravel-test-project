

@include("admin.layouts.sidebar")
<!-- Page Wrapper -->
<div class="page-wrapper">
<script src="https://cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
                <div class="content container-fluid">
				
					<!-- Page Header --> 
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">{{ __($title) }}
                                <a href="{{route('records.list')}}"  class="btn btn-primary float-right" ><i class='fa fa-arrow-left'>  {{ __('Back') }}</i> </a>
                                </h3>
							
							</div>
						</div>
					</div>
 
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body custom-edit-service">
							
							
								<!-- Add Blog -->
                                <form method='post'  action="{{ route('records.update',$id) }}"  enctype="multipart/form-data">
                    @csrf
                      @include('admin.layouts.flash_msg')
									<div class="service-fields mb-3">
										<div class="row">

										<div class="form-group col-md-6">
                                                <label for="category">Title</label>
                                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('  Title') }}"  value="{{ $records->name }}"  aria-required="true"/>
                                                    @if ($errors->has('name'))
                                                        <span id="name-error" class="error text-danger" for="input-name">Name is Empty!</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="category">Sale
                                                @if($records->sale==1)
                          
                          <i class='fa fa-check-circle' style='color:green;'> {{ " Yes, Item for Sale "}}  </i>
                          @else
                           <i class='fa fa-question-circle' style='color:gold;'>{{ __('No, it’s free') }} </i> 
                           @endif
                                                </label>
                                                <div class="form-group">
                                                    
                                                <input type="radio" name="sale" id="free"  value="1" >
                                                Yes, Item for Sale 
                                                
                                            <input type="radio" name="sale" id="premium"  value="0" >
                                            No, it’s free
                                              
                                                </div>
                                                </div>
                                            	<div class="form-group col-md-6">
                                                <label for="category">Price</label>
                    
                                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="text" placeholder="{{ __(' Price') }}"  value="{{ $records->price }}"  aria-required="true"/>
                                                @if ($errors->has('price'))
                                                    <span id="price-error" class="error text-danger" for="input-price">Price is Empty!</span>
                                                @endif
                                                </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="category">Category</label>
                                                <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                    <select  class="custom-select {{ $errors->has('category') ? ' is-invalid' : '' }}" name='category' id="input-category"   >
                    <option value='{{ $records->category }}'>{{ $records->category }}</option>
                            <option value='people' {{ ('people'==$records->category)?'selected':''}}> people </option>  
                            <option value='tech' {{ ('tech'==$records->category)?'selected':''}}> tech</option>
                            <option value='entertainment' {{ ('entertainment'==$records->category)?'selected':''}}> entertainment</option>
                          
                       </select>  @if ($errors->has('category'))
                        <span id="category-error" class="error text-danger" for="input-category">Category is Empty!</span>
                      @endif
                    </div>
                                                </div>
                                            
                                            	<div class="form-group col-md-12">
                                                <label for="category">Description</label>
                                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"  name="description" id="input-description" type="description" value="{{ old('description') }}" placeholder="{{ __('Details') }}"  />
                    {{ $records->description }}
                      </textarea>
                      <script>
                        CKEDITOR.replace( 'input-description' );
                      </script>
                           @if ($errors->has('description'))
                        <span id="description-error" class="error text-danger" for="input-description">Details is Empty!</span>
                      @endif
                    </div>
                                            </div>
                                   
                                            <div class="form-group col-md-12">
                                                <label for="category">Image</label>
                                                <div class="upload-img">
                                                        <div class="change-photo-btn">
                                                        <img src="{{ asset('uploads/record') }}/{{ $records->img }}" style='margin-bottom:30px;height:200px;width:250px;border-radius:5%;'/>
                                                          <label htmlFor="myImage" >
                                                            <input type="file" class="upload" name="myImage" 
                                                            accept="image/x-png,image/gif,image/jpeg,image/jpg" 
                                                          id="myImage"
                                                            /></label>
                                                        </div>
                                                        <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                                    </div>
                                            </div>
										</div>
									</div>
									
						
									
									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
									</div>
								</form>
								<!-- /Add Blog -->


								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
    <!-- /Main Wrapper -->

