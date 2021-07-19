@extends('layouts.app', ['class' => 'bg-black'])

@section('content')
    @include('layouts.headers.guest')

    <style>
    #upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}
    </style>
   
    <div class="container mt--8 pb-5">
        <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <h3>Disclaimer:</h3>              
            Fake accounts automatically disqualified.

            If shortlisted, a live video interview via discord will be required to move on to the next phase.
            The name and photo associated with your Google account will be recorded when you upload files and submit this form
            </div>
    <form action="{{ route('ScholarRegister.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="row">
          
            <div class="col">
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input class="form-control" placeholder="{{ __('Full Name') }}" type="text" name="name"  required autofocus>
                    </div>
        
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input id="number" class="form-control" placeholder="{{ __('Contact No# 09xxxxxxxxx') }}" type="text" name="contactno" minlength="11" maxlength="11" required>
                    </div>
                   
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="{{ __('Email') }}" type="email" name="email"  value="{{ old('email') }}" required>
                    </div>
                 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                        </div>
                        <input class="form-control" placeholder="{{ __('Facebook profile link') }}" type="url" name="facebook"  required>
                    </div>
                  
                </div>
            </div>
            {{-- <div class="col">
                <div class="form-group">
                <select class="form-control" placeholder="">
                    <option value="">Do you have any experience playing AXIE INFINITY? *</option>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                  </select>
                </div>
            </div> --}}
          </div>
          <div class="row">
              <div class="col">
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="{{ __('Password') }}" type="password" name="password" required>
                    </div>
                  
                </div>
                <div class="text-muted font-italic mb-1">
                    <small>{{ __('password strength') }}: <span class="text-success font-weight-700">{{ __('strong') }}strong</span></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                    </div>
                </div>
                
              </div>
          </div>
          <div class="row">
              <div class="col">
                <div class="form-group">
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0" name="image" required>
                        <label id="upload-label" for="upload" class="font-weight-dark text-muted">Upload Valid Id</label>
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-dark m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-white">Choose file</small></label>
                        </div>
                    </div>
            
                    <!-- Uploaded image area-->
                    <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
                    <div class="image-area "><img id="imageResult" src="./argon/img/profile.png" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" style="height: 300px; width: 300px;"></div>
            
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="row my-4">
                    <div class="col-12">
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id="customCheckRegister" type="checkbox" required>
                            <label class="custom-control-label" for="customCheckRegister">
                                <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Privacy Policy') }}</a></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark mt-4">{{ __('Create account') }}</button>
                </div>
            </div>
          </div>
        </div>
    </form>
    </div>
    </div>


   
   @push('js')
   <script>
       
/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}


function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}
setInputFilter(document.getElementById("number"), function(value) {
  return /^-?\d*$/.test(value); });

   </script>
   @endpush
@endsection

