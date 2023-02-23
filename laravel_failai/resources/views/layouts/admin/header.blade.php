<header>
    <nav>
        <div class="nav-wrapper">

                    @if(app()->getLocale() == 'en')
                        <a href="{{url()->current()}}?lang=lt">LT</a>
                    @else
                        <a href="{{url()->current()}}?lang=en">EN</a>
                    @endif

            <a href="/" class="brand-logo">
{{--                <img src="{{asset('/img/logo.png')}}" alt="logo" class="logo">--}}
                LOGO
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">{{__('general.meniu.home')}}</a></li>
                <li><a href="{{route('cart.show')}}">{{__('Cart')}}</a></li>
                <li><a href="{{route('products.index')}}">{{__('general.meniu.products')}}</a></li>
                <li><a href="{{route('categories.index')}}">{{__('general.meniu.categories')}}</a></li>


                @auth
                     <li>
                         <span>
                             <sl-avatar
                                 class="hide-on-med-and-down"
                                 label="User avatar">
                             </sl-avatar>
                         </span>

                         <span>&nbsp; {{auth()?->user()?->email}}</span>
                     </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">{{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                @endauth


                @guest
                <li>
                    <a href="/login">LogIn
                    </a>
                </li>
                @endguest
            </ul>

        </div>
    </nav>
    @if (auth()?->user()?->isPersonnel())
    <ul class="admin-menu">
        <li><a href="{{route('dashboard')}}">{{ __('Dashboard') }}</a></li>

        <li><a href="{{route('orders.index')}}">{{__('general.meniu.orders')}}</a></li>
        <li><a href="{{route('admin-products.index')}}">{{__('general.meniu.products')}}</a></li>
        <li><a href="{{route('hello-products.index')}}">{{__('general.meniu.products')}} 2</a></li>
        <li><a href="{{route('categories.index')}}">{{__('general.meniu.categories')}}</a></li>
        <li><a href="{{route('statuses.index')}}">{{__('general.meniu.statuses')}}</a></li>
        <li><a href="{{route('users.index')}}">{{__('general.meniu.users')}}</a></li>
        <li><a href="{{route('persons.index')}}">{{__('general.meniu.persons')}}</a></li>
        <li><a href="{{route('addresses.index')}}">{{__('general.meniu.addresses')}}</a></li>

    </ul>
    @endif
</header>
