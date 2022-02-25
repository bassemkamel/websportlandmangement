@extends("backoffice.template.template")

@section('content')
<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">


    <!-- Header Standard Landing  -->

    <div class="header--standard header--standard-landing" id="header--standard">
        <div class="container">
            <div class="header--standard-wrap">

                <a href="#" class="logo">
                    <div class="img-wrap">
                        <a href="{{route('register')}}"> <img src="{{asset('assets/img/logo.png')}}" alt="Olympus"></a>
                        {{-- <img src="{{asset('assets/img/logo-colored-small.png')}}" alt="Olympus"
                        class="logo-colored"> --}}
                    </div>
                    {{-- <div class="title-block">
						<h6 class="logo-title">olympus</h6>
						<div class="sub-title">SOCIAL NETWORK</div>
					</div> --}}
                </a>

                <a href="#" class="open-responsive-menu js-open-responsive-menu">
                    <svg class="olymp-menu-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                    </svg>
                </a>

                {{-- <div class="nav nav-pills nav1 header-menu">
					<div class="mCustomScrollbar">
						<ul>
							<li class="nav-item">
								<a href="#" class="nav-link">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Profile Page</a>
									<a class="dropdown-item" href="#">Newsfeed</a>
									<a class="dropdown-item" href="#">Post Versions</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-has-megamenu">
								<a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
								<div class="dropdown-menu megamenu">
									<div class="row">
										<div class="col col-sm-3">
											<h6 class="column-tittle">Main Links</h6>
											<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">BuddyPress</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Corporate</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Forums</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Terms & Conditions</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Events</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Privacy Policy</a>
							</li>
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
							</li>
							<li class="nav-item js-expanded-menu">
								<a href="#" class="nav-link">
									<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
									<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
								</a>
							</li>
							<li class="shoping-cart more">
								<a href="#" class="nav-link">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-shopping-bag-icon"></use></svg>
									<span class="count-product">2</span>
								</a>
								<div class="more-dropdown shop-popup-cart">
									<ul>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img src="{{asset('assets/img/product1.png')}}" alt="product">
            </div>
            <div class="product-content">
                <h6 class="title">White Enamel Mug</h6>
                <ul class="rait-stars">
                    <li>
                        <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                    </li>
                    <li>
                        <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                    </li>

                    <li>
                        <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                    </li>
                    <li>
                        <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                    </li>
                    <li>
                        <i class="far fa-star star-icon" aria-hidden="true"></i>
                    </li>
                </ul>
                <div class="counter">x2</div>
            </div>
            <div class="product-price">$20</div>
            <div class="more">
                <svg class="olymp-little-delete">
                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                </svg>
            </div>
            </li>
            <li class="cart-product-item">
                <div class="product-thumb">
                    <img src="{{asset('assets/img/product2.png')}}" alt="product">
                </div>
                <div class="product-content">
                    <h6 class="title">Olympus Orange Shirt</h6>
                    <ul class="rait-stars">
                        <li>
                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                        </li>

                        <li>
                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="far fa-star star-icon" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <div class="counter">x1</div>
                </div>
                <div class="product-price">$40</div>
                <div class="more">
                    <svg class="olymp-little-delete">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                    </svg>
                </div>
            </li>
            </ul>

            <div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>

            <div class="cart-btn-wrap">
                <a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
                <a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
            </div>
        </div>
        </li>

        <li class="menu-search-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#main-popup-search">
                <svg class="olymp-magnifying-glass-icon">
                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use>
                </svg>
            </a>
        </li>
        </ul>
    </div>
</div> --}}
</div>
</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="stunning-header-content">
    <h1 class="stunning-header-title">Register</h1>
    <ul class="breadcrumbs">
        <li class="breadcrumbs-item">
            <a href="#">Home</a>
            <span class="icon breadcrumbs-custom">/</span>
        </li>
        <li class="breadcrumbs-item active">
            <span>Register</span>
        </li>
    </ul>
</div>

<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section class="medium-padding120">
    <div class="container">
        <div class="row">



            <!-- Form register -->

            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="p-3 mb-2 bg-white">
                    <div class="crumina-module crumina-heading with-title-decoration">
                        <h5 class="heading-title">Registration</h5>
                    </div>

                    <div class="row">
                        <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">


                            <!--first name-->
                            <div class="row">
                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <x-jet-label for="nom_user" value="{{ __('First Name') }}" />
                                        <x-jet-input id="nom_user" class="block mt-1 w-full" type="text" name="nom_user"
                                            :value="old('nom_user')" required autofocus autocomplete="nom_user" />
                                        <div class="invalid-feedback">
                                            <div class="error-box">
                                                <div class="danger"><svg class="olymp-little-delete">
                                                        <use
                                                            xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete">
                                                        </use>
                                                    </svg></div>
                                                <h5 class="title">Error Box</h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--last name-->

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <x-jet-label for="prenom_user" value="{{ __('Last Name') }}" />
                                        <x-jet-input id="prenom_user" class="block mt-1 w-full" type="text"
                                            name="prenom_user" :value="old('prenom_user')" required />
                                    </div>
                                </div>

                                <!--email -->

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <x-jet-label for="email_user" value="{{ __('Email') }}" />
                                        <x-jet-input id="email_user" class="block mt-1 w-full" type="email"
                                            name="email_user" :value="old('email_user')" required />

                                    </div>
                                </div>
                                @if(Auth::user() && Auth::user()->role_user=='Participant')
                                @endif
                                <!--datenaissance -->

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group date-time-picker label-floating"
                                        x-show="role_user==Participant">
                                        <x-jet-label for="date_naissance_participant" value="{{ __('Birthday') }}" />
                                        <x-jet-input id="date_naissance_participant" class="block mt-1 w-full"
                                            type="date" name="date_naissance_participant"
                                            :value="old('date_naissance_participant')" required />
                                        <span class="input-group-addon">
                                            <svg class="olymp-calendar-icon">
                                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <!--enter Numéro tel-->
                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" placeholder="Phone Number"
                                            id="tel_participant" name="tel_participant" required>
                                        <div class="invalid-feedback">
                                            <div class="error-box">
                                                <div class="danger"><svg class="olymp-little-delete">
                                                        <use
                                                            xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete">
                                                        </use>
                                                    </svg></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--select sexe-->
                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Select Your Sexe</label>
                                        <select class="selectpicker form-control" id="gender_participant"
                                            name="gender_participant"> " name="gender_participant">
                                            <option value="CA">Women</option>
                                            <option value="AR">Man</option>
                                        </select>
                                    </div>
                                </div>

                                <!--enter country-->

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Select your Country</label>
                                        <select class="selectpicker form-control" id="country_participant"
                                            name="country_participant">
                                            <option value="US">Tunisie</option>
                                            <option value="AR">France</option>
                                        </select>
                                    </div>
                                </div>
                                <!--enter city-->

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Select your City</label>
                                        <select class="selectpicker form-control" id="ville_participant"
                                            name="ville_participant">
                                            <option value="Sfax" @auth @if(Auth::user()->ville=='Sfax')selected @endif
                                                @endauth >Sfax</option>
                                            <option value="Sousse" @auth @if(Auth::user()->ville=='Sousse')selected
                                                @endif @endauth >Sousse</option>
                                            <option value="Tunis" @auth @if(Auth::user()->ville=='Tunis')selected @endif
                                                @endauth >Tunis</option>
                                            <option value="Mahdia" @auth @if(Auth::user()->ville=='Mahdia')selected
                                                @endif @endauth >Mahdia</option>
                                        </select>
                                    </div>
                                </div>





                                <!--password -->

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="new-password" />
                                    </div>
                                </div>
                                <!--cpassword -->

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                        <x-jet-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password" name="password_confirmation" required
                                            autocomplete="new-password" />
                                    </div>
                                </div>




                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms
                                                    of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                                    Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ml-auto">
                            <div class="crumina-module crumina-heading with-title-decoration">
                                <h5 class="heading-title">More Informations</h5>
                            </div>
                            <!--Art martiaux-->

                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Select Your Art</label>
                                    <select class="selectpicker form-control">
                                        <option value="US">Taekwondo</option>
                                        <option value="AR">karate</option>
                                        <option value="AR">kung fu</option>
                                        <option value="AR">Autre</option>
                                    </select>
                                </div>
                            </div>

                            <!--multiselect type-->
                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Select Your Type(s)</label><br />
                                    {{-- <select class="selectpicker form-control" name="role_user" id="role_user">
					<option value="Coach" @auth @if(Auth::user()->role_user=='Coach')selected @endif @endauth>Coach</option>
					<option value="Participant" @auth @if(Auth::user()->role_user=='Participant')selected @endif @endauth>Sportif</option>
					<option value="Juge" @auth @if(Auth::user()->role_user=='Juge')selected @endif @endauth>Juge</option>
				</select>
				 --}}

                                    <select class="selectpicker" multiple data-live-search="true" name="rolesuser[]">

                                        <option value="Participant">Participant</option>

                                        <option value="Coach">Coach</option>

                                        <option value="Juge">Juge</option>

                                        <option value="Organizer">Organizer</option>

                                    </select>

                                </div>
                            </div>

                            <!--enter poids-->
                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input class="form-control" type="number" name="poids_participant"
                                        placeholder="Weight">
                                    <div class="invalid-feedback">
                                        <div class="error-box">
                                            <div class="danger"><svg class="olymp-little-delete">
                                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete">
                                                    </use>
                                                </svg></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--select catégories-->
                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Select Your Category</label>
                                    <select class="selectpicker form-control">
                                        <option value="CA">Senior</option>
                                        <option value="AR">Junior</option>
                                        <option value="AR">Cadet</option>

                                    </select>
                                </div>
                            </div>

                            <!---->
                            <!--Art club-->
                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Club">
                                    <div class="invalid-feedback">
                                        <div class="error-box">
                                            <div class="danger"><svg class="olymp-little-delete">
                                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete">
                                                    </use>
                                                </svg></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--fin2eme partie-->

                    </div>
            </form>

            <!-- ... end Form register -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <x-jet-button class="btn btn-purple btn-lg full-width">
                {{ __('Register') }}
            </x-jet-button>
        </div>


    </div>
</section>



<!-- Section Call To Action Animation -->


<!-- ... end Section Call To Action Animation -->




<a class="back-to-top" href="#">
    <img src="{{asset('assets/img/back-to-top.jpg')}}" alt="arrow" class="back-icon">
</a>





@endsection