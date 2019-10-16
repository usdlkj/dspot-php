
<div class="row">

    <form action="{{ route('registrations/store') }}" method="POST" class="col s12">
        @csrf
        @include('notifications')

        <div class="row">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix materialize-blue text-dark-5">account_circle</i>
                <input  id="first_name" name="first_name" type="text" class="validate @error('title') is-invalid @enderror"
                        value="{{ old('first_name', isset($obj->first_name) ? $obj->first_name : null)  }}">
                <label for="first_name">First Name <span class="required"> * </span></label>
                <span class="helper-text" data-error="Wrong Input" data-success="Correct">{{ $errors->first('first_name', ':message') }}</span>
            </div>

            <div class="input-field col s12 l6">
                <i class="material-icons prefix materialize-blue text-dark-5">group</i>
                <input id="last_name" name="last_name" type="text" class="validate @error('title') is-invalid @enderror"
                       value="{{ old('last_name', isset($obj->last_name) ? $obj->last_name : null)  }}">
                <label for="last_name">Last Name <span class="required"> * </span></label>
                <span class="helper-text" data-error="Wrong Input" data-success="Correct">{{ $errors->first('last_name', ':message') }}</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix materialize-blue text-dark-5">mail</i>
                <input id="email" name="email" type="email" class="validate @error('title') is-invalid @enderror"
                       value="{{ old('email', isset($obj->email) ? $obj->email : null)  }}">
                <label for="email">Email <span class="required"> * </span></label>
                <span class="helper-text" data-error="Wrong Input" data-success="Correct">{{ $errors->first('email', ':message') }}</span>
            </div>

            <div class="input-field col s12 l6">
                <i class="material-icons prefix materialize-blue text-dark-5">phone</i>
                <input id="mobile_number" name="mobile_number" type="tel" class="validate @error('title') is-invalid @enderror"
                       value="{{ old('mobile_number', isset($obj->mobile_number) ? $obj->mobile_number : null)  }}">
                <label for="mobile_number">Mobile Number <span class="required"> * </span></label>
                <span class="helper-text" data-error="Wrong Input" data-success="Correct">{{ $errors->first('mobile_number', ':message') }}</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 l12">
                <i class="material-icons prefix materialize-blue text-dark-5">explore</i>
                <input id="dive_center" name="dive_center" type="text" class="validate @error('title') is-invalid @enderror"
                       value="{{ old('dive_center', isset($obj->dive_center) ? $obj->dive_center : null)  }}">
                <label for="dive_center">Dive Center</label>
                <span class="helper-text" data-error="Wrong Input" data-success="Correct">{{ $errors->first('dive_center', ':message') }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l12">
                <p>Please transfer Rp.500.000 to D-Spot’s BCA Bank Account at 4980170409 (Alvin Wijono) before proceeding</p>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix materialize-blue text-dark-5">account_balance</i>
                <input id="bank" name="bank" type="text" class="validate @error('title') is-invalid @enderror"
                       value="{{ old('first_name', isset($obj->first_name) ? $obj->first_name : null)  }}">
                <label for="bank">Bank <span class="required"> * </span></label>
                <span class="helper-text" data-error="Wrong Input" data-success="Correct">{{ $errors->first('bank', ':message') }}</span>
            </div>

            <div class="input-field col s12 l6">
                <i class="material-icons prefix materialize-blue text-dark-5">credit_card</i>
                <input id="transaction_number" name="transaction_number" type="text" class="validate @error('title') is-invalid @enderror"
                       value="{{ old('first_name', isset($obj->first_name) ? $obj->first_name : null)  }}">
                <label for="transaction_number">Transaction Number <span class="required"> * </span></label>
                <span class="helper-text" data-error="Wrong Input" data-success="Correct">{{ $errors->first('transaction_number', ':message') }}</span>
            </div>
        </div>

        <div class="row center">
           <button type="submit" class="btn-large waves-effect waves-light materialize-blue dark-5">Submit</button>
{{--            <a class="waves-effect waves-light btn modal-trigger materialize-blue dark-5" href="#modal2">Submit</a>
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h4>Confirmation</h4>
                    <p>Are you sure to submit the data?</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="btn-small modal-action modal-close waves-effect waves-red btn-flat ">Cancel</a>
                    <button type="submit" class="btn-small modal-action waves-effect waves-light materialize-blue dark-5">Yes</button>
                </div>
            </div>--}}
        </div>






    </form>

</div>


