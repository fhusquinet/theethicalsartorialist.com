@extends ('app')

@section ('content')
    <div class="container px-4 max-w-sm">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="bg-white shadow px-4 py-8">
                    <div class="text-primary-dark text-xl font-thin mb-8 text-center">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="w-full mb-6">
                                <label for="email" class="block text-grey font-thin mb-2 text-sm">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" placeholder="example@email.com" class="w-full py-2 px-4 transition focus:outline-0 border border-white focus:bg-white focus:border-grey-light placeholder-grey-darkest rounded bg-grey-lighter leading-normal focus:outline-none {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="mt-2 font-thin text-sm text-alert block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="w-full mb-6">
                                <label for="password" class="block text-grey font-thin mb-2 text-sm">{{ __('Password') }}</label>

                                <input id="password" type="password" placeholder="Password" class="w-full py-2 px-4 transition focus:outline-0 border border-white focus:bg-white focus:border-grey-light placeholder-grey-darkest rounded bg-grey-lighter leading-normal focus:outline-none {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="mt-2 font-thin text-sm text-alert block" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="w-full mb-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" class="align-text-top" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="text-grey font-thin inline-block ml-2">{{ __('Remember Me') }}</span>
                                    </label>
                                </div>
                            </div>

                            <div class="text-center w-full">
                                <button type="submit" class="button transition--fast">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
